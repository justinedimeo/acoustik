const $box = Array.from(document.querySelectorAll('.box'))
// const $sounds = Array.from($drumkit.querySelectorAll('audio'))
const $languageButton = document.querySelector('.language-button')
const $languageButtonCircle = document.querySelector('.language-circle')
const $languageAzerty = document.querySelector('.language-azerty')
const $languageQwerty = document.querySelector('.language-qwerty')

// document.addEventListener('keydown', (event) => {
//     const $button = $buttons.find((element) => element.classList.contains(`key-${event.keyCode}`))

//     if ($button) {
//         playSound($button.dataset.sound)
//     }
// })

// const playSound = (soundName) => {
//     const $sound = $sounds.find((element) => element.classList.contains(soundName))

//     $sound.currentTime = 0
//     $sound.play()
// } 

// Changing letters at language change
for (const $box_ of $box) {
    $box_.addEventListener('click', () => {
        // event.preventDefault()

        console.log('click')
        // playSound($box_.dataset.sound)
    })

    $languageButton.addEventListener('click', () => {
        $box_.classList.toggle('box-invisible')
        $box_.classList.toggle('box-visible')
    })
}

// Animation circle language
$languageButton.addEventListener('click', () => {
    if ($languageButtonCircle.classList.contains('left')) {
        $languageButtonCircle.style.transform = 'translateX(1.25rem)'
        $languageButtonCircle.classList.remove('left')
    } else {
        $languageButtonCircle.style.transform = 'translateX(0)'
        $languageButtonCircle.classList.add('left')
    }
})