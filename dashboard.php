<?php
if(!isset($_POST['phone'])){
    header("location:/banking/createAcc.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dashboard</title>
</head>
<body class="bg-gray-200">
<div class="fixed w-full top-0">
<p id="msg" class="bg-green-500 text-green-900 text-center p-2 ">Your Account Created SuccessFully !</p>
</div>   
<div class="">
<p class=" text-gray-900 text-gray-800 text-lg ">Welcome : <?php
session_start();
$_SESSION['phone']=$_POST['phone'];
// echo 'session created'.$_POST['phone'];
 echo $_POST['fname']. " ".$_POST['mname']." ".$_POST['lname'] ;
?>
</p>
<a href="./login.php" id="btn" class="mx-3 bg-white border-2 border-black p-1 rounded-md">Login</a>

</div>

<div class="flex justify-center mt-20">
  
<table class="bg-white shadow-lg shadow-gray-900/50 " >
        <tbody class="mb-5 ">
         <tr class="border-[1px] border-gray-900 ">
            <th class="border-r border-gray-900 p-3 ">Full Name : </th>
                <td class="text-center p-3"> 
<?php echo $_POST['fname']. " ".$_POST['mname']." ".$_POST['lname'];?>  </td>
            </tr>

            <tr class="border-[1px] border-gray-900 ">
                <th class="border-r border-gray-900 p-3 ">Account Number:</th>
                <td class="text-center">
                    <?php                  $accnum=rand(0, 999999999999);
                echo $accnum;
                ?>
                </td>
            </tr>
            <tr class="border-[1px] border-gray-900 ">
                <th class="border-r border-gray-900 p-3 ">Banking Pin</th>
                <td class="text-center">
                    <?php
                    $pin=rand(5987,98765);
                    echo $pin;
                    ?>
                </td>
            </tr>
            <tr class="border-[1px] border-gray-900 ">
                <th class="border-r border-gray-900 p-3 ">Account Type</th>
                <td class="text-center"><?php echo $_POST['radiobtn']; ?> </td>
            </tr>
            <tr class="border-[1px] border-gray-900">
                <th class="border-r border-gray-900 p-3 ">Aadhaar Number : </th>
                <td class="text-center"><?php echo $_POST['aadhaarnum']; ?> </td>
            </tr>
            <tr class="border-[1px] border-gray-900 ">
                <th class="border-r border-gray-900 p-3 ">Mobile Number : </th>
                <td class="text-center"><?php echo $_POST['phone']; ?> </td>
            </tr>
            <tr class="border-[1px] border-gray-900 ">
                <th class="border-r border-gray-900 p-3 ">Email Address : </th>
                <td class="text-center"><?php echo $_POST['email']; ?> </td>
            </tr>
            <tr class="border-[1px] border-gray-900 ">
                <th class="border-r border-gray-900 p-3 ">Home Address : </th>
                <td class="text-center"><?php echo $_POST['address']; ?>  </td>
            </tr>

</tbody>
</table>

</div>

    <script src="dashboard.js"></script>


<?php
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$accnumber=$accnum;
$bankpin=$pin;
$aadharnumber=$_POST['aadhaarnum'];
$phonenumber=$_POST['phone'];
$acctype=$_POST['radiobtn'];

$conn = mysqli_connect("localhost","root","","bankinfo");
$sql="INSERT INTO userinfo(Account_number,Banking_pin,First_name,Middle_name,Last_name,Aadhar_number,Phone_number,Account_type) VALUES
(
    {$accnumber},{$bankpin},'{$fname}','{$mname}','{$lname}',{$aadharnumber},{$phonenumber},'{$acctype}'
)";
$result=mysqli_query($conn,$sql);
?>
</body>
</html>