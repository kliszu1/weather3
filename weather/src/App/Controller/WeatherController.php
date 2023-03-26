<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Services\SearchWeatherService;

class WeatherController extends AbstractController {

    public function __construct(
            private SearchWeatherService $searchWeatherService
    ) {
        
    }

    public function index(): Response {
        return $this->render('weather/index.html.twig');
    }

    public function searchWeather(): Response {
        $searchWeather = json_decode($_GET['request'], true);

        $this->searchWeatherService->searchWeather($searchWeather);

        return new Response();
    }

}
