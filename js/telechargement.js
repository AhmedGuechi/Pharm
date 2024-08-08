let selection = document.querySelectorAll('.selection');
let tout_telecharger = document.querySelector('.tout_telecharger');

for (let i = 0; i < selection.length; i++) {
    selection[i].addEventListener('change', function() {
        // Check if at least one checkbox is checked
        let atLeastOneChecked = Array.from(selection).some(function (checkbox) {
            return checkbox.checked;
        });

        // Change the link text based on the checkbox state
        tout_telecharger.textContent = atLeastOneChecked ? 'Télécharger les sélectionnés' : 'Tout Télécharger';
    });
}
