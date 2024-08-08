const totop = document.querySelector('.to-top');
window.addEventListener('scroll', function ( ){
   if(window.pageYOffset > 200){
       totop.classList.add('active');
   }
   else{
       totop.classList.remove('active'); 
   }
})