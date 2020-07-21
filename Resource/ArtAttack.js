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
/*let elements = 0;
$('#stage').html('<svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"></svg>');*/

//Add Photo:
$('#save-picture').on('click', function () {
    let pic = $('#image-url').val();
    alert(pic);
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

        let imageUrl = "url('" + Wallpaper.href+ "')";
        $("#stage").html("");
        $('#stage').css("backgroundImage",imageUrl);

        //$('#stage svg').html('<g id="wallpaper"><image x="0" y="0" width="100%" href="' + Wallpaper.href + '"/></g>' + $('#stage svg').html());
    }

});

// this is for Add the template
$(".templateClass").click(function () {
    let templateHtml = $(this).html();
    let stage = $("#stage").html(templateHtml);
    edit ();
    $('#stage').css("backgroundImage", "");
    let savedHTMl = stage.html();
});


//this is for add the shapes
$(".shapesClass").click(function () {
    let shapeHtml = $(this).html();
    let stage = $("#stage").append(shapeHtml);
    let savedHTMl = stage.html();
});

//----------------------------------------------------

//Edit Text into Template :
        function edit () {
            console.log("helloline92");
            var userText = document.createElement("INPUT");
            let stage = document.getElementById("stage");
            userText.setAttribute("id", "usertext");
            userText.setAttribute("type", "text");
             console.log("line96");
            $(".cards").click( function () {
                console.log("line98");
                let textHtml = $(this);
                $(this).html("");
                console.log($(this).html());
                stage.appendChild(userText);
                let inputText = document.getElementById("usertext");
                $("#usertext").change(function () {
                    // here i dont know how to make the text appers in template

                    console.log($(this).val());
                    textHtml.html($(this).val());
                    console.log(textHtml.html());
                })

            });

        }
//----------------------------------------------------
//ADD text
$("#save-text").on("click", function () {
   // console.log($("#add-text").val());
    var userText = document.createElement("label");
    let stage = document.getElementById("stage");
    userText.setAttribute("id", "userTextOnStage");
    userText.setAttribute("type", "text");
    let userTextOnStage= document.getElementById("userTextOnStage");
    //console.log(userTextOnStage);
    userText.innerHTML= ($("#add-text").val());
    stage.appendChild(userText);

});




//----------------------------------------------------

//Delete Stage :

function deleteStage(){
    $("#stage").html("");
    $('#stage').css("backgroundImage", "");

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
