async function getBreed() {
    var xmlHttp = new XMLHttpRequest();

    xmlHttp.onreadystatechange = function () {

        if (xmlHttp.readyState === 4 && xmlHttp.status === 200) {
            document.getElementById('breed').innerHTML = this.responseText;
        }
    }
    xmlHttp.open("GET", "?c=breed&a=refresh", true);
    xmlHttp.send();
    //setTimeout(getBreed, 10000);
}
//window.onload = getBreed();

//getBreed();

// var carousel = document.getElementById("breed");
//
// // Use setInterval to call the next() function every 5 seconds
// setInterval(function() {
//     carousel.next();
// }, 5000);