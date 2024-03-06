
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/295/295128.png" type="image/x-icon">
    <title>Login</title>
</head>
<body class="bg-gray-100">
    <h1 class="text-center text-balck text-lg font-bold shadow-xl  shadow-gray-500/30 absolute left-[48%] top-[20%] m-2">Login</h1>

<div class=" h-screen flex justify-center items-center">
    
    <div class="bg-white shadow-lg shadow-gray-500/50 rounded-md h-[45%] w-[30%] flex justify-center items-center">

    <form action='onlineServices.php' class="relative" method="post">
   

    <img src="images/login.png" alt="" class="w-10 mx-auto mb-3">
    
        <div class="p-2 mb-3 text-center">
        <input type="number" name="phone"  class="bg-gray-200 w-[250px] p-1 rounded-md focus:outline-none" placeholder="Ph number" required>
        </div>
        <div class="p-2 mb-3 text-center">
        <input type="number" name="bankingpin"  class="bg-gray-200 w-[250px] p-1 rounded-md focus:outline-none" placeholder="Banking pin" required>
        </div>
        <div class="mt-5 text-center">
            <button id="btn" type="submit" class="border-2 border-gray-300 bg=trasnparent text-gray-600 rounded-md w-[250px] hover:text-gray-700 hover:bg-gray-100 transition-all delay-100 active:bg-gray-300">Login</button>
        </div>
        <p class=" text-blue-700 mt-2  ">don't have an account ? go to 
        <a href="createAcc.php" class=" font-bold hover:underline">Create Account</a> </p>
    </form>
    
    </div>
   
</div>


</body>
</html>