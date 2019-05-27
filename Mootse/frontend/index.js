const axios = require('axios');

/*************************************************
*
* Utiliser browserify pour transpiler le bundle.js
* commande :$ browserify index.js -o bundle.js
* (browserify doit être installé au niveau global, sinon il faut indiquer le chemin au niveau local)
*
**************************************************/

//À FAIRE : changer requete get en requet post et utiliser ça :

let ajaxConfig = {
  headers: {
      'Accept': 'application/json',
      'Content-Type': 'application/x-www-form-urlencoded',
      'Access-Control-Allow-Origin': '*',
      "Access-Control-Allow-Methods": "GET, POST, PATCH, PUT, DELETE, OPTIONS",
      "Access-Control-Allow-Headers": "Origin, Content-Type, X-Auth-Token, Access-Control-Allow-Headers"
  }
};

let loginBtn = document.getElementById("loginBtn");
let planning = document.getElementById("planning-table");
let loginVal = document.getElementById("loginVal");
let passwordVal = document.getElementById("passwordVal");

//section login du DOM, apparaît au départ tant que l'utilisateur n'est pas authentifié
let loginView = document.getElementById("loginView");
//section planning du DOM, remplace la section login quand l'utilisateur est authentifié
let planningView = document.getElementById("planningView");

//booleen pour controller si l'utilisateur est authentifié
let isAuth = false;

window.onload = function() {
  updateView();
}

document.addEventListener("keypress", function(e) {
  if (e.keyCode == 13) {
    logUser();
  }
});

loginBtn.onclick = function() {
  logUser();
}


function logUser() {

  let login = loginVal.value;
  let password = passwordVal.value;
  //axios.post("http://localhost/eclipse-workspace/workshop_tse_bibli/public/index.php",
  axios.post("http://51.75.126.56/workshop_TSE_bibli/public/index.php",
  'login='+login+'&password='+password, ajaxConfig)
        .then( (response) => {

          if (response.data.length > 0) {

            isAuth = true;
            updateView();
            window.scrollTo(0,0);
            populateTable(response);

          } else {
            isAuth = false;
            let error = document.getElementById("error");
            error.textContent = "Erreur identifiant/mot de passe";
            error.setAttribute("class", "alert alert-danger");
          }
        })
        .catch( (error) =>  {
          console.log(error);
        });
}

function populateTable(response) {
  planning.innerHTML = "";
  for (let i=0; i < response.data.length; i++) {
    let row = document.createElement("tr");
    let hour = document.createElement("td");
    let content = document.createElement("td");

    hour.textContent = "De " + response.data[i].hour_start + " à " + response.data[i].hour_end;
    hour.setAttribute("width", 200);
    hour.setAttribute("class", "hourCol");

    content.textContent = response.data[i].content;
    content.setAttribute("class", "contentCol");

    row.appendChild(hour);
    row.appendChild(content);
    planning.appendChild(row);
  }
}

function updateView() {
  if(!isAuth) {
    planningView.style.display = "none";
    loginView.style.display = "block";
    document.getElementById("profileNavItem").textContent = "You are not logged in.";
  } else {
    document.getElementById("profileNavItem").innerHTML = "Bonjour <strong>Theo !</strong> <img src='assets/picto-profile.png' alt='picto profil'>";
    planningView.style.display = "block";
    loginView.style.display = "none";
  }
}
