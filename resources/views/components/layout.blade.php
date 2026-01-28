@props([
'title' => 'Laracasts'
])

<html>

<head>
    <title>{{ $title }}</title>
</head>
<style>
    .max-w-400 {
        max-width: 400px;
        margin: auto;
    }

    .card {
        background: #e3e3e3;
        padding: 1rem;
        text-align: center;
    }
</style>

<body>
    <main>
        {{ $slot}}
    </main>
</body>

</html>