const btnSwith = document.querySelector('.account-form__reg');
const formEnter = document.querySelector('#enter');
const formReg = document.querySelector('#register');

btnSwith.addEventListener('click', e=>{
    formEnter.classList.remove('active');
    formReg.classList.add('active');
})