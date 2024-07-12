let profileDropdownList=document.querySelector(".profile-dropdown-list");
let btn=document.querySelector(".profile-dropdown-btn");

btn.addEventListener("click",() => function () {
    profileDropdownList.classList.add("active");
} );
  
/*window.addEventListener("click", function (e) {
    if (!btn.contains(e.target)) profileDropdownList.classList.remove("active");
})*/