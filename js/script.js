//mobile nav button

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





//scroll effects

const faders = document.querySelectorAll('.fade-in');

const appearOptions = {
    threshold: 1,
    rootMargin: '0px 0px 200px 0px'
};

const appearOnScroll = new IntersectionObserver
    (function(
        entries, 
        appearOnScroll
        ){
            entries.forEach(entry => {
                if(!entry.isIntersecting){
                    return;
                } else {
                    entry.target.classList.add('appear');
                    appearOnScroll.unobserve(entry.target)
                }
            })
        },
        appearOptions);

faders.forEach(fader =>{
    appearOnScroll.observe(fader);
})



//scroll navbar effects
const header = document.querySelector('.nav');
const sectionOne = document.querySelector('header');

const sectionOneOptions = {};

const sectionOneObserver = new IntersectionObserver(function(entries, sectionOneOserver){
    entries.forEach(entry => {
        if(!entry.isIntersecting){
            header.classList.add('navscrolled');
        } else {
            header.classList.remove('navscrolled');
        }
    })
}, sectionOneOptions);

sectionOneObserver.observe(sectionOne);