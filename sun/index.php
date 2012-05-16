<?
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>:: Kamus Bahasa Sunda Ke Bahasa Indonesia ::</title>
		<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
		<script type="text/javascript" src="js/ajaxupload.3.5.js"></script>
		<!-- Custom JS code that utilizes APIs of some other JS file (jQuery in our case)
			 should be referred to in the head section after the file containing APIs -->
		<script type="text/javascript" src="js/javascript.js"></script>
		<link type="text/css" href="css/ui-lightness/jquery-ui-1.7.2.custom.css" rel="Stylesheet" />
		<link type="text/css" href="css/style.css" rel="Stylesheet" />
	</head>
	<body>
[[ <a href="../index.php">HOME</a> ]]<br>	
		
	
		<form id="new_album_form" style="background: #F3F4BA; padding: 10px; margin: 10px; display: none;">
			<table width="100%">
				<tr><td width="100px">Nama:</td> <td><input id="album_name" type="text"/></td></tr>
				<tr><td width="100px">email:</td> <td><input id="album_artist" type="text"/></td></tr>
				<tr><td width="100px">nip:</td> <td><input id="album_year" type="text"/></td></tr>
				<tr><td width="100px">Cover:</td> <td><input id="album_cover"> <img id="loader-2" style="display:none;" height=16 width=16 src="loader-yellow-bg.gif"/></td></tr>
			</table>
			<br><input type="submit" value="Create"/> 
			<img id="loader-3" style="display:none;" height=19 width=220 align="top" src="loader-long.gif"/>
			<div id="create_album_result" style="color:green; display:none;"></div>
		</form>
		<br><br>
		<div>
			Masukkan Kata Sunda:
			<input id="userinput" type="text"/> 
			<img id="loader" style="display:none;" height=16 width=16 src="loader.gif"/>
		</div>
		
		<div id="results">
		</div>
	</body>
</html>
<?

?>
