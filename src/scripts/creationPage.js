const $box = Array.from(document.querySelectorAll('.box'))
const $sounds = Array.from(document.querySelectorAll('audio'))
const $languageButton = document.querySelector('.language-button')
const $languageButtonCircle = document.querySelector('.language-circle')
const $languageAzerty = document.querySelector('.language-azerty')
const $languageQwerty = document.querySelector('.language-qwerty')

for (const $box_ of $box) {    
    // Making sound on click
    $box_.addEventListener('mousedown', (event) => {
        event.preventDefault()

        playSound($box_.dataset.sound)
    })

    // Changing letters at language change
    $languageButton.addEventListener('click', () => {
        $box_.classList.toggle('box-invisible')
        $box_.classList.toggle('box-visible')
    })
}

document.addEventListener('keydown', (event) => {
    const $box_ = $box.find((element) => element.classList.contains(`key-${event.keyCode}`))

    if ($box_) {
        playSound($box_.dataset.sound)
    }
})

const playSound = (soundName) => {
    const $sound = $sounds.find((element) => element.classList.contains(soundName))

    $sound.currentTime = 0
    $sound.play()
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