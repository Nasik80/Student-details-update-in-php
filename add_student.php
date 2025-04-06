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
if(isset($_POST['delete']))
{
$ad=$_POST['adno'];
$sql="delete from students where admission_number='$ad'";
if(mysqli_query($conn,$sql))
{
echo "deleted";
}
else
{
echo "not deleted";
}}
if(isset($_POST['update']))
{
$ad=$_POST['adno'];
$na=$_POST['name'];
$sql="update students set student_name='$na' where admission_number='$ad'";
if(mysqli_query($conn,$sql))
{
echo"update";
}
else
{
echo "not update";
}}
?>
