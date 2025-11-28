// Basic form validation using JavaScript
document.addEventListener("DOMContentLoaded", function () {

    const form = document.querySelector("form");

    form.addEventListener("submit", function (e) {

        let fname = document.getElementById("fname").value.trim();
        let lname = document.getElementById("lname").value.trim();
        let email = document.getElementById("email").value.trim();
        let phone = document.getElementById("phone").value.trim();

        if (fname === "" || lname === "" || email === "" || phone === "") {
            alert("Please fill all the required fields!");
            e.preventDefault();
        }

        if (phone.length !== 10) {
            alert("Phone number must be 10 digits!");
            e.preventDefault();
        }

    });

});
