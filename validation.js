document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");
    const errorMessageDiv = document.getElementById("error-message");

    form.addEventListener("submit", function(event) {
        const requiredFields = [
            "prep","date", "name", "staff-number", "dept", "floor-office",
            "laptop-make", "laptop-model", "laptop-serial", "laptop-tag",
            "pc-make", "pc-model", "pc-serial", "pc-tag",
            "monitor-make", "monitor-model", "monitor-serial", "monitor-tag",
            "ups-make", "ups-model", "ups-serial", "ups-tag",
            "mouse-make", "mouse-model", "mouse-serial", "mouse-tag",
            "cable-make", "cable-model", "cable-serial", "cable-tag",
            "bag-make", "bag-model", "bag-serial", "bag-tag",
            "replace-laptop-make", "replace-laptop-model", "replace-laptop-serial", "replace-laptop-tag",
            "replace-pc-make", "replace-pc-model", "replace-pc-serial", "replace-pc-tag",
            "replace-monitor-make", "replace-monitor-model", "replace-monitor-serial", "replace-monitor-tag",
            "replace-ups-make", "replace-ups-model", "replace-ups-serial", "replace-ups-tag",
            "replace-mouse-make", "replace-mouse-model", "replace-mouse-serial", "replace-mouse-tag",
            "replace-cable-make", "replace-cable-model", "replace-cable-serial", "replace-cable-tag",
            "replace-bag-make", "replace-bag-model", "replace-bag-serial", "replace-bag-tag"
        ];

        let formIsValid = true;
        let firstInvalidField = null;

        requiredFields.forEach(function(field) {
            const input = document.getElementById(field);
            if (input && input.value.trim() === "") {
                formIsValid = false;
                input.style.border = "2px solid red";
                if (!firstInvalidField) {
                    firstInvalidField = input;
                }
            } else if (input) {
                input.style.border = "";
            }
        });

        const assignmentTypeCheckboxes = document.querySelectorAll('input[name="assignment-type[]"]');
        const isCheckboxSelected = Array.from(assignmentTypeCheckboxes).some(checkbox => checkbox.checked);

        if (!isCheckboxSelected) {
            formIsValid = false;
            errorMessageDiv.textContent = "Please select at least one assignment type.";
            errorMessageDiv.style.display = "block";
            if (!firstInvalidField) {
                firstInvalidField = errorMessageDiv;
            }
        } else {
            errorMessageDiv.style.display = "none";
        }

        if (!formIsValid) {
            event.preventDefault();
            firstInvalidField.scrollIntoView({ behavior: "smooth", block: "center" });
        }
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const assignmentTypeCheckboxes = document.querySelectorAll('input[name="assignment-type[]"]');

    assignmentTypeCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', () => {
            if (checkbox.checked) {
                assignmentTypeCheckboxes.forEach(box => {
                    if (box !== checkbox) {
                        box.checked = false;
                    }
                });
            }
        });
    });
});
