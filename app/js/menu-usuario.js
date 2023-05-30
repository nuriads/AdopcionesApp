const userImg = document.getElementById("user-img");
const userMenu = document.getElementById("user-menu");

userImg.addEventListener("click", function() {
  userMenu.classList.toggle("show");
});

document.addEventListener("click", function(event) {
  if (!event.target.closest(".user-container")) {
    userMenu.classList.remove("show");
  }
});











