<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello World</title>
</head>
<body>
<h1>Hello, {{ $name ?: "World" }}</h1>
<div>
    <p>Server ini ada di versi {{ $version }}</p>
    <p>Sebuah composer berkata: {{ $meong }}</p>
    <p>Sebuah creator berkata: {{ $creator }}</p>
</div>

@verbatim
    <h2>Ini bakal dianggap bukan format blade</h2>
    <div class="container">
        Hello, {{ $name }}.
    </div>
@endverbatim

<x-hello-component name="Puci" :count="21 + 15">
    <h4>Mbeek</h4>
</x-hello-component>

<script>
    const data = {{ \Illuminate\Support\Js::from($data) }};
    console.dir(data);
</script>
</body>
</html>
