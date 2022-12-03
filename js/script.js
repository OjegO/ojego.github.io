const   switcher = document.querySelector('#switcher'),
        body = document.querySelector('body'),
        h1 = body.querySelectorAll('h1'),
        h2 = body.querySelectorAll('h2'),
        h3 = body.querySelectorAll('h3'),
        h6 = body.querySelectorAll('h6'),
        p = body.querySelectorAll('p'),
        a = body.querySelectorAll('a'),
        logo = body.querySelector('#logo'),
        search = body.querySelector('#search'),
        sound = body.querySelector('#sound');

let i = 0;
const darkMode = function() {
    i ++;
    console.log(i);
    switcher.classList.toggle('active');
    body.classList.toggle('active');
    if (i % 2 == 0) {
        logo.src = 'img/logo.svg';
        search.src = 'img/search.svg';
        sound.src = 'img/sound.png';
    } else {
        logo.src = 'img/lightLogo.svg';
        search.src = 'img/lightSearch.svg';
        sound.src = 'img/soundLight.png';
    }
    for (let i = 0; i < h1.length; i++) {
        h1[i].classList.toggle('active');
    }

    for (let i = 0; i < h2.length; i++) {
        h2[i].classList.toggle('active');
    }

    for (let i = 0; i < h3.length; i++) {
        h3[i].classList.toggle('active');
    }

    for (let i = 0; i < h6.length; i++) {
        h6[i].classList.toggle('active');
    }

    for (let i = 0; i < p.length; i++) {
        p[i].classList.toggle('active');
    }
    
    for (let i = 0; i < a.length; i++) {
        a[i].classList.toggle('active');
    }

};
switcher.addEventListener('click', darkMode);