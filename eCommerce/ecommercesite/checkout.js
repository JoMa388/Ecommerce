const payButton=document.querySelector("#paymentButton");
const shippingAddress=document.querySelector("#shipAddress");
const paymentForm =document.querySelector("#paymentForm");
const diffBilling =document.querySelector("#billingAddress2");

function showPayForm() {
    shippingAddress.classList.add('d-none');
    paymentForm.classList.remove('d-none');
}

document.addEventListener("click",function(e){
    if(e.target.id=="diffadd"){
        diffBilling.classList.remove('d-none');
    }
    else if(e.target.id=="sameadd"){
        diffBilling.classList.add('d-none');
    }
});