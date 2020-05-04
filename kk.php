<?php

session_start();

$con = mysqli_connect('localhost','root','',);

mysqli_select_db($con, 'gb_dotp');


$name = $_SESSION['username'];

$query_cdt1 = "select * from gb_dotp_cdt1 where Roll_No='$name'";

$result_cdt1=mysqli_query($con,$query_cdt1);

$c1_C=0;
$c1_E=0;
$c1_A=0;
$c1_W=0;
$c1_G=0;
$c1_T=0;
$c1_H=0;
while($row_cdt1 = mysqli_fetch_array($result_cdt1))
{
    $Company= $row_cdt1[2];
    $Elligible = $row_cdt1[3];
    $Attendance = $row_cdt1[4];
    $WTC = $row_cdt1[5];
    $GDC = $row_cdt1[6];
    $TRC = $row_cdt1[7];
    $HRC = $row_cdt1[8];

    ?>
    <?php

    if(strcmp($Elligible, 'E')==0)
    {
        $c1_E=$c1_E+1;
    }
    if(strcmp($Attendance, 'P')==0)
    {
        $c1_A=$c1_A+1;
    }
    if(strcmp($WTC, 'Y')==0)
    {
        $c1_W=$c1_W+1;
    }
    if(strcmp($GDC, 'Y')==0)
    {
        $c1_G=$c1_G+1;
    }
    if(strcmp($TRC, 'Y')==0)
    {
        $c1_T=$c1_T+1;
    }
    if(strcmp($HRC, 'Y')==0)
    {
        $c1_H=$c1_H+1;
    }
    $c1_C=$c1_C+1;
}
echo "$c1_C<br>";
echo "$c1_E<br>";
echo "$c1_A<br>";
echo "$c1_W<br>";
echo "$c1_G<br>";
echo "$c1_T<br>";
echo "$c1_H<br>";
echo "<br>";

$query_cdt2 = "select * from gb_dotp_cdt2 where Roll_No='$name'";

$result_cdt2=mysqli_query($con,$query_cdt2);

$c2_C=0;
$c2_E=0;
$c2_A=0;
$c2_W=0;
$c2_G=0;
$c2_T=0;
$c2_H=0;
while($row_cdt2 = mysqli_fetch_array($result_cdt2))
{
    $Company= $row_cdt2[2];
    $Elligible = $row_cdt2[3];
    $Attendance = $row_cdt2[4];
    $WTC = $row_cdt2[5];
    $GDC = $row_cdt2[6];
    $TRC = $row_cdt2[7];
    $HRC = $row_cdt2[8];

    ?>
    <?php

    if(strcmp($Elligible, 'E')==0)
    {
        $c2_E=$c2_E+1;
    }
    if(strcmp($Attendance, 'P')==0)
    {
        $c2_A=$c2_A+1;
    }
    if(strcmp($WTC, 'Y')==0)
    {
        $c2_W=$c2_W+1;
    }
    if(strcmp($GDC, 'Y')==0)
    {
        $c2_G=$c2_G+1;
    }
    if(strcmp($TRC, 'Y')==0)
    {
        $c2_T=$c2_T+1;
    }
    if(strcmp($HRC, 'Y')==0)
    {
        $c2_H=$c2_H+1;
    }
    $c2_C=$c2_C+1;
}
echo "$c2_C<br>";
echo "$c2_E<br>";
echo "$c2_A<br>";
echo "$c2_W<br>";
echo "$c2_G<br>";
echo "$c2_T<br>";
echo "$c2_H<br>";
echo "<br>";
$query_cdt3 = "select * from gb_dotp_cdt3 where Roll_No='$name'";

$result_cdt3=mysqli_query($con,$query_cdt3);

$c3_C=0;
$c3_E=0;
$c3_A=0;
$c3_W=0;
$c3_G=0;
$c3_T=0;
$c3_H=0;
while($row_cdt3 = mysqli_fetch_array($result_cdt3))
{
    $Company= $row_cdt3[2];
    $Elligible = $row_cdt3[3];
    $Attendance = $row_cdt3[4];
    $WTC = $row_cdt3[5];
    $GDC = $row_cdt3[6];
    $TRC = $row_cdt3[7];
    $HRC = $row_cdt3[8];

    ?>
    <?php

    if(strcmp($Elligible, 'E')==0)
    {
        $c3_E=$c3_E+1;
    }
    if(strcmp($Attendance, 'P')==0)
    {
        $c3_A=$c3_A+1;
    }
    if(strcmp($WTC, 'Y')==0)
    {
        $c3_W=$c3_W+1;
    }
    if(strcmp($GDC, 'Y')==0)
    {
        $c3_G=$c3_G+1;
    }
    if(strcmp($TRC, 'Y')==0)
    {
        $c3_T=$c3_T+1;
    }
    if(strcmp($HRC, 'Y')==0)
    {
        $c3_H=$c3_H+1;
    }
    $c3_C=$c3_C+1;
}
echo "$c3_C<br>";
echo "$c3_E<br>";
echo "$c3_A<br>";
echo "$c3_W<br>";
echo "$c3_G<br>";
echo "$c3_T<br>";
echo "$c3_H<br>";
echo "<br>";

$query_cdt4 = "select * from gb_dotp_cdt4 where Roll_No='$name'";

$result_cdt4=mysqli_query($con,$query_cdt4);

$c4_C=0;
$c4_E=0;
$c4_A=0;
$c4_W=0;
$c4_G=0;
$c4_T=0;
$c4_H=0;
while($row_cdt4 = mysqli_fetch_array($result_cdt4))
{
    $Company= $row_cdt4[2];
    $Elligible = $row_cdt4[3];
    $Attendance = $row_cdt4[4];
    $WTC = $row_cdt4[5];
    $GDC = $row_cdt4[6];
    $TRC = $row_cdt4[7];
    $HRC = $row_cdt4[8];

    ?>
    <?php

    if(strcmp($Elligible, 'E')==0)
    {
        $c4_E=$c4_E+1;
    }
    if(strcmp($Attendance, 'P')==0)
    {
        $c4_A=$c4_A+1;
    }
    if(strcmp($WTC, 'Y')==0)
    {
        $c4_W=$c4_W+1;
    }
    if(strcmp($GDC, 'Y')==0)
    {
        $c4_G=$c4_G+1;
    }
    if(strcmp($TRC, 'Y')==0)
    {
        $c4_T=$c4_T+1;
    }
    if(strcmp($HRC, 'Y')==0)
    {
        $c4_H=$c4_H+1;
    }
    $c4_C=$c4_C+1;
}
echo "$c4_C<br>";
echo "$c4_E<br>";
echo "$c4_A<br>";
echo "$c4_W<br>";
echo "$c4_G<br>";
echo "$c4_T<br>";
echo "$c4_H<br>";
echo "<br>";

$c11=$c1_C+$c2_C+$c3_C+$c4_C;
$c22=$c1_E+$c2_E+$c3_E+$c4_C;
$c33=$c1_A+$c2_A+$c3_A+$c4_A;
$c44=$c1_W+$c2_W+$c3_W+$c4_W;
$c55=$c1_G+$c2_G+$c3_G+$c4_G;
$c66=$c1_T+$c2_T+$c3_T+$c4_T;
$c77=$c1_H+$c2_H+$c3_H+$c4_H;

echo "$c11<br>";
echo "$c22<br>";
echo "$c33<br>";
echo "$c44<br>";
echo "$c55<br>";
echo "$c66<br>";
echo "$c77<br>";

?>
