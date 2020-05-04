<?php

session_start();

$con = mysqli_connect('localhost','root','',);

mysqli_select_db($con, 'gb_dotp');


$name = $_SESSION['username'];

$query_cjs = "select * from gb_dotp_cjs where Roll_No='$name'";

$result_cjs=mysqli_query($con,$query_cjs);

while($row_cjs = mysqli_fetch_array($result_cjs))
{
    
    $Analyst = $row_cjs[1];
    $Sales = $row_cjs[2];
    $Plant = $row_cjs[3];
    $RD = $row_cjs[4];
    $N_Engineer = $row_cjs[5];
    $Operation = $row_cjs[6];
    $Developer = $row_cjs[7];
    $S_Engineer = $row_cjs[8];
    $S_Tester = $row_cjs[9];

    $JFC = ("{$Analyst}"+"{$Sales}"+"{$Plant}"+"{$RD}"+
    "{$N_Engineer}"+"{$Operation}"+"{$Developer}"+"{$S_Engineer}"+"{$S_Tester}")/9;

}

echo "$JFC";
?>
