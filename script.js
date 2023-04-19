function validateForm() {
    var username = document.forms["login"]["username"].value;
    var password = document.forms["login"]["password"].value;
    if (username == "" || password == "") {
        alert("Please fill in all fields.");
        return false;
    }
}

function submitForm() {
    if (validateForm()) {
        alert("Form submitted successfully.");
        document.forms["login"].submit();
    }
}