<?php
$name=$_POST['tt1'];
$sx=$_POST['tt2'];
$no=$_POST['tt3'];
$m1=$_POST['t1'];
$m1s=$_POST['t2'];
$m2=$_POST['t3'];
$m2s=$_POST['t4'];
$m3=$_POST['t5'];
$m3s=$_POST['t6'];
$m4=$_POST['t7'];
$m4s=$_POST['t8'];
$m5=$_POST['t9'];
$m5s=$_POST['t10'];
$con=mysqli_connect("localhost","root","","PROJECT") or DIE ("SHIT");
//severname, username of your DB, passwword of your db, name of your DB change those according to your DB
$noque="SELECT max(`fid`) FROM `person`";
$result=mysqli_query($con,$noque);
  while($row = mysqli_fetch_assoc($result)) {
        $nu=$row["max(`fid`)"];
    }
$query="INSERT INTO `project`.`person` (`fid`, `headname`, `sex`, `members`) VALUES ($nu+1, '$name', '$sx', '$no')";
$result=mysqli_query($con,$query);
$query2="INSERT INTO `members`(`id`, `name1`, `sex1`, `name2`, `sex2`, `name3`, `sex3`, `name4`, `sex4`, `name5`, `sex5`) VALUES ($nu+1, '$m1', '$m1s', '$m2', '$m2s', '$m3', '$m3s', '$m4', '$m4s', '$m5', '$m5s' )";
$result=mysqli_query($con,$query2);
header('Location: index.html');
?>



