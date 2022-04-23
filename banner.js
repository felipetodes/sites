/*Criando banner*/

function slide1(){
	
	
	document.getElementById('imagem').src="banner1.jfif";
	setTimeout("slide2()",800);
	
	
}

function slide2(){
	
	
	document.getElementById('imagem').src="banner2.jpg";
	setTimeout("slide3()",800);
	
	
}

function slide3(){
	
	
	document.getElementById('imagem').src="banner3.jpg";
	setTimeout("slide4()",800);
	
	
}

function slide4(){
	
	
	document.getElementById('imagem').src="banner4.jpg";
	setTimeout("slide5()",800);
	
	
}

function slide5(){
	
	
	document.getElementById('imagem').src="short.jpeg";
	setTimeout("slide6()",800);
	
	
}

function slide6(){
	
	
	document.getElementById('imagem').src="tesoura.jpeg";
	setTimeout("slide1()",800);
	
	
}