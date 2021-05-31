let submitbtn = document.getElementById("email-submit");
let email = document.emailform.email;
let checkbox = document.getElementById("agree");
let emailerr = document.getElementById("email-error")
let checkboxerr = document.getElementById("checkbox-error")
submitbtn.disabled = true
function valEmail () {
    let re = /^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
    let x=re.test(email.value);
    //email.innerHTML= emailerr;
    if(!x)
    { emailerr.innerHTML ="Please provide a valid e-mail address (from js)"; console.log(email.length);
    }else if (x){
        submitbtn.disabled = false; emailerr.innerHTML =""}
}


function validate() {

    let forbiddenDomains = ["co"];
    let splitEmail = email.split('.');
    //console.log(checkbox.checked)
    
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
    
    if(splitEmail.contains(forbiddenDomains[0])) {
        emailerr.innerHTML ="We are not accepting subscriptions from Colombia emails (from js)";
    return false;
    }
    if(!checkbox.checked){
     checkboxerr.innerHTML = "You must accept the terms and conditions (from js)";
 return false;}
}}
