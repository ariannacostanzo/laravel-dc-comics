//delete modal
const deleteBtn = document.getElementById("delete-btn");
const deleteCloseButton = document.getElementById("delete-close-btn");
const deleteCancelButton = document.getElementById("delete-cancel-btn");
const deleteModal = document.getElementById("delete-modal");

//premendo il deletebtn apro il modal
deleteBtn.addEventListener('click', () => {
    deleteModal.classList.remove('d-none');
})

//il close btn chiude il deleteModal
deleteCloseButton.addEventListener('click', () => {
    deleteModal.classList.add("d-none");
})

//anche cancel
deleteCancelButton.addEventListener("click", () => {
    deleteModal.classList.add("d-none");
});

//restore modal

const restoreBtn = document.getElementById("restore-btn");
const restoreCloseButton = document.getElementById("restore-close-btn");
const restoreCancelButton = document.getElementById("restore-cancel-btn");
const restoreModal = document.getElementById("restore-modal");

//premendo il deletebtn apro il modal
restoreBtn.addEventListener("click", () => {
    restoreModal.classList.remove("d-none");
});

//il close btn chiude il restore Modal
restoreCloseButton.addEventListener("click", () => {
    restoreModal.classList.add("d-none");
});

//anche cancel
restoreCancelButton.addEventListener("click", () => {
    restoreModal.classList.add("d-none");
});
