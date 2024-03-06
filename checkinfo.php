<?php
include 'db.php';
$ph=$_POST['phone'];
$bpin=$_POST['bankingpin'];

$sql="SELECT Phone_number , Banking_pin FROM userinfo WHERE Phone_number='{$ph}' && Banking_pin ='{$bpin}'";

$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
// while($row=mysqli_fetch_assoc($result)){
// session_start(); 
//     $_SESSION['Phone_number']=$row['Phone_number']; 
//      $_SESSION['Banking_pin']=$row['Banking_pin'];
// }
echo "<p id='smsg' class='bg-green-400 text-green-800 p-2 text-center fixed top-10 w-full'>Login Successful.</p>";
echo '<script>
console.log("submitted");
const smsg=document.querySelector("#smsg")
setInterval(()=>{
  smsg.style.display="none";
},3000)
</script>';
}else{
    echo "<p class='bg-red-400 text-red-800 p-2 text-center fixed top-0 w-full'>phnumber and pin does not match!</p>";
header("location:/banking/login.php");
}
?>