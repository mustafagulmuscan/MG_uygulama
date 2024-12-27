import React, { useState } from "react";
import WeatherForm from "./components/WeatherForm";
import WeatherDisplay from "./components/WeatherDisplay";
import AboutModal from "./components/AboutModal";
import "./App.css";

function App() {
  const [weatherData, setWeatherData] = useState(null);
  const [error, setError] = useState(null);
  const [background, setBackground] = useState("default");

  const handleWeatherData = (data) => {
    if (data) {
      setWeatherData(data);
      setError(null);
      if (data.weather[0].main.toLowerCase().includes("rain")) {
        setBackground("rain");
      } else if (data.weather[0].main.toLowerCase().includes("clear")) {
        setBackground("clear");
      } else {
        setBackground("cloudy");
      }
    } else {
      setWeatherData(null);
      setError("Geçerli bir şehir ismi girin!");
    }
  };

  return (
    <div className={`app-container ${background}`}>
      <div className="content">
        <h1>Hava Durumu Uygulaması</h1>
        <WeatherForm onWeatherData={handleWeatherData} />
        {error ? <p className="error">{error}</p> : <WeatherDisplay data={weatherData} />}
        <AboutModal />
      </div>
    </div>
  );
}

export default App;
