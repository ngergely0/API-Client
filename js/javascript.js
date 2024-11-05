
document.addEventListener('DOMContentLoaded', function() {
    var addModal = document.getElementById("addModal");
    var editModal = document.getElementById("editModal");
    var addBtn = document.getElementById("myBtn");
    var closeBtns = document.getElementsByClassName("close");
    var cancelAddBtn = document.getElementById("btn-cancel-add");
    var cancelEditBtn = document.getElementById("btn-cancel-edit");
    var editBtns = document.getElementsByClassName("btn-edit-county");

    function openModal(modal) {
        modal.style.display = "flex";
    }

    function closeModal(modal) {
        modal.style.display = "none";
    }

    addBtn.onclick = function() {
        openModal(addModal);
    }

    Array.from(editBtns).forEach(function(btn) {
        btn.onclick = function() {
            var id = this.getAttribute('data-id');
            var name = this.getAttribute('data-name');
            document.getElementById('edit-id').value = id;
            document.getElementById('edit-name').value = name;
            openModal(editModal);
        }
    });

    Array.from(closeBtns).forEach(function(btn) {
        btn.onclick = function() {
            closeModal(this.closest('.modal'));
        }
    });

    cancelAddBtn.onclick = function() {
        closeModal(addModal);
    }

    cancelEditBtn.onclick = function() {
        closeModal(editModal);
    }

    window.onclick = function(event) {
        if (event.target.classList.contains('modal')) {
            closeModal(event.target);
        }
    }
});