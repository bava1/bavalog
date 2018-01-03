
window.onload = function(){
	document.querySelector(".menu-but1").onclick = function(){ geAjaxStart() };		
	document.querySelector(".menu-but2").onclick = function(){ geAjax1() };	
	document.querySelector(".menu-but3").onclick = function(){ geAjax2() };	
	document.querySelector(".menu-but4").onclick = function(){ geAjax3() };	
	document.querySelector(".menu-but5").onclick = function(){ geAjax4() };	
	document.querySelector(".menu-but6").onclick = function(){ geAjax5() };	
}

document.querySelector(".sites").onclick = function(){ location.reload() };	

function geAjaxStart(){
	var request = new XMLHttpRequest();	
	request.onreadystatechange = function (){
		if(request.readyState == 4 && request.status == 200){
			document.querySelector(".third").innerHTML = request.responseText;
		}	
	};
	request.open("GET", "test.php");
	request.send();
};


function geAjax1(){
	var request = new XMLHttpRequest();
	request.onreadystatechange = function (){
		if(request.readyState == 4 && request.status == 200){
			document.querySelector(".third").innerHTML = request.responseText;
		}	
	};
	request.open("GET", "stat1.php");
	request.send();
};

function geAjax2(){
	var request = new XMLHttpRequest();
	request.onreadystatechange = function (){
		if(request.readyState == 4 && request.status == 200){
			document.querySelector(".third").innerHTML = request.responseText;
		}	
	};
	request.open("GET", "stat2.php");
	request.send();
};

function geAjax3(){
	var request = new XMLHttpRequest();
	request.onreadystatechange = function (){
		if(request.readyState == 4 && request.status == 200){
			document.querySelector(".third").innerHTML = request.responseText;
		}	
	};
	request.open("GET", "stat3.php");
	request.send();
};

function geAjax4(){
	var request = new XMLHttpRequest();
	request.onreadystatechange = function (){
		if(request.readyState == 4 && request.status == 200){
			document.querySelector(".third").innerHTML = request.responseText;
		}	
	};
	request.open("GET", "stat4.php");
	request.send();
};

function geAjax5(){
	var request = new XMLHttpRequest();
	request.onreadystatechange = function (){
		if(request.readyState == 4 && request.status == 200){
			document.querySelector(".third").innerHTML = request.responseText;
		}	
	};
	request.open("GET", "stat5.php");
	request.send();
};