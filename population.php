<?php

$con=mysqli_connect("localhost","root","","PROJECT") or DIE ("SHIT");
$query="SELECT count(`fid`) FROM `person`";
$result=mysqli_query($con,$query);
  while($row = mysqli_fetch_assoc($result)) {
        $nu=$row["count(`fid`)"];
    }


$query1="SELECT count(`fid`) FROM `person` where sex='M'";
$result=mysqli_query($con,$query1);
  while($row = mysqli_fetch_assoc($result)) {
        $num=$row["count(`fid`)"];
    }

$query1="SELECT count(`fid`) FROM `person` where sex='F'";
$result=mysqli_query($con,$query1);
  while($row = mysqli_fetch_assoc($result)) {
        $nuf=$row["count(`fid`)"];
    }

$query1="SELECT count(`id`) FROM `members` WHERE `sex1`='F'";
$result=mysqli_query($con,$query1);
  while($row = mysqli_fetch_assoc($result)) {
        $nuf= intval($nuf)+intval($row["count(`id`)"]);
    }

$query1="Select count(`sex2`) from `members` where `sex2`='F'";
$result=mysqli_query($con,$query1);
  while($row = mysqli_fetch_assoc($result)) {
        $nuf=$nuf+$row["count(`sex2`)"];
    }

$query1="Select count(`sex3`) from `members` where `sex3`='F'";
$result=mysqli_query($con,$query1);
  while($row = mysqli_fetch_assoc($result)) {
        $nuf=$nuf+$row["count(`sex3`)"];
    }

$query1="Select count(`sex4`) from `members` where `sex4`='F'";
$result=mysqli_query($con,$query1);
  while($row = mysqli_fetch_assoc($result)) {
        $nuf=$nuf+$row["count(`sex4`)"];
    }

$query1="Select count(`sex5`) from `members` where `sex5`='F'";
$result=mysqli_query($con,$query1);
  while($row = mysqli_fetch_assoc($result)) {
        $nuf=$nuf+$row["count(`sex5`)"];
    }
$query1="SELECT count(`id`) FROM `members` WHERE `sex1`='M'";
$result=mysqli_query($con,$query1);
  while($row = mysqli_fetch_assoc($result)) {
        $num= intval($num)+intval($row["count(`id`)"]);
    }

$query1="Select count(`sex2`) from `members` where `sex2`='M'";
$result=mysqli_query($con,$query1);
  while($row = mysqli_fetch_assoc($result)) {
        $num=$num+$row["count(`sex2`)"];
    }

$query1="Select count(`sex3`) from `members` where `sex3`='M'";
$result=mysqli_query($con,$query1);
  while($row = mysqli_fetch_assoc($result)) {
        $num=$num+$row["count(`sex3`)"];
    }

$query1="Select count(`sex4`) from `members` where `sex4`='M'";
$result=mysqli_query($con,$query1);
  while($row = mysqli_fetch_assoc($result)) {
        $num=$num+$row["count(`sex4`)"];
    }

$query1="Select count(`sex5`) from `members` where `sex5`='M'";
$result=mysqli_query($con,$query1);
  while($row = mysqli_fetch_assoc($result)) {
        $num=$num+$row["count(`sex5`)"];
    }

?>

<html>
<head>
<title>SERVEY</title>
</head>
<body>
<center>
<table border="1">
<p1>
<tr>
<th>DETAILS</th>
<th>COUNT</th>
</tr>
<tr>
<td>Total Number of Families : </td>
<td><?php echo "$nu"; ?></td>
</tr>
<tr>
<td>Total Number of Male Population : </td>
<td><?php echo "$num"; ?></td>
</tr>
<tr>
<td>Total Number of Female Population : </td>
<td><?php echo "$nuf"; ?></td>
</tr>
<tr>
<td><h1> Total Population : </h1></td>
<td><h1> <?php echo $num+$nuf   ; ?> </h1></td>
</tr>
</p1>
</table>
</body>
</html>