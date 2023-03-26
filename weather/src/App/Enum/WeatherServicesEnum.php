<?php

namespace App\Enum;

enum WeatherServicesEnum: string {

    case OPEN_WEATHER = 'OPEN_WEATHER';
    case ACCU_WEATHER = 'ACCU_WEATHER';

    static public function getWeatherServiceEnum(string $weatherService): WeatherServicesEnum {
        switch ($weatherService) {
            case 'OPEN_WEATHER':
                return WeatherServicesEnum::OPEN_WEATHER;
                break;
            case 'ACCU_WEATHER':
                return WeatherServicesEnum::ACCU_WEATHER;
                break;
            default :
                throw new Exception('Service dont exist');
        }
    }
}
