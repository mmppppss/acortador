<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1, width=device-width">
	<link rel="stylesheet" type="text/css" href="assets/main.css">
	<title>short</title>
</head>
<body>
	<div class="main">
		<form id="input" class="linkInput" action="index.php" method='GET'>
			<input type="text" name="link" placeholder="https://example.com">
			<input type="submit" name="go" value="short!">
		</form>
		
		<form id="output" display="none" class="linkOutput" >
			<input id="out" name="" type="text" value=":/">
			<input id="copyButton" type="button" onclick='copy()' value="copy">
			<br>
			<a href="index.php"><- back</a>
		</form>
	</div>
</body>
</html>
<?php
if(isset($_GET['go'])){
	$link=$_GET['link'];
	$l='link_generadoxd';
?>
	<script>
		const input = document.querySelector('#input');
		const out = document.querySelector('#out');	
		const output = document.querySelector('#output');
		const copyButton = document.querySelector('#copyButton');

		input.attributes.setNamedItem(document.createAttribute('display'));
		input.attributes.display.textContent='none';
		out.value='<?php echo $l ?>';
		output.attributes.removeNamedItem('display');

		function copy(){
					navigator.clipboard.writeText(out.value);
					copyButton.attributes.setNamedItem(document.createAttribute('class'));
					copyButton.attributes.class.textContent='clicked';
					copyButton.value='Copied!';

					/*output.focus();
					document.execCommand('selectAll');
					document.execCommand('copy');*/
				}
	</script>
<?php
}
?>
