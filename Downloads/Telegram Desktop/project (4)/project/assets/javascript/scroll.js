let scrollContainer = document.getElementById("categorie-container");
let backBtn = document.getElementById("backBtn");
let nextBtn = document.getElementById("nextBtn");

scrollContainer.addEventListener("wheel", (evt) => {
    scrollContainer.style.scrollBehavior= "smooth";
    evt.preventDefault();
    scrollContainer.scrollLeft += evt.deltaY;
})
nextBtn.addEventListener("click", () => {
    scrollContainer.style.scrollBehavior= "smooth";
    scrollContainer.scrollLeft += 520;
})

backBtn.addEventListener("click", () => {
    scrollContainer.style.scrollBehavior= "smooth";
    scrollContainer.scrollLeft -= 520;
})
// backBtn.addEventListener('click', () => {
//     scrollContainer.scrollBy({
//       left: -200, // Adjust the scroll amount as needed
//       behavior: 'smooth'
//     });
//   });