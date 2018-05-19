let $cards = Array.from(document.querySelectorAll('.card-genre'))
const $block = document.querySelector('.cards')
const $previous = document.querySelector('.previous')
const $next = document.querySelector('.next')

let i = 1

$previous.addEventListener('click', () =>{
    if(i!=1){
        $block.style.transform += 'translateX(59vw)'
        i--
    }
})

$next.addEventListener('click', () =>{
    if(i!=4){
        $block.style.transform += 'translateX(-59vw)'
        i++
    }
})


// for( let $card of $cards){
//     $card.addEventListener('click', () =>{
//         console.log('click')
//         $block.style.transform += 'translateX(-59vw)'
//     })
// }