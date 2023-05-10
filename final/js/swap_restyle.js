// JavaScript Document
var counter = 0;
$(document).ready(function() {
	
	selectPage();
	selectModel();

	function selectPage() {

		$('#home').show();
		$('#about').hide();
		$('#models').hide();
		$('#interaction').hide();
		$('#exDescription').hide();

		$('#navHome').click(function(){
			$('#home').show();
			$('#about').hide();
			$('#models').hide();
			$('#interaction').hide();
			$('#exDescription').hide();	  
		});

		$('#navAbout').click(function(){
			$('#home').hide();
			$('#about').show();
			$('#models').hide();
			$('#interaction').hide();
			$('#exDescription').hide();	  
		});

		$('#navModels').click(function(){
			$('#home').hide();
			$('#about').hide();
			$('#models').show();
			$('#interaction').show(); 
			$('#exDescription').show();
		});
	}

	function selectModel() {

		$('#navCoke').click(function(){
			$('#coke').show();
			$('#sprite').hide();
			$('#pepper').hide();
			$('#interaction').show(); 
			$('#cokeDescription').show();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').hide(); 
		});

		$('#navSprite').click(function(){
			$('#coke').hide();
			$('#sprite').show();
			$('#pepper').hide();
			$('#interaction').show(); 
			$('#cokeDescription').hide();
			$('#spriteDescription').show();
			$('#pepperDescription').hide();  	  	  
		});

		$('#navPepper').click(function(){
			$('#coke').hide();
			$('#sprite').hide();
			$('#pepper').show();
			$('#interaction').show(); 
			$('#cokeDescription').hide();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').show(); 	   
		});
	}

});
function changeLook() {
	counter += 1;
	switch (counter) {
        case 1:
			document.getElementById('bodyColor').style.backgroundColor = '#8bc7d2';
			document.getElementById('headerColor').style.backgroundColor = '#f4d046';
			document.getElementById('footerColor').style.backgroundColor = '#e7a460';
            break;
        case 2:
			document.getElementById('bodyColor').style.backgroundColor = '#83c0aa';
			document.getElementById('headerColor').style.backgroundColor = '#c4fd50';
			document.getElementById('footerColor').style.backgroundColor = '#467843';
            break;
        case 3:
			document.getElementById('bodyColor').style.backgroundColor = '#bae6d5';
			document.getElementById('headerColor').style.backgroundColor = '#fdfb99';
			document.getElementById('footerColor').style.backgroundColor = '#2252d8';
            break;
        case 4:
            counter = 0;
			document.getElementById('bodyColor').style.backgroundColor = '#efeff1';
			document.getElementById('headerColor').style.backgroundColor = '#d2e8f4';
			document.getElementById('footerColor').style.backgroundColor = '#a9a9ab';
            break;
    }
}

function changeBack() {
	document.getElementById('bodyColor').style.backgroundColor = '#eff1f2';
	document.getElementById('headerColor').style.backgroundColor = '#fff';
	document.getElementById('footerColor').style.backgroundColor = '#262962';
}