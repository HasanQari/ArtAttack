// this js is for the service2-1 page written by doaa

$(document).ready(function () {
    var stage = document.getElementById("stage");
    let allShapes = Array.from(document.getElementsByClassName("shapes"));

    function helpUser() {
        var helpButton = document.getElementById("helpDesignBtn");
        //define the event
        helpbutton.onclick = function () {

        }
    }
    function deleteelement() {
        var deleteButton = document.getElementById("deleteDesignBtn");
        //define the event
        deleteButton.onclick = function () {
            // if the user want to delete specific element
         if (stage.hasChildNodes()){

         } else {
             // if there is no child

         }
        }
    }

    function saveDesign(){
        var saveButton = document.getElementById("saveDesignBtn");
        saveButton.onclick=function (){

        }
    }
}
