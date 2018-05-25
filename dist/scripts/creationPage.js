const $box = Array.from(document.querySelectorAll('.box'))
const $sounds = Array.from(document.querySelectorAll('audio'))
const $recButton = document.querySelector('.rec-button')
const $languageButton = document.querySelector('.language-button')
const $languageButtonCircle = document.querySelector('.language-circle')
const $languageAzerty = document.querySelector('.language-azerty')
const $languageQwerty = document.querySelector('.language-qwerty')

for(let $_box of $box){
    $_box.addEventListener('mousedown', () => {
        $_box.style.background = '#F5F5F5'
        $_box.style.transform = 'translateY(0.3rem)'
    })
    $_box.addEventListener('mouseup', () => {
        $_box.style.background = '#FFFFFF'
        $_box.style.transform = 'translateY(0rem)'
    })
}

$recButton.addEventListener('click', (even) => {
    event.preventDefault()

    // Create a new variable with the time at the moment where the user clicked on the recButton
    const date1 = new Date()
    const d1 = date1.getTime()
    const d3 = d1 + 3000

    // Every 1 second, setInterval does the checkTime function
    let counter2 = setInterval(checkTime, 1000)
    function checkTime() {
        // Create a new variable with the time every 1 second
        date2 = new Date
        let d2 = date2.getTime()

        // Check if the second variable is smaller than the first + 3sec (if it is you can play)
        if(d2 < d3) {
    
    for (const $box_ of $box) {    
        // Making sound on click
        $box_.addEventListener('mousedown', (event) => {
            event.preventDefault()

            playSound($box_.dataset.sound)

            // Setting time counter before playing again
            let counter = setTimeout(alertFunc, 3000)

            // Playing sounds
            newSound = []
            function alertFunc() {
                newSound.push($box_.dataset.sound)
                for (let i = 0; i < newSound.length; i++) {
                    playSound(newSound[i])
                }
                newSound = []
            }
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
            $box_.style.background = '#F5F5F5'
            $box_.style.transform = 'translateY(0.3rem)'

            
            // Setting time counter
            let counter = setTimeout(alertFunc, 3000)

            // Playing sounds
            newSound = []
            function alertFunc() {
                newSound.push($box_.dataset.sound)
                for (let i = 0; i < newSound.length; i++) {
                    playSound(newSound[i])
                }
                newSound = []
            }
        }
    })

    document.addEventListener('keyup', (event) => {
        const $box_ = $box.find((element) => element.classList.contains(`key-${event.keyCode}`))

        if ($box_) {
            $box_.style.background = '#FFFFFF'
            $box_.style.transform = 'translateY(0rem)'
        }
    })

    const playSound = (soundName) => {
        const $sound = $sounds.find((element) => element.classList.contains(soundName))

        $sound.currentTime = 0
        $sound.play()
    }
    // End checkTime
    }
}

})

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