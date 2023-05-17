// navbar
function menubtn() {
    $(document).ready(function () {
        $("#navbar #NavLink").slideToggle("slow");

    });
}

// profile btn
function profile_btn() {
    $(document).ready(function () {
        $(".profile-info").slideToggle("slow");

    });
}


// booking form
function close_btn() {
    $(document).ready(function () {
        $("#book-form").fadeOut("slow");

    });
}

function Puja_Book_btn() {
    $(document).ready(function () {
        $("#book-form").fadeIn("slow");

    });
}

// sign in and sign up
function SignInBtn() {
    document.getElementById("SignInForm").style.display = "block";
    document.getElementById("SignUpForm").style.display = "none";
    document.getElementById("signinDiv").style.backgroundColor = "darkred";
    document.getElementById("signupDiv").style.backgroundColor = "#2C3E50";
}
function SignUpBtn() {
    document.getElementById("SignInForm").style.display = "none";
    document.getElementById("SignUpForm").style.display = "block";
    document.getElementById("signupDiv").style.backgroundColor = "darkred";
    document.getElementById("signinDiv").style.backgroundColor = "#2C3E50";
}
