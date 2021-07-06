<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Search Suggestion</title>
	<script>
		function showSuggestion(str) {
			if (str.length == 0) {
				document.getElementById('suggestion').innerHTML = '';
			} else {
				// AJAX REQUEST
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById('suggestion').innerHTML = this.responseText;
					}
				}
				xmlhttp.open("GET", "suggest.php?q="+str, true);
				xmlhttp.send(); 
			}
		}
	</script>
</head>
<body style="font-family: sans-serif;">
	<h1>Search User</h1>
	<form>
		<label>Search Here</label>
		<input type="text" name="user-name" onkeyup="showSuggestion(this.value)">
		<p>Suggestions: <span id="suggestion" style="font-weight: bolder;"></span></p>
	</form>
</body>
</html>