const btn=document.getElementById('hamburger')
const navbar=document.querySelector('.navbar')
btn.addEventListener("click",function(){
    navbar.classList.toggle('activeMenu')
})
