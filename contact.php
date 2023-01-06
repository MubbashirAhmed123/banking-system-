

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSj2X-qQy-yqdbIY0iFLcOuNj0Zl4HgGUQc7Q&usqp=CAU" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Contact</title>
</head>
<body class="bg-gray-200">
    <!-- Container for demo purpose -->
<div class="container my-24 px-6 mx-auto">

<!-- Section: Design Block -->
<section class="mb-32 text-center text-gray-800">
  <div class="max-w-[700px] mx-auto px-3 lg:px-6">
    <h2 class="text-3xl font-bold mb-12">Contact us</h2>
    <form action='<?php echo $_SERVER['PHP_SELF'];
    ?>'
     method="post">
      <div class="form-group mb-6">
        <input type="text" name="username" class=" block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-gray-700
          bg-white bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-0
          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="name" 
          placeholder="Name" required>
      </div>
      <div class="form-group mb-6">
        <input type="email" name="email" class=" block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-gray-700
          bg-white bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-0
          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="email" 
          placeholder="Email address" required>
      </div>
      <div class="form-group mb-6">
        <textarea name="text" class="
          
          block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-gray-700
          bg-white bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-0
          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
        " id="text" rows="3"  placeholder="Message" required></textarea>
      </div>
      <input type="submit" name="submit" class="
        w-full
        px-6
        py-2.5
        bg-blue-600
        text-white
        font-medium
        text-xs
        leading-tight
        uppercase
        rounded
        shadow-md
        hover:bg-blue-700 hover:shadow-lg
        focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
        active:bg-blue-800 active:shadow-lg
        transition
        duration-150
        ease-in-out" value="Send">
    </form>
  </div>
</section>
<?php
if(isset($_POST['submit'])){
echo '<h1 id="msg" class="fixed top-0 left-0 p-2 mx-auto text-center w-full bg-green-400 text-green-800 hidden">Query Submitted SuccessFully</h1>
<script>
const msg=document.querySelector("#msg")
msg.style.display="block"
setInterval(()=>{
  msg.style.display="none"

},3000)
</script>

';
$contactfile=fopen('contactinfo.text','a');
$name=$_POST['username'];
$email=$_POST['email'];
$text=$_POST['text'];
$data='name: '.$name. ' email address: '.$email. ' message: '.$text;
fwrite($contactfile,$data);
fclose($contactfile);
}
?>
</div>
</body>
</html>