
   const first=document.querySelector('.first')
   const second=document.querySelector('.second')
   const main_box=document.querySelector('#main')
   const online_banking=document.querySelector('#online_banking')
   const deposit=document.querySelector('#deposit')
   const closebtn=document.querySelector('#closebtn')
   const closebtn1=document.querySelector('#closebtn1')
   const submit=document.querySelector('#submit')
   const third=document.querySelector('.third')
   const seebalance=document.querySelector('#seebalance')
   const closebtn2=document.querySelector('#closebtn2')
   const fourth=document.querySelector('.fourth')
   const withdraw=document.querySelector('#withdraw')
   const closebtn3=document.querySelector('#closebtn3')

   first.addEventListener('click',function(){
    console.log(second)
       main_box.style.opacity='0.33'
      online_banking.style.display='block'
   })
   
   second.addEventListener('click',function(){
    console.log('second')
    main_box.style.opacity='0.33'
    deposit.style.display='block'
   })

   
   closebtn.addEventListener('click',function(){
       online_banking.style.display='none'
       main_box.style.opacity=''
   
   })
   closebtn1.addEventListener('click',function(){
    deposit.style.display='none'
    main_box.style.opacity=''
})

third.addEventListener('click',function(){
    console.log('third')
       main_box.style.opacity='0.33'
       seebalance.style.display='block'
   })
closebtn2.addEventListener('click',function(){
    seebalance.style.display='none'
    main_box.style.opacity=''
})
fourth.addEventListener('click',function(){
    main_box.style.opacity='0.33'
    withdraw.style.display='block'
})
closebtn3.addEventListener('click',function(){
    withdraw.style.display='none'
    main_box.style.opacity=''
})