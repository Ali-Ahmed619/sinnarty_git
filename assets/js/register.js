async function checkForm(event) {
    if (event) event.preventDefault();

    // Detect if opened via file:// or Live Server — PHP won't work in either case
    if (window.location.protocol === "file:" || window.location.port === "5500") {
        alert("❌ PHP cannot run here!\n\nPlease open the page through XAMPP Apache.\n\nMake sure Apache & MySQL are running in XAMPP, then open:\nhttp://localhost/senarty/register.php");
        return false;
    }

    var fullname = document.getElementById("fullname").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;
    var terms = document.getElementById("terms").checked;

    var nameMsg = document.getElementById("nameMsg");
    var emailMsg = document.getElementById("emailMsg");
    var passMsg = document.getElementById("passMsg");

    var ok = true;

    if (fullname == "") {
        nameMsg.innerHTML = "Please enter your full name";
        ok = false;
    } else {
        nameMsg.innerHTML = "";
    }

    if (email == "") {
        emailMsg.innerHTML = "Please enter your email";
        ok = false;
    } else {
        emailMsg.innerHTML = "";
    }

    if (password == "" || confirmPassword == "") {
        passMsg.innerHTML = "Please fill in both password fields";
        ok = false;
    } else if (password != confirmPassword) {
        passMsg.innerHTML = "Passwords do not match";
        ok = false;
    } else {
        passMsg.innerHTML = "";
    }

    if (terms == false) {
        alert("Please agree to the Terms of Service and Privacy Policy");
        ok = false;
    }

    if (ok == true) {
        // Send data to PHP via fetch
        let formData = new FormData();
        formData.append("name", fullname);
        formData.append("email", email);
        formData.append("phone", phone);
        formData.append("password", password);
        
        try {
            let response = await fetch("auth/register.php", {
                method: "POST",
                body: formData
            });
            let result = await response.json();
            
            if (result.status === "success") {
                window.location.href = "login.php";
            } else {
                alert(result.message);
            }
        } catch (error) {
            console.error("Error:", error);
            alert("Registration failed! This usually happens if PHP is not running. Are you using XAMPP? Error: " + error.message);
        }
    }

    return false;
}