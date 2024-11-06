const sections = document.querySelectorAll("section[id]");

const scrollActive = () => {
    const scrollY = window.pageYOffset;

    sections.forEach((current) => {
        const sectionHeight = current.offsetHeight,
            sectionTop = current.offsetTop - 58,
            sectionId = current.getAttribute("id"),
            sectionsClass = document.querySelector(
                ".nav__menu a[href*=" + sectionId + "]"
            );

        if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
            sectionsClass.classList.add("active-link");
        } else {
            sectionsClass.classList.remove("active-link");
        }
    });
};
window.addEventListener("scroll", scrollActive);

document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll("#navServicesColor");
    // const navColorActive = document.querySelectorAll('#navItemColorActive');
    navLinks.forEach((link) => {
        link.addEventListener("click", function () {
            navLinks.forEach((item) => {
                item.firstElementChild.style.backgroundColor = "";
                item.firstElementChild.style.color = "";
            });

            this.firstElementChild.style.backgroundColor = "#1F2B6C";
            this.firstElementChild.style.color = "#fff";
        });
    });
});
