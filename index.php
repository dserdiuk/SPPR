<?php
session_start();
require 'Smarty.class.php';
require 'mysqlconf.php';
$tpl = new Smarty;
$tpl->debugging = false;
$tpl->caching = false;
$tpl->cache_lifetime = 0;
if ($_GET['do']=='startagain'){
	session_destroy();
	header("Location:/");
}

if (isset($_POST['step1'])){
	$json_step = json_encode($_POST);
	$db->insert("INSERT INTO steps (`step1`,`step2`,`step3`) VALUES (?,'','')",$json_step);
	$last_id = $db->select("SELECT * FROM steps ORDER by id DESC LIMIT 1");
	$_SESSION['step_id'] = $last_id[0]['id'];
	$_SESSION['step'] = 2;
	header("Location:/");
}


if (isset($_POST['step2'])){
	$selectstep = $db->select("SELECT step1 FROM steps WHERE id=?",$_SESSION['step_id']);
	$stepinfo = (array)json_decode($selectstep[0]['step1']);	
	for ($s=1;$s<=$stepinfo['size'];$s++){
		for ($t=1;$t<=$stepinfo['size'];$t++){
				if ($t==$s){
					$matrix[$s."_".$t] = 1;
				}elseif ($t>$s){
					$matrix[$s."_".$t] = $_POST[$s."_".$t];
				}else{
					$matrix[$s."_".$t] = 1/$_POST[$t."_".$s];
				}
		}
	}

	for ($c=1;$c<=$stepinfo['size'];$c++){
		for ($d=1;$d<=$stepinfo['size'];$d++){
				if (!isset($mult[$c])){
				$mult[$c] = $matrix[$c.'_'.$d];
			}else{
				$mult[$c] = $mult[$c] * $matrix[$c.'_'.$d];
			}
		}
	}

	for ($p=1;$p<=count($mult);$p++){
		$matrix['prior'.$p] = pow($mult[$p],1/$stepinfo['size']);
	}

	$json_step = json_encode($matrix);
	$db->replace("UPDATE steps SET step2=? WHERE id=?",$json_step,$_SESSION['step_id']);
	$_SESSION['step'] = 3;
	$_SESSION['crit'] = 1;
	header("Location:/");
}

if (isset($_POST['step3'])){
		$selectstep = $db->select("SELECT * FROM steps WHERE id=?",$_SESSION['step_id']);
	$stepinfo = (array)json_decode($selectstep[0]['step1']);	
	for ($s=1;$s<=$stepinfo['size'];$s++){
		for ($t=1;$t<=$stepinfo['size'];$t++){
				if ($t==$s){
					$matrix[$s."_".$t] = 1;
				}elseif ($t>$s){
					$matrix[$s."_".$t] = $_POST[$s."_".$t];
				}else{
					$matrix[$s."_".$t] = 1/$_POST[$t."_".$s];
				}
		}
	}

	for ($c=1;$c<=$stepinfo['size'];$c++){
		for ($d=1;$d<=$stepinfo['size'];$d++){
			if (!isset($sum[$c])){
				$sum[$c] = $matrix[$c.'_'.$d];
			}else{
				$sum[$c] = $sum[$c] * $matrix[$c.'_'.$d];
			}
		}
	}
	$sumall = array_sum($sum);
	for ($sm=1;$sm<=$stepinfo['size'];$sm++){
		$matrix['vector'.$sm] = pow($sum[$sm]/$sumall,1/$stepinfo['size']);
	}
	if ($_SESSION['crit']!=1){
		$critmatrix = (array)json_decode($selectstep[0]['step3']);
	}
	$critmatrix['crit'.$_POST['crit']] = $matrix;
	$json_step = json_encode($critmatrix);
	$db->replace("UPDATE steps SET step3=? WHERE id=?",$json_step,$_SESSION['step_id']);
	if ($_SESSION['crit'] == $stepinfo['size']){
		$_SESSION['step'] = 4;
	}
	$_SESSION['crit'] = $_POST['crit']+1;

	header("Location:/");
}

if (!isset($_SESSION['step_id'])){
	$step=1;
}else{
	$selectstep = $db->select("SELECT step1 FROM steps WHERE id=?",$_SESSION['step_id']);
	$stepinfo = (array)json_decode($selectstep[0]['step1']);
	$width = 100/($stepinfo['size']+1);
	switch($_SESSION['step']){
		case 2:
			$selectstep = $db->select("SELECT step1 FROM steps WHERE id=?",$_SESSION['step_id']);
			$stepinfo = (array)json_decode($selectstep[0]['step1']);
			for ($s=1;$s<=$stepinfo['size'];$s++){
				$td.="<td style='width:".$width."%'>".$stepinfo['crit'.$s]."</td>";
				for ($t=1;$t<=$stepinfo['size'];$t++){
					if ($t==1){
						$tr.="<tr><td>".$stepinfo['crit'.$s]."</td>";
					}
					if ($t==$s){
						$tr.="<td>1</td>";
					}elseif ($t>$s){
						$tr .= <<<HTML
						<td id="{$s}_{$t}">
						<select name="{$s}_{$t}" id="{$s}_{$t}sel" onchange="changevalue('{$s}_{$t}','{$stepinfo['crit'.$t]}','{$stepinfo['crit'.$s]}')" class="form-control" style="width: 120px;">
						<option value="1">{$stepinfo['crit'.$t]} равен {$stepinfo['crit'.$s]}</option>
							<option value="7">{$stepinfo['crit'.$t]} значительно превосходит {$stepinfo['crit'.$s]}</option>
        					<option value="0.142">{$stepinfo['crit'.$s]} значительно превосходит {$stepinfo['crit'.$t]}</option>
        					<option value="3">{$stepinfo['crit'.$t]} умеренно превосходит {$stepinfo['crit'.$s]}</option>

							<option value="0.333">{$stepinfo['crit'.$s]} умеренно превосходит {$stepinfo['crit'.$t]}</option>
        							
						</select>
						</td>
HTML;
						//$tr.="<td>".$stepinfo['crit'.$s]."|".$stepinfo['crit'.$t]."</td>";
					}else{
						$tr.="<td id='".$s."_".$t."'></td>";
					}					
					if($t==$stepinfo['size']){
						$tr.="</tr>";
					}
				}
			}
			$tpl->assign("td",$td);
			$tpl->assign("tr",$tr);
			break;
		case 3:
			$selectstep = $db->select("SELECT step1 FROM steps WHERE id=?",$_SESSION['step_id']);
			$stepinfo = (array)json_decode($selectstep[0]['step1']);
			for ($s=1;$s<=$stepinfo['size'];$s++){
				$td.="<td style='width:".$width."%'>".$stepinfo['alt'.$s]."</td>";
				for ($t=1;$t<=$stepinfo['size'];$t++){
					if ($t==1){
						$tr.="<tr><td>".$stepinfo['alt'.$s]."</td>";
					}
					if ($t==$s){
						$tr.="<td>1</td>";
					}elseif ($t>$s){
						$tr .= <<<HTML
						<td>
						<select name="{$s}_{$t}" id="{$s}_{$t}sel" onchange="changevalue('{$s}_{$t}','{$stepinfo['alt'.$t]}','{$stepinfo['alt'.$s]}')" class="form-control" style="width: 100%;">
						<option value="1">{$stepinfo['alt'.$t]} равен {$stepinfo['alt'.$s]}</option>
							<option value="7">{$stepinfo['alt'.$t]} значительно превосходит {$stepinfo['alt'.$s]}</option>
							<option value="0.142">{$stepinfo['alt'.$s]} значительно превосходит {$stepinfo['alt'.$t]}</option>
        					<option value="3">{$stepinfo['alt'.$t]} умеренно превосходит {$stepinfo['alt'.$s]}</option>
							<option value="0.333">{$stepinfo['alt'.$s]} умеренно превосходит {$stepinfo['alt'.$t]}</option>
        					
						</select>
						</td>
HTML;
						//$tr.="<td>".$stepinfo['crit'.$s]."|".$stepinfo['crit'.$t]."</td>";
					}else{
						$tr.="<td id='".$s."_".$t."'></td>";
					}					
					if($t==$stepinfo['size']){
						$tr.="</tr>";
					}
				}
			}
			$tpl->assign('namecrit',$stepinfo['crit'.$_SESSION['crit']]);
			$tpl->assign("crit",$_SESSION['crit']);
			$tpl->assign("td",$td);
			$tpl->assign("tr",$tr);			
			break;
		case 4:
			$selectstep = $db->select("SELECT * FROM steps WHERE id=?",$_SESSION['step_id']);
			$stepinfo = (array)json_decode($selectstep[0]['step1']);
			$step2info = (array)json_decode($selectstep[0]['step2']);
			$step3info = json_decode($selectstep[0]['step3']);
			for ($d=1;$d<=$stepinfo['size'];$s++){
				for ($v=1;$d<=$stepinfo['size'];$d++){
					$nm1 = "crit".$d;
					$nm2 = "vector".$v;
					$global[$d] = $global[$d]+$step3info->$nm1->$nm2*$step2info['prior'.$v];
				}
			}
			$max = max($global);
			$alt = array_search($max, $global);
			$alt_name = $stepinfo['alt'.$alt];
			$tpl->assign('max',$max);
			$tpl->assign('alt_name',$alt_name);
			for ($s=1;$s<=$stepinfo['size'];$s++){
				
				$td.="<td style='width:".$width."%'>".$stepinfo['crit'.$s]."</td>";
				for ($t=1;$t<=$stepinfo['size'];$t++){
					if ($t==1){
						$tr.="<tr><td>".$stepinfo['alt'.$s]."</td>";
					}
					$nm1 = "crit".$t;
					$nm2 = "vector".$s;
					$tr.= "<td>".$step3info->$nm1->$nm2."</td>";
					
					if($t==$stepinfo['size']){
						$tr.="<td>".$global[$s]."</td></tr>";
					}					
				}

			}
			$tpl->assign("td",$td);
			$tpl->assign("tr",$tr);
			break;
	}
	$step = $_SESSION['step'];
	$select = $db->select("SELECT step1 FROM steps WHERE id=?",$_SESSION['step_id']);
	$stepinf = (array)json_decode($selectstep[0]['step1']);
	$tpl->assign('aim',$stepinf['aim']);	
	$tpl->assign('width',$width);
}

$tpl->display('step'.$step.'.tpl');
