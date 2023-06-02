
/********************************************** Form Validator **********************************************/
var gErrorMsg = "";


function validateForm(){
    "use strict"; 
    var isAllOK = false;
    gErrorMsg = ""; 
    var fnameOK = chkFName();
    var lnameOK = chkLName();
    var emailOK = chkEmail();
    var streetOK = chkStreetAdd();
    var cityOK = chkCity();
    var stateOK = chkState();
    var postcodeOK = chkPostCode();
    var phonenumOK = chkPhoneNo();

    if (fnameOK && lnameOK && emailOK && streetOK && cityOK && stateOK && postcodeOK && phonenumOK){
        isAllOK = true;
    }
    else{
        alert(gErrorMsg); 
        gErrorMsg = ""; 
        isAllOK = false;
    }

    if (isAllOK){
        var enquireOK = enqconfirm();
        if (!enquireOK){
            isAllOK = false;
        }
    }

    
    return isAllOK;
}

function chkFName(){
    var xname = document.getElementById("fname").value;
    var pattern = /^[a-zA-Z ]{1,25}$/;
    var nameOk = true;
    if ((xname.length == 0)){
        gErrorMsg = gErrorMsg + "Please enter your first name.\n";
        nameOk = false;
    }
    else{
        if (!pattern.test(xname)){
            gErrorMsg = gErrorMsg + "Please enter your first name with only contain alpha characters.\n";
            nameOk = false;
        }
    }
    return nameOk;
}

function chkLName(){
    var xname = document.getElementById("lname").value;
    var pattern = /^[a-zA-Z ]{1,25}$/;
    var nameOk = true;
    if ((xname.length == 0)){
        gErrorMsg = gErrorMsg + "Please enter your last name.\n";
        nameOk = false;
    }
    else{
        if (!pattern.test(xname)){
            gErrorMsg = gErrorMsg + "Please enter your last name with only contain alpha characters.\n";
            nameOk = false;
        }
    }
    return nameOk;
}

function chkEmail(){
    var email = document.getElementById("email");
    var result = false;
    var pattern = /[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-za-zA-Z0-9.-]{1,4}$/;
    if (pattern.test(email.value)){
        result = true;
    }
    else{
        result = false;
        gErrorMsg = gErrorMsg + "Please enter a valid email address.\n";
    }
    return result;
}

function chkStreetAdd(){
    var streetadd = document.getElementById("street").value;
    var streetOk = true;
    if ((streetadd.length == 0)){
        gErrorMsg = gErrorMsg + "Please enter your street address.\n";
        streetOk = false;
    }
    return streetOk;
}

function chkCity(){
    var city = document.getElementById("city").value;
    var cityOk = true;
    if ((city.length == 0)){
        gErrorMsg = gErrorMsg + "Please enter your city/town.\n";
        cityOk = false;
    }
    return cityOk;
}

function chkState(){
    var selected = false;
    var state = document.getElementById("state").value;
    if (state!=" --- State --- "){
        selected = true;
    }
    else{
        selected = false;
        gErrorMsg = gErrorMsg + "Please select a state.\n";
    }
    return selected;
}

function chkPostCode(){
    var postcode = document.getElementById("postcode").value;
    var pattern = /^[0-9]{5}$/;
    var postcodeOk = true;
    if ((postcode.length == 0)){
        gErrorMsg = gErrorMsg + "Please enter your postcode.\n";
        postcodeOk = false;
    }
    else{
        if (!pattern.test(postcode)){
            gErrorMsg = gErrorMsg + "Please enter your postcode with 5 numbers.\n";
            postcodeOk = false;
        }
    }
    return postcodeOk;
}

function chkPhoneNo(){
    var phone = document.getElementById("phoneNo").value;
    var pattern = /^[0-9]*$/;
    var phoneOk = true;
    if ((phone.length == 0)){
        gErrorMsg = gErrorMsg + "Please enter your phone number.\n";
        phoneOk = false;
    }
    else{
        if (!pattern.test(phone)){
            gErrorMsg = gErrorMsg + "Please enter your phone number with numbers.\n";
            phoneOk = false;
        }
    }
    return phoneOk;
}


/********************************************** Transfer Within Page **********************************************/
function transferData() {
    var product = document.getElementById("enquireabout").value;
    sessionStorage.product = product;
   
    return result;
}

function storeSub() {
    document.getElementById("enquireabout").selectedIndex = sessionStorage.productIndex;

    var product = document.getElementById("enquireabout").value;

    sessionStorage.subject = product;
    document.getElementById("subject").value = sessionStorage.subject;
}

function change() {
    var product = document.getElementById("enquireabout").value;
    sessionStorage.product = product;
    document.getElementById("subject").value = "RE: enquiry on " + sessionStorage.product;
}


/********************************************** Transfer Between Page **********************************************/
function storeitem(item_id, select_index) {
    sessionStorage.setItem("item_id", item_id);
    sessionStorage.setItem("select_index", select_index);
    window.location.replace("enquiry.php");
}
function displayitem() {
    document.getElementById("enquireabout").selectedIndex = parseInt(sessionStorage.getItem("select_index"));
    document.getElementById("subject").value = "RE: Enquiry on " + sessionStorage.getItem("item_id");
}


/********************************************** Product List **********************************************/
function stateList() {
    var select = document.getElementById("state");

    var options = [" --- State --- ", "Johor", "Kedah", "Kelantan", "Kuala Lumpur", "Labuan", "Malacca", "Negeri Sembilan", "Pahang", 
    "Penang", "Perak", "Perlis", "Putrajaya", "Sabah", "Sarawak", "Selangor", "Terengganu", "other"];

    for (var i = 0; i < options.length; i++) {
        var opt = options[i];
        var el = document.createElement("option");
        el.textContent = opt;
        el.value = opt;
        select.appendChild(el);
    }
}


function enqAboutRoomList() {
    var select = document.getElementById("enquireabout");

    var options = ["Room Details - Deluxe Sea View Room", "Room Details - Executive Suite", 
    "Room Details - Family Room", "Room Details - Presidential Suite"];

    for (var i = 0; i < options.length; i++) {
        var opt = options[i];
        var el = document.createElement("option");
        el.textContent = opt;
        el.value = opt;
        select.appendChild(el);
    }
}
function enqAboutFaciList() {
    var select = document.getElementById("enquireabout");

    var options = ["Facilities - Fitness Centre", "Facilities - Swimming Pools", 
    "Facilities - Private Beach and Water Activities", "Facilities - Kids Club"];

    for (var i = 0; i < options.length; i++) {
        var opt = options[i];
        var el = document.createElement("option");
        el.textContent = opt;
        el.value = opt;
        select.appendChild(el);
    }
}
function enqAboutFoodList() {
    var select = document.getElementById("enquireabout");

    var options = ["Food and Dining - Al-Fresco", "Food and Dining - Five Sails", 
    "Food and Dining - Tarik's Lobby Lounge", "Food and Dining - Muffinz Deli Cafe"];

    for (var i = 0; i < options.length; i++) {
        var opt = options[i];
        var el = document.createElement("option");
        el.textContent = opt;
        el.value = opt;
        select.appendChild(el);
    }
}
function enqAboutServicesList() {
    var select = document.getElementById("enquireabout");

    var options = ["Services and Convenience - Cash withdrawal", "Services and Convenience - Contactless Check-in/out", 
    "Services and Convenience - Currency Exchange", "Services and Convenience - Doorman", "Services and Convenience - Fire place", 
    "Services and Convenience - 24 hours front desk", "Services and Convenience - Gift/Souvenir shop", "Services and Convenience - Internet Access", 
    "Services and Convenience - Laundry service", "Services and Convenience - Multilanguage", "Services and Convenience - Taxi service", 
    "Services and Convenience - Wheel Chair Accessible"];

    for (var i = 0; i < options.length; i++) {
        var opt = options[i];
        var el = document.createElement("option");
        el.textContent = opt;
        el.value = opt;
        select.appendChild(el);
    }
}















function init() {
    var enqForm = document.getElementById("enqform");
    enqForm.onsubmit = validateForm;

    displayitem();
}


window.onload = init;