//Get Data
const firstInput=document.querySelector("#firstName");
const lastInput=document.querySelector("#lastName");
const address=document.querySelector("#address");
const phone=document.querySelector("#phoneNumber");
const messageInput=document.querySelector("#message");
const success=document.querySelector("#success");
const errorNodes=document.querySelectorAll(".error");

// Validate data
function validateForm() {
    clearMessages();

    if(firstInput.value.length<1) {
        errorNodes[0].innerText= "Name cannot be blank";
        firstInput.classList.add("error-border");
    }
    if(lastInput.value.length<1) {
        errorNodes[1].innerText= "Name cannot be blank";
        lastInput.classList.add("error-border");
    }
    if(address.value.length<1) {
        errorNodes[2].innerText= "Please enter a address";
        address.classList.add("error-border");
    }
    if(stateSelection()=="Null") {
        errorNodes[3].innerText= "Please Select a State";
    }
    if(!validatePhoneNumber(phone.value)) {
        errorNodes[4].innerText= "Please enter a phone number";
        phone.classList.add("error-border");
    }
    if(messageInput.value.length<1) {
        errorNodes[5].innerText= "Please enter a message";
        messageInput.classList.add("error-border");
        var errorFlag = true;
    }

    if(!errorFlag) {
        success.innerText= "Submitted";
    }

}

// Clear error/ Success messages
function clearMessages() {
    for (let i=0; i<errorNodes.length;i++) {
        errorNodes[i].innerText="";
    }
    firstInput.classList.remove("error-border");
    lastInput.classList.remove("error-border");
    messageInput.classList.remove("error-border");
    address.classList.remove("error-border");
    phone.classList.remove("error-border");
} 

// Phone number validation
function validatePhoneNumber(input_str) {
    var re = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    return re.test(input_str);
  }

// State Value
function stateSelection () {
    stateValue=document.getElementById("state").value;
    return stateValue;
}