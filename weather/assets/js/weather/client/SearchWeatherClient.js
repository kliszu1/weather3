import { axios } from '@bundled-es-modules/axios';

export class SearchWeatherClient {
    get(url, request) {

        console.log(request);

        axios.get(
            url,
            {params: {
                    request
                }
            })
            .then(function (response) {
                console.log(response);
            })
    }
}
