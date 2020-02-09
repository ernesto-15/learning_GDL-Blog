(function () {
    'use strict';

    document.addEventListener('DOMContentLoaded', () => {

        document.querySelectorAll('.program-menu a').forEach(element => {
            element.addEventListener('click', (e) => {
                e.preventDefault();
                let pressedLink = element;
                let target = document.getElementById(pressedLink.attributes.href.value.slice(1));

                document.querySelectorAll('.ocultar').forEach(elemento => {
                    elemento.style.display = 'none'
                });

                document.querySelectorAll('.activo').forEach(elemento => {
                    elemento.classList.remove('activo')
                });

                target.style.display = 'block';
                target.classList.add('fadeIn');
                element.classList.add('activo')
                console.log(target);
            })
        });

        //SCROLL

        let windowHeight = window.innerHeight
        let barHeigight = document.querySelector('.bar').clientHeight

        window.onscroll = () => {
            let bar = document.querySelector('.bar')
            let scroll = document.documentElement.scrollTop || document.body.scrollTop;
            if (scroll > windowHeight) {
                bar.classList.add('fixed');
                document.querySelector('body').style.marginTop = `${barHeigight}px`
            } else {
                bar.classList.remove('fixed');
                document.querySelector('body').style.marginTop = '0px'
            }
        }

        //MENU HAMBURGUESA
        let hamburgerMenu = document.querySelector('.burger')
        const largo = window.matchMedia('screen and (max-width: 767px)');
        let menu = document.querySelector('.responsive-menu');

        let slideUP = () => {
            menu.style.transition = "all 0.3s ease-in-out";
            menu.style.height = "0px";

        }

        let slideDown = () => {
            menu.style.transition = "all 0.3s ease-in-out";
            menu.style.height = `140.4px`;
        }

        let validation = () => {

            if (largo.matches == true) {
                menu.classList.remove('burguer-menu');
                hamburgerMenu.addEventListener('click', hideShow);
            } else {
                menu.classList.add('burguer-menu')
            }

            // console.log(largo.matches);
        }

        largo.addListener(validation)

        let hideShow = () => {

            if (menu.classList.contains('is-active')) {
                menu.classList.remove('is-active')
                // menuLinks.forEach(elemento => {
                //     elemento.style.transition = 'all 1s ease-in-out'
                //     elemento.style.opacity = '0'
                // })
                slideUP()
            } else {
                menu.classList.add('is-active')
                // menuLinks.forEach(elemento => {
                //     elemento.style.transition = 'all 1s ease-in-out'
                //     elemento.style.opacity = '1'
                // })
                slideDown()
            }
        }

        validation();

        let link_menu = []

        document.querySelectorAll('body.conferencia .principal-menu a').forEach(element => {
          if(element.textContent === 'Conferencia') {
            link_menu.push(element)
          }
        });

        link_menu.forEach(element => {
          element.classList.add('active')
        })

        document.querySelectorAll('body.calendario .principal-menu a').forEach(element => {
          if(element.textContent === 'Calendario') {
            link_menu.push(element)
          }
        });

        link_menu.forEach(element => {
          element.classList.add('active')
        })

        document.querySelectorAll('body.invitados .principal-menu a').forEach(element => {
          if(element.textContent === 'Invitados') {
            link_menu.push(element)
          }
        });

        link_menu.forEach(element => {
          element.classList.add('active')
        })

        document.querySelectorAll('body.registro .principal-menu a').forEach(element => {
          if(element.textContent === 'Reservaciones') {
            link_menu.push(element)
          }
        });

        link_menu.forEach(element => {
          element.classList.add('active')
        })




        document.querySelector('.program-event .info-curso').style.display = 'block'
    });
})();


//JQUERY PLUGINS

$(function () {

    //LETTERING

    $('.website-name').lettering();

    //ANIMACIONES PARA NUMEROS

    $('.summary-event li:nth-child(1) p').animateNumber({ number: 6 }, 1200)
    $('.summary-event li:nth-child(2) p').animateNumber({ number: 15 }, 1200)
    $('.summary-event li:nth-child(3) p').animateNumber({ number: 3 }, 600)
    $('.summary-event li:nth-child(4) p').animateNumber({ number: 9 }, 1500)

    //CUENTA REGRESIVA

    $('.countdown-container').countdown('2020/03/05 09:00:00', function (event) {
        $('#days').html(event.strftime('%D'))
        $('#hours').html(event.strftime('%H'))
        $('#minutes').html(event.strftime('%M'))
        $('#seconds').html(event.strftime('%S'))
    })

    //COLORBOX

    $('.invitado_info').colorbox({inline:true, width: "50%"})
})
