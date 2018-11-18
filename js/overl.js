var overl = document.getElementsByClassName("overlContent")[0];
var frame = document.getElementsByClassName("overlVid")[0];

function overlClose() {
    overl.style.display = "none";
    frame.src = "http://";
}

function overlOpen() {
    overl.style.display = "block";
}
