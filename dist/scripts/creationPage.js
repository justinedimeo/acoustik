const $box = Array.from(document.querySelectorAll('.box'))
const $languageButton = document.querySelector('.language-button')
const $languageButtonCircle = document.querySelector('.language-circle')
const $languageAzerty = document.querySelector('.language-azerty')
const $languageQwerty = document.querySelector('.language-qwerty')

for (const box_ of $box) {
    $languageButton.addEventListener('click', () => {
        box_.classList.toggle('box-invisible')
        box_.classList.toggle('box-visible')
    })
}

$languageButton.addEventListener('click', () => {
    if ($languageButtonCircle.classList.contains('left')) {
        console.log('click')
        $languageButtonCircle.style.transform = 'translateX(1.25rem)'
        $languageButtonCircle.classList.remove('left')
    } else {
        $languageButtonCircle.style.transform = 'translateX(0)'
        $languageButtonCircle.classList.add('left')
    }
})
