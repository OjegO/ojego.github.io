const   switcher = document.querySelector('#switcher'),
        body = document.querySelector('body'),
        h1 = body.querySelectorAll('h1'),
        h2 = body.querySelectorAll('h2'),
        h3 = body.querySelectorAll('h3'),
        h6 = body.querySelectorAll('h6'),
        p = body.querySelectorAll('p'),
        logo = body.querySelector('#logo'),
        sound = body.querySelector('#sound'),
        input = body.querySelectorAll('input'),
        card = body.querySelectorAll('#card'),
        nav = document.querySelectorAll('a');

//EventListener
switcher.addEventListener('click', darkMode);

let i = 1;
function darkMode() {
    
    i++;
    if (i % 2 == 0) {
        logo.src = 'img/lightLogo.svg';
        sound.src = 'img/soundLight.webp';
    } else {
        logo.src = 'img/logo.svg';
        sound.src = 'img/sound.webp';
    }
    change(switcher);
    change(body);
    change(nav);
    change(h1);
    change(h2);
    change(h3);
    change(h6);
    change(p);
    
    change(input);
    change(card);
}

function change(object) {
    if (object.length > 1) {
        for (let e of object) {
            e.classList.toggle('active'); 
        } 
    } else {
       object.classList.toggle('active'); 
    }
}