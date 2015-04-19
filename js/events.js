$(function(){

    $('#createButton').click(function(e) {
        e.preventDefault();
        
        $('#createEventModal').on('shown.bs.modal', function () {
            $('#myInput').focus()
        })
        // window.location.href = "createEvent.html";


    });
});


