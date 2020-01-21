(function () {
    'use strict';

    document.addEventListener('DOMContentLoaded', () => {

        document.querySelector('.program-event .info-curso').style.display = 'block'

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




    });
})();


// $(function() {
//     $('.program-event .info-curso:first').show();
//     $('.program-menu a').click(function (e) { 
//         e.preventDefault();
//         $('.ocultar').hide()
//         var enlace = $(this).attr('href');
//         console.log(enlace);
//         $(enlace).fadeIn(1000)
//     });
// }) 