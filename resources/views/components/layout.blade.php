<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<style>
    .container {
        width: 86%;
        margin: auto;
    }

    button{
        cursor:pointer;
    }
</style>

<body>

    <header>
        <x-navbar />
    </header>

    <main>
        {{ $slot }}
    </main>


</body>

</html>
