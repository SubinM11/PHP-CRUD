<?php
$hostname='localhost';
$username='root';
$password='';
$databasename='crudoperation';

$con=mysqli_connect($hostname,$username,$password,$databasename);

if(!$con){
    
    die(mysqli_connect_error($con));
    
}
?>