<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://img.icons8.com/fluency/2x/home-page.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Mma Bank</title>
    <style>
        .activeMenu.navbar{
            width: 300px;
            transition:.1s;
        }
   
    </style>
</head>
<body class="bg-gray-200 select-none">
  
    <div class="menu flex justify-between items-center bg-gradient-to-r from-gray-600 via-gray-400 to-gray-400 p-2 ">
        <div  id="hamburger">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-gray-700 p-1 rounded-md text-white cursor-pointer ">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
                  
</div>
        <div>
            <h1 class=" text-slate-700 text-xl font-bold ">MMA BANK</h1>
        </div>
        <div class="space-x-5">
            <a class="bg-[conic-gradient(at_top,_var(--tw-gradient-stops))] from-gray-900 via-gray-100 to-gray-900 text-grenn-700 p-1 rounded-md text-center border-2 border-gray-700 hover:text-gray-600  " href="./login.php" target="_blank">Login</a>
             
            <a class="bg-[conic-gradient(at_top,_var(--tw-gradient-stops))] from-gray-900 via-gray-100 to-gray-900 text-grenn-700 p-1 rounded-md text-center border-2 border-gray-700 hover:text-gray-600 " href="./createAcc.php" target="_blank">Create Account</a>
        </div>

    </div>
  
    <nav class="uppercase">
        <ul class="navbar flex-col space-y-5 bg-[conic-gradient(at_right,_var(--tw-gradient-stops))] from-indigo-200 via-slate-600 to-indigo-200 mt-10 text-gray-900 w-0 p-0 overflow-hidden transition-all dealy-50 h-full fixed top-0 ">
            <li class="p-5  border-b border-gray-800 hover:text-gray-600 active:text-gray-900"><a href="./index.php" target="_blank">Home</a></li>
            <li class="p-3 border-b border-gray-800 hover:text-gray-600 active:text-gray-900"><a href="./dashboard.php" target="_blank">Dashboard</a></li>
            <li class="p-3 border-b border-gray-800 hover:text-gray-600 active:text-gray-900"><a href="./createAcc.php" target="_blank">Create Account</a></li>
            <li class="p-3 border-b border-gray-800 hover:text-gray-600 active:text-gray-900"><a href="./onlineServices.php" target="_blank">Online Services</a></li>
            <li class="p-3 border-b border-gray-800 hover:text-gray-600 active:text-gray-900"><a href="./contact.php" target="_blank">Contact Us</a></li>
        </ul>
    </nav>
    <div class="bg-gradient-to-r from-white to-blue-400  grid grid-cols-2 gap-x-5 justify-items-center p-5 place-items-center mt-5 mx-auto container rounded-lg shadow-lg shadow-gray-800/30">
        <div class="p-3 text-lg shadow-lg shadow-gray-800/10 rounded-lg mx-5">
            <h1 class="text-black to-yellow-500 text-2xl font-bold mb-3">Mobile Banking</h1>
            Mobile banking is the act of making financial transactions on a mobile device (cell phone, tablet, etc.). This activity can be as simple as a bank sending fraud or usage activity to a client’s cell phone or as complex as a client paying bills or sending money abroad. Advantages to mobile banking include the ability to bank anywhere and at any time. Disadvantages include security concerns and a limited range of capabilities when compared to banking in person or on a computer.
        </div>
        <div class="rounded-md shadow-lg shadow-gray-800 rounded-lg">
           <img width="450px" src="images/banking.jpg" alt=""  >
       </div>
   </div>
   <h1 class="mt-5 text-xl font-bold text-blue-800 text-center">Other Services</h1>

   <div class="flex justify-center items-center mt-5 space-x-20 bg-gradient-to-r from-gray-100 to-gray-300 cursor-pointer">
    <div class="first flex justify-center items-center border-r border-orange-200 p-5 hover:scale-125 transition-all dealy-100">
    <img src="images/first.jpg" alt="" class="h-24 " >
    <h1 class="mx-3"><a href="https://www.jansamarth.in/home/bob" target="_blank">JanSamarth Portal</a></h1>
    </div>
    <div class="second flex justify-center items-center border-r border-orange-200 p-5 hover:scale-125 transition-all dealy-100">
    <img src="images/second.jpg" alt="" class="h-24">
    <h1 class="mx-3"><a href="https://www.bankofbaroda.in/interest-rate-and-service-charges/deposits-interest-rates" target="_blank">Interest Rates & Charges
    </a></h1>
    </div>
    <div class="third flex justify-center items-center border-r border-orange-200 p-5 hover:scale-125 transition-all dealy-100 ">
        <img src="images/third.png" alt="" class="h-24">
        <h1 class="mx-3"><a href="https://www.bankofbaroda.in/personal-banking/accounts/saving-accounts/online-savings-account-using-video-kyc" target="_blank">Video KYC based online Saving Account</a></h1>

    </div>
    <div class="fourth flex justify-center items-center hover:scale-125 transition-all dealy-100">
        <img src="images/fourth.jpg" alt="" class="h-24">
        <h1 class="mx-3"><a href="https://www.bankofbaroda.in/business-banking/rural-and-agri/financial-inclusion" target="_blank">Financial Inclusion</a></h1>  
    </div>
   </div>

<h1 class="mt-5 text-2xl text-blue-800 mx-3 font-bold">Ways to Bank</h1>
<div class="mt-5 flex justify-between items-center mx-5 bg-gray-100">
    <div>
<img src="images/didgitalacc.jpg" alt="" class="h-24 hover:scale-110 transition-all dealy-100">
<h1 class="hover:text-orange-600 text-xl">Digital accounts</h1>
    </div>
    <div>
<img src="images/homeloan.png" alt=""  class="h-24 hover:scale-110 transition-all dealy-100">
<h1 class="hover:text-orange-600 text-xl">Digital home loans</h1>
    </div>
    <div>
<img src="images/mobilebanking.png" alt="" class="h-24 hover:scale-110 transition-all dealy-100 ">
<h1 class="hover:text-orange-600 text-xl text-center">mobile banking</h1>
    </div>
    <div>
<img src="images/internetbanking.jpg" alt="" class="h-24 hover:scale-110 transition-all dealy-100 ">
<h1 class="hover:text-orange-600 text-xl">internet banking</h1>
    </div>
    
</div>
   <div class="bg-white mt-5 bg-gradient-to-r from-gray-700 via-gray-900 to-black text-white p-5 ">
    <h1 class="mb-3 text-lg font-bold text-gray-400">Mma Bank</h1>
    <div class="flex justify-between mx-5">
    <div>
    <h1 class="text-center text-xl font-bold">Services</h1>
    <ul class="text-center ">
    <li class="mb-1" >Deposit </li>
    <li class="mb-1">Withdraw</li>
    <li class="mb-1">See balance</li>
    </ul>
    </div>
    <div>
        <h1 class="text-center text-xl font-bold">Contact</h1>
        <p class="text-center mt-3">mohdmubbashir71@gmail.com</p>
        <p class="text-center mt-1">7619562002</p>
        <span>My Git Hub : </span>
        <a href="https://github.com/MubbashirAhmed123" target="_blank">https://github.com/MubbashirAhmed123</a>
        <br>
        <span>Source code : </span>
        <a href="https://github.com/MubbashirAhmed123/banking-system-" target="_blank">Get here</a>
        <div class="flex justify-center space-x-5 mt-3 items-center">

       <img src="https://i.pinimg.com/originals/08/17/15/0817158f3a05c0d62de647c28f4cde54.jpg" alt="" class="h-8 ">

       <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfhj_o2d_86DhA-g1KdlsxFQQKNFimREJrkg&usqp=CAU" alt="" class="h-8">
       <a href="https://wa.me/7619562002?text= Hello ! Mma Bank I'd like to chat " target="_blank">
        <img src="https://thumbs.dreamstime.com/z/high-resolution-image-black-white-whatsapp-icon-web-printing-purpose-logo-background-172342092.jpg" alt="" class="h-8">
        </a>
  
        <a href="https://github.com/MubbashirAhmed123" target="_blank">
        <img src="https://play-lh.googleusercontent.com/PCpXdqvUWfCW1mXhH1Y_98yBpgsWxuTSTofy3NGMo9yBTATDyzVkqU580bfSln50bFU" alt="" class="h-10"  >
       </a>
    </div>

    </div>
    <div>
        <h1 class="text-center text-xl font-bold">Address</h1>
        <p>Rehmat Nagar Gulbarga 585102</p>
    </div>

    </div>
<footer class="text-center text-lg mt-5 p-1">&copy; Copy Rights Of<span class="font-bold font-mono"> Mubbashir</span> 2023, All Rights Reserved</footer>
<div>

</div>
   </div>
<script src="index.js"></script>
</body>
</html>