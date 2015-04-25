"use strict";
// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'blue'; // TODO: change this to your favorite color from the list

// TODO: Create a block of if/else statements to check for every color except indigo and violet.
// TODO: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.

// TODO: Have a final else that will catch indigo and violet.
// TODO: In the else, log: I do not know anything by that color.

// TODO: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.
var message;

if (color == 'red') {
    message = console.log("Red is the color of the Arizona Cardinals.");
}

else if (color == 'orange') {
    message = console.log("Orange is the color of the Denver Broncos.");
}

else if (color == 'yellow') {
    message = console.log("Yellow is the color of the Green Bay Packers.");
}

else if (color == 'green') {
    message = console.log("Green is the color of the New York Jets.");
}

else if (color == 'blue') {
    message = console.log("Blue is the color of Indianapolis Colts.");
}

else if (color == 'indigo') {
    message = console.log("I do not know anything by that color.");
}

else {
    message = console.log("I do not know anything by that color.");
}

var message = (favorite == color) ? "This is also my favorite color." : "";
		console.log(message);
