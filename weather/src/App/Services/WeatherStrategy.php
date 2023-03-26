<?php

namespace App\Services;

use App\Enum\WeatherServicesEnum;
use App\Services\WeatherServices\OpenWeatherService;
use App\Services\WeatherServices\AccuWeatherService;

class WeatherStrategy {
    
    public function getService(WeatherServicesEnum $service) : ?object
    {
        switch($service){
            case WeatherServicesEnum::OPEN_WEATHER:
                return new OpenWeatherService();
            break;
            case WeatherServicesEnum::ACCU_WEATHER;
                return new AccuWeatherService();
            break;
        }
    }
}
