@props([
'title' => 'Laracasts'
])

<html>

<head>
    <title>{{ $title }}</title>
</head>
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
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

<body class="bg-gray-700 p-6 m-auto max-w-xl">
    <main>
        {{ $slot}}
    </main>
</body>

</html>