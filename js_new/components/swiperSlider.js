import Swiper from "swiper/bundle";
function swiperSlider() {
    var swiper = new Swiper(".mySwiper", {
        speed: 1000,
        loop: true,
        effect: "fade",
        autoplay: {
            delay: 1000,
        },
    });
    swiper;
}
export { swiperSlider };
