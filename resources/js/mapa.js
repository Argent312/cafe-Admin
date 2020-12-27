var map = L.map('map').setView([19.15656, -96.116595], 16);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([19.15656, -96.116595]).addTo(map)
    .bindPopup('Cafetal.<br> Cafeteria.')
    .openPopup();