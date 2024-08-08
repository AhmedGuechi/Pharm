// document.getElementById('search-btn').addEventListener('click', function(){
//     var searchQuery = document.getElementById('search-input').value;
//     var xhr = new XMLHttpRequest();
//     xhr.open('GET', '../php/search.php?query=' + searchQuery, true);
//     xhr.onload = function(){
//        if(this.status == 200){
//          var users = JSON.parse(this.responseText);
//          var output = '<ul>';
//          for(var i in users){
//            output += '<li>'+users[i].name+'</li>';
//          }
//          output += '</ul>';
//          document.getElementById('results').innerHTML = output;
//        }
//     }
//     xhr.send();
//    });

// document.getElementById("search-btn").addEventListener("click", function() {
//   console.log("aaaaaaaa")
//   var searchQuery = document.getElementById("search-input").value; // Get the search query from the input field
//   window.location.href = "../html/searches.php?q=" + encodeURIComponent(searchQuery);
//  });

 function searchResult(){
   var searchQuery = document.getElementById("search-input").value; // Get the search query from the input field
  //  console.log(document.getElementById("search-input").value)
    window.location.href = "../html/searches.php?q=" + encodeURIComponent(searchQuery);
 }