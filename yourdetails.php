<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://cdn.icon-icons.com/icons2/1378/PNG/512/avatardefault_92824.png" type="image/x-icon">
    <title>Your Details</title>
</head>
<body>
    
<?php
include 'db.php';

$acc= $_POST['accnum'];
$sql="SELECT * FROM userinfo Where Account_number=$acc";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    ?>
    <?php
while($row=mysqli_fetch_assoc($result)){
    ?>
    <div>
    <div class="fixed top-0 bg-gray-800 text-gray-300 p-2 mx-3 text-xl font-bold">
        <h1>Hello  <?php echo  $row['First_name']. " ". $row['Middle_name']." ". $row['Last_name'];?>
     </h1>
    </div>

    <div class="fixed right-0">
        <a href="./index.php" class="bg-gray-100 text-black p-2">Go To <span class="text-lg font-bold text-gray-600">Home</span></a>
    </div>

<div class="h-screen flex justify-center items-center ">
  
  <table class="bg-gray-700 text-gray-300 shadow-lg shadow-gray-900/50 fixed " >
          <tbody class="mb-5 ">
           <tr class="border-[1px] border-gray-900 ">
              <th class="border-r border-gray-900 p-3 ">Full Name : </th>
                  <td class="text-center p-3"> 
  <?php echo  $row['First_name']. " ". $row['Middle_name']." ". $row['Last_name'];?>  </td>
              </tr>
  
              <tr class="border-[1px] border-gray-900 ">
                  <th class="border-r border-gray-900 p-3 ">Account Number:</th>
                  <td class="text-center">
                      <?php                  
                  echo $row['Account_number'];
                  ?>
                  </td>
              </tr>
              <tr class="border-[1px] border-gray-900 ">
                  <th class="border-r border-gray-900 p-3 ">Banking Pin</th>
                  <td class="text-center">
                      <?php
                      
                      echo $row['Banking_pin'];;
                      ?>
                  </td>
              </tr>
               
              <tr class="border-[1px] border-gray-900 ">
                  <th class="border-r border-gray-900 p-3 ">Balance : </th>
                  <td class="text-center"><?php echo  $row['Amount']; ?>  </td>
              </tr>
              <tr class="border-[1px] border-gray-900 ">
                  <th class="border-r border-gray-900 p-3 ">Account Type</th>
                  <td class="text-center"><?php echo  $row['Account_type']; ?> </td>
              </tr>
              
              <tr class="border-[1px] border-gray-900 ">
                  <th class="border-r border-gray-900 p-3 ">Mobile Number : </th>
                  <td class="text-center"><?php echo  $row['Phone_number']; ?> </td>
              </tr>
             
  
  </tbody>
  </table>
  
  </div>
<?php
}
}
?>
</body>
</html>