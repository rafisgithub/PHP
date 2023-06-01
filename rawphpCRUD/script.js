$(document).ready(function() {
    // Form submission event
    $("form").submit(function(event) {
        event.preventDefault(); // Prevent the default form submission
        
        // Perform form validation
        var name = $("input[name='name']").val();
        var email = $("input[name='email']").val();
        var phone = $("input[name='phone']").val();
        var nationalId = $("input[name='national_id']").val();
        var gender = $("input[name='gender']:checked").val();
        var district = $("input[name='district']").val();
        
        // Validate each field
        if (name === "") {
            alert("Please enter a name.");
            return;
        }
        
        if (email === "") {
            alert("Please enter an email.");
            return;
        }
        
        if (phone === "") {
            alert("Please enter a phone number.");
            return;
        }
        
        if (nationalId === "") {
            alert("Please enter a national ID.");
            return;
        }
        
        if (gender === undefined) {
            alert("Please select a gender.");
            return;
        }
        
        if (district === "") {
            alert("Please enter a district.");
            return;
        }
        
        // If all fields are valid, submit the form
        $("form").unbind("submit").submit();
    });
});
