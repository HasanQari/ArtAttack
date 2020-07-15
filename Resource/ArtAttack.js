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
function Add_photo() {
    $(document).ready(function () {
        $('#execute').on('click', function () {
            $('#stage').html($('#stage').html() + '<image ' + ' href="' + $('#image-url').val() + '/>');
        })
    });

}
function Add_wallpaper() {
    let Wallpaper = {};

    $('input[type=image]').on('click', function () {
        Wallpaper.href = $(this).attr('src');
    });
    var stage =document.getElementById("stage");


    $('#save-image').on('click', function () {
        $('#exampleModal-wall').modal('hide');

        $('#stage').html($('#stage').html() + '<div id="newImage" ><img style="display: inline-block"  src="' + Wallpaper.href + '" style="height: 80%; width: 80%; "/></div> ');
        $("#newImage").resizable({handles: "all",
            autoHide: true,
            ghost:true,
            aspectRatio:true,});
        $("#newImage").draggable({cursor: "move"});
    });
}
function Add_shape() {
// Get the modal
    var modal2 = document.getElementById("myModal2");
    // Get the button that opens the modal
    var btn = document.getElementById("btnShape");
    var stage = document.getElementById("stage");
    // Get the <span> element that closes the modal
    var span2 = document.getElementsByClassName("close")[1];
    var table = document.getElementById("table");
    // When the user clicks on the button, open the modal
    btn.onclick = function() {
        modal2.style.display = "block";
    }
    // When the user clicks on <span> (x), close the modal
    span2.onclick = function() {
        modal2.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal2) {
            modal2.style.display = "none";
        }
    }

}
function Text_in_Template() {
    // Get the modal
    var modal = document.getElementById("myModal");
    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");
    var stage = document.getElementById("stage");
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    var svg1 = document.getElementById("svg");
    // When the user clicks on the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }


    svg1.onclick=function() {
        let stage = document.getElementById("stage");
        let copySvg= svg1.cloneNode(true);
        cpoy();
        stage.appendChild(copySvg);
    }


}
function Edit_text_in_Template() {
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
function Shape() {
    $('#x-shape').click(function () {
        $('#myModal2').hide();
    });

    $('#x-template').click(function () {
        $('#myModal').hide();
    });


}
function Shape2() {
    let allShapes = Array.from(document.getElementsByClassName("shapes"));
    var stage = document.getElementById("stage");
    allShapes.forEach(function(shape){
        shape.addEventListener("click",function (e) {
            console.log(e.target.localName);
            if (e.target.localName != "svg"){
                let instanceOfShape= e.target.parentNode.cloneNode(true);
                stage.appendChild(instanceOfShape);
            } else {
                let instanceOfShape= e.target.cloneNode(true);
                stage.appendChild(instanceOfShape);
            }

        })

    })
function Add_Text() {

        var userText = document.createElement("INPUT");
        let stage = document.getElementById("stage");

        userText.setAttribute("id", "userText");
        userText.setAttribute("type", "text");
        userText.setAttribute("placeholder", "write your text here");
        stage.appendChild(userText);
        $("#userText").draggable({cursor: "move"});

    }

    document.getElementById('btnText')
        .addEventListener("click", function (event) {
            FunctionForUserText();
        }, {once: true});



}
function Delete_stage() {

        let stage = document.getElementById("stage");
        stage.innerHTML="";

}
