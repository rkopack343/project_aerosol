<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
		Your code is <p>{{ $code }}</p>
		<br><br>
		Go view it <a href='<?php echo route('overlay.view',['code' => $code]); ?>'>here</a>
    </head>
</html>
