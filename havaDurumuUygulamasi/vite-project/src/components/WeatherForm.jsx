import React, { useState } from "react";
import axios from "axios";

function WeatherForm({ onWeatherData }) {
    const [city, setCity] = useState("");
    const [error, setError] = useState("");

    const fetchWeatherData = async () => {
        try {
            const API_KEY = "6701ec54031f00d4e86f385871328bea";
            const response = await axios.get(
                `https://api.openweathermap.org/data/2.5/weather?q=${city},TR&appid=${API_KEY}&units=metric`
            );
            onWeatherData(response.data);
            setError("");
        } catch (err) {
            setError("Hava durumu bilgisi alınamadı. Şehir adını kontrol edin.");
        }
    };

    const handleSubmit = (e) => {
        e.preventDefault();
        fetchWeatherData();
    };

    return (
        <div>
            <form onSubmit={handleSubmit}>
                <input
                    type="text"
                    value={city}
                    onChange={(e) => setCity(e.target.value)}
                    placeholder="Şehir adı girin"
                />
                <button type="submit">Hava Durumunu Getir</button>
            </form>
            {error && <p style={{ color: "red" }}>{error}</p>}
        </div>
    );
}

export default WeatherForm;
