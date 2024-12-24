<?php

include 'includes/autoLoad.inc.php';
$user_information=new FormHandler($_POST);
$valid=$user_information->validation();
if($valid){
    $newJson=new jsonHandler($_POST);
    $newJson->jsonMaker();
}

$DisplayData=new DisplayData();
$DisplayData->makeTable()

?>