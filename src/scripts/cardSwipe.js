let $cards = Array.from(document.querySelectorAll('.card-genre'))
const $block = document.querySelector('.cards')

for( let $card of $cards){
    $card.addEventListener('click', () =>{
        $block.style.transform = 'translateX(0rem)'
    })
}