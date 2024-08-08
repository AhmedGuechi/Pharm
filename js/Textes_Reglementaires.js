let swape1 = document.querySelector('.swape1');
let swape2 = document.querySelector('.swape2');
let swape3 = document.querySelector('.swape3');
let A1=document.getElementById('A1');
let A2=document.getElementById('A2');
let A3=document.getElementById('A3');
A1.addEventListener('click', function () {
  swape1.style.display = 'block';
  swape2.style.display = 'none';
  swape3.style.display = 'none';
  A1.classList.add('act');
  A2.classList.remove('act');
  A3.classList.remove('act');
});

A2.addEventListener('click', function () {
  A2.classList.add('act');
  A1.classList.remove('act');
  A3.classList.remove('act');
  swape1.style.display = 'none';
  swape2.style.display = 'block';
  swape3.style.display = 'none';
});

A3.addEventListener('click', function () {
  A3.classList.add('act');
  A1.classList.remove('act');
  A2.classList.remove('act');
  

  swape1.style.display = 'none';
  swape2.style.display = 'none';
  swape3.style.display = 'block';
});

