$(document).ready(function(){

let menu = document.querySelector('.hamberger');
let close = document.querySelector('.close');
let mobileNav = document.querySelector('.mobile-nav');
let home = document.querySelector('.home');
let about = document.querySelector('.about');
let services = document.querySelector('.services');
let skills = document.querySelector('.skills');
let contact = document.querySelector('.contact');

menu.addEventListener('click',function(){
    mobileNav.classList.add('open');
});

close.addEventListener('click',function(){
    mobileNav.classList.remove('open');
});

home.addEventListener('click',function(){
    mobileNav.classList.remove('open');
});

about.addEventListener('click',function(){
    mobileNav.classList.remove('open');
});

services.addEventListener('click',function(){
    mobileNav.classList.remove('open');
});

skills.addEventListener('click',function(){
    mobileNav.classList.remove('open');
});

contact.addEventListener('click',function(){
    mobileNav.classList.remove('open');
});

});