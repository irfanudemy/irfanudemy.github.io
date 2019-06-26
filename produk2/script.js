// All items in my online shop are saved in array
var myShopItems = [
    { name: "Gibson", price: 40000000 },
    { name: "Fender", price: 25000000 },
    { name: "Epiphone", price: 15000000 },
    { name: "Ibanez", price: 30000000 },
];

// Declaration a button order and a user input element
var buttonOrder = document.getElementById("enter");
var inputItem = document.getElementById("userinput");

var liIdDelete = 1;
var bid = 1;
var btnIdDelete = "a";

var price = 0;

// Adding even listener to order button
buttonOrder.addEventListener("click", addListAfterClick);
// Adding even listener to input user
inputItem.addEventListener("keydown", addListAfterKeyPress);

// count input length
function inputLength() {
    return inputItem.value.length;
}

function createListElement() {
    for (var i = 0; i < myShopItems.length; i++) {
        // Check each item in an array and lowercase the text
        if (myShopItems[i].name.toLowerCase() === inputItem.value.toLowerCase()) {

            // Create new <button> element
            var buttonChild = document.createElement("button");
            // Add classname to the button
            buttonChild.className = "btn btn-danger";

            // Create attribute
            // var att = document.createAttribute("onclick");
            // att.value = "deleteElement()";
            // buttonChild.setAttributeNode(att);

            // Create new node for button
            var newNode = document.createTextNode("Delete");
            // Append new node to the button
            buttonChild.appendChild(newNode);

            //--
            // Create new <li> element
            var liParent = document.createElement("li");
            // Add classname to the li
            liParent.className = "list-group-item d-flex justify-content-between list-group-item-dark";

            // Create new node for li
            var liNode = document.createTextNode(inputItem.value.toLowerCase());
            // Append new node to the li
            liParent.appendChild(liNode);

            //--
            // Append button to the li
            liParent.appendChild(buttonChild);

            // Find parent element
            var parent = document.getElementById("ol-list");
            // Appen li to the parent
            parent.appendChild(liParent);

            var parentRp = document.getElementById("para-rp");
            var childRp = document.getElementsByClassName("span-rp")[0];
            // This code creates a new <span> element:
            var paraRp = document.createElement("span");
            // Add a class to new <span> element
            paraRp.className = "span-rp";
            // Calculate the current result
            price += myShopItems[i].price;
            // This code creates a text node:
            var rpnode = document.createTextNode(price);
            // append the rpnode to the <span> element:
            paraRp.appendChild(rpnode);
            // Replace the element
            parentRp.replaceChild(paraRp, childRp);

            // Add id to <li> and <button> element
            liParent.id = liIdDelete;
            liIdDelete++;
            buttonChild.id = btnIdDelete + bid++

            // Add listener to delete buttton
            var btnDelete = document.getElementById(buttonChild.id);
            btnDelete.addEventListener("click", () => {
                var parent = document.getElementById("ol-list");
                var child = document.getElementById(liParent.id);
                // console.log(myShopItems[i].price);
                var parentRp = document.getElementById("para-rp");
                var childRp = document.getElementsByClassName("span-rp")[0];
                // This code creates a new <span> element:
                var paraRp = document.createElement("span");
                // Add a class to new <span> element
                paraRp.className = "span-rp";
                // Calculate the current result
                price -= myShopItems[i].price
                // This code creates a text node:
                var rpnode = document.createTextNode(price);
                // append the rpnode to the <span> element:
                paraRp.appendChild(rpnode);
                // Replace the element
                parentRp.replaceChild(paraRp, childRp);

                parent.removeChild(child);
                document.getElementById("enter").disabled = false;
                document.getElementById("userinput").disabled = false;
                // buttonOrder.setAttribute("disabled", false);
                // inputItem.setAttribute("disabled", false);
            });

            // If length equals 4, disabled button order and input item
            if (olChildrenLength() === 4) {
                buttonOrder.setAttribute("disabled", true);
                inputItem.setAttribute("disabled", true);
            }

            inputItem.value = "";
            return;
        }
    }
    alert("Incorrect item");
    inputItem.value = "";
    return;
}

// Function to get length of ol.children
function olChildrenLength() {
    return document.getElementById("ol-list").children.length;
}

// Do this function if button is clicked
function addListAfterClick() {
    // Do this statement if input length is equals 0 and do alert
    if (inputLength() === 0) {
        alert("Order is empty");
        return;
    }

    // If input length is greater than 0 and ol.children.length equals 0 do this statement
    if (inputLength() > 0 && olChildrenLength() === 0) {
        createListElement();
        return;
    }

    // If input length is greater than 0 and ol.children.length is less than 4
    // check current value of <li> element
    if (inputLength() > 0 && olChildrenLength() < 4) {
        for (var i = 0; i < olChildrenLength(); i++) {
            if (inputItem.value.toLowerCase()+"delete" === document.getElementById("ol-list").children[i].textContent.toLowerCase()) {
                alert("Double item not allowed!");
                inputItem.value = "";
                return;
            }
        }
        createListElement();
    }
}

function addListAfterKeyPress(e) {
    // Do this statement if input length is equals 0 and do alert
    if (inputLength() === 0 && (e.code === 'Enter')) {
        alert("Order is empty");
        return;
    }

    // If input length is greater than 0 and ol.children.length equals 0 do this statement
    if ((inputLength() > 0 && olChildrenLength() === 0) && (e.code === 'Enter')) {
        createListElement();
        return;
    }

    // If input length is greater than 0 and ol.children.length is less than 4
    // check current value of <li> element
    if ((inputLength() > 0 && olChildrenLength() < 4) && (e.code === 'Enter')) {
        for (var i = 0; i < olChildrenLength(); i++) {
            if (inputItem.value.toLowerCase()+"delete" === document.getElementById("ol-list").children[i].textContent.toLowerCase()) {
                alert("Double item not allowed!");
                inputItem.value = "";
                return;
            }
        }
        createListElement();
    }

    //if (inputLength() > 0 && (e.code === 'Enter')) createListElement();
}
