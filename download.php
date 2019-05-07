<?php 
	 $file_name = 'teste.mp4';
	 $file_url = $_POST['nome'];
	 //$file_url = "https://instagram.fbfh3-2.fna.fbcdn.net/vp/1367d9ae35d12666412419b919831857/5CD4B799/t50.16885-16/10000000_2082967508424783_7305260670621057024_n.mp4?_nc_ht=instagram.fbfh3-2.fna.fbcdn.net";

	 header('Content-Type: application/octet-stream');
	 header("Content-Transfer-Encoding: Binary");
	 header("Content-disposition: attachment; filename=\"".$file_name."\"");
	 readfile($file_url);
 	?>