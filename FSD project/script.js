function addNewacField() {

  //  console.log("Adding new field");

  let newNode = document.createElement("input");
  newNode.classList.add("form-control");
  newNode.classList.add("acField");
  newNode.classList.add("mt-2");

  newNode.setAttribute("placeholder", "Enter here");


  let acOb = document.getElementById("ac");

  let acAddButtonOb = document.getElementById("acAddButton");

  acOb.insertBefore(newNode, acAddButtonOb );

}
function addNewlkField() {

  //  console.log("Adding new field");

  let newNode = document.createElement("input");
  newNode.classList.add("form-control");
  newNode.classList.add("lkField");
  newNode.classList.add("mt-2");

  newNode.setAttribute("placeholder", "Enter here");


  let lkOb = document.getElementById("lk");

  let lkAddButtonOb = document.getElementById("lkAddButton");

  lkOb.insertBefore(newNode, lkAddButtonOb );

}
function addNewhbField() {

  //  console.log("Adding new field");

  let newNode = document.createElement("input");
  newNode.classList.add("form-control");
  newNode.classList.add("hbField");
  newNode.classList.add("mt-2");

  newNode.setAttribute("placeholder", "Enter here");


  let hbOb = document.getElementById("hb");

  let hbAddButtonOb = document.getElementById("hbAddButton");

  hbOb.insertBefore(newNode, hbAddButtonOb );

}

function addNewpjField() {

  //  console.log("Adding new field");

  let newNode = document.createElement("textarea");
  newNode.classList.add("form-control");
  newNode.classList.add("pjField");
  newNode.classList.add("mt-2");

  newNode.setAttribute("placeholder", "Enter here");


  let pjOb = document.getElementById("pj");

  let pjAddButtonOb = document.getElementById("pjAddButton");

  pjOb.insertBefore(newNode, pjAddButtonOb );

}

function addNewedField() {

  //  console.log("Adding new field");

  let newNode = document.createElement("textarea");
  newNode.classList.add("form-control");
  newNode.classList.add("edField");
  newNode.classList.add("mt-2");

  newNode.setAttribute("placeholder", "Enter here");


  let edOb = document.getElementById("ed");

  let edAddButtonOb = document.getElementById("edAddButton");

  edOb.insertBefore(newNode, edAddButtonOb );

}

function addNewslField() {

  //  console.log("Adding new field");

  let newNode = document.createElement("input");
  newNode.classList.add("form-control");
  newNode.classList.add("slField");
  newNode.classList.add("mt-2");

  newNode.setAttribute("placeholder", "Enter here");


  let slOb = document.getElementById("sl");

  let slAddButtonOb = document.getElementById("slAddButton");

  slOb.insertBefore(newNode, slAddButtonOb );

}

function addNewskField() {

  //  console.log("Adding new field");

  let newNode = document.createElement("input");
  newNode.classList.add("form-control");
  newNode.classList.add("skField");
  newNode.classList.add("mt-2");

  newNode.setAttribute("placeholder", "Enter here");


  let skOb = document.getElementById("sk");

  let skAddButtonOb = document.getElementById("skAddButton");

  skOb.insertBefore(newNode, skAddButtonOb );

}
function addNewcerField() {

  //  console.log("Adding new field");

  let newNode = document.createElement("input");
  newNode.classList.add("form-control");
  newNode.classList.add("cerField");
  newNode.classList.add("mt-2");

  newNode.setAttribute("placeholder", "Enter here");


  let cerOb = document.getElementById("cer");

  let cerAddButtonOb = document.getElementById("cerAddButton");

  cerOb.insertBefore(newNode, cerAddButtonOb );

}

function addNewilField() {

  //  console.log("Adding new field");

  let newNode = document.createElement("input");
  newNode.classList.add("form-control");
  newNode.classList.add("ilField");
  newNode.classList.add("mt-2");

  newNode.setAttribute("placeholder", "Enter here");


  let ilOb = document.getElementById("il");

  let ilAddButtonOb = document.getElementById("ilAddButton");

  ilOb.insertBefore(newNode, ilAddButtonOb );

}

//generating
function generateresume(){
  //console.log("Heyyyyyy Sweety  ^_^");

  //Name 

  let nameField= document.getElementById("nameField").value;

  let nameT = document.getElementById("nameT");

  nameT.innerHTML = nameField;

  //Phone 

  let phoneField = document.getElementById("phoneField").value;

  let phoneT = document.getElementById("phoneT");

  phoneT.innerHTML = phoneField;

  //Address

  let addressField = document.getElementById("addressField").value;

  let addressT = document.getElementById("addressT");

  addressT.innerHTML = addressField;

  //Email

  let objectiveField = document.getElementById("objectiveField").value;

  let objectiveT = document.getElementById("objectiveT");

  objectiveT.innerHTML = objectiveField;

  //Objective
  let emailField = document.getElementById("emailField").value;

  let emailT = document.getElementById("emailT");

  emailT.innerHTML = emailField;

  //For project Info

  let pjs = document.getElementsByClassName("pjField");

  let str = "";

  for(let e of pjs)
  {
    str = str+`<li> ${e.value} </li>`;
  }
  document.getElementById("pjT").innerHTML = str;

  //For Education Field

  let eds = document.getElementsByClassName("edField");

  let str1 = "";

  for(let e of eds) {
    str1 = str1 + `<li> ${e.value} </li>` ;
  }
  document.getElementById("acT").innerHTML = str1;

// for Skills 
let sks = document.getElementsByClassName("slField");

  let str2 = "";

  for(let e of sks) {
    str2 = str2 + `<li> ${e.value} </li>` ;
  }
  document.getElementById("skT").innerHTML = str2;

  // Certifications

  let cers = document.getElementsByClassName("cerField");

  let str3 = "";

  for(let e of cers) {
    str3 = str3 + `<li> ${e.value} </li>` ;
  }
  document.getElementById("cerT").innerHTML = str3;

  //

  let ils = document.getElementsByClassName("ilField");

  let str4 = "";

  for(let e of ils) {
    str4 = str4 + `<li> ${e.value} </li>` ;
  }
  document.getElementById("ilT").innerHTML = str4;

  // Achievements 

let acs = document.getElementsByClassName("acField");

  let str5 = "";

  for(let e of acs) {
    str5 = str5 + `<li> ${e.value} </li>` ;
  }
  document.getElementById("achievementT").innerHTML = str5;

  //Languages 

  let lks = document.getElementsByClassName("lkField");

  let str6 = "";

  for(let e of lks) {
    str6 = str6 + `<li> ${e.value} </li>` ;
  }
  document.getElementById("languageT").innerHTML = str6;

  //Hobbies

  let hobs = document.getElementsByClassName("hobField");

  let str7 = "";

  for(let e of acs) {
    str7 = str7 + `<li> ${e.value} </li>` ;
  }
  document.getElementById("hobbiesT").innerHTML = str7;

  document.getElementById('resume-form').style.display= "none";
  document.getElementById('cv-template').style.display = "block";

  //Image select

  let file = document.getElementById("imgField").files[0];

  console.log(file);

}

function printCV(){
  window.print();
}

