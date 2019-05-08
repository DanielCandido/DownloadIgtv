<?php 
	define('DIR_DOWNLOAD', '/videos/');


	 $file_name =$_GET['nome'];
	 $file_url = $_GET['arquivo'];
	 //$file_url = 'https://instagram.fbfh3-2.fna.fbcdn.net/vp/ee20595e803c671d6b429c0294eb86c3/5CD60919/t50.16885-16/10000000_2082967508424783_7305260670621057024_n.mp4?_nc_ht=instagram.fbfh3-2.fna.fbcdn.net';
	 $file_url = urldecode($file_url);
	 header('Content-Type: application/octet-stream');
	 header("Content-Transfer-Encoding: Binary");
	 header("Content-disposition: attachment; filename=\"".$file_name."\"");
	 readfile($file_url);
 	?>