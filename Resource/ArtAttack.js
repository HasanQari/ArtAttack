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
    $('#picture-modal').modal('hide');
    $('#stage').html($('#stage').html() + $('#upload-result').html());
    $(".Allimg").resizable({handles: "all",
        autoHide: true,
        ghost:true,
        aspectRatio:true,});
    $(".Allimg").draggable({cursor: "move"});


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


        let imageUrl = "url('" + Wallpaper.href+ "')";
        $("#stage").html("");
        $('#stage').css({
            "background-image": imageUrl,
            "background-size": "cover",
            "background-repeat": "no-repeat",
        });

        //$('#stage svg').html('<g id="wallpaper"><image x="0" y="0" width="100%" href="' + Wallpaper.href + '"/></g>' + $('#stage svg').html());


});

// this is for Add the template
$(".templateClass").click(function () {
    let templateHtml = $(this).html();
    let stage = $("#stage").html(templateHtml);
    edit ();
    $('#stage').css("backgroundImage", "");


});


//this is for add the shapes
$(".shapesClass").click(function () {
    let shapeHtml = $(this).html();
    console.log(shapeHtml);

    let stage = $("#stage").append(shapeHtml);

    $(".shapes").resizable({handles: "all",
        autoHide: true,
        ghost:true,
        aspectRatio:true,});
    $(".shapes").draggable({cursor: "move"});


});

//----------------------------------------------------

//Edit Text into Template :
       function edit () {
           console.log("edit");
           var userText = document.createElement("INPUT");
           let stage = document.getElementById("stage");
           userText.setAttribute("id", "usertext");
           userText.setAttribute("type", "text");
           var textHtml;
           $(".cards").click(function (e) {
               textHtml = $(this);

               userText.setAttribute("value",$(this).html());
               stage.appendChild(userText);
               console.log(e.currentTarget);
               let inputText = document.getElementById("usertext");
               $("#usertext").change(function () {
                  textHtml.html($(this).val());
               })

               $("#usertext").focusout(function(){
                $("#usertext").remove();
               });
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
    userText.setAttribute("class","Alltext")
    let userTextOnStage= document.getElementById("userTextOnStage");
    //console.log(userTextOnStage);
    userText.innerHTML= ($("#add-text").val());
    stage.appendChild(userText);
    $(".Alltext").resizable({handles: "all",
          autoHide: true,
          ghost:true,
          aspectRatio:true,});
    $(".Alltext").draggable({cursor: "move"});

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

//---------------------Add Picture-------------------------------


//----------------------------------------------------
