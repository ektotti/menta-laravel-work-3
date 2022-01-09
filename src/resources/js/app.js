require('./bootstrap');

let inputs = document.querySelectorAll('.submit');
inputs.forEach(function(input){
    input.addEventListener('click', function(e){
        e.target.classList.add('clicked');
    });
});