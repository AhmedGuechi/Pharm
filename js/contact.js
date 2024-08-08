
document.getElementById('main_form1').addEventListener('submit', function (event) {
  var requiredFields = ['surname', 'firstname', 'email', 'objet']; // Add the IDs of the required input fields

  for (var i = 0; i < requiredFields.length; i++) {
    var field = document.getElementById(requiredFields[i]);
    if (field.value.trim() === '') {
      event.preventDefault(); // Prevent form submission
      field.classList.add('error'); // Add the 'error' class to highlight the field
      field.nextElementSibling.innerText = 'Ce champ est requis'; // Display an error message (optional)
    } else {
      field.classList.remove('error'); // Remove the 'error' class if the field is filled
      field.classList.add('valid')
      field.nextElementSibling.innerText = ''; // Clear the error message (optional)
    }
  }
});
  