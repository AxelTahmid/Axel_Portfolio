var numSquares = 9;
var colors = [];
var pickedColor;
var squares = document.querySelectorAll(".square");
var colorDisplay = document.getElementById("colorDisplay");
var messageDisplay = document.getElementById("message");
var h1 = document.querySelector("h1");
var resetBtn = document.querySelector("#reset");
var modeButtons = document.querySelectorAll(".mode");

init();

function init(){
	setUpModes();
	setUpSquares();
	reset();
}

function setUpModes(){
	//mode button listener
	for (var i = 0; i < modeButtons.length; i++) {
		modeButtons[i].addEventListener("click", function(){
			modeButtons[0].classList.remove("selected");
			modeButtons[1].classList.remove("selected");
			this.classList.add("selected");
			//IF statement in SHORTER WAY
			this.textContent === "Easy" ? numSquares = 6: numSquares = 9;
			reset();
		});
	};
}

function setUpSquares(){
	for(var i=0; i < squares.length; i++){
		squares[i].addEventListener("click", function(){
			//grab clicked square color
			var clickedColor = this.style.backgroundColor;
			//compare color to colorpickr
			if (clickedColor === pickedColor){
				messageDisplay.textContent = "Correct!";
				resetBtn.textContent = "Play Again?"
				changeColors(clickedColor);
				h1.style.backgroundColor = clickedColor;
			} else { 	
				this.style.backgroundColor = "#232323"
				messageDisplay.textContent = "Try Again.";
		 	}
		});
	};
}

function reset(){
	colors = generateRandomColors(numSquares);
	pickedColor = pickColor();
	colorDisplay.textContent = pickedColor;
	resetBtn.textContent = "New Color";
	messageDisplay.textContent = "";
	for (var i = 0; i < squares.length; i++) {
		if(colors[i]){ 
			squares[i].style.display = "block";
			squares[i].style.backgroundColor = colors[i];
		} else {
			squares[i].style.display = "none";
		}
	}

	for(var i=0; i < squares.length; i++){
	squares[i].style.backgroundColor = colors[i];
	}
	h1.style.backgroundColor = "#7B8EBC";
}


resetBtn.addEventListener ("click", reset);


function changeColors(color){
//loop through
	for (var i = 0; i < squares.length; i++) {
		//match all colors
		squares[i].style.backgroundColor = color;
	}

}

function pickColor(){
	var random = Math.floor(Math.random() * colors.length);
	return colors[random];
}

function generateRandomColors(num){

	var arr = [];
//add random colors to array
	for (var i = 0; i <num ; i++) {
		arr.push(randomColor())
	}

return arr;
}

function randomColor(){
	//pick a red from 0 - 255
	var r = Math.floor(Math.random() * 256);
	//pick a green from 0 - 255
	var g = Math.floor(Math.random() * 256);
	//pick a blue from 0 - 255
	var b = Math.floor(Math.random() * 256);

	var rgb = "rgb(" + r + ", " + g + ", " + b + ")"

	return rgb;
}