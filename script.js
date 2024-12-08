$(document).ready(function () {
    $('#registrationForm').on('submit', function (event) {
      event.preventDefault(); // Prevent default form submission
 
      // Serialize form data
      const formData = $(this).serialize();
 
      // Send form data to the server using AJAX
      $.post('submit.php', formData, function (response) {
        // Display the response in the result div
        $('#result').html(response).fadeIn();
      });
    });
  });
 
