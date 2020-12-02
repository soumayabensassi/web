function checkEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function test() {


    var nom = f.name.value;
    var numtel = f.number.value;
    var msg = f.msg.value;
    var email = document.getElementById("email").value;


    if ((nom[0] == nom[0].toLowerCase())) {
        alert('La premiere lettre du nom en majuscule ');
    }
    if (numtel.length != 8) {
        alert('Le numéro de téléphone doit contenir 8 chiffres');

    }
    if (msg.length < 8) {
        alert('Message trés court');

    }
    if (checkEmail(email)) {

    } else {
        alert('Adresse e-mail non valide');
    }
}


/*-------------------------------------------------controle de saise de formulaire de passez un rendez-vous---------------------------------------------*/


function verif_rendezvous() {
    var nom = document.querySelector('#nom').value;
    var prenom = document.querySelector('#prenom').value;
    var date = document.querySelector('#date').value;
    var email = document.querySelector('#email').value;
    var time = document.querySelector('#time').value;
    var appointmentfor = document.querySelector('#appointmentfor').value;
    var erreur = true;




    if (nom.charAt(0) < 'A' || nom.charAt(0) > 'Z') {
        alert("Le nom doit commencer par une lettre Majuscule ");
        erreur = false;

    }
    if (prenom.charAt(0) < 'A' || prenom.charAt(0) > 'Z') {
        alert("Le prenom doit commencer par une lettre Majuscule ");
        erreur = false;
    }
    if (date === "") {
        alert("La date est obligatoire ");
        erreur = false;
    } else {
        var today = new Date();
        date = new Date(date);
        if (today.getFullYear() > date.getFullYear()) {
            alert("date n'est pas validé ");
            erreur = false;
        } else if (today.getMonth() - today.getMonth() > 2) {
            alert("tu doix choisir une date au max aprés 2 moix de la date d'aujourdhui");
            erreur = false;
        }
    }
    if (time === 'select') {
        alert("Veuillez indiquer l'heure");
        erreur = false;
    }
    if (appointmentfor === 'Choose Department') {
        alert("Veuillez indiquer le doctor ");
        erreur = false;
    }

    if (erreur === true) {
        var msg = "vous avez pris un rendez-vous avec succes " + nom + " " + prenom;

        alert(msg);
    }
    if (checkEmail(email)) {

    } else {
        alert('Adresse e-mail non valide');
    }
}