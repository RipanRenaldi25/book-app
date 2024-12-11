import './bootstrap';

let carouselContainer = document.querySelector('.carousel');
let carouselListContainer = document.querySelector('.carousel .carousel__list');
let thumbnailContainer = document.querySelector('.carousel .thumbnail');
const nextButton = document.querySelector('.arrow .arrow__right');
const prevButton = document.querySelector('.arrow .arrow__left');


let timeout;


nextButton.addEventListener('click', e => {
    let carouselItems = document.querySelectorAll('.carousel .carousel__list .carousel__item');
    let thumbnailItems = document.querySelectorAll('.carousel .thumbnail .thumbnail__item');

    carouselListContainer.appendChild(carouselItems[0]);
    thumbnailContainer.appendChild(thumbnailItems[0])
    carouselContainer.classList.add('next');
    clearTimeout(timeout)
    timeout = setTimeout(() => {
        carouselContainer.classList.remove('next');
    }, 1000)
})


prevButton.addEventListener('click', e => {
    let carouselItems = document.querySelectorAll('.carousel__item');
    let thumbnailItems = document.querySelectorAll('.carousel .thumbnail .thumbnail__item');
    const positionLastItem = carouselItems.length - 1;
    carouselListContainer.prepend(carouselItems[positionLastItem]);
    thumbnailContainer.prepend(thumbnailItems[positionLastItem]);
    carouselContainer.classList.add('prev');
    clearTimeout(timeout)

    timeout = setTimeout(() => {
        carouselContainer.classList.remove('prev');
    }, 1000)
})