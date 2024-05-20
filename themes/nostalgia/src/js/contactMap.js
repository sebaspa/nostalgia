export default class contactMap {
  constructor() {
    this.init();
  }

  init() {
    this.loadMap();
  }

  loadMap() {
    const map = L.map('contactMap').setView([8.97404759109255, -79.51632377485811], 16);
    const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 19,
      attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);
    const marker = L.marker([8.97404759109255, -79.51632377485811]).addTo(map)
      .bindPopup('<b>Nostalgia<br/>Design Studio</b>').openPopup();

  }

}
