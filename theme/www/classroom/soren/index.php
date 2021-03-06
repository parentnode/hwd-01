<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>HWD</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
	<script src="main.js"></script>
</head>
<body>
<div id="content">
	<h1>String slice() method</h1>
	<div class="example">
		<h3>Example</h3>
		Extract parts of a string:
		<code>
			var str = "Hello world!";
			var res = str.slice(1, 5);
		</code>
	</div>
	More "Try it Yourself" examples below.
	
	<p>
		<h2>Definition and Usage</h2>
		The slice() method extracts parts of a string and returns the extracted parts in a new string.
		
		Use the start and end parameters to specify the part of the string you want to extract.
		
		The first character has the position 0, the second has position 1, and so on.
		
		<em>Tip:</em> Use a negative number to select from the end of the string.
		
	</p>
	<p>
		<h2>Browser Support</h2>
		<p>
			<table>
				<tr>
					<th>Method</th>
					<th><img>..</img></th>
					<th><img>..</img></th>
					<th><img>..</img></th>
					<th><img>..</img></th>
					<th><img>..</img></th>
				</tr>					
				<tr>
					<td>slice()</td>	
					<td>Yes</td>	'
					<td>Yes</td>	
					<td>Yes</td>	
					<td>Yes</td>	
					<td>Yes</td>
				</tr>
			</table>
		</p>
	</p>
	<p>
		<h2>Syntax</h2>
		string.slice(start, end)
	<p/>
	<p>
		<h2>Parameter Values</h2>
		<table>
			<tr>
				<th>Parameter</th>	
				<th>Description</th>
			</tr>
			<tr>
				<td>start</td>	
				<td>Required.</td>
				<td> The position where to begin the extraction. First character is at position 0</td>
			</tr>
			<tr>
				<td>end</td>	
				<td>Optional. The position (up to, but not including) where to end the extraction. If omitted, slice() selects all characters from the start-position to the end of the string</td>
			</tr>
		</table>
		
	</p>
	<p>
		<h2>Technical Details</h2>
		Return Value:	A String, representing the extracted part of the string
		JavaScript Version:	ECMAScript 1
	</p>
	<p>
		<h2>More Examples</h2>
		
		Example
		Extract the whole string:
		
		var str = "Hello world!";
		var res = str.slice(0);
		Example
		Extract from position 3, and to the end:
		
		var str = "Hello world!";
		var res = str.slice(3);
		Example
		Extract the characters from position 3 to 8:
		
		var str = "Hello world!";
		var res = str.slice(3, 8);
		Example
		Extract only the first character:
		
		var str = "Hello world!";
		var res = str.slice(0, 1);
		Example
		Extract only the last character:
		
		var str = "Hello world!";
		var res = str.slice(-1);
	</p>
</div>

</body>
</html>