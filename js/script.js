let mobnavbtn = document.getElementById('mobnavbtn');
let navMenu = document.getElementById('nav');
let leftArrow = document.getElementById('lArrow');
let rightArrow = document.getElementById('rArrow');
let navLinks = document.getElementById('navlinks');


function openNav(){
    navMenu.style.marginLeft = '0px';
    rightArrow.style.display = 'none';
    leftArrow.style.display = 'block';
    navLinks.style.marginLeft = '0px';
    navMenu.style.height = 'auto';
}


rightArrow.addEventListener('click', openNav);



function closeNav(){
    rightArrow.style.display = 'block';
    leftArrow.style.display = 'none';
    navMenu.style.marginLeft = '-200%';
}

leftArrow.addEventListener('click', closeNav);

