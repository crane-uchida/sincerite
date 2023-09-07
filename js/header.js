if (window.innerWidth < 641) {
    screen = ".sp";
} else {
    screen = ".pc";
}

var menu = document.querySelector(screen + " .hambmenu");
var menucont = document.querySelector(screen + " .menucont");
var headertxtpc = document.querySelector(".pc .headertxt");
var headerpc = document.querySelector(".header-wrapper.pc");
var leftsecpc = document.querySelector(".pc .leftsec");
var contboxpc = document.querySelector(".pc .contbox.inner");
var dropdown = document.querySelectorAll(".dropnav");

Array.prototype.forEach.call(dropdown, function(elem, index) {
    var subnavcont = elem.querySelector(".subnavcont");
    var subnavbox = elem.querySelector(".subnavbox");
    var dropnav = elem.querySelector(".mainnav");
    var contheight = subnavbox.offsetHeight;
    var arrow = elem.querySelector(".arrowicon");
    var open = false;
    dropnav.onclick = function() {
        if (!open) {
            subnavcont.style.maxHeight = contheight + "px";
            arrow.classList.add("up");
            open = true;
        } else {
            subnavcont.style.maxHeight = "0px";
            arrow.classList.remove("up");
            open = false;
        }
    };
});

menu.onclick = function() {
    menu.classList.toggle("active");
    menucont.classList.toggle("active");
};

window.onscroll = function() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        headertxtpc.style.fontSize = "11px";
        headerpc.classList.add("sticky");
    } else {
        headertxtpc.style.fontSize = "15px";
        headerpc.classList.remove("sticky");
    }
};