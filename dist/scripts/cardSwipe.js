let $cards = Array.from(document.querySelectorAll('.card-genre'))
const $block = document.querySelector('.cards')
const $previous = document.querySelector('.previous')
const $next = document.querySelector('.next')
const $bgGenre = document.querySelector('.background-genre')
const $slider = document.querySelector('.slider')
let $name = ['', 'jazz', 'rap', 'rock', 'pop']
let $bgSlider = ['', 'linear-gradient(to bottom right, #F76B1C, #FAD961) fixed', 'linear-gradient(to bottom right, #429321, #C0E67B) fixed', 'linear-gradient(to bottom right, #9F041B, #F5515F) fixed', 'linear-gradient(to bottom right, #3E71E6, #ADC4EB) fixed']

$slider.style.background = 'linear-gradient(to bottom right, #F76B1C, #FAD961) fixed'

let i = 1

$previous.addEventListener('click', () => {
    previous()
})

$next.addEventListener('click', () => {
    next()
})

window.addEventListener("keydown", (event) => {
    if (event.keyCode == 40) {
        next()
    } else if (event.keyCode == 38) {
        previous()
    }
})

function previous(){
    if (i != 1) {
        $block.style.transform += 'translateX(59vw)'
        i--
        $bgGenre.innerHTML = $name[i]
        $slider.style.background = $bgSlider[i]
    }
}

function next(){
    if (i != 4) {
        $block.style.transform += 'translateX(-59vw)'
        i++
        $bgGenre.innerHTML = $name[i]
        $slider.style.background = $bgSlider[i]
    }
}