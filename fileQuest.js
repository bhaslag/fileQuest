$(document).ready(function(){

    var row = $(".row");
    // Delete
    row.on('click', '.dltBtn', function(){
        $(this).closest('.col').remove();
    // AJAX request for delete
    var filename = $(this).attr('data-file');
    $.ajax({
        type: 'POST',
        url: 'delete.php',
        data: { 'filename' : filename },
        success: function(data) {
            if(data == 'success') {
                console.log("File deleted successfully");
            }
        }
        });
    });
});