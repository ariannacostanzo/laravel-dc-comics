const deleteBtn = document.getElementById("delete-btn");
const closeButton = document.getElementById("close-btn");
const confirmButton = document.getElementById("confirm-delete");
const cancelButton = document.getElementById("cancel-btn");
const modal = document.querySelector(".my-modal-layout");

//premendo il deletebtn apro il modal
deleteBtn.addEventListener('click', () => {
    modal.classList.remove('d-none');
})

//il close btn chiude il modal
closeButton.addEventListener('click', () => {
    modal.classList.add("d-none");
})

//anche cancel
cancelButton.addEventListener("click", () => {
    modal.classList.add("d-none");
});