import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

function checkSubregion(pais) {
    return pais.subregion === 'South America';
}

var config = {
    method: 'get',
    url: 'https://restcountries.com/v3.1/region/americas',
    headers: { }
};

axios(config)
.then(function (response) {
    let paises = response.data;
    let paisesSurAmerica = paises.filter(checkSubregion);
    console.log(JSON.stringify(paisesSurAmerica));
    console.log("Hola");
})
.catch(function (error) {
    console.log(error);
});
