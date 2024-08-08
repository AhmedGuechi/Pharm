
var checkboxes = document.querySelectorAll('.table1 .checkbox');
var checks = 0;



//checking with console.log
// for (const checkbox of checkboxes) {
//     if (checkbox.checked) { console.log('d'); }

// }


//function to toggle "telecharger la selection".
function buttonchange() {
    var ischecked = false;
    for (const checkbox of checkboxes) {
        if (checkbox.checked) {
            ischecked = true;
            break;
        }
    }
    const downloadselected = document.querySelector('#download-all');
    downloadselected.style.display = ischecked ? 'block' : 'none';
    console.log(ischecked);
}



//adding event listener to each checkbox on communiqués table
for (const checkbox of checkboxes) {
    checkbox.addEventListener('change', buttonchange)
}


//function to download the selection click


// function handledownloadbuttonclick(event) {
//     event.preventDefault();
    
//     // Get the selected checkboxes
//     const selectedFiles = Array.from(checkboxes)
//         .filter(checkbox => checkbox.checked)
//         .map(checkbox => checkbox.value); // Assuming checkboxes have a value attribute

//     if (selectedFiles.length > 0) {
//         // Use the selected files to construct download links or send to the server
//         // Here, we'll just log the selected file names to the console
//         console.log('Selected Files:', selectedFiles);
//     } else {
//         alert('Please select at least one file.');
//     }
// }


//adding event listener to the download selection button, when you click in it
const downloadselected = document.querySelector('#download-all');
downloadselected.addEventListener('click',handledownloadbuttonclick);
    



//function to reveal the first photo dynamically.
let photo = document.getElementById('rose');
let currentPosition = 0;
photo.style.clipPath = 'inset(0% 100% 0% 0%)';

function revealPhoto() {
    currentPosition += 60;
    photo.style.clipPath = `inset(0% ${0 - currentPosition}% 0% 0%)`;

    // Stop revealing when the photo is fully displayed
    if (currentPosition >= 100) {
        clearInterval(revealInterval);
    }
}

// Start revealing the photo every 1s (adjust the interval duration)
let revealInterval = setInterval(revealPhoto, 200);

const downloadEach = document.querySelectorAll ('.table1 .download-button');
const previewEach = document.querySelectorAll ('.table1 .preview-button');
const downloadEachmobile = document.querySelectorAll('.table1 .btn-image')
console.log(previewEach);

//functions for preview or download buttons
function downloadEachClick (){
    // alert('no back-end yet');
}
function previewEachClick (){
    // alert('no back-end yet');
}

//adding event listeners to the download each and preview.
// for (let i= 0 ; i< downloadEach.length ; i++){
//     downloadEach[i].addEventListener('click',downloadEachClick);
//     previewEach[i].addEventListener('click',previewEachClick);
//     downloadEachmobile[i].addEventListener('click',downloadEachClick);
// }


//adding a function when you tap on it it scrolls u to the top of the page
 const totop = document.querySelector('.to-top');
 window.addEventListener('scroll', function ( ){
    if(window.pageYOffset > 200){
        totop.classList.add('active');
    }
    else{
        totop.classList.remove('active'); 
    }
 })