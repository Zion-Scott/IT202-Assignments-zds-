const passwordInput = document.getElementById("passwordID");
passwordInput.addEventListener("click", function(){
    if (passwordInput.type == "password") {
        passwordInput.type = "text"; 
        passwordInput.style.backgroundColor = 'lightblue';
    }
    else {
        passwordInput.type = "password";
        passwordInput.style.backgroundColor = 'green';
    }
})