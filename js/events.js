$(function(){

    $('#createButtonId').click(function(e) {
        e.preventDefault();
        
        $('#createEventModal').on('shown.bs.modal', function () {
            
        })
        


    });

    $('#joinButtonId').click(function(e) {
        $("#joinIid").removeClass("fa fa-chevron-up fa-5x");
        $("#joinIid").addClass("fa fa-hand-o-down fa-5x");
        $("#joinOptionsID").toggle();
        // document.getElementById("joinOptionsID").style.display = "block";

    });

});


