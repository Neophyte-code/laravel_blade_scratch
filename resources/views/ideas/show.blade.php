<x-layout title="Ideas">

    <div class="mt-6 text-white">
        <h2 class="font-bold">Your Idea</h2>
        <ul class="mt-6">
            {{ $idea->description }}
        </ul>
    </div>

    <div class="mt-4">
        <a href="/ideas/{{ $idea->id }}/edit">
            <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Edit</button>
        </a>
    </div>
</x-layout>