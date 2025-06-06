document.addEventListener("DOMContentLoaded", function () {
    // Mobile menu toggle
    const mobileMenuButton = document.getElementById("mobileMenuButton");
    const navbarCollapse = document.getElementById("navbarSupportedContent");

    if (mobileMenuButton && navbarCollapse) {
        mobileMenuButton.addEventListener("click", function () {
            navbarCollapse.style.display =
                navbarCollapse.style.display === "block" ? "none" : "block";
        });
    }

    // Alert close buttons
    document.querySelectorAll(".alert-close").forEach((button) => {
        button.addEventListener("click", function () {
            this.parentElement.style.display = "none";
        });
    });

    // Message modal functionality
    const messageModal = document.getElementById("messageModal");
    const messageModalTitle = document.getElementById("messageModalTitle");
    const messageModalBody = document.getElementById("messageModalBody");
    const closeMessageModal = document.querySelector(".close-message-modal");

    document.querySelectorAll(".show-message-btn").forEach((button) => {
        button.addEventListener("click", function () {
            const contactId = this.getAttribute("data-contact-id");
            const contactName = this.getAttribute("data-contact-name");

            messageModalTitle.textContent = `Message from ${contactName}`;
            messageModalBody.textContent =
                window.messageData[contactId].message;

            messageModal.style.display = "block";
        });
    });

    // Delete modal functionality
    const deleteModal = document.getElementById("deleteModal");
    const deleteModalBody = document.getElementById("deleteModalBody");
    const deleteForm = document.getElementById("deleteForm");
    const closeDeleteModal = document.querySelector(".close-delete-modal");

    document.querySelectorAll(".show-delete-btn").forEach((button) => {
        button.addEventListener("click", function () {
            const contactId = this.getAttribute("data-contact-id");
            const contactName = this.getAttribute("data-contact-name");

            deleteModalBody.textContent = `Are you sure you want to delete this contact (${contactName})?`;
            deleteForm.action = `/contacts/${contactId}`;

            deleteModal.style.display = "block";
        });
    });

    // Close modals when clicking the X button
    document.querySelectorAll(".modal-close").forEach((button) => {
        button.addEventListener("click", function () {
            this.closest(".custom-modal").style.display = "none";
        });
    });

    // Close modals when clicking outside the modal content
    window.addEventListener("click", function (event) {
        if (event.target === messageModal) {
            messageModal.style.display = "none";
        }
        if (event.target === deleteModal) {
            deleteModal.style.display = "none";
        }
    });

    // Close buttons in modal footers
    if (closeMessageModal) {
        closeMessageModal.addEventListener("click", function () {
            messageModal.style.display = "none";
        });
    }

    if (closeDeleteModal) {
        closeDeleteModal.addEventListener("click", function () {
            deleteModal.style.display = "none";
        });
    }
});
