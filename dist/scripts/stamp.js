const $stamp = document.querySelector('.stamp')
const $cover = document.querySelector('.cover')
const $click = document.querySelector('.click-me')

$cover.addEventListener('click', () => {
    if ($stamp.classList.contains('hidden')) {
        $stamp.style.display = 'block'
        $click.style.display = 'none'
        $stamp.classList.toggle('hidden')
    } else {
        $stamp.style.display = 'none'
        $stamp.classList.toggle('hidden')
    }
})