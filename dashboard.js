const msg=document.getElementById('msg')
msg.style.display="block"
setInterval(()=>{
    msg.style.display="none"
},3000)
const btn=document.getElementById('btn')
console.log(btn)
btn.addEventListener("click",function(){
    console.log("hello")
})
