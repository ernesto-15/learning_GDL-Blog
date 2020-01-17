(function () {
    'use strict';

    document.addEventListener('DOMContentLoaded', () => {
        console.log('object');

        var map = L.map('map').setView([-12.074522, 284.799474], 18);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([-12.074522, 284.799474]).addTo(map)
            .bindPopup('GDL Webcamp 2020.<br> Boletos ya disponibles!!')
            .openPopup();
    });
})();