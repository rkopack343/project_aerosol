<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
		<form action='/overlay/generate' method='POST'>
			@csrf
			<label for='top'>Top Image:</label><br>
			<input type='text' id='top' name='top'><br>
			<br>
			<label for='bottom'>Bottom Image:</label><br>
			<input type='text' id='bottom' name='bottom'><br>

			<input type="submit" value='Generate'>
		</form>
	</head>

</html>
