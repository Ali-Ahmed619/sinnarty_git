// ============================================================
// Smart Fishing Assistant — Spot Page Logic
// Real weather data: Open-Meteo API (no key required)
// Real location/map: OpenStreetMap tiles via Leaflet.js
// ============================================================

// Real-world coordinates for Wadi El Rayan Lakes, Faiyum, Egypt
const SPOT = {
  name: "Lake Nasser – Wadi El Rayan",
  lat: 29.2010,
  lon: 30.4820
};

// Map WMO weather codes (used by Open-Meteo) to an emoji + label
const WEATHER_CODES = {
  0: { icon: "☀️", label: "Clear sky" },
  1: { icon: "🌤️", label: "Mainly clear" },
  2: { icon: "⛅", label: "Partly cloudy" },
  3: { icon: "☁️", label: "Overcast" },
  45: { icon: "🌫️", label: "Fog" },
  48: { icon: "🌫️", label: "Fog" },
  51: { icon: "🌦️", label: "Light drizzle" },
  61: { icon: "🌧️", label: "Rain" },
  63: { icon: "🌧️", label: "Rain" },
  65: { icon: "🌧️", label: "Heavy rain" },
  80: { icon: "🌧️", label: "Rain showers" },
  95: { icon: "⛈️", label: "Thunderstorm" }
};

async function loadWeather() {
  const tempEl = document.getElementById("weatherTemp");
  const iconEl = document.getElementById("weatherIcon");
  const windEl = document.getElementById("windValue");
  const humidityEl = document.getElementById("humidityValue");
  const updatedEl = document.getElementById("weatherUpdated");

  const url = `https://api.open-meteo.com/v1/forecast?latitude=${SPOT.lat}&longitude=${SPOT.lon}&current=temperature_2m,relative_humidity_2m,wind_speed_10m,weather_code&timezone=auto`;

  try {
    const res = await fetch(url);
    if (!res.ok) throw new Error("Weather request failed");
    const data = await res.json();
    const current = data.current;

    const code = current.weather_code;
    const info = WEATHER_CODES[code] || { icon: "🌡️", label: "—" };

    tempEl.textContent = `${Math.round(current.temperature_2m)}°C`;
    iconEl.textContent = info.icon;
    windEl.textContent = `${Math.round(current.wind_speed_10m)} km/h`;
    humidityEl.textContent = `${Math.round(current.relative_humidity_2m)}%`;

    const time = new Date(current.time);
    updatedEl.textContent = `Live · updated ${time.toLocaleTimeString([], { hour: "2-digit", minute: "2-digit" })}`;
  } catch (err) {
    tempEl.textContent = "N/A";
    iconEl.textContent = "⚠️";
    windEl.textContent = "—";
    humidityEl.textContent = "—";
    updatedEl.textContent = "Couldn't load live weather right now.";
    console.error("Weather fetch error:", err);
  }
}

function loadMap() {
  const map = L.map("map", {
    zoomControl: false,
    attributionControl: false,
    scrollWheelZoom: false
  }).setView([SPOT.lat, SPOT.lon], 11);

  L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
    maxZoom: 18
  }).addTo(map);

  L.marker([SPOT.lat, SPOT.lon])
    .addTo(map)
    .bindPopup(SPOT.name);

  const openMapsLink = document.getElementById("openInMapsLink");
  openMapsLink.href = `https://www.google.com/maps?q=${SPOT.lat},${SPOT.lon}`;
}

document.addEventListener("DOMContentLoaded", () => {
  loadWeather();
  loadMap();

  // Refresh weather every 10 minutes so the reading stays live
  setInterval(loadWeather, 10 * 60 * 1000);
});