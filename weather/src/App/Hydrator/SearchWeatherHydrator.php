<?php

namespace App\Hydrator;

use App\ValueObject\SearchWeather;
use App\Enum\WeatherServicesEnum;

class SearchWeatherHydrator {

    public function hydrate(array $searchWeatherData): SearchWeather {

        return new SearchWeather(
                WeatherServicesEnum::getWeatherServiceEnum($searchWeatherData['_service']),
                $searchWeatherData['_city']
        );
    }

}
