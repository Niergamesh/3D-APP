// JavaScript Document
var counter = 0;

function swap(selected) {
	// First do not display all div id contents
	document.getElementById('home').style.display = 'none';
	document.getElementById('coke').style.display = 'none';
	document.getElementById('sprite').style.display = 'none';
	document.getElementById('pepper').style.display = 'none';
	
	// Then display the selected div id contents	
	document.getElementById(selected).style.display = 'block';
}
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
	document.getElementById('bodyColor').style.backgroundColor = '#FFFFFF';
	document.getElementById('headerColor').style.backgroundColor = '#fff';
	document.getElementById('footerColor').style.backgroundColor = '#262962';
}