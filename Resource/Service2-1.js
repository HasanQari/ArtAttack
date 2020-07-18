// this js is for the service2-1 ONLY functions that work
//document ready wrap all your code
$(document).ready(function () {
    // All Your Code Goes Here.

    //All Global Variables in the top of the script
    let stage = document.getElementById("stage");
    let modal = document.getElementById("modal");
    let modalContent = document.getElementById("modal-body");
    let closeModalButtons = Array.from(document.getElementsByClassName("close-modal-button"));
    let mainFunctionalityButtons = Array.from(document.getElementsByClassName("functionality-button"));
    //etc...

    //DO NOT REPEAT YOUR CODE
    //DO NOT REPEAT YOUR CODE
    //DO NOT REPEAT YOUR CODE

    $("#test").on("click", function () {
        $("#usertext2").hide();
        $("#usertext3").hide();
        $("#usertext4").hide();
        $("#usertext5").hide();

        var userText = document.createElement("input");
        let stage = document.getElementById("stage");
        userText.setAttribute("id", "usertext");
        userText.setAttribute("type", "text");
        userText.setAttribute("placeholder", "BUSINES");
        stage.appendChild(userText);
        let inputText = document.getElementById("usertext");
        $("#usertext").change(function () {
            let s = $("#usertext").innerHTML;
            console.log(inputText.value)
            $("#test").text(inputText.value)

        })

    });

    $("#test2").one("click", function () {
        $("#usertext").hide();
        $("#usertext3").hide();
        $("#usertext4").hide();
        $("#usertext5").hide();
        var userText2 = document.createElement("INPUT");
        let stage = document.getElementById("stage");
        userText2.setAttribute("id", "usertext2");
        userText2.setAttribute("type", "text");
        userText2.setAttribute("placeholder", "START A");
        stage.appendChild(userText2);
        let inputText2 = document.getElementById("usertext2");
        $("#usertext2").change(function () {
            let s = $("#usertext2").innerHTML;
            console.log(inputText2.value)
            $("#test2").text(inputText2.value)
        })
    });

    $("#test3").one("click", function () {
        $("#usertext2").hide();
        $("#usertext").hide();
        $("#usertext4").hide();
        $("#usertext5").hide();
        var userText3 = document.createElement("INPUT");
        let stage = document.getElementById("stage");
        userText3.setAttribute("id", "usertext3");
        userText3.setAttribute("type", "text");
        userText3.setAttribute("placeholder", "lacina non semper! ");
        stage.appendChild(userText3);
        let inputText3 = document.getElementById("usertext3");
        $("#usertext3").change(function () {
            let s = $("#usertext3").innerHTML;
            console.log(inputText3.value)
            $("#test3").text(inputText3.value)
        })
    });

    $("#test4").one("click", function () {
        $("#usertext2").hide();
        $("#usertext3").hide();
        $("#usertext").hide();
        $("#usertext5").hide();
        var userText4 = document.createElement("INPUT");
        let stage = document.getElementById("stage");
        userText4.setAttribute("id", "usertext4");
        userText4.setAttribute("type", "text");
        userText4.setAttribute("placeholder", "HI");
        stage.appendChild(userText4);
        let inputText4 = document.getElementById("usertext4");
        $("#usertext4").change(function () {
            let s = $("#usertext4").innerHTML;
            console.log(inputText4.value)
            $("#test4").text(inputText4.value)
        })
    });
    $("#test5").one("click", function () {
        $("#usertext2").hide();
        $("#usertext3").hide();
        $("#usertext4").hide();
        $("#usertext").hide();
        var userText5 = document.createElement("INPUT");
        let stage = document.getElementById("stage");
        userText5.setAttribute("id", "usertext5");
        userText5.setAttribute("type", "text");
        userText5.setAttribute("placeholder", "lorem ipsum sit dolor amet..");
        stage.appendChild(userText5);
        let inputText5 = document.getElementById("usertext5");
        $("#usertext5").change(function () {
            $("#test5").text(inputText5.value)
        })
    });

    $(".test").on("click", function (e) {
        addTextInput(e.target);
    });

    //USE FUNCTIONS
    //USE FUNCTIONS
    //USE FUNCTIONS

    function addTextInput(element) {
        let textValue = element.innerText;
        $(".usertext").hide();
        let textInput = document.createElement("input");
        textInput.setAttribute("id", "textInput");
        textInput.setAttribute("class", "usertext");
        textInput.setAttribute("type", "text");
        userText.setAttribute("value", textValue);
        stage.appendChild(userText);
        userText.onchange = function () {
            let userTextValue = document.getElementById("textInput").value;
            element.innerHTML = userTextValue;
        }
    }

    //USE MEANINGFUL NAMES
    //USE MEANINGFUL NAMES
    //USE MEANINGFUL NAMES

    //DO NOT NAME VARIABLES, IDs, CLASSES OR ANYTHING LIKE THIS
    //let test
    //id = "test"
    //class = "test"

    //NAME THEM LIKE THIS
    //let close_button
    // id = "close_button"
    // class = "close_buttons"


    //REUSE YOUR ELEMENTS
    mainFunctionalityButtons.forEach(function (button) {
        button.addEventListener("click", function (e) {
            openModal(e);
        });
    });

    function openModal(e) {
        let imagesCount = e.target.getAttribute("data-imagesCount");
        let imagesClass = e.target.getAttribute("id")
        for (let i = 0; i < imagesCount; i++) {
            let image = document.createElement("img");
            image.setAttribute("class", imagesClass + "image");
            image.addEventListener("click", function (e) {
                stage.appendChild(e.target);
            });
            modal.appendChild(userText);
        }
    }

    closeModalButtons.forEach(function (close_button) {
        close_button.addEventListener("click", function () {
            closeModal();
        });
    });

    function closeModal() {
        modal.innerHTML = "";
        modal.style.display = "none";
    }


    //MAKE YOUR CODE REUSABLE

// this is for the help to the user
$("#helpDesignBtn").one("click",function (){
    alert("Hi , you can design anything you want in simplist way " +
        "first Start with Template choose that apper in the bottom of the page or you can choose your custom wallpaeper" +
        "then adding the shapes you want also the text that you want ")
})

});
