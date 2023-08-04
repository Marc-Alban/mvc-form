
// Fonction pour récupérer la liste des villes françaises par leur nom
function getCitiesByName(name, data = null) {
  // Envoi de la requête HTTP GET à l'API GeoNames
  const xhr = new XMLHttpRequest();
  //  xhr.open('GET', `https://secure.geonames.org/searchJSON?q=${name}&formatted=true&country=FR&username=mmillet`);
   xhr.open('GET', `https://secure.geonames.org/searchJSON?name_equals=${name}&country=FR&username=mmillet`);
  xhr.onload = function() {
    if (xhr.status === 200 && name.length >= 3) {
      // Récupération de la réponse de l'API
      const response = JSON.parse(xhr.responseText);
      // Récupération de la liste des villes
      const cities = response.geonames.map(x => x.name);
      // Mise à jour de la liste des villes dans le DOM
      updateCityList(cities, data);
    }
  };
  xhr.send();
}

// Fonction pour mettre à jour la liste des villes dans le DOM
function updateCityList(cities, data = null) {
  // Effacement de la liste actuelle
  data.innerHTML = '';
  // Ajout de chaque ville dans la liste
  for (let city of cities) {
    const li = document.createElement('li');
    li.innerHTML = city;
    data.appendChild(li);
  }
}

// Fonction pour récupérer la liste des villes françaises par leur code postal
function getCitiesByZipCode(zipCode, resultsList) {
  // Envoi de la requête HTTP GET à l'API GeoNames
  const xhr = new XMLHttpRequest();
  xhr.open('GET', `https://secure.geonames.org/postalCodeSearchJSON?postalcode=${zipCode}&country=FR&username=mmillet`);
  xhr.onload = function() {
    if (xhr.status === 200 && zipCode.length >= 3) {
      // Récupération de la réponse de l'API
      const response = JSON.parse(xhr.responseText);
      // Récupération de la liste des villes
      const cities = response.postalCodes.map(x => x.placeName);
      // Mise à jour de la liste des villes dans le DOM
      updateCityList(cities, resultsList);
    }
  };
  xhr.send();
}






//----------------------------------------------//
const input = document.getElementById("civilityCity");
const cityList = document.getElementById("city-list");
// Gestionnaire d'évènement pour l'input de nom de ville
input.addEventListener('input', function() {
  // Récupération de la valeur de l'input
  const name = input.value;
  // Si la valeur de l'input est vide, on vide la liste des villes
  if (name.length === 0) {
    cityList.innerHTML = '';
  }
  // Sinon, on récupère la liste
  else {
    // Appel de la fonction pour récupérer la liste des villes
    getCitiesByName(name, cityList);
    }
    });
 // Gestionnaire d'évènement pour les éléments de la liste de villes
 cityList.addEventListener('click', function(event) {
  // Récupération de la ville sélectionnée
  const city = event.target.innerHTML;
  // Mise à jour de l'input de ville avec la ville sélectionnée
  input.value = city;
  // Effacement de la liste
  cityList.innerHTML = '';
  });
  //----------------------------------------------//
const cityListCo = document.getElementById("city-list-co");
const inputCo = document.getElementById("civilityCityCo");
// Gestionnaire d'évènement pour l'input de nom de ville
inputCo.addEventListener('input', function() {
  // Récupération de la valeur de l'input
  const nameCo = inputCo.value;
  // Si la valeur de l'input est vide, on vide la liste des villes
  if (nameCo.length === 0) {
    cityListCo.innerHTML = '';
  }
  // Sinon, on récupère la liste
  else {
    // Appel de la fonction pour récupérer la liste des villes
    getCitiesByName(nameCo, cityListCo);
    }
    });
 // Gestionnaire d'évènement pour les éléments de la liste de villes
 cityListCo.addEventListener('click', function(event) {
  // Récupération de la ville sélectionnée
  const cityCo = event.target.innerHTML;
  // Mise à jour de l'input de ville avec la ville sélectionnée
  inputCo.value = cityCo;
  // Effacement de la liste
  cityListCo.innerHTML = '';
  });
  //----------------------------------------------//
  const zipCodeInput = document.getElementById('zipCodeInput');
  const resultsList = document.getElementById('resultsList');
  const cityInput = document.getElementById('cityInput');
    // Gestionnaire d'évènement pour l'input de code postal
    zipCodeInput.addEventListener('input', function() {
    // Récupération de la valeur de l'input
    const zipCode = zipCodeInput.value;
    // Si la valeur de l'input est vide, on vide la liste des villes
    if (zipCode.length === 0) {
      resultsList.innerHTML = '';
    }
    // Sinon, on récupère la liste
    else {
    // Appel de la fonction pour récupérer la liste des villes par code postal
    getCitiesByZipCode(zipCode, resultsList);
    }
    });
    // Gestionnaire d'évènement pour les éléments de la liste de villes par code postal
    resultsList.addEventListener('click', function(event) {
    // Récupération de la ville sélectionnée
    const cityCode = event.target.innerHTML;
    const zipCode = zipCodeInput.value;

    // Mise à jour de l'input de ville avec la ville sélectionnée
    zipCodeInput.value = zipCode;
    cityInput.value = cityCode;
    // Effacement de la liste
    resultsList.innerHTML = '';
    });


    function jsonp(url, callback) {
      var callbackName = 'jsonp_callback_' + Math.round(100000 * Math.random());
      window[callbackName] = function(data) {
        delete window[callbackName];
        document.body.removeChild(script);
        callback(data);
      };
    
      var script = document.createElement('script');
      script.src = url + (url.indexOf('?') >= 0 ? '&' : '?') + 'callback=' + callbackName;
      document.body.appendChild(script);
    }
