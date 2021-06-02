let submitbtn = document.getElementById("email-submit");
let email = document.emailform.email;
let email2 = document.getElementById("email-input");
let checkbox = document.getElementById("agree");
let emailerr = document.getElementById("email-error")
let checkboxerr = document.getElementById("checkbox-error")
submitbtn.disabled = true

function valEmail () {
    let re = /^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
    let x=re.test(email.value);
    let forbiddenDomains = ["co"];
    let splitEmail = email.value.split('.');
    console.log("email stauts is", email.value)
    if(email.value== ""){
        emailerr.innerHTML ="Email address is required (from js)"}
    else if(email!=="" && !x)
    { emailerr.innerHTML ="Please provide a valid e-mail address (from js)"}
    else if(splitEmail.includes(forbiddenDomains[0])) {
        emailerr.innerHTML ="We are not accepting subscriptions from Colombia emails (from js)";
    }else if (x && !splitEmail.includes(forbiddenDomains[0])){
        submitbtn.disabled = false; emailerr.innerHTML =""}
}

function valCheckbox () {
    console.log(checkbox.checked)
    if(!checkbox.checked){
        checkboxerr.innerHTML = "You must accept the terms and conditions (from js)";
    }else if(checkbox.checked) {
        checkboxerr.innerHTML = "";
    }
}


function validate() {
    let forbiddenDomains = ["co"];
    let splitEmail = email.split('.');
    
 if(email==""){
    emailerr.innerHTML ="Email address is required (from js)";
 return false;
 }else{
    let re = /^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
    let x=re.test(email);
    if(x){
    }else{
        emailerr.innerHTML ="Please provide a valid e-mail address (from js)";
    return false;
    } 
    
    if(splitEmail.includes(forbiddenDomains[0])) {
        emailerr.innerHTML ="We are not accepting subscriptions from Colombia emails (from js)";
    return false;
    }
    if(!checkbox.checked){
     checkboxerr.innerHTML = "You must accept the terms and conditions (from js)";
 return false;}
}}


