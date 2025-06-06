document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const nameInput = document.getElementById("name");
    const emailInput = document.getElementById("email");
    const phoneInput = document.getElementById("phone");
    const messageInput = document.getElementById("message");

    const errors = {
        name: document.getElementById("js-error-name"),
        email: document.getElementById("js-error-email"),
        phone: document.getElementById("js-error-phone"),
        message: document.getElementById("js-error-message"),
    };

    function validateField(field, value) {
        switch (field) {
            case "name":
                return value.trim() === "" ? "Name is required" : "";
            case "email":
                return !/^\S+@\S+\.\S+$/.test(value)
                    ? "Invalid email address"
                    : "";
            case "phone":
                return !/^\d{10}$/.test(value) ? "Phone must be 10 digits" : "";
            case "message":
                return value.trim().length < 10
                    ? "Message must be at least 10 characters"
                    : "";
            default:
                return "";
        }
    }

    function validateForm(e) {
        let hasError = false;

        const fields = {
            name: nameInput.value,
            email: emailInput.value,
            phone: phoneInput.value,
            message: messageInput.value,
        };

        for (const [field, value] of Object.entries(fields)) {
            const error = validateField(field, value);
            if (error) {
                errors[field].textContent = error;
                errors[field].style.display = "block";
                hasError = true;
            } else {
                errors[field].textContent = "";
                errors[field].style.display = "none";
            }
        }

        if (hasError) {
            e.preventDefault(); // Prevent submit if errors exist
        }
    }

    // Validate on submit
    form.addEventListener("submit", validateForm);

    // Live validation while typing
    [nameInput, emailInput, phoneInput, messageInput].forEach((input) => {
        input.addEventListener("input", function () {
            const field = input.id;
            const error = validateField(field, input.value);
            if (error) {
                errors[field].textContent = error;
                errors[field].style.display = "block";
            } else {
                errors[field].textContent = "";
                errors[field].style.display = "none";
            }
        });
    });
});
