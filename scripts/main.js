//navigation for mobile

function mobileNav(){

    if(document.querySelector('.hamburger').style.width === '95%'){
        document.querySelector('.hamburger').style.width = '30px';
        document.querySelector('.hamburger').style.height = '30px';
        document.querySelector('.line1').style.width = '70%';
        document.querySelector('.line2').style.width = '70%';
        document.querySelector('.line3').style.width = '70%';
        document.getElementById('navigation').style.display = 'none';
    } else {
        document.querySelector('.hamburger').style.width = '95%';
        document.querySelector('.hamburger').style.height = 'auto';
        document.getElementById('navigation').style.display = 'block';
        document.querySelector('.line1').style.width = '70%';
        document.querySelector('.line2').style.width = '80%';
        document.querySelector('.line3').style.width = '90%';
    }
}

//project sedtion animation



const lproj = document.querySelectorAll('.preview');

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        entry.target.classList.toggle('show-left', entry.isIntersecting)
    })
},
{
threshold: .75
}
)

lproj.forEach(proj => {
    observer.observe(proj);
})


const rproj = document.querySelectorAll('.proj-desc');

const observer2 = new IntersectionObserver(entries => {
    entries.forEach(entry2 => {
        entry2.target.classList.toggle('show-right', entry2.isIntersecting)
    })
}, 
{
    threshold: .75
}
)

rproj.forEach(proj2 => {
    observer2.observe(proj2);
})
