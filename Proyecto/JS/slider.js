index = 0;
var i;
setInterval(() => {
    slideShow(index = index + 1);

}, 5000);
slideShow(index);

function slideShow(n) {
    var slide = document.getElementsByClassName("slider");
    if (n >= slide.length) {
        index = 0;
    }

    if (n < 0) {
        index = slide.length - 1;
    }
    for (i = 0; i < slide.length; i++) {
        slide[i].style.display = "none";
    }

    slide[index].style.display = "block";

}