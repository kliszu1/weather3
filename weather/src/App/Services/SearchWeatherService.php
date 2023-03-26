<?php

namespace App\Services;

use App\Hydrator\SearchWeatherHydrator;
use App\Services\WeatherStrategy;

class SearchWeatherService {

    public function __construct(
            private SearchWeatherHydrator $searchWeatherHydrator,
            private WeatherStrategy $weatherStrategy
    ) {
        
    }

    public function searchWeather(array $dataToSerach) {
        try {
            $searchWeather = $this->searchWeatherHydrator->hydrate($dataToSerach);
            $weatherService = $this->weatherStrategy->getService($searchWeather->getService());

            dump($weatherService);
        } catch (Exception $ex) {
            
        }
    }

}
