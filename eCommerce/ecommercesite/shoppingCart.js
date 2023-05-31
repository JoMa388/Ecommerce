let cart =[];
const shoppingCart=document.querySelector("#shoppingcart");
const products=document.querySelectorAll('.product');



function updateProductCart(product) {
    for(let i=0;i<cart.length;i++){
        if(cart[i].id==product.id){
            cart[i].count +=1;
            cart[i].price =cart[i].basePrice *cart[i].count;
            return;
        }
    }
    cart.push(product);
}

function updateCartHTML(){
    if(cart.length>0){
    let result=cart.map(product=>{
        return `
         <div class="card m-1">
            <h5 class="card-title text-center mt-3">${product.name}</h5>
            <div class="d-flex justify-content-between mb-5">
                <div class="ms-3">
                    <button class="btn shadow-none bg-dark text-light p-1 m-0 rounded-0" data-id='${product.id}'>-</button>
                    <span class="countOfProducts">${product.count}</span>
                    <button class="btn shadow-none bg-dark text-light p-1 m-0 rounded-0" data-id='${product.id}'>+</button>
                </div>
                <h5 id="price" class="card-text text-start me-3">$${product.price}</h5>
            </div>
        </div>
        `
    });
    shoppingCart.innerHTML=result.join('');
    console.log(cart);
    }
}
products.forEach(product => {
        product.addEventListener('click', (e) => {
            if (e.target.classList.contains('addCart')) {
                const productID = e.target.dataset.productId;
                const productName = product.querySelector("#productName").innerHTML;
                const productPrice = product.querySelector("#productPrice").innerHTML;
                let productToCart = {
                    name: productName,
                    id: productID,
                    price: +productPrice,
                    count: 1,
                    basePrice: +productPrice
                }
                updateProductCart(productToCart);
                updateCartHTML();
            }
        })
    });
