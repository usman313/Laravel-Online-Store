// Shipping bag close button function
function closeBagDiv(){
    document.getElementById('shoppingBag').style.display = "none";
}

// Toggle Bag Button on Product Divs
function viewBagButton(mouseState, buttonId){
    if(mouseState == true){
        document.getElementById(buttonId).style.display = "block";
    }else if(mouseState == false){
        document.getElementById(buttonId).style.display = "none";
    }
}
