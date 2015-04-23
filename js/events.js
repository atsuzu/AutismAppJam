$(function(){
    $("#createModalWarning").hide();

    $('#profileId').click(function(e) {
        e.preventDefault();

        window.location.replace("profile.php");
        
    });

    $('#homeId').click(function(e) {
        e.preventDefault();

        window.location.replace("events.php");
        
    });

    $('#createButtonId').click(function() {
        
        $('#createEventModal').on('shown.bs.modal', function () {
            $("#createModalWarning").hide();
        })
        
    });

    $('#submitButtonId').click(function(e) { // for join event
        e.preventDefault();
        
        $('#joinEventModal').on('shown.bs.modal', function () {
            
        })

    });

    $('#joinButtonId').click(function() {
        $("#joinIid").removeClass("fa fa-chevron-up fa-5x");
        $("#joinIid").addClass("fa fa-hand-o-down fa-5x");
        $("#joinOptionsID").toggle();
        
    });

    $('#createEventButtonId').click(function() {
        
        $("#createModalWarning").html("Your event has been sucessfully created!");
        $("#createModalWarning").show();
        
    });

});


