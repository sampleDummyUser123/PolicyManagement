<html>
<script>

function addOption(txt){	
	
	var aaa = document.createElement('option');

	aaa.setAttribute('value', txt); //Setattribute is a sanitizer, but not for the full flow. 
	
	aaa.innerHTML = txt //This is vulnerable!

	var dd = document.getElementById("xpto")
	dd.appendChild(aaa)
}

function inject() {
	var val = document.getElementById("inputmanhoso").value
	addOption(val)
}

</script>
<body>	
	<div>
		<p>Adds a new option with the input content</p>
		<p> use this payload <span>&gt;&lt;img src=&quot;aa.txt&quot; onerror=&quot;alert(123)&quot;&gt;</span></p>
			<input type="text" id="inputmanhoso"/> 
			<a href="#" onclick="inject()">inject</a>
		<select id=xpto>
			<option value="aaa">aaa</option>
		</select>
	</div>
</body>
</html>
