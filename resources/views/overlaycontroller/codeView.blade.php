<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<style>
			.bottom
			{
				position: relative;
				top: 0;
				left: 0;
				opacity: 0.5
			}
			.top
			{
				position: absolute;
				top: 0;
				left: 0;
				opacity: 1;
			}
		</style>
	</head>
	<body>
		<div style="position: relative; left: 0; top: 0;">
			<img src='{{ $model->data['urlTop']}}' class=top>

			<img src='{{ $model->data['urlBottom'] }}' class=bottom>
		</div>
	</body>


</html>
