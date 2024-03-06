<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Withdraw</title>
</head>
<body>
   

<?php
include 'db.php';

$pin=$_POST['pin'];
$accounttype=$_POST['acctype'];
$enteredamount=$_POST['amount'];
$accountnum=$_POST['accnum'];
$sql="SELECT * FROM userinfo WHERE Banking_pin={$pin} AND Account_number={$accountnum} AND Account_type='{$accounttype}'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){

while($row=mysqli_fetch_assoc($result)){
    $amount=$row['Amount'];
    if($enteredamount>$amount){
        echo 'insufficeint balance';
        return;
    }else{
        $sql1="UPDATE userinfo SET Amount=Amount-{$enteredamount} WHERE Banking_pin={$pin} AND Account_number={$accountnum} AND Account_type='{$accounttype}'";
        $result1=mysqli_query($conn,$sql1);

    }
}



// if(mysqli_num_rows($result1)>0){


        echo "
        <div class='h-screen flex justify-center items-center'>
        <div class='bg-green-400 text-green-800 p-1 text-center w-[30%] h-[30%] rounded-md shadow-lg shadow-gray-700/50'>
          <h1 class='bg-green-400 text-green-800 p-2 text-center font-bold mt-[5rem] text-xl'>Rs.$amount Withdraw successfully from your account number $accountnum!</h1>
        </div>
        </div>";
    }

else{
    echo '<div class="flex justify-center items-center h-screen ">
    <div class="bg-red-400 text-red-800 p-1 text-center w-[30%] h-[30%] rounded-md shadow-lg shadow-gray-700/50">
     <h1 class="mt-[5rem] text-xl font-bold ">No Data Found ! </h1>
     </div>
     </div>';
}

?>
</body>
</html>