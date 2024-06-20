const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        }
    });
});


const hiddenElements = document.querySelectorAll(".hidden");
hiddenElements.forEach((el) => observer.observe(el));


const hamburgerMenu = document.getElementById("hamburger");
let isMenuOpen = false; // add a flag to track the menu state

hamburgerMenu.addEventListener("click", () => { 
    console.log("clicked");
    if (isMenuOpen) {
        hamburgerMenu.innerHTML = "menu";
    } else {
        hamburgerMenu.innerHTML = "close";
    }
    isMenuOpen = !isMenuOpen; // toggle the flag
    document.getElementById("menu").classList.toggle('show-menu');
    document.getElementById("nav-bar").classList.toggle('nav-bar-resp');
});