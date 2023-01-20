<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 9</title>
    <meta name="description" content="Laravel 9 на PHP ^8" >
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Laravel 9 & php ^8</h1>
    </header>
    <main>
        <div>
            <p>
                Тело страницы!
            </p>
        </div>
    </main>
    @php
    echo '<pre>';
    var_dump(opcache_get_status()['jit']);
    echo '</pre>';
    @endphp
</body>
<script>
console.log('Laravael 9')
</script>
</html>