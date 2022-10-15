// Your web app's Firebase configuration
var firebaseConfig = {
    apiKey: "AIzaSyC708W40Mivm4vkTlEbCW4iiNrLgtDkqho",
    authDomain: "pagcarrito-4ca82.firebaseapp.com",
    databaseURL: "https://pagcarrito-4ca82-default-rtdb.firebaseio.com",
    projectId: "pagcarrito-4ca82",
    storageBucket: "pagcarrito-4ca82.appspot.com",
    messagingSenderId: "260258023294",
    appId: "1:260258023294:web:c75cdf417c9d4408e8152f"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  const db = firebase.database();
  variables = db.ref().child('medidas');
  bodyVariables = $('#bodyVariables').val();
  //console.log(bodyVariables);  
  
  
  function mostrarVariable({temperatura, voltaje, corriente, potencia, angular, lineal}){
    return `
    <td class="bg-ro">${temperatura}</td>
    <td class="bg-rc">${voltaje}</td>
    <td class="bg-ro">${corriente}</td>
    <td class="bg-rc">${potencia}</td>
    <td class="bg-ro">${angular}</td>
    <td class="bg-rc">${lineal}</td>
    `
  };
  //CHILD_ADDED
  variables.on('child_added', data =>{
    let tr = document.createElement('tr')
    tr.id = data.key
    tr.innerHTML = mostrarVariable(data.val())
    document.getElementById('bodyVariables').appendChild(tr)
  });
  //CHILD_CHANGED
  variables.on('child_changed', data =>{
    let nodoEditado = document.getElementById(data.key)
    nodoEditado.innerHTML = mostrarVariable(data.val())
  });
  