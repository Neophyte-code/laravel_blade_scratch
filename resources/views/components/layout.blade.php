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
    <nav>
        <div>
            <a href="/">Home</a>
            <a href="/about">About Us</a>
            <a href="/contact">Contact</a>
        </div>
    </nav>

    <main>
        {{ $slot}}
    </main>
</body>

</html>