import { SearchWeather } from '../valueObject/request/SearchWeather.js';

export class SearchWeatherHydrator {
    hydrate(city, service) {
        return new SearchWeather(
                service,
                city
                );
    }
}
