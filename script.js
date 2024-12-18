$(document).ready(function() {
    $("#registrationForm").on("submit", function(event) {
        event.preventDefault(); // Prevent form submission
        
        var name = $("#name").val();
        var email = $("#email").val();
        var phone = $("#phone").val();
        var dob = $("#dob").val();
        
        // Simple client-side validation
        if (name == "" || email == "" || phone == "" || dob == "") {
            alert("Please fill in all fields!");
            return;
        }

        // Send form data to the PHP script
        $.ajax({
            type: "POST",
            url: "submit.php",
            data: $(this).serialize(),
            success: function(response) {
                $("#response").html(response).fadeIn();
                $("#registrationForm")[0].reset(); // Reset form after successful submission
            }
        });
    });
});
