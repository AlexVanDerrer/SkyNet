<?php 
require "models/{$view}_model.php";
error_reporting(1);
$json = file_get_contents(JSONLINK);
$tarifs_arr = json_decode($json, true);
$all_tarifs_str = tarifsToString($tarifs_arr);

$one_tarif_ground = getOneTarif($tarifs_arr, 'Земля');
$one_tarif_whater = getOneTarif($tarifs_arr, 'Вода');
$one_tarif_whaterHD = getOneTarif($tarifs_arr, 'Вода HD');
$one_tarif_fire = getOneTarif($tarifs_arr, 'Огонь');
$one_tarif_fireHD = getOneTarif($tarifs_arr, 'Огонь HD');

$tarif_ground_str = oneTarifToString($one_tarif_ground);
$tarif_whater_str = oneTarifToString($one_tarif_whater);
$tarif_whaterHD_str = oneTarifToString($one_tarif_whaterHD);
$tarif_fire_str = oneTarifToString($one_tarif_fire);
$tarif_fireHD_str = oneTarifToString($one_tarif_fireHD);

$choice_ground_str = choiceTarifToString($one_tarif_ground);
$choice_whater_str = choiceTarifToString($one_tarif_whater);
$choice_whaterHD_str = choiceTarifToString($one_tarif_whaterHD);
$choice_fire_str = choiceTarifToString($one_tarif_fire);
$choice_fireHD_str = choiceTarifToString($one_tarif_fireHD);

require "views/{$view}_view.php";
