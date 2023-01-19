var staff = document.querySelectorAll(".review-box .staff");

document.addEventListener("scroll", (e) => {
    Array.prototype.forEach.call(staff, function(elem, index) {
        var stafftext = elem.querySelector(".review-box .staff .reply");
        if (isOnScreen(elem)) {
            elem.classList.add("anim");
            stafftext.classList.add("textanim");
        }
    });
});

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
    var top = getOffsetTop(elem) + height;
    var bottom = top + height;

    return (
        (top >= viewport_top && top < viewport_bottom) || // top in/out
        (bottom > viewport_top && bottom <= viewport_bottom) || // full div in/out
        (height > viewport_height && top <= viewport_top && bottom >= viewport_bottom)
    );
}