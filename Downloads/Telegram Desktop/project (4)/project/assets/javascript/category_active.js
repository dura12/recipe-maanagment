const categoryLinkList = document.querySelectorAll(".category-link");

categoryLinkList.forEach(category_link => {
    category_link.addEventListener("click", () => {
        document.querySelector(".category-active")?.classList.remove("category-active")
        category_link.classList.add("category-active");
    })
})