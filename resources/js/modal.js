//?delete modal
const deleteBtn = document.getElementById("delete-btn");
const deleteCloseButton = document.getElementById("delete-close-btn");
const deleteCancelButton = document.getElementById("delete-cancel-btn");
const deleteModal = document.getElementById("delete-modal");

//* funzioni 
const hideModal = (modal) => {
    modal.classList.add('d-none');
}  

const showModal = (modal) => {
    modal.classList.remove("d-none");
}; 

//premendo il deletebtn apro il modal
deleteBtn.addEventListener('click', () => {
    showModal(deleteModal);
})

//il close btn chiude il deleteModal
deleteCloseButton.addEventListener('click', () => {
     hideModal(deleteModal);
})

//anche cancel
deleteCancelButton.addEventListener("click", () => {
     hideModal(deleteModal);
});

//?restore modal

const restoreBtn = document.getElementById("restore-btn");
const restoreCloseButton = document.getElementById("restore-close-btn");
const restoreCancelButton = document.getElementById("restore-cancel-btn");
const restoreModal = document.getElementById("restore-modal");

//premendo il restore btn apro il modal
restoreBtn.addEventListener("click", () => {
     showModal(restoreModal);
});

//il close btn chiude il restore Modal
restoreCloseButton.addEventListener("click", () => {
    hideModal(restoreModal);
});

//anche cancel
restoreCancelButton.addEventListener("click", () => {
    hideModal(restoreModal);
});
