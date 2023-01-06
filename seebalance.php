<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>See balance</title>
</head>
<body class="bg-gray-300">
    <?php
$bankpin=$_POST['bankingpin'];
$accnum=$_POST['accnum'];
$phonenum=$_POST['phone'];
session_start();
$_SESSION['bankingpin']=$_POST['bankingpin'];

// echo $bankpin,$accnum,"<br>";
$conn=mysqli_connect("localhost","root","","bankinfo");
$sql="SELECT Amount FROM userinfo WHERE Banking_pin={$bankpin} AND Account_number={$accnum}";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while ($row=mysqli_fetch_assoc($result)) {
        echo "<div class='h-screen flex justify-center items-center '>
        <div class='bg-gray-800 text-gray-300 p-2 rounded-lg w-[30%] h-[30%] shadow-lg shadow-gray-700/50'>
        <h1 class='text-center mt-20 text-xl font-bold'> your current balance is {$row['Amount']}
        </h1>
        </div>
        </div>
        <a class='fixed top-0 left-5 ' href='index.php'>go to home</a>

        ";
    }
}else{
    echo 'invalid pin';
}
    ?>
</body>
</html>