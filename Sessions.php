<?php
session_start();
function Massage()
{
  if(isset($_SESSION["ErrorMassage"])){
    $output="<div>";
    $output.=htmlentities($_SESSION["ErrorMassage"]);
    $output.="</div>";
    $_SESSION["ErrorMassage"]=null;
    return $output;
  }
}
function SuccessMassage()
{
  if(isset($_SESSION["SuccessMassage"])){
    $output="<div>";
    $output.=htmlentities($_SESSION["SuccessMassage"]);
    $output.="</div>";
    $_SESSION["SuccessMassage"]=null;
    return $output;
  }
}
 ?>
