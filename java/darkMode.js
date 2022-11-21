const $html = document.querySelector('html')
const $checkbox = document.querySelector('#switch')

$checkbox.addEventListener('change', function(){
    $html.classList.toggle('darkMode')
    document.getElementById('#switch').checked = true;
})

/*function enable() {
    document.getElementById('#switch').disabled= false;
}*/