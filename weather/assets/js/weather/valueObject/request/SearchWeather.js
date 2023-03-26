export class SearchWeather {
    constructor(service, city) {
        if (city.length === 0) {
            throw new Error('Nazwa miasta nie moze być pusta.');
        }

        if (city.service === 0) {
            throw new Error('Prosze wybrać serwis.');
        }

        this._service = service;
        this._city = city;
    }

    get service() {
        return this._service;
    }

    get city() {
        return this._city;
    }
}