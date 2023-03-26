export class SearchWeatherService {
    constructor(searchWeatherClient, searchWeatherHydrator, url, selectors) {
        this._searchWeatherClient = searchWeatherClient;
        this._searchWeatherHydrator = searchWeatherHydrator;
        this._url = url;
        this._selectors = selectors;

        this._weatherContnerElemet = document.querySelector(this._selectors.weatherContnerSelector);
        this._checkWeatherElement = document.querySelector(this._selectors.checkWeatherSelector);

        this._bindListeners();
    }

    _bindListeners() {
        this._checkWeatherElement.addEventListener("click", () => {
            this._searchWeather();
        });
    }

    _searchWeather() {
        let service = document.querySelector(".serviceType").value;
        let city = document.querySelector(".cityWeather").value;

        try {
            let request = this._searchWeatherHydrator.hydrate(city, service);
            this._searchWeatherClient.get(this._url, request);
        } catch (error) {
            alert(error);
        }
    }
}