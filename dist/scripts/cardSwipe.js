let $cards = Array.from(document.querySelectorAll('.card-genre'))
const $block = document.querySelector('.cards')
const $previous = document.querySelector('.previous')
const $next = document.querySelector('.next')
const $bgGenre = document.querySelector('.background-genre')
const $slider = document.querySelector('.slider')
let $name = ['', 'jazz', 'rap', 'rock', 'pop']
let $bgSlider = ['', 'linear-gradient(to bottom right, #F76B1C, #FAD961) fixed', 'linear-gradient(to bottom right, #429321, #C0E67B) fixed', 'linear-gradient(to bottom right, #9F041B, #F5515F) fixed', 'linear-gradient(to bottom right, #3E71E6, #ADC4EB) fixed']
let $cardResponsive = Array.from(document.querySelectorAll('.card-responsive'))
// const $buttonResponsive = document.querySelector('.responsive-button')
let $buttonResponsive = Array.from(document.querySelectorAll('.responsive-button'))
let $right = Array.from(document.querySelectorAll('.right'))
const $responsive = document.querySelector('.responsive')
const $footer = document.querySelector('.footer')
const $footerChose = document.querySelector('.footer-chose')
const $title = document.querySelector('.title-responsive')
const $header = document.querySelector('.header')


for (let $card of $cardResponsive) {
    $card.addEventListener('click', () => {
        $header.style.color="#fff"
        $title.style.color="#fff"
        $footer.style.color="#fff"
        $footerChose.innerHTML="You chose wisely"
        if ($card.classList.contains('active')) {
            $card.classList.toggle('active')
        } else {
            $card.classList.add('active')
            if ($cardResponsive[0].classList.contains('active')) {
                $responsive.style.background = $bgSlider[1]
                $buttonResponsive[0].style.transform = "scaleX(1)"
                $right[0].style.width = "70vw"
                $buttonResponsive[1].style.transform = "scaleX(0)"
                $right[1].style.width = "90vw"
                $buttonResponsive[2].style.transform = "scaleX(0)"
                $right[2].style.width = "90vw"
                $buttonResponsive[3].style.transform = "scaleX(0)"
                $right[3].style.width = "90vw"
                $cardResponsive[0].style.opacity = "1"
                $cardResponsive[1].style.opacity = "0.2"
                $cardResponsive[2].style.opacity = "0.2"
                $cardResponsive[3].style.opacity = "0.2"
                $card.classList.toggle('active')
            }
            if ($cardResponsive[1].classList.contains('active')) {
                $responsive.style.background = $bgSlider[2]
                $buttonResponsive[0].style.transform = "scaleX(0)"
                $right[0].style.width = "90vw"
                $buttonResponsive[1].style.transform = "scaleX(1)"
                $right[1].style.width = "70vw"
                $buttonResponsive[2].style.transform = "scaleX(0)"
                $right[2].style.width = "90vw"
                $buttonResponsive[3].style.transform = "scaleX(0)"
                $right[3].style.width = "90vw"
                $cardResponsive[0].style.opacity = "0.2"
                $cardResponsive[1].style.opacity = "1"
                $cardResponsive[2].style.opacity = "0.2"
                $cardResponsive[3].style.opacity = "0.2"
                $card.classList.toggle('active')
            }
            if ($cardResponsive[2].classList.contains('active')) {
                $responsive.style.background = $bgSlider[3]
                $buttonResponsive[0].style.transform = "scaleX(0)"
                $right[0].style.width = "90vw"
                $buttonResponsive[1].style.transform = "scaleX(0)"
                $right[1].style.width = "90vw"
                $buttonResponsive[2].style.transform = "scaleX(1)"
                $right[2].style.width = "70vw"
                $buttonResponsive[3].style.transform = "scaleX(0)"
                $right[3].style.width = "90vw"
                $cardResponsive[0].style.opacity = "0.2"
                $cardResponsive[1].style.opacity = "0.2"
                $cardResponsive[2].style.opacity = "1"
                $cardResponsive[3].style.opacity = "0.2"
                $card.classList.toggle('active')
            }
            if ($cardResponsive[3].classList.contains('active')) {
                $responsive.style.background = $bgSlider[4]
                $buttonResponsive[0].style.transform = "scaleX(0)"
                $right[0].style.width = "90vw"
                $buttonResponsive[1].style.transform = "scaleX(0)"
                $right[1].style.width = "90vw"
                $buttonResponsive[2].style.transform = "scaleX(0)"
                $right[2].style.width = "90vw"
                $buttonResponsive[3].style.transform = "scaleX(1)"
                $right[3].style.width = "70vw"
                $cardResponsive[0].style.opacity = "0.2"
                $cardResponsive[1].style.opacity = "0.2"
                $cardResponsive[2].style.opacity = "0.2"
                $cardResponsive[3].style.opacity = "1"
                $card.classList.toggle('active')
            }
        }
    })
}



// for (let $card of $cardResponsive) {
//     $card.addEventListener('click', () => {
//         $buttonResponsive.style.display = "inline-block"
//         $right.style.width = "70vw"
//     })
// }


$slider.style.background = 'linear-gradient(to bottom right, #F76B1C, #FAD961) fixed'

let i = 1

$previous.addEventListener('click', () => {
    previous()
})

$next.addEventListener('click', () => {
    next()
})

window.addEventListener("keydown", (event) => {
    if (event.keyCode == 39) {
        next()
    } else if (event.keyCode == 37) {
        previous()
    }
})

function previous() {
    if (i != 1) {
        $block.style.transform += 'translateX(11.8%)'
        i--
        $bgGenre.innerHTML = $name[i]
        $slider.style.background = $bgSlider[i]
    }
}

function next() {
    if (i != 4) {
        $block.style.transform += 'translateX(-11.8%)'
        i++
        $bgGenre.innerHTML = $name[i]
        $slider.style.background = $bgSlider[i]
    }
}