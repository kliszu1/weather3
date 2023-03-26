<?php

namespace App\ValueObject;

use App\Enum\WeatherServicesEnum;

class SearchWeather {
    
    public function __construct(
            private WeatherServicesEnum $service,
            private string $city
    ) {
        
    }
    
    public function getService(): WeatherServicesEnum {
        return $this->service;
    }

    public function getCity(): string {
        return $this->city;
    }
}
