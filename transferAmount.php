
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer amount</title>
</head>
<body>


<?php
$accnum=$_POST['accnum'];
$enteredamount=$_POST['amount'];
$bankpin=$_POST['bankpin'];

include 'db.php';

$sql="SELECT * FROM userinfo WHERE Account_number={$accnum}";

$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){

    $sql1="SELECT * FROM userinfo WHERE Banking_pin={$bankpin};";
    // $sql1.="UPDATE userinfo SET Amount=Amount-{$amount}";
    $result1=mysqli_query($conn,$sql1);
    if(mysqli_num_rows($result1)>0){
    while($row2=mysqli_fetch_assoc($result1)){
        $amount=$row2['Amount'];
        if($enteredamount>$amount){
            echo 'insufficient balence';
            return;
        }else{
            $sql2="UPDATE userinfo SET Amount=Amount-{$enteredamount} WHERE Banking_pin={$bankpin};";

            $sql2.="UPDATE userinfo SET Amount=Amount+{$enteredamount} WHERE Account_number={$accnum}";
            $result2=mysqli_multi_query($conn,$sql2);
        }
    }
   

 
 while ($row=mysqli_fetch_assoc($result)) {
 ?>

 <div class="flex justify-center items-center h-screen"> 
     <div class="bg-green-400 text-green-800 p-1 text-center w-[30%] h-[30%] rounded-md shadow-lg shadow-gray-700/50">
         <img  src="images/img1.jpg" alt="success" class="w-14 h-14 mx-auto mt-10 ">
         <p class="mt-3 font-bold text-lg">Money Transfer Successfully To <br> Account Number  <?php echo $row['Account_number'];?> </p>
         <a class='fixed top-0 left-5 text-black' href='index.php' target="_blank" >go to home</a> <?php
}
?>
   
<?php
    }else{
        echo '<div id="accnoerr" class=" flex justify-center items-center h-screen ">
        <div class="bg-red-400 text-red-800 p-1 text-center w-[30%] h-[30%] rounded-md shadow-lg shadow-gray-700/50">
       <h1 class="mt-[5rem] text-xl font-bold "> Invalid Banking Pin !</h1>
        </div>
        
        </div>';
        // echo '<script>
        // const pinerr=document.getElementById("pinerr")
        // pinerr.style.display="block"
        // setInterval(()=>{
        //     pinerr.style.display="none"  
        // },3000)
        // </script>';
    }
?>

     </div>
     </div>
 <?php

}
else{
    echo '<div id="accnoerr" class=" flex justify-center items-center h-screen ">
    <div class="bg-red-400 text-red-800 p-1 text-center w-[30%] h-[30%] rounded-md shadow-lg shadow-gray-700/50">
   <h1 class="mt-[5rem] text-xl font-bold "> Invalid Account Number !</h1>
    </div>
    
    </div>';
        // echo '<script>
        // const accnoerr=document.getElementById("accnoerr")
        // accnoerr.style.display="block"
        // setInterval(()=>{
        //     accnoerr.style.display="none"  
        // },3000)
        // </script>';
}
?>


</body>
</html>


