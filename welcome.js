let getHeaderWelcome = document.getElementById("welcome");
let newElement = document.createElement("p");
let date = new Date();
let currentHour = date.getHours();

let createMessage;

if (currentHour >= 4 && currentHour < 10) {
    createMessage = "Good morning!";
} else if (currentHour >= 10 && currentHour < 12) {
    createMessage = "Happy lunch time!";
} else if (currentHour >= 12 && currentHour < 18) {
    createMessage = "Good afternoon!";
} else if (currentHour >= 18 && currentHour < 22) {
    createMessage = "Have a good evening!";
} else if (currentHour >= 22 && currentHour < 4) {
    createMessage = "Having a good night!";
} else {
    createMessage = "Great things happening!";
}

let insertText = document.createTextNode(createMessage);
newElement.appendChild(insertText);
getHeaderWelcome.appendChild(newElement).style.color = "white";