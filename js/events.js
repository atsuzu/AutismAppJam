$(function(){

    $('#profileId').click(function(e) {
        e.preventDefault();

        window.location.replace("profile.php");
        
    });

    $('#homeId').click(function(e) {
        e.preventDefault();

        window.location.replace("events.php");
        
    });

    $('#createButtonId').click(function(e) {
        e.preventDefault();
        
        $('#createEventModal').on('shown.bs.modal', function () {
            
        })
        
    });

    $('#submitButtonId').click(function(e) {
        e.preventDefault();
        
        $('#joinEventModal').on('shown.bs.modal', function () {
            
        })

    });

    $('#joinButtonId').click(function(e) {
        $("#joinIid").removeClass("fa fa-chevron-up fa-5x");
        $("#joinIid").addClass("fa fa-hand-o-down fa-5x");
        $("#joinOptionsID").toggle();
        
    });

});


