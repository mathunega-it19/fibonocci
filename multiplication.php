<?php
$servername="121.200.55.60:3307";
$username="2019UIT1088";
$password="2019UIT1088";
$database="2019UIT1088";
// create connection
$conn=new mysqli($servername,$username,$password,$database);
if (!conn){
die("connection failed: " . mysqli_connect_error());
}else
{
echo "connected successfully <br />";
}
$trunc="truncate table multiply";
$res1=mysqli_query($conn,$trunc);
echo "$res1 <br />";
for($i=1;$i<=30;$i++)
{
$result=$i*5;
$sql="insert into multiply(multiplicand,multiplier,result)values('$i',5,'$result')";
$res=mysqli_query($conn,$sql);
echo "$res";
} 
mysqli_close($conn); 
?>
