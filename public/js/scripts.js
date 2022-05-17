/*!
* Start Bootstrap - One Page Wonder v6.0.5 (https://startbootstrap.com/theme/one-page-wonder)
* Copyright 2013-2022 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-one-page-wonder/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project

const filter = document.querySelectorAll('.filter');

filter.forEach(fil => {
  fil.addEventListener('click', function handleClick(event) {

    var id = this.id;
    console.log(id);

    var elements = document.getElementsByClassName("link");
    for (let i = 0; i < elements.length; i++) {
        if (elements[i].classList.contains( id )) {
            elements[i].style.display = 'block';
        }else{
            elements[i].style.display = 'none';
        }
    }
  });
});

