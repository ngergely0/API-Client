// Get the modal element
var modal = document.getElementById("editor-modal");

// Get the close button element
var closeButton = document.querySelector(".close-button");

// Get the add button element
var addButton = document.getElementById("btn-add");

// Get the edit buttons elements
var editButtons = document.querySelectorAll("[id^='btn-edit-']");

// Function to show the modal
function showModal() {
    modal.classList.remove("hidden");
}

// Function to hide the modal
function hideModal() {
    modal.classList.add("hidden");
}

// Add event listener to the close button
closeButton.addEventListener("click", hideModal);

// Add event listener to the add button
addButton.addEventListener("click", showModal);

// Add event listeners to the edit buttons
editButtons.forEach(function(editButton) {
    editButton.addEventListener("click", showModal);
});

// Add event listener to the modal background
modal.addEventListener("click", function(event) {
    if (event.target === modal) {
        hideModal();
    }
});

function btnEditCountyOnClick(id, name) {
    // Get the editor form elements
    var idInput = document.getElementById("id");
    var nameInput = document.getElementById("name");

    // Populate the editor form with data
    idInput.value = id;
    nameInput.value = name;

    // Show the modal
    showModal();
}