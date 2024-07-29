document.addEventListener("DOMContentLoaded", function() {
    var messageData = localStorage.getItem("message");
    if (messageData) {
        var parts = messageData.split('|');
        var messageType = parts[0];
        var message = parts[1];
        
        var messageContainer = document.getElementById("message-container");
        if (messageType === "success") {
            messageContainer.innerHTML = "<p class='success-message'>" + message + "</p>";
        } else if (messageType === "error") {
            messageContainer.innerHTML = "<p class='error-message'>" + message + "</p>";
        }
        
        // Scroll to the bottom of the page
        window.scrollTo(0, document.body.scrollHeight);

        // Remove the message after 4 seconds
        setTimeout(function() {
            messageContainer.innerHTML = "";
        }, 4000);

        localStorage.removeItem("message");
    }
});
