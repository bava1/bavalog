
window.onload = function(){	
	document.querySelector(".menu-but2").onclick = function(){ getAjax("test.php") };	
	document.querySelector(".menu-but2").onclick = function(){ getAjax("stat1.php") };	
	document.querySelector(".menu-but2").onclick = function(){ getAjax("stat2.php") };	
	document.querySelector(".menu-but2").onclick = function(){ getAjax("stat3.php") };	
	document.querySelector(".menu-but2").onclick = function(){ getAjax("stat4.php") };	
	document.querySelector(".menu-but2").onclick = function(){ getAjax("stat5.php") };	
	document.querySelector(".sites").onclick = function(){ location.reload() };	
}

function getAjax(res){
	var request = new XMLHttpRequest();	
	request.onreadystatechange = function (){
		if(request.readyState == 4 && request.status == 200){
			document.querySelector(".third").innerHTML = request.responseText;
		}	
	};
	request.open("GET", res);
	request.send();
};