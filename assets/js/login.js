async function checkForm(event) {
    if (event) event.preventDefault(); // Prevent default form submission

    if (window.location.port === "5500") {
        alert("Warning: You are running this on Live Server (port 5500). PHP will not work! Please open http://localhost/senarty/login.php instead.");
        return false;
    }

    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var emailMsg = document.getElementById("emailMsg");
    var passMsg = document.getElementById("passMsg");

    var ok = true;

    if (email == "") {
        emailMsg.innerHTML = "Please enter your email";
        ok = false;
    } else {
        emailMsg.innerHTML = "";
    }

    if (password == "") {
        passMsg.innerHTML = "Please enter your password";
        ok = false;
    } else {
        passMsg.innerHTML = "";
    }

    if (ok == true) {
        // Send data to PHP via fetch
        let formData = new FormData();
        formData.append("email", email);
        formData.append("password", password);
        
        try {
            let response = await fetch("auth/login.php", {
                method: "POST",
                body: formData
            });
            let result = await response.json();
            
            if (result.status === "success") {
                window.location.href = result.redirect;
            } else {
                // Show the error message dynamically
                passMsg.innerHTML = result.message;
            }
        } catch (error) {
            console.error("Error:", error);
            passMsg.innerHTML = "Login failed! This usually happens if PHP is not running. Are you using XAMPP? Error: " + error.message;
        }
    }

    return false;
}