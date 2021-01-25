var enterMoney=document.getElementById('enter_money');

var money;

//Grab the error message

var error=document.getElementById('error');
var errorManage=document.getElementById('error_manage');

//get all manage inputs like (roomrent,accessories,emergency & saving)



//get all output getelement

var showReception = document.getElementById('show_reception');
var showCatering = document.getElementById('show_catering');
var showPhotography = document.getElementById('show_photography');
var showMusic = document.getElementById('show_music');
var showCultural = document.getElementById('show_cultural');
var showCar = document.getElementById('show_car');
var showInvitation = document.getElementById('show_invitation');
var showFlowers = document.getElementById('show_flowers');
var showEntertainment = document.getElementById('show_entertainment');
var showCakes = document.getElementById('show_cakes');
var showBridal = document.getElementById('show_bridal');
var showGrooms = document.getElementById('show_grooms');
var showHealth = document.getElementById('show_health');
var showJewellery = document.getElementById('show_jewellery');




//get loader gif file
  
var loader =document.getElementById('loader');
//get the evaluate button
var evaluate=document.getElementById('evaluate');

//get the Reset button
var resetButton=document.getElementById('reset_button');
//get the manage_div
var manageDiv=document.getElementById('manage_div');

//get result section

var resultSection=document.getElementById("result_section");


//create an event
enterMoney.addEventListener('keyup',showManageMoney);
evaluate.addEventListener('click',showloader);
resetButton.addEventListener('click',reload);


//function to show gif loader image
function showloader(){
	loader.classList.remove("hidden");
	setTimeout(validateManage,1000);
}


//function to validate input amount and show the manage section

function showManageMoney(e)
{

//check whether the key entered is ENTER key or not


money = e.target.value;

//validate the Input value

if(isNaN(money) || money==0){

	//display error message
	error.classList.remove("hidden");
}
else{
//move ahead & show the manage section div
error.classList.add("hidden");
manageDiv.classList.remove("hidden");


}

}

function validateManage(){

	//hide loader image
	loader.classList.add("hidden");
	//validate input fields

		//validation is complete now calculate the percentage
		calculate();
	}


//calculate percentage
function calculate(){
	var recMoney = ( 12/100) * money;
	var catMoney = ( 30/100) * money;
	var phoMoney = ( 9/100) * money;
	var musMoney = ( 6/100) * money;
    var culMoney = ( 5/100) * money;
	var carMoney = ( 3/100) * money;
    var invMoney = ( 2/100) * money;       
	var floMoney = ( 5/100) * money;
	var entMoney = ( 3/100) * money;
	var cakMoney = ( 4/100) * money;
	var briMoney = ( 6/100) * money;
	var groMoney = ( 6/100) * money;
    var helMoney = ( 2/100) * money;
	var jewMoney = ( 7/100) * money;       


	showReception.innerHTML="Rs."+(recMoney).toFixed(2);
	showCatering.innerHTML= "Rs."+(catMoney).toFixed(2);
	showPhotography.innerHTML= "Rs."+(phoMoney).toFixed(2);
	showMusic.innerHTML= "Rs."+(musMoney).toFixed(2);
    showCultural.innerHTML="Rs."+(culMoney).toFixed(2);
	showCar.innerHTML= "Rs."+(carMoney).toFixed(2);
	showInvitation.innerHTML= "Rs."+(invMoney).toFixed(2);
	showFlowers.innerHTML= "Rs."+(floMoney).toFixed(2);
    showEntertainment.innerHTML="Rs."+(entMoney).toFixed(2);
	showCakes.innerHTML= "Rs."+(cakMoney).toFixed(2);
	showBridal.innerHTML= "Rs."+(briMoney).toFixed(2);
	showGrooms.innerHTML= "Rs."+(groMoney).toFixed(2);
    showHealth.innerHTML= "Rs."+(helMoney).toFixed(2);
	showJewellery.innerHTML= "Rs."+(jewMoney).toFixed(2);      

	resultSection.classList.remove("hidden");
}


//reload the page

function reload(){
	location.reload();
}