//******************************* Art Attack Style Sheet *******************************


//******************************** Global ********************************

// Login
function login() {
    var body = document.getElementsByName("body");
    var x = document.getElementById("loginHolder");
    if (x.style.display === "none") {
        x.style.display = "block";
        body.style.overflow="hidden";
    } else {
        x.style.display = "none";
    }
}

function signup() {
    var x = document.getElementById("signupHolder");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function RPass() {
        document.getElementById("RPassHolder").style.display= "block";
        document.getElementById("loginHolder").style.display="none";
}

function closeIN() {
    var x = document.getElementById("loginHolder");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
function closeUp() {
    var x = document.getElementById("signupHolder");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function closeRPass() {
    document.getElementById("RPassHolder").style.display="none";
}

// Home Script Section


// MyDesign Script Section


