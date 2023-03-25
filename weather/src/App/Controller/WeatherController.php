<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Services\GetWeatherService;


class WeatherController extends AbstractController {
    
    public function __construct(
        private GetWeatherService $getWeatherService
    ) {
        
    }

    public function index() : Response 
    {
         return $this->render('weather/index.html.twig');
    }
    
    public function GetWeather() : Response 
    {
         $this->getWeatherService->getWeather();
    }
}
