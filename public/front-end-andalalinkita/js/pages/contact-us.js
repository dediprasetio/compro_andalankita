$(document).ready(function() {
    $('#contactForm').on('submit', function(e) {
        e.preventDefault();  // Prevent form from submitting the traditional way
        
        // Gather form data
        var formData = {
            name: $('#name').val(),
            email: $('#email').val(),
            subject: $('#subject').val(),
            message: $('#message').val()
        };
        
        // AJAX request
        $.ajax({
            url: rootApp+ '/api/contact-us/add',  // Your API endpoint
            type: 'POST',
            data: formData,
            success: function(response) {
                alert('Message sent successfully!');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error sending message: ' + errorThrown);
            }
        });
    });
});
