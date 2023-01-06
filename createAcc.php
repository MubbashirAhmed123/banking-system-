
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/9187/9187607.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Create Account</title>
</head>
<body class="bg-gray-100">

    <h1 class="text-center text-xl">Bank Of Mma </h1>
    <p class="mt-5 bg-green-400 text-green-700 text-lg mb-3">Create Your Account</p>
    
    <h2 class="text-red-800 text-lg font-bold underline mb-3">Instructions:</h2>
    <ul class="bg-red-400 text-red-700 text-md p-2">
        <li>All Fields Are Required</li>
        <br>
        <li>All Fields In Block Letter</li>
    </ul>
    <hr>
    <form action="dashboard.php" method="POST" class="h-screen grid grid-cols-3 place-items-center " name="form">
        <div>
        <label for="fname" class="text-gray-700 font-bold text-lg">First Name : </label>
        <input type="text" name="fname" id="fname" class="border-2 border-blue-700 rounded-md bg-gray-200  focus:outline-none text-center focus:text-gray-700 focus:bg-white focus:border-blue-600" required>
        </div>
        
        <div>
        <label for="mname" class="text-gray-700 font-bold text-lg">Middle Name : </label>
        <input type="text" name="mname" id="mname" class="border-2 border-blue-700 rounded-md bg-gray-200  focus:outline-none text-center focus:text-gray-700 focus:bg-white focus:border-blue-600 "required>
    </div>
    <div class="">
        <label for="lname" class="text-gray-700 font-bold text-lg">Last/Sir Name : </label>
        <input type="text" name="lname" id="lname"class="border-2 border-blue-700 rounded-md bg-gray-200  focus:outline-none text-center focus:text-gray-700 focus:bg-white focus:border-blue-600 "required>
    </div>
    
    <div>
        <label for="aadhaarnum" class="text-gray-700 font-bold text-lg">Aadhaar Number : </label>
        <input type="number" name="aadhaarnum" id="aadhaarnum" class="border-2 border-blue-700 rounded-md bg-gray-200  focus:outline-none text-center focus:text-gray-700 focus:bg-white focus:border-blue-600" placeholder="ex:-1234-4567-8910"required>
    </div>
    
    
    <div>
        <label for="phone" class="text-gray-700 font-bold text-lg">Phone Number : </label>
        <input type="number" name="phone" id="phone" class="border-2 border-blue-700 rounded-md bg-gray-200  focus:outline-none text-center focus:text-gray-700 focus:bg-white focus:border-blue-600" placeholder="10 digit mobile number"required>
    </div>
    <div>
        <label for="email" class="text-gray-700 font-bold text-lg">Email Address : </label>
        <input type="email" name="email" id="email" class="border-2 border-blue-700 rounded-md bg-gray-200  focus:outline-none text-center focus:text-gray-700 focus:bg-white focus:border-blue-600" placeholder="xyz@example.com"required>
    </div>
    <div class="">
        <label for="address" class="text-gray-700 font-bold text-lg">Home/Offfice Address : </label>
        <input type="text" name="address" id="address" class=" border-2 border-blue-700 rounded-md bg-gray-200  focus:outline-none text-center w-full overflow-auto focus:text-gray-700 focus:bg-white focus:border-blue-600"required>
    </div>
    <div>
        <label for="country" class="text-gray-700 font-bold text-lg">Country:</label>
        <input type="text" name="country" id="country" class="border-2 border-blue-700 rounded-md bg-gray-200  focus:outline-none text-center focus:text-gray-700 focus:bg-white focus:border-blue-600" value="India" disabled>
    </div>
    <div>
    <label for="state" class="text-gray-700 font-bold text-lg">Enter State : </label>
    <input type="text" name="state" id="state" class="border-2 border-blue-700 rounded-md bg-gray-200  focus:outline-none text-center focus:text-gray-700 focus:bg-white focus:border-blue-600"required>
    </div>
    <div>
        <label for="city" class="text-gray-700 font-bold text-lg">Enter City : </label>
        <input type="text" name="city" id="city" class="border-2 border-blue-700 rounded-md bg-gray-200  focus:outline-none text-center focus:text-gray-700 focus:bg-white focus:border-blue-600"required>
    </div>
    <div>
        <label for="zipcode" class="text-gray-700 font-bold text-lg">Zip Code : </label>
        <input type="number" name="zipcode" id="zipcode" class="border-2 border-blue-700 rounded-md bg-gray-200  focus:outline-none text-center focus:text-gray-700 focus:bg-white focus:border-blue-600"required >
    </div>
    <div>
        <label for="" class="text-gray-700 font-bold text-lg">Account Type :</label> 
        <br>
        <label for="curracc" class="text-gray-700 font-bold text-lg">Current:</label>
        <input type="radio" name="radiobtn" id="curracc" value="Current" class="w-6 focus:text-gray-700 focus:bg-white focus:border-blue-600"required>
    
        <label for="savacc" class="text-gray-700 font-bold text-lg">Saving:</label>
        <input type="radio" name="radiobtn" id="savacc" value="Saving" required >
    </div>
    <br>
    
    <div class="">
        <input type="submit" name="submit" id="submitbtn" value="Create Account" class=" bg-green-400 text-green-800 text-center p-2 rounded-md text-xl font-bold hover:bg-green-500 transition-all delay-100 active:bg-green-600">
        <p class="text-center text-blue-700 text-lg  ">have an account ? go to 
        <a href="login.php" class="text-xl font-bold hover:underline">Login</a> </p>
    </div>
    </form>

    
<!-- //     city=[
//         {
//             id:1,
//             name:'gulbarga'
//         },
//         {
//             id:2,
//             name:'hyderabad'
//         },
        
//     ]
//     hydarea=[
//         {
//             id:1,
//             name:'sanat nagar'
//         },
//         {
//             id:2,
//             name:'falak numa'
//         }
//     ]
//     gularea=[
//         {
//             id:1,
//             name:'remat nagar'
//         },
//         {
//             id:2,
//             name:'station'
//         }
//     ]
//     console.log(city)
// const cities=document.getElementById('city')
// const areas=document.getElementById('area')

// city.forEach(element => {
//    var op=document.createElement('option')
//    op.innerText=element.name  
//    op.setAttribute('value',element.id)
//    cities.appendChild(op)
// });
// cities.addEventListener("change",function(){
//     let cityname=cities.options[cities.selectedIndex].text
// if(cityname==='hyderabad'){
//     areas.innerText=""
//     console.log("hello")
//     hydarea.forEach(ele=>{
//     let option=document.createElement('option')
//     option.innerText=ele.name
//     option.setAttribute('value',ele.id)
//     areas.appendChild(option)
//     })
// }
// else if(cityname==='gulbarga'){
//     areas.innerHTML=""
//     console.log("hello gulbarga")
//     gularea.forEach(ele=>{
//     let option=document.createElement('option')
//     option.innerText=ele.name
//     option.setAttribute('value',ele.id)
//     areas.appendChild(option)
//     })
// }else{
//     return
// }
// })
// let a=30
// export{a}; -->

<script type="text/javascript" src="createAcc.js"></script>

</body>
</html>