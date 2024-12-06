import './bootstrap';

const sliderItems = document.querySelectorAll('.slider_item');

sliderItems.forEach((item, i) => {
    const angle = i === 0 ? 0 : i * (360 / sliderItems.length);
    item.style.transform = `
    rotateY(${angle}deg)
    translateZ(400px)
    `
})