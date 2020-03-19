<?php

function printArr($arr){
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}

function translit($s) {
    $s = (string) $s; 
    $s = strip_tags($s); 
    $s = str_replace(array("\n", "\r"), " ", $s); 
    $s = preg_replace("/\s+/", ' ', $s); 
    $s = trim($s); 
    $s = function_exists('mb_strtolower') ? mb_strtolower($s) : strtolower($s); 
    $s = strtr($s, array('а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'e','ж'=>'j','з'=>'z','и'=>'i','й'=>'y',
    'к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'h','ц'=>'c','ч'=>'ch',
    'ш'=>'sh','щ'=>'shch','ы'=>'y','э'=>'e','ю'=>'yu','я'=>'ya','ъ'=>'','ь'=>''));
    $s = preg_replace("/[^0-9a-z-_ ]/i", "", $s); 
    $s = str_replace(" ", "-", $s); 
    return $s;
  }

function getOneTarif($arr, $title){
    foreach ($arr['tarifs'] as $key) {
        if (is_array($key)){
            ($key['title'] == $title)? $res = $key : $res; 
        }  
    }
return $res;
}


function tarifsToString($arr){
	foreach($arr['tarifs'] as $item ){
        $string .= tarifsTemplate($item); 	
	}
	return $string;
}

function oneTarifToString($arr){
        foreach($arr['tarifs'] as $item ){
            $string .= oneTarifTemplate($item);
        }
	return $string;
}

function choiceTarifToString($arr){
    foreach($arr['tarifs'] as $item ){
        $string .= choiceTarifTemplate($item);  	
	}
	return $string;
}

function tarifsTemplate($arr){
	ob_start();
	include PATH.'views/tarifs_template.php';
	return ob_get_clean();
}

function oneTarifTemplate($arr){
	ob_start();
	include PATH.'views/one_tarif_template.php';
	return ob_get_clean();
}

function choiceTarifTemplate($arr){
	ob_start();
	include PATH.'views/choice_tarif_template.php';
	return ob_get_clean();
}

function pregMat($str){
    if(preg_match('/^zemlya/', $str)){
        $price = 480;
    }
    if(preg_match('/^voda/', $str)){
        $price = 600;
    } 
    if(preg_match('/^ogon/', $str)){
        $price = 800;
    } 
    if(preg_match('/^voda-hd/', $str)){
        $price = 800;
    } 
    if(preg_match('/^ogon-hd/', $str)){
        $price = 1000;
    }

    return $price;
}
