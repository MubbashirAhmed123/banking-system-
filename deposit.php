<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Deposit amount</title>
</head>
<body class="bg-gray-200">
  
</body>
</html>

<?php
  $p=$_POST['phonenumber'];
  $amt=$_POST['amt'];
  $bankingpin=$_POST['bankingpin'];

$conn=mysqli_connect("localhost","root","","bankinfo");

$sql="SELECT * FROM userinfo WHERE Phone_number={$p} AND Banking_pin={$bankingpin}";

$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
$conn1=mysqli_connect("localhost","root","","bankinfo");
$sql1="UPDATE userinfo SET Amount=Amount+{$amt} WHERE Phone_number={$p} AND Banking_pin={$bankingpin}";
$result1=mysqli_query($conn1,$sql1);
echo '<div class="flex justify-center items-center h-screen">
<div class="bg-green-400 text-green-800 p-1 text-center w-[30%] h-[30%] rounded-md shadow-lg shadow-gray-700/50">
<img src="images/img3.jpg" class="w-16 h-16 m-auto mt-3">';
 echo "<h1 class='mt-10 text-xl font-bold'>Rs.$amt successfully transfer to your bank account </h1>
  </div>
  </div>
  <a class='fixed top-0 left-5 ' href='index.php'>go to home</a>
  ";

}else{
 echo '<div class="flex justify-center items-center h-screen ">
 <div class="bg-red-400 text-red-800 p-1 text-center w-[30%] h-[30%] rounded-md shadow-lg shadow-gray-700/50">
  <h1 class="mt-[5rem] text-xl font-bold ">Phone number and banking pink should be correct !</h1>
  </div>
  </div>';
}



?>