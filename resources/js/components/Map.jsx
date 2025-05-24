import { useEffect } from 'react';
import L from 'leaflet';
import 'leaflet/dist/leaflet.css';

export default function Map() {
  useEffect(() => {
    const map = L.map('map-container').setView([-4.325, 15.3222], 13); // <-- Kinshasa

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    return () => {
      map.remove();
    };
  }, []);

  return (
    <div id="map-container" style={{ height: '400px', width: '100%' }} />
  );
}
