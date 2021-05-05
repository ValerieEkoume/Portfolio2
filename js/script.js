
/* ---------- Togller Navbar --------- */
const navToggler = document.querySelector(".nav-toggler");
navToggler.addEventListener("click", () => {
    hideSection();
    toggleNavBar();
    document.body.classList.toggle("hide-scrolling");
});
function hideSection() {
    document.querySelector("section.active").classList.toggle("fade-out");
}
function toggleNavBar() {
    document.querySelector(".header").classList.toggle("active");
}

/* ---------- Active Section --------- */

document.addEventListener("click", (e) =>{
    if(e.target.classList.contains("link-item") && e.target.hash !== ""){
        // Active l'overlay pour prévenir des clicks multiple
        document.querySelector(".overlay").classList.add("active");
        navToggler.classList.add("hide");
       if(e.target.classList.contains("nav-item")) {
           toggleNavBar();
       }
       else {
           hideSection();
           document.body.classList.add("hide-scrolling");
       }
       setTimeout(() =>{
           document.querySelector("section.active").classList.remove("active", "fade-out");
           document.querySelector( e.target.hash).classList.add("active");
           window.scrollTo(0,0);
           document.body.classList.remove("hide-scrolling");
           navToggler.classList.remove("hide");
           document.querySelector(".overlay").classList.remove("active");
       }, 500);
    }
})

/* ---------- About tab --------- */

const tabsContainer = document.querySelector(".about-tabs"),
      aboutSection = document.querySelector(".about-section");

      tabsContainer.addEventListener("click", (e) =>{
          if(e.target.classList.contains("tab-item") && !e.target.classList.contains("active")) {
              tabsContainer.querySelector(".active").classList.remove("active")
              e.target.classList.add("active");
              const target = e.target.getAttribute("data-target");
              aboutSection.querySelector(".tab-content.active").classList.remove("active");
              aboutSection.querySelector(target).classList.add("active");
          }
    });

/* ---------- Portfolio Item Details Popup --------- */

document.addEventListener("click", (e) =>{
    if (e.target.classList.contains("view-project-btn")){
        togglePortfolioPopup();

        portfolioItemDetails(e.target.parentElement)
    }
})

function togglePortfolioPopup(){
    document.querySelector(".portfolio-popup").classList.toggle("open");
    document.body.classList.toggle("hide-scrolling");
    document.querySelector(".portfolio-popup").scrollTo(0,0)
    document.querySelector(".main").classList.toggle("fade-out");
}
document.querySelector(".pp-close").addEventListener("click", togglePortfolioPopup);


// Cache la popup quand on y click à l'extérieur de celle-ci
document.addEventListener("click", (e) =>{
    if(e.target.classList.contains("pp-inner")){
        togglePortfolioPopup();
    }
})
function portfolioItemDetails(portfolioItem){
    document.querySelector(".pp-thumbnail img").src =
        portfolioItem.querySelector(".portfolio-item-thumbnail img").src;

    document.querySelector(".pp-header h3").innerHTML =
        portfolioItem.querySelector(".portfolio-item-title").innerHTML;

    document.querySelector(".pp-body").innerHTML =
        portfolioItem.querySelector(".portfolio-item-details").innerHTML;
}

