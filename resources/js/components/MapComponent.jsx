import React from 'react';
import { MapContainer, TileLayer, Marker, Popup } from 'react-leaflet';
import 'leaflet/dist/leaflet.css';

export default function MapComponent() {
  return (
    <div className="w-full h-72 rounded-2xl overflow-hidden border-4 border-green-500">
      <MapContainer center={[48.8566, 2.3522]} zoom={13} className="w-full h-full">
        <TileLayer
          url="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
        />
        <Marker position={[48.8566, 2.3522]}>
          <Popup>Hôpital ici</Popup>
        </Marker>
      </MapContainer>
    </div>
  );
}
