var form = document.getElementById("myForm");

    var nom = document.getElementById("nom");
    var filtrenom = new RegExp("^[A-Z]{1}[a-z]*$");
    
    var prénom = document.getElementById("prénom");
    var filtreprénom = new RegExp("^[A-Z]{1}[a-z]*$");
    
    var f = document.getElementById("femme");
    var m = document.getElementById("homme");
    
    var date_n = document.getElementById("date");
    var filtredate = new RegExp("^[0-9]{4}\-[0-9]{2}\-[0-9]{2}$");
    
    var cp = document.getElementById("code");
    var filtrecp = new RegExp("^[0-9]{5}$");
    
    var adresse = document.getElementById("adresse");
    //var filtreadresse = new RegExp("^[1-9]+ .* [0-9]{5} [A-Z]{1}[a-z]*$");
    
    var ville = document.getElementById("ville");
    
    var mail = document.getElementById("courriel"); 
    var filtremail = new RegExp("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z]+[.]{1}[a-z]{2,3}$");
    
    var question = document.getElementById("question"); 
    var filtrequestion = new RegExp("^.+$");

    var ti=document.getElementById("exampleCheck1");


form.addEventListener("submit", function verif(evenement)
{

    
   
// vérification du champ nom
if(filtrenom.test(nom.value) == false){
    evenement.preventDefault();
    document.getElementById("alert_nom").innerHTML = "Veuillez entrer un nom valide !";
    nom.focus();
    }
else document.getElementById("alert_nom").innerHTML = "";

// vérification du champ prénom
if(filtreprénom.test(prénom.value) == false){
    evenement.preventDefault();
    document.getElementById("alert_prénom").innerHTML = "Veuillez entrer un prenom valide !";
    prenom.focus();
}
else  document.getElementById("alert_prénom").innerHTML = "";

// vérification du champ code postal
if (filtrecp.test(cp.value) == false){
    evenement.preventDefault(); 
    document.getElementById("alert_cp").innerHTML = "Veuillez entrer un code postal valide à 5 chiffres !"; 
    cp.focus();
}
else document.getElementById("alert_cp").innerHTML = "";


// vérification du champ date

//alert("ta date :"+ date_n.value);

if (filtredate.test(date_n.value) == false){
    evenement.preventDefault(); 
    document.getElementById("alert_date").innerHTML = "Veuillez entrer une date de naissance format JJ/MM/AAAA !"; 
    date.focus();
}
else document.getElementById("alert_date").innerHTML = "";

if(filtremail.test(mail.value) == false){
    evenement.preventDefault();
    document.getElementById("alert_mail").innerHTML = "Entrez un mail valide !";
    mail.focus();
}
else {
    // alert("mail OK !!!");
    document.getElementById("alert_mail").innerHTML = "";
  }

if(filtrequestion.test(question.value) == false){
    evenement.preventDefault();
    document.getElementById("alert_question").innerHTML = "Entrez votre question !";
    question.focus();
}
else document.getElementById("alert_question").innerHTML = "";


if(ti.checked==false){
    evenement.preventDefault();
    document.getElementById("alert_accord").innerHTML = "Veuillez accepter le traitement informatique !";
}

});