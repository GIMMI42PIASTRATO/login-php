// Get the form element
const form = document.querySelector('form');

// Add event listener for form submission
form.addEventListener("submit", (event) => {
    // Prevent the form from submitting
    event.preventDefault();

    // Get the input value
    const name = document.querySelector("#name").value;
    const email = document.querySelector("#email").value;
    const password = document.querySelector("#password").value;

    // Perform validation
    if (name === "" || email === "" || password === "") {
        const inputs = document.querySelectorAll("input");
        inputs.forEach((input) => {
            input.classList.add("error");
        });
        alert("Please fill in all fields");
        return;
    }

    // If validation passes, submit the form
    form.submit();
});
