document.addEventListener("DOMContentLoaded", () => {
    const mottoElement = document.getElementById("motto");
    const mottoText = mottoElement.textContent;

    function startLoop() {
        let index = mottoText.length;

        function deleteMotto() {
            if (index > 0) {
                mottoElement.textContent = mottoText.substring(0, index - 1);
                index--;
                setTimeout(deleteMotto, 50); // Adjust the speed here (in milliseconds)
            } else {
                setTimeout(typeMotto, 500); // Wait a bit before retyping
            }
        }

        function typeMotto() {
            if (index < mottoText.length) {
                mottoElement.textContent += mottoText.charAt(index);
                index++;
                setTimeout(typeMotto, 100); // Adjust the speed here (in milliseconds)
            } else {
                setTimeout(startLoop, 1000); // Wait a bit before starting the loop again
            }
        }

        setTimeout(deleteMotto, 1000); // Wait a bit before starting the deletion
    }

    startLoop(); // Start the loop
});
