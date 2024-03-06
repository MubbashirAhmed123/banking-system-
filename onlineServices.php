<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="https://w1.pngwing.com/pngs/901/726/png-transparent-graphic-design-icon-advertising-online-advertising-marketing-service-logo-business-alipay-promotion-email-marketing.png" type="image/x-icon">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Online services </title>
</head>


<?php

include('checkinfo.php');
if(!isset($_POST['phone']))
{
    header("location:/banking/login.php");

}
?>

<body class="bg-slate-100">
   <div>
   <?php
 

include 'db.php';
$sql1="SELECT * FROM userinfo WHERE Banking_pin='{$_POST['bankingpin']}'";
$result1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result1)>0){

?>
 
   <div class="fixed top-[6rem]">
    <?php
while($row1=mysqli_fetch_assoc($result1)){
    $accnum=$row1['Account_number'];
    $name=$row1['First_name'];
?>
<h1 class="bg-slate-100 text-blue-600 text-lg font -bold underline">Hello <?php echo $name; ?> !</h1>
<a href="logout.php">Log out</a>
        
<?php }
    ?>
</div>
<?php }
    ?>


   </div>

   <h1 class="text-3xl font-bold text-gray-800 fixed text-center w-full ">Digital Banking Services</h1>
    <p id="msg" class="fixed w-full top-10 bg-green-400 text-green-800 p-2 text-center hidden">Transfer successfull!</p>
    <div class="container mx-auto flex justify-center items-center h-screen w-[70%]">
    <div id="main" class="grid grid-cols-3  text-center gap-y-7 bg-gray-400 p-3  rounded-md shadow-lg shadow-gray-900/50 ">
        
     <div class="first cursor-pointer">
        <h2 class="text-lg font-bold text-blue-700">Online Banking</h2>
        <p>Deposit money to other's bank account with account number and banking pin</p>
     </div>

     <div class="second cursor-pointer">
     <h2 class="text-lg font-bold text-blue-700">Deposit to your account</h2>
        <p>Deposit money to your bank account with account number and banking pin</p>
     </div>

     <div class="third cursor-pointer">
     <h2 class="text-lg font-bold text-blue-700">See balance</h2>
        <p>Enter pin to see the current balance in your account</p>
     </div>
     <div class="fourth mt-16 cursor-pointer">
     <h2 class="text-lg font-bold text-blue-700">Withdraw amount</h2>
        <p>Withdraw amount from your bank account </p>
     </div>
     
     <div class="sixth mt-16 cursor-pointer">
        <form action="yourdetails.php" method="post" target="_blank">
        <div>
                <input type="text" name="accnum" id=""  value='<?php echo $accnum;
                ?>' class="hidden">
        </div>
        
     <h2 class="text-lg font-bold text-blue-700">
        <input type="submit" name="" id="" value="See Your Details" class="cursor-pointer">
    </h2>
        <p>See Your details</p>
        </form>
     </div>
    </div>

    <div id="online_banking" class="fixed bg-gray-700 p-5 rounded-md hidden">
        <p class="mb-3 text-white font-bold text-lg">Transfer money to another account</p>
        <form action="transferAmount.php" class="bg-white text-black rounded-md p-2 text-center" method='POST' target="_blank">
            <div>
                <input type="number" name="accnum" id="accnum" placeholder="Enter other's Ac/No" class="bg-gray-100 rounded-md p-1 " required>
            </div>
            <div>
                <input type="number" name="amount" id="amount"placeholder="Enter amount" class="mt-3 bg-gray-100 rounded-md p-1 "required >
            </div>
            <div>
                <input type="number" name="bankpin" id="bankpin"placeholder="Enter banking pin" class="mt-3 bg-gray-100 rounded-md p-1 "required >
            </div>
            <div>
                <input type="submit" name="submit" id="submit" value="Send" class="mt-3 bg-gray-100 rounded-md p-1 border-2 border-black " >
            </div>
            <div id="closebtn" class="absolute top-[-10px] right-0  cursor-pointer bg-red-400 rounded-full hover:bg-red-600">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>

            </div>
            </form>

        </div>

        <div id="deposit" class="fixed bg-gray-700 p-5 rounded-md hidden ">
        <p class="mb-3 text-white font-bold text-lg">Transfer money to our account</p>
        
        <form action='deposit.php
        ' class="bg-white text-black rounded-md p-2 text-center" method='post' target="_blank" >
            <div>
                <input type="number" name="phonenumber" id="phonenumber" placeholder="Enter phone number" class="bg-gray-100 rounded-md p-1 " required>
            </div>
            <div>
                <input type="number" name="amt" id="amt"placeholder="Enter amount" class="mt-3 bg-gray-100 rounded-md p-1 "required >
            </div>
            <div>
                <input type="number" name="bankingpin" id="bankingpin"placeholder="Enter banking pin" class="mt-3 bg-gray-100 rounded-md p-1 "required >
            </div>
            <div>
                <input type="submit" name="submitdeposit" id="submit" value="Deposit" class="mt-3 bg-gray-100 rounded-md p-1 border-2 border-black " >
            </div>
            <div id="closebtn1" class="absolute top-[-10px] right-0  cursor-pointer bg-red-400 rounded-full hover:bg-red-600">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>

            </div>


        </form>
        </div>

        <div id="seebalance" class="fixed bg-gray-700 p-5 rounded-md hidden ">
        <p class="mb-3 text-white font-bold text-lg text-center">See your balance</p>
            <form action='seebalance.php
            ' method="post" class="bg-white text-black rounded-md  text-center p-5 mt-5" target="_blank">
            <div>
            <input type="number" name="bankingpin" id="" class="mt-3 bg-gray-100 rounded-md p-1 border-2 border-black mb-3" placeholder="Enter pin">
            </div>
            <div>
                <input type="text" name="phone" id="" value='<?php
                echo $ph;
                ?>' class="hidden">
            </div>
            <div>
                <input type="text" name="accnum" id=""  value='<?php echo $accnum;
                ?>' class="hidden">
            </div>
            <br>
            <div>
            <input type="submit" name="smt" id="" value="See balance" >
            </div>
            <div id="closebtn2" class="absolute top-[-10px] right-0  cursor-pointer bg-red-400 rounded-full hover:bg-red-600">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>

            </div>
            </form>

        </div>
        <div id="withdraw" class="fixed bg-gray-700 p-5 rounded-md hidden">
            <form action='withdraw.php' method="post" class="bg-white p-5 rounded-md shadow-lg shadow-gray-800/40 text-center" target="_blank">
                <div class="p-5">
                    <input type="number" name="pin" id="" placeholder="Enter your pin.." class="text-center p-1 rounded-md border-2 border-gray-300 bg-gray-200 focus:outline-none" required>
                </div>
                <div>
                <input type="text" name="accnum" id=""  value='<?php echo $accnum;
                ?>' class="hidden"> 
                </div>
                <p class="mb-1 text-lg font-bold">Select account type</p>
                <div class="flex justify-center items-center space-x-5">
                    
                    <div>
                    <label for="current">Current</label>
                    <input type="radio" name="acctype" id="current" value="Current" required>
                   </div>
                    <div>
                    <label for="saving">Saving</label>
                    <input type="radio" name="acctype" id="saving" value="Saving" required>
                    </div>
                </div>
                <div class="mt-5"> 
                    <input type="number" name="amount" id="amount" class="text-center p-1 rounded-md border-2 border-gray-300 bg-gray-200 focus:outline-none" placeholder="Enter amount" required>
                </div>
                <div class="mt-5">
                    <input type="submit" name="withraw" id="" value="Withdraw" class="bg-transparent border-2 border-gray-600 p-1 rounded-md bg-slate-100 hover:bg-slate-300 active:bg-slate-400 ">
                </div>
                <div id="closebtn3" class="absolute top-[-10px] right-0  cursor-pointer bg-red-400 rounded-full hover:bg-red-600">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>

            </div>
            </form>

    </div>

   </div>

   <script src="services.js"></script>
   <?php

?>
</body>
</html>
