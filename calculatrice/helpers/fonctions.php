<?php
//tester si un nombre est vide
function isEmpty($nbre,$sms=null){
    if(empty($nbre)){
        if($sms==null){
            $sms="Le nombre est obligatoire";
        }
        return $sms;
    }
}

//tester si le nombre est numerique
function isNumeric($nbre,$sms=null){
    if(is_Numeric($nbre)){
        if($sms==null){
            $sms="Le nombre doit être un numérique";
        }
        return $sms;
    }
}
?>