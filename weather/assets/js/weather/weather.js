import '../../css/weather/weather.css';
import { SearchWeatherService } from './service/SearchWeatherService.js';
import { SearchWeatherClient } from './client/SearchWeatherClient.js';
import { SearchWeatherHydrator } from './hydrator/SearchWeatherHydrator.js';

new SearchWeatherService(
        new SearchWeatherClient(),
        new SearchWeatherHydrator(),
        'http://localhost:8000/index.php/weather/search',
        {
            weatherContnerSelector: '.weatherContner',
            checkWeatherSelector: '.checkWeather'
        }
);