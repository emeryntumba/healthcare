import React from 'react';
import { createRoot } from 'react-dom/client';
import MapComponent from './components/MapComponent';

const el = document.getElementById('map-component');
if (el) {
  const root = createRoot(el);
  root.render(<MapComponent />);
}
