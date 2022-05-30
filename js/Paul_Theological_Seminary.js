const togglebtn = document.getElementsByClassName('toggle-btn')[0]
const navbarnav = document.getElementsByClassName('navbar-nav')[0]

togglebtn.addEventListener('click', () => {
    navbarnav.classList.toggle('active')
})

// window.addEventListener("scroll",function() {
//     var nav = document.querySelector("nav");
//     nav.classList.toggle("sticky", this.window.scrollY > 0); 
// })


const morebtn = document.getElementsByClassName('more-btn')[0]
const dropdown = document.getElementsByClassName('drop_down')[0]

morebtn.addEventListener('click', () => {
    dropdown.classList.toggle('active')
})