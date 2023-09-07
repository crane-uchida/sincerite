if (window.innerWidth < 641) {
    screen = ".sp";
} else {
    screen = ".pc";
}

var qnacont = document.querySelectorAll(".qnacont");
var detailmain = document.querySelectorAll(".party-detail");
var linebtm = document.querySelector(".introttl .line-intro.btm");
var linetop = document.querySelector(".introttl .line-intro.top");
var articleline = document.querySelectorAll(".articlettl .articleline");

var moreplace = document.querySelector(".place .moreplace-bttn");
var moreplacetext = document.querySelector(".place .moreplace-bttn .bttntext");
var placehidden = document.querySelector(".place .place-hidden");
var placehiddencont = document.querySelector(".place .place-hidden-cont");
var placefocus = document.querySelector(".place .place-focus");
var placehide = true;

var morereport = document.querySelector(".party-report .morereport-bttn");
var morereporttext = document.querySelector(".party-report .morereport-bttn .bttntext");
var partyhidden = document.querySelector(".party-report .party-hidden");
var hiddencont = document.querySelector(".party-report .party-hidden-cont");
var separator = document.querySelector(".party-report .party-separator");
var hidden = true;

Array.prototype.forEach.call(detailmain, function(elem, index) {
    var detailtop = elem.querySelector(".detailstruc");
    var showmore = elem.querySelector(".showmore");
    var showmoretext = elem.querySelector(".showmore .text");
    var detailbox = elem.querySelector(".detailtxt");
    var content = elem.querySelector(".detailtxt .content");
    var cover = elem.querySelector(".detailtxt .cover");
    var detailheight = content.offsetHeight;
    var mainheight = elem.offsetHeight;
    var detailopen = false;

    detailtop.style.height = mainheight + "px";

    showmore.onclick = function() {
        if (!detailopen) {
            detailbox.style.maxHeight = detailheight + "px";
            cover.style.display = "none";
            showmoretext.innerHTML = "閉じる";
            detailopen = true;
        } else {
            detailbox.style.maxHeight = "350px";
            cover.style.display = "block";
            detailtop.scrollIntoView({ behavior: "smooth", block: "center" });
            showmoretext.innerHTML = "詳しく見る";
            detailopen = false;
        }
        showmore.classList.toggle("active");
    };
});

moreplace.onclick = function() {
    let placehiddenheight = placehiddencont.offsetHeight;
    if (placehide) {
        placehidden.style.maxHeight = "fit-content";
        moreplacetext.innerHTML = "閉じる";
        placehide = false;
    } else {
        placehidden.style.maxHeight = placehiddenheight + "px";
        if (window.getComputedStyle(placehidden).maxHeight == "fit-content") {} else {
            placehidden.style.maxHeight = "0";
            placefocus.scrollIntoView({ behavior: "smooth", block: "center" });
            moreplacetext.innerHTML = "他のお見合いレポートを見る";
            placehide = true;
        }
    }
    moreplace.classList.toggle("active");
};

morereport.onclick = function() {
    let hiddenheight = hiddencont.offsetHeight;
    if (hidden) {
        partyhidden.style.maxHeight = "fit-content";
        morereporttext.innerHTML = "閉じる";
        hidden = false;
    } else {
        partyhidden.style.maxHeight = hiddenheight + "px";
        if (window.getComputedStyle(partyhidden).maxHeight == "fit-content") {} else {
            partyhidden.style.maxHeight = "0";
            separator.scrollIntoView({ behavior: "smooth", block: "center" });
            morereporttext.innerHTML = "他のお見合いレポートを見る";
            hidden = true;
        }
    }
    morereport.classList.toggle("active");
};

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
};

document.addEventListener("scroll", (e) => {
    // if (isOnScreen(linebtm)) {
    //     linetop.classList.add("expright");
    //     linebtm.classList.add("expleft");
    // }
    Array.prototype.forEach.call(articleline, function(elem, index) {
        if (isOnScreen(elem)) {
            elem.classList.add("expmid");
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
    var top = getOffsetTop(elem) + height / 2;
    var bottom = top + height;

    return (
        (top >= viewport_top && top < viewport_bottom) || // top in/out
        (bottom > viewport_top && bottom <= viewport_bottom) || // full div in/out
        (height > viewport_height && top <= viewport_top && bottom >= viewport_bottom)
    );
}