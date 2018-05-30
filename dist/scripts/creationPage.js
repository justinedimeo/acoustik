const $box = Array.from(document.querySelectorAll('.box'))
const $sounds = Array.from(document.querySelectorAll('audio'))
const $recButton = document.querySelector('.rec-button')
const $recMiddle = document.querySelector('.rec-middle')
const $languageButton = document.querySelector('.language-button')
const $languageButtonCircle = document.querySelector('.language-circle')
const $languageAzerty = document.querySelector('.language-azerty')
const $languageQwerty = document.querySelector('.language-qwerty')
const $resultSound = document.querySelector('.result-sound')
const $orderSound = document.querySelector('.order-sound')
const $timeLeft = document.querySelector('.time-left')

for(let $_box of $box){
    $_box.addEventListener('mousedown', () => {
        $_box.style.background = '#F5F5F5'
        $_box.style.transform = 'translateY(0.3rem)'
    })
    $_box.addEventListener('mouseup', () => {
        $_box.style.background = '#FFFFFF'
        $_box.style.transform = 'translateY(0rem)'
    })

    // Changing letters at language change !!! (VOIR CA APRES)
    $languageButton.addEventListener('click', () => {
        $_box.classList.toggle('box-invisible')
        $_box.classList.toggle('box-visible')
    })
}

let newSound = new Array()
let orderSound = new Array()

$recButton.addEventListener('click', (even) => {
    event.preventDefault()
    $recMiddle.classList.add('action')

    // Create a new variable with the time at the moment where the user clicked on the recButton
    const date1 = new Date()
    const d1 = date1.getTime()
    const d3 = d1 + 20000
    let i = 20

    // Every 1 second, setInterval does the updateTime function
    let counter2 = setInterval(updateTime, 100)
    function updateTime() {
        if (i > 0) {
            i = (i * 10 - 0.1 * 10) / 10
            result = i.toFixed(1)
        }
        // Update the counter
        if (i == 0|| i == 1) {
            $timeLeft.innerHTML = `${i}`
        } else {
            $timeLeft.innerHTML = `${i}`
        }
    }

    // Create a second variable with the time it is every 0.5 second
    d2 = ""
    let counter3 = setInterval(checkTime, 500)
    function checkTime() {
        date2 = new Date
        let d2 = date2.getTime()
    }

    // Check if the second variable is smaller than the first + 5sec
    if(d2 <= d3) {
        console.log('0.5sec')

    for (const $box_ of $box) {
        // Making sound on click
        $box_.addEventListener('mousedown', (event) => {
            event.preventDefault()
            
            // Play the sound when the user clicks on a box
            playSound($box_.dataset.sound)

            // Push the data-sound of the box in the array newSound
            newSound.push($box_.dataset.sound)

            // Send the array with all the data-sounds in the form
            $resultSound.value = newSound
        })
    }
}

    document.addEventListener('keydown', (event) => {
        const $box_ = $box.find((element) => element.classList.contains(`key-${event.keyCode}`))

        if ($box_) {
            $box_.style.background = '#F5F5F5'
            $box_.style.transform = 'translateY(0.3rem)'

            // Play the sound when the user clicks on a box
            playSound($box_.dataset.sound)

            // Push the data-sound of the box in the array newSound
            newSound.push($box_.dataset.sound)
            orderSound.push(i)

            // Send the array with all the data-sounds in the form
            $resultSound.value = newSound
            $orderSound.value = orderSound
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