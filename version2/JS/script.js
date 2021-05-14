function ActiverEnfants() {
  document.getElementById("enfants").classList.toggle("hidden");
}

document.getElementById("i-nom").focus();

var aEnfants = document.querySelector("[type=checkbox]");
aEnfants.checked = false;
aEnfants.addEventListener("click", ActiverEnfants);

var enf_count = 2;
function AjoutEnfant() {
	var nomEnf = document.querySelector("[name='nom-e"+(enf_count-1)+"']").value;
	var prenomEnf = document.querySelector("[name='prenom-e"+(enf_count-1)+"']").value;
	if (nomEnf.length>0 && prenomEnf.length>0) {
		var tr = document.createElement("tr");
		var td1 = document.createElement("td");
		tr.appendChild(td1);
		td1.appendChild(document.createTextNode("Enfant n°"+enf_count));
		var td2 = document.createElement("td");
		tr.appendChild(td2);
		var input1 = document.createElement("input");
		input1.type = "text";
		input1.name = "nom-e"+enf_count;
		td2.appendChild(input1);
		var td3 = document.createElement("td");
		tr.appendChild(td3);
		var input2 = document.createElement("input");
		input2.type = "text";
		input2.name = "prenom-e"+enf_count;
		td3.appendChild(input2);
		var td4 = document.createElement("td");
		tr.appendChild(td4);

		var table_enfants = document.querySelector("#enfants tbody");
		table_enfants.appendChild(tr);  

		enf_count++;
	} else {
		alert("Veuillez remplir les informations des autres enfants d'abord")
	}
}

var boutonAjoutEnfant = document.getElementById("add");
boutonAjoutEnfant.addEventListener("click", AjoutEnfant);

function VerifMail() {
	var mail1 = document.getElementById("i-mail1").value;
	var mail2 = document.getElementById("i-mail2").value;
	if (mail1 !== mail2) {
		alert("Adresse mail de confirmation différente");
		return false;
	} else {
		alert("Formulaire envoyé");
		return true
	}
}
var boutonEnvoyer = document.querySelector("[id=submit]");
boutonEnvoyer.addEventListener("click", VerifMail);

document.querySelector("#enfants tbody tr").deleteRow(-1);