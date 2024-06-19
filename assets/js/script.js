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
hamburgerMenu.addEventListener("click", () => { 
    console.log("clicked");
    document.getElementById("menu").classList.toggle('show-menu');
    document.getElementById("nav-bar").classList.toggle('nav-bar-resp');
});