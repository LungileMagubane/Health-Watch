// src/App.jsx
import React from 'react';
import Map from './components/Map';
import { useTranslation } from 'react-i18next';

const App = () => {
  const { t } = useTranslation();

  return (
    <div>
      <h1>{t('HEALTH WATCH AI PLATFORM')}</h1>
      <Map />
    </div>
  );
};

export default App;
