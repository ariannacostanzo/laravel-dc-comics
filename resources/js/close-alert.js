const closeBtn = document.getElementById("close-alert");
const alertContainer = document.querySelector(".my-alert");
closeBtn.addEventListener("click", () => {
    alertContainer.classList.add("d-none");
});
