import React from 'react';
import { createRoot } from 'react-dom/client';
import Map from './components/Map';
import 'leaflet/dist/leaflet.css';

const el = document.getElementById('map-root');
if (el) {
  const root = createRoot(el);
  root.render(<Map />);
}
