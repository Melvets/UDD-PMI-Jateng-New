// Toggle Class Active
const navbarNav = document.querySelector('.navbar-nav_');

// ketika hamburger diklik
document.querySelector("#hamburger-menu").onclick = () => {
  navbarNav.classList.toggle('active');
};

// klik diluar sidebar untuk menghilangkan nav
const hamburger = document.querySelector('#hamburger-menu');

document.addEventListener('click', function(e){
    if(!hamburger.contains(e.target) && !navbarNav.contains(e.target)){
        navbarNav.classList.remove('active');
    }
});

// Leaflet
const map = L.map('map').setView([-7.331018976992324, 110.50789885473407], 8);

const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
}).addTo(map);

var markerCustom = L.icon({
    iconUrl: "/img/icon/location-dot-solid.svg",

    iconSize:     [20, 100], // size of the icon
    popupAnchor:  [0, -15] // point from which the popup should open relative to the iconAnchor
});

const pmijateng = L.marker([-7.03033788795581, 110.45621749202625], { icon: markerCustom }).addTo(map)
    .bindPopup('<b>UDD PMI Provinsi Jawa Tengah</b>');

const pmitegal = L.marker([-6.884972015249584, 109.13373196441772], { icon: markerCustom }).addTo(map)
    .bindPopup('<b>UDD PMI Kota Tegal</b>');

const pmikebumen = L.marker([-7.6684448325190795, 109.66382567600652], { icon: markerCustom }).addTo(map)
    .bindPopup('<b>UDD PMI Kota Tegal</b>');