<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/FileSaver.js"></script>
	<script type="text/javascript" src="js/download.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
	<title></title>
</head>

<body>
	

</body>
<script type="text/javascript">
	function pegaIgtv(){
		$.ajax("https://instagram.com/mariarafart1/channel/")
		.done(function (data) {
			var dom = $(data);

			$('output').empty();
			//console.log(data);

			document.write(data);

			/*var blob = new Blob([data], { type: "text/html"});
      		saveAs(blob, titulo+".html");*/

		})
		.fail(function (error) {
			alert('É um erro')
		});

		this.pegaLink();
	}
	function pegaLink(){
		var divs = document.getElementsByClassName('_bz0w');
	//document.getElementsByClassName('RNL1l').style.display = "none";
	var titulos = [];

	var elems = document.getElementsByClassName("_bz0w");
	for(var i =0; i < elems.length; i++){
		elems[i].style.display = "none";
	}
	

	var allDivs = [].slice.call(divs);    

	var names = [];

	let meta = [];

	console.log(allDivs.length);

	for(let i = 0; i < allDivs.length; i++){
		names.push({href : allDivs[i].href, titulo : allDivs[i].innerText},);
	}

	//console.log(names.length);

	for (var i = 0; i < names.length; i++) {
		this.titulos.push(names[i].titulo);
		$.ajax(names[i].href)
		.done(function (data) {
			var dom = $(data);

			$('output').empty();
			//console.log(data);

			document.write(data);

			/*var blob = new Blob([data], { type: "text/html"});
      		saveAs(blob, titulo+".html");*/

		})
		.fail(function (error) {
			alert('É um erro')
		});
	}
	}

	this.pegaIgtv();
</script>

<script type="text/javascript">
	var attr = [];
	function arrumaHtml(){
		var svg = document.getElementsByTagName('svg');
		//console.log(svg);   
		for(let i = 0; i < svg.length; i++){
			svg[i].style.display = "none";
		}

		var page = document.getElementsByTagName('html');
		var body = document.getElementsByTagName('body');
		for(let i = 0; i < page.length; i++){
			page[i].style.height = '100%';
			body[i].style.background = '#363636';
			body[i].style.height = '100%';
		}

		var img = document.createElement('img');
		img.src = "videos/logo.png";
		img.style.textAling = "center";
		img.style.width = "120px";
		img.style.height = "120px";
		img.style.borderRadius = "50%";
		img.style.background = "#00BFFF	";
		document.body.appendChild(img);
	}


	function pegaUrl(){
		console.log("inicio funcao");
			
		var met = document.querySelectorAll("meta[property='og:video']");
		var titles = document.querySelectorAll("meta[property='og:title']");
		//console.log(met);
		
		var title = [].slice.call(titles);
		var html = [].slice.call(met);

		//console.log(html);
		for(let i =0; i < html.length; i++){
			this.attr.push({url : html[i].content, nome : title[i].content+'.mp4'},);
		}

		for(let i = 0; i < this.attr.length; i++){
			var button = document.createElement('button');
		    button.setAttribute('type','button');
		    button.style.background = "#483D8B";
		    button.style.color = "white";
		    button.style.borderRadius = "5px";
		    button.style.padding = "8px";
		    button.style.borderColor = "black";
		    button.style.width = "100%"; 
		    button.style.marginTop = "10px";
		    button.appendChild(document.createTextNode(this.attr[i].nome));
		    button.addEventListener('click', function baixaVideo(){
		    	console.log('download iniciado');
		    	window.location = "download.php?arquivo="+attr[i].url+"&nome="+attr[i].nome;
		    });
		    document.body.appendChild(button);
		}


		//console.log(this.attr);
		this.baixaTodos();
		
	}

	/*function baixaVideo(url, nome){
		console.log("baixaVideo")
	    window.location = "download.php?arquivo="+url+"&nome="+nome+".mp4";
	}	  
*/

	function baixaTodos(){
		var length = this.attr.length;
		console.log(length);

		var button = document.createElement('button');
		    button.setAttribute('type','button')
		    button.appendChild(document.createTextNode('Baixar Todos'));
		    button.style.background = "yellow";
		    button.style.height = "40px";
		    button.style.marginTop = "20px";
		    button.style.borderRadius = "5px";
		    button.style.textAling = "center";
		    button.style.borderColor = "black";
		    button.addEventListener('click', function baixar(){

		    	for(let i = 0; i < length; i++){
			    	console.log('download iniciado');
			    	window.location = "download.php?arquivo="+attr[i].url+"&nome="+attr[i].nome;
		    	}
		    });
		    document.body.appendChild(button);
	}

		setTimeout(this.arrumaHtml, 10000);
		setTimeout(this.pegaUrl, 10000);

</script>
<footer>
	
</footer>
</html>