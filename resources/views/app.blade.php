<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Laravel with Inertia</title>
		@vite
	</head>
	<body class="antialiased bg-gray-900">
		<strong>Database Connected: </strong>
<?php
    try {

        \DB::reconnect();
        \DB::connection()->getPDO();
        dump('Database connected: ' . \DB::connection()->getDatabaseName());
        } catch (\Exception $e) {
		dump('Database connected: ' . 'None');
    }
?>
	</body>
</html>
