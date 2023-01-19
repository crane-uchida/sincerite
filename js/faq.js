if (window.innerWidth < 641) {
    screen = ".sp";
} else {
    screen = ".pc";
}

var qnacont = document.querySelectorAll(".qnacont");
var replycont = document.querySelectorAll(".replybox");

window.onload = function() {
    Array.prototype.forEach.call(qnacont, function(elem, index) {
        var quesbox = elem.querySelector(".quesbox");
        var ansbox = elem.querySelector(".ansbox");
        var anstext = elem.querySelector(".anstext");
        var qicon = elem.querySelector(".qicon");
        var ansheight = anstext.offsetHeight;
        var open = false;

        quesbox.onclick = function() {
            if (!open) {
                ansbox.style.maxHeight = ansheight + "px";
                qicon.classList.add("opn");
                open = true;
            } else {
                ansbox.style.maxHeight = "0px";
                qicon.classList.remove("opn");
                open = false;
            }
        };
    });
    Array.prototype.forEach.call(replycont, function(elem, index) {
        var replyshow = elem.querySelector(".replyshow");
        var replycont = elem.querySelector(".replycont");
        var replytext = elem.querySelector(".replytext");
        var replyheight = replytext.offsetHeight;
        var open = false;

        replyshow.onclick = function() {
            if (!open) {
                replycont.style.maxHeight = replyheight + "px";
                open = true;
            } else {
                replycont.style.maxHeight = "0px";
                open = false;
            }
            replyshow.classList.toggle("active");
        };
    });
};

document.addEventListener("scroll", (e) => {});

//function to get offsettop for relative parent
const getOffsetTop = (element) => {
    let offsetTop = 0;
    while (element) {
        offsetTop += element.offsetTop;
        element = element.offsetParent;
    }
    return offsetTop;
};

function isOnScreen(elem) {
    // if the element doesn't exist, abort
    if (elem.length == 0) {
        return;
    }

    var viewport_top = document.scrollingElement.scrollTop;
    var viewport_height = window.innerHeight;
    var viewport_bottom = viewport_top + viewport_height;
    var height = elem.offsetHeight;
    var top = getOffsetTop(elem) + height / 2;
    var bottom = top + height;

    return (
        (top >= viewport_top && top < viewport_bottom) || // top in/out
        (bottom > viewport_top && bottom <= viewport_bottom) || // full div in/out
        (height > viewport_height && top <= viewport_top && bottom >= viewport_bottom)
    );
}