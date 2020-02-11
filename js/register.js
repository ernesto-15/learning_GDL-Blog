(function () {
    'use strict';

    let gift = document.getElementById('gift')

    document.addEventListener('DOMContentLoaded', () => {

        //Datos Usuario
        let name = document.getElementById('name');
        let lastname = document.getElementById('lastname');
        let email = document.getElementById('email');

        //Pases

        let oneDayPass = document.getElementById('one-day-pass');
        let twoDayPass = document.getElementById('two-day-pass');
        let threeDayPass = document.getElementById('three-day-pass');

        //Botones y Divs
        let calculate = document.getElementById('calc');
        let errorDiv = document.getElementById('error');
        let btnRegistro = document.getElementById('btnRegistro');
        btnRegistro.disabled = true;
        let totalProductsList = document.getElementById('products-list');
        let totalSum = document.getElementById('total-sum');

        //Extras
        let shirts = document.getElementById('event_shirt');
        let stickers = document.getElementById('stickers');

        // FUNCIONES
        let calcSum = (event) => {

            if (gift.value === '') {
                alert('Debes elegir un regalo');
                gift.focus();
            }
            else {
                let oneDayTickets = parseInt(oneDayPass.value, 10) || 0;
                let twoDayTickets = parseInt(twoDayPass.value, 10) || 0;
                let threeDayTickets = parseInt(threeDayPass.value, 10) || 0;
                let numberShirts = parseInt(shirts.value, 10) || 0;
                let numberStickers = parseInt(stickers.value, 10) || 0;

                let totalPay = (oneDayTickets * 30) + (twoDayTickets * 45) + (threeDayTickets * 50) + (numberShirts * 10 * 0.93) + (numberStickers * 2);

                console.log(`Total: ${totalPay}`);

                let productsList = [];

                if (oneDayTickets >= 1) {
                    productsList.push(`${oneDayTickets} Pases por dia`)
                }

                if (twoDayTickets >= 1) {
                    productsList.push(`${twoDayTickets} Pases por 2 dias`)
                }

                if (threeDayTickets >= 1) {
                    productsList.push(`${threeDayTickets} Pases completos`)
                }

                if (numberShirts >= 1) {
                    productsList.push(`${numberShirts} Camistas`)
                }

                if (numberStickers >= 1) {
                    productsList.push(`${numberStickers} Etiquetas`)
                }

                totalProductsList.style.display = 'block';
                totalProductsList.innerHTML = '';

                for (let i = 0; i < productsList.length; i++) {
                    totalProductsList.innerHTML += productsList[i] + '<br/>'
                }

                totalSum.innerHTML = `$ ${totalPay.toFixed(2)}`;


                btnRegistro.disabled = false;
                document.getElementById('total_pedido').value = totalPay;
                console.log(productsList);
            }
        }

        let showDays = (event) => {
            let oneDayTickets = parseInt(oneDayPass.value, 10) || 0;
            let twoDayTickets = parseInt(twoDayPass.value, 10) || 0;
            let threeDayTickets = parseInt(threeDayPass.value, 10) || 0;

            let chosenDays = [];

            if (oneDayTickets > 0) {
                chosenDays.push('viernes');
            }
            if (twoDayTickets > 0) {
                chosenDays.push('viernes', 'sabado');
            }
            if (threeDayTickets > 0) {
                chosenDays.push('viernes', 'sabado', 'domingo');
            }

            for (let i = 0; i < chosenDays.length; i++) {
                document.getElementById(chosenDays[i]).style.display = 'block'
            }

            console.log(chosenDays);
        }

        let validateFields = () => {
            if (this.value === '') {
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = 'Todos los campos son obligatorios';
                this.style.border = '1px solid red';
                errorDiv.style.border = '1px solid red'
            } else {
                errorDiv.style.display = 'none';
                this.style.border = '1px solid #cccccc';
            }
        }

        let validateEmail = () => {
            if (this.value.indexOf('@') > -1) {
                errorDiv.style.display = 'none';
                this.style.border = '1px solid #cccccc';
            } else {
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = 'Ingrese E-mail valido';
                this.style.border = '1px solid red';
                errorDiv.style.border = '1px solid red'
            }
        }

        calculate.addEventListener('click', calcSum);

        oneDayPass.addEventListener('blur', showDays);
        twoDayPass.addEventListener('blur', showDays);
        threeDayPass.addEventListener('blur', showDays);

        name.addEventListener('blur', validateFields);
        lastname.addEventListener('blur', validateFields);
        email.addEventListener('blur', validateFields);
        email.addEventListener('blur', validateEmail);

    });
})();
