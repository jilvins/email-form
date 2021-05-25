const email = document.getElementById("email-input")
const checkbox = document.getElementById("agree")
const form = document.getElementById("form")
const errorMessage = document.getElementById("error")
const sbmbutton = document.getElementById("email-submit")

const formContainer = document.getElementById("subscription-form")
const submitedContainer = document.getElementById("submited-form")

const pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
const patternex = /^([\w.-]+)@(\[(\d{1,3}\.){3}|(?!co)(([a-zA-Z\d-]+\.)+))([a-zA-Z]{2,4}|\d{1,3})(\]?)$/;

sbmbutton.disabled= false;

function validate() {
    let email = document.forms["form"]["email"].value;
 if(email==""){
 alert("Please enter the email");
 return false;
 }else{
    let re = /^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
    let x=re.test(email);
    if(x){
    }else{
    alert("Email id not in correct format");
    return false;
    } 


}}