import React from "react";

function WeatherDisplay({ data }) {
    if (!data) {
        return null;
    }

    return (
        <div className="weather-display">
            <h2>{data.name}, {data.sys.country}</h2>
            <p>Sıcaklık: {data.main.temp}°C</p>
            <p>Nem: {data.main.humidity}%</p>
            <p>Rüzgar Hızı: {data.wind.speed} m/s</p>
            <p>Durum: {data.weather[0].description}</p>
        </div>
    );
}

export default WeatherDisplay;
