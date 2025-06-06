// Custom Modal Functionality
document.addEventListener("DOMContentLoaded", function () {
    // Initialize custom modals
    const customModalTriggers = document.querySelectorAll(
        '[data-custom-toggle="modal"]'
    );

    customModalTriggers.forEach((trigger) => {
        trigger.addEventListener("click", function () {
            const target = this.getAttribute("data-custom-target");
            const modal = document.querySelector(target);
            if (modal) {
                modal.classList.add("show");
                document.body.style.overflow = "hidden";
            }
        });
    });

    // Close modals when clicking close button or outside
    const customModals = document.querySelectorAll(".custom-modal");
    customModals.forEach((modal) => {
        // Close button
        const closeBtn = modal.querySelector(".custom-modal-close");
        if (closeBtn) {
            closeBtn.addEventListener("click", () => {
                modal.classList.remove("show");
                document.body.style.overflow = "";
            });
        }

        // Close when clicking outside
        modal.addEventListener("click", (e) => {
            if (e.target === modal) {
                modal.classList.remove("show");
                document.body.style.overflow = "";
            }
        });
    });

    // Prevent modal content click from closing modal
    const customModalContents = document.querySelectorAll(
        ".custom-modal-content"
    );
    customModalContents.forEach((content) => {
        content.addEventListener("click", (e) => {
            e.stopPropagation();
        });
    });
});
