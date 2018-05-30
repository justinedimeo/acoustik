const $stamp = document.querySelector('.stamp')
const $cover = document.querySelector('.cover')
const $click = document.querySelector('.click-me')

$cover.addEventListener('click', () => {
    if ($stamp.classList.contains('hidden')) {
        $posY = (Math.floor((80)*Math.random()+1))
        $posX = (Math.floor((100)*Math.random()+1))
        $stamp.style.display = 'block'
        $stamp.style.transform = 'translateY(' + $posY + '%) translateX(' + $posX + '%)'
        $click.style.display = 'none'
        $stamp.classList.toggle('hidden')
    } else {
        $stamp.style.display = 'none'
        $stamp.classList.toggle('hidden')
    }
})