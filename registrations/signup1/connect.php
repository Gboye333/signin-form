<?php 
$HOSTNAME='localhost';
$USERNAME='username';
$PASSWORD='123jay456';
$DATABASE='signupform';

$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
if(!$con){
    die(mysqli_error($con));
}
?>


