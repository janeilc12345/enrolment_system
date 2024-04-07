let inventory = [];

function addProduct() {
    const productName = document.getElementById('productName').value;
    const price = document.getElementById('price').value;
    const quantity = document.getElementById('quantity').value;

    const product = {
        id: inventory.length + 1,
        name: productName,
        price: price,
        quantity: quantity,
    };

    inventory.push(product);
    displayInventory();
}

function displayInventory() {
    const tableBody = document.getElementById('inventoryBody');
    tableBody.innerHTML = '';

    inventory.forEach(product => {
        const row = `<tr>
                        <td>${product.id}</td>
                        <td>${product.name}</td>
                        <td>${product.price}</td>
                        <td>${product.quantity}</td>
                        <td><button onclick="addToCart(${product.id})">Add to Cart</button></td>
                    </tr>`;
        tableBody.innerHTML += row;
    });
}

let cart = [];

function addToCart(productId) {
    const productToAdd = inventory.find(product => product.id === productId);
    if (productToAdd) {
        const quantityToBuy = parseInt(prompt("Enter quantity to buy:", 1));
        if (quantityToBuy > 0 && quantityToBuy <= productToAdd.quantity) {
            const productInCart = { ...productToAdd };
            productInCart.quantity = quantityToBuy;
            cart.push(productInCart);
            displayCart();
        } else {
            alert("Invalid quantity!");
        }
    }
}

function displayCart() {
    const tableBody = document.getElementById('cartBody');
    tableBody.innerHTML = '';

    let totalCartPrice = 0; // Variable to store total price of all products in cart

    cart.forEach(product => {
        const total = product.quantity * product.price;
        totalCartPrice += total; // Accumulate total price of each product
        const row = `<tr>
                        <td>${product.name}</td>
                        <td>${product.price}</td>
                        <td>${product.quantity}</td>
                        <td>${total}</td>
                    </tr>`;
        tableBody.innerHTML += row;
    });

    // Add row for total price
    const totalRow = `<tr>
                        <td colspan="3"><b>Total:</b></td>
                        <td><b>${totalCartPrice}</b></td>
                    </tr>`;
    tableBody.innerHTML += totalRow;
}

function buyProducts() {
    cart.forEach(cartProduct => {
        inventory.forEach(invProduct => {
            if (cartProduct.id === invProduct.id) {
                if (cartProduct.quantity > 0 && cartProduct.quantity <= invProduct.quantity) {
                    invProduct.quantity -= cartProduct.quantity;
                } else {
                    alert("Invalid quantity to buy!");
                    return;
                }
            }
        });
    });
    displayInventory();
    cart = [];
    displayCart();
}