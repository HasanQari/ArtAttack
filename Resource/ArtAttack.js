//******************************* Art Attack Style Sheet *******************************


//******************************* Global ********************************


// Auth Script Section
function fPass() {
    document.getElementById("fPassHolder").style.display = "block";
    document.getElementById("loginHolder").style.display = "none";
}
function sendMail() {
    document.getElementById("sentMsg").style.display = "block";
    document.getElementById("fPassHolder").style.display = "none";
    document.getElementById("loginHolder").style.display = "none";
}

function okClose() {
    document.getElementById("regsuc").style.display = "none";
}

function logoutAjax() {

}

// Home Script Section


// MyDesign Script Section

// Services Script Section
//JS here !

// Add SVG on Stage:
let elements = 0;
$('#stage').html('<svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"></svg>');

//Add Photo:
$('#save-picture').on('click', function () {
    $('#stage svg').html($('#stage svg').html() + '<g id="picture-' + ++elements + '"><image href="' + $('#image-url').val() + '"/></g>');
});
//});


// Add Wallpaper Paper JS :

let Wallpaper = {};

$('input[type=image]').on('click', function () {
    Wallpaper.href = $(this).attr('src');
});

// Add wall paper on stage when user press "Select" button :
$('#save-image').on('click', function () {
    $('#wallpaper-modal').modal('hide');
    if($('#stage svg g#wallpaper').length > 0) {
        $('#stage svg g#wallpaper').html('<image x="0" y="0" width="100%" href="' + Wallpaper.href + '"/>');
    } else {
        $('#stage svg').html('<g id="wallpaper"><image x="0" y="0" width="100%" href="' + Wallpaper.href + '"/></g>' + $('#stage svg').html());
    }
    // $("#newImage").resizable({handles: "all", // Edit 46: no need for drag and resize in wallpaper
    //     autoHide: true,
    //     ghost:true,
    //     aspectRatio:true,});
    // $("#newImage").draggable({cursor: "move"});
});


//----------------------------------------------------

// Add shape:
console.log($("#save-shape"));
let addSheapsListener = document.getElementById("save-shape");
addSheapsListener.addEventListener("click", function (e){
    console.log("hello");
    let allShapes = Array.from(document.getElementsByClassName("shapes"));
    let stage = document.getElementById("stage");
    $('#shape-modal').modal('hide');
    allShapes.forEach(function(shape) {
        shape.addEventListener("click", function (e) {
            console.log(e.target.localName);
            console.log("ya rb");
            if (e.target.localName !== "svg") {
                let instanceOfShape = e.target.parentNode.cloneNode(true);
                stage.appendChild(instanceOfShape);
            } else {
                let instanceOfShape = e.target.cloneNode(true);
                console.log(instanceOfShape);
                stage.appendChild(instanceOfShape);
            }
        })
    })
});

//----------------------------------------------------

//Add Template :

$("#save-template").on("click",
    function AddTemplate(){
        let allTemplates = Array.from(document.getElementsByClassName("templates"));
        var stage = document.getElementById("stage");
        allTemplates.forEach(function(shape) {
            shape.addEventListener("click", function (e) {
                console.log(e.target.localName);
                if (e.target.localName != "svg") {
                    let instanceOfShape = e.target.parentNode.cloneNode(true);
                    stage.appendChild(instanceOfShape);
                } else {
                    let instanceOfShape = e.target.cloneNode(true);
                    console.log(instanceOfShape);
                    stage.appendChild(instanceOfShape);
                }
            })
        })
    });

//----------------------------------------------------

//Edit Text into Template :
function cpoy() {
    // for edit the text in template
    $(document).ready(function () {
        var userText = document.createElement("INPUT");
        let stage = document.getElementById("stage");
        userText.setAttribute("id", "usertext");
        userText.setAttribute("type", "text");

        $("#test").on("click", function () {
            console.log("hello");
            userText.setAttribute("placeholder", "BUSINES");
            stage.appendChild(userText);
            let inputText = document.getElementById("usertext");
            $("#usertext").change(function () {
                let s = $("#usertext").innerHTML;
                console.log(inputText.value)
                $("#test").text(inputText.value)


            })

        });

        $("#test2").on("click", function () {

            userText.setAttribute("value", "START A");
            stage.appendChild(userText);
            let inputText = document.getElementById("usertext");
            $("#usertext").change(function () {
                let s = $("#usertext").innerHTML;
                console.log(inputText.value)
                $("#test2").text(inputText.value)
            })
        });

        $("#test3").on("click", function () {

            userText.setAttribute("placeholder", "lacina non semper! ");
            stage.appendChild(userText);
            let inputText = document.getElementById("usertext");
            $("#usertext").change(function () {
                let s = $("#usertext").innerHTML;
                console.log(inputText.value)
                $("#test3").text(inputText.value)
            })
        });

        $("#test4").on("click", function () {
            userText.setAttribute("placeholder", "lorem ipsum sit dolor amet...\n" +
                "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut " +
                "laoreet dolore magna aliquam erat volutpat ");
            stage.appendChild(userText);
            let inputText = document.getElementById("usertext");
            $("#usertext").change(function () {
                let s = $("#usertext").innerHTML;
                console.log(inputText.value)
                $("#test4").text(inputText.value)
            })
        });
        $("#test5").on("click", function () {

            userText.setAttribute("placeholder", "lorem ipsum sit dolor amet..");
            stage.appendChild(userText);
            let inputText = document.getElementById("usertext");
            $("#usertext").change(function () {
                let s = $("#usertext").innerHTML;
                console.log(inputText.value)
                $("#test5").text(inputText.value)
            })
        });


    });
}

//----------------------------------------------------
//ADD text
$("#save-text").on("click", function () {
    console.log($("#add-text").val());
    var userText = document.createElement("label");
    let stage = document.getElementById("stage");
    userText.setAttribute("id", "userTextOnStage");
    userText.setAttribute("type", "text");
    let userTextOnStage= document.getElementById("userTextOnStage");
    console.log(userTextOnStage);
    userText.innerHTML= ($("#add-text").val());
    stage.appendChild(userText);

});




//----------------------------------------------------

//Delete Stage :

function deleteStage(){
    $("#stage").html("");

}

//------------------------Help user----------------------------
function helpUser() {
    alert("Hi user , to design whatever you want in our website " +
        "\n First : choose the wallpaper you want or the template. " +
        "\n Second : if you choose the template then you can modify it. " +
        "\n Third : if you choose the wallpaper then you can add shapes and text." +
        "\n Fourth : you can downloads the template or share it . ")
}

//----------------------------------------------------

//----------------------------------------------------
