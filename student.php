<?php
$host="localhost";
$user="root";
$pass="";
$database="student_db";
$conn=mysqli_connect($host,$user,$pass,$database);
if($conn)
{
echo "sucess";
}
else
{
die("coud't connect");
}
if(isset($_POST['submit']))
{
$ad=$_POST['adno'];
$name=$_POST['name'];
$address=$_POST['add'];
$mobile=$_POST['mobno'];
$course=$_POST['course'];
$sql="insert into students(admission_number,student_name,address,mobile_number,course) values('$ad','$name','$address','$mobile','$course')";
if(mysqli_query($conn,$sql))
{
echo"inserted";
}
else
{
echo "not insertd";
}}

?>
