<x-layout :title="$PageTitle">
    <h1 class="text-3xl">Comments</h1>
    <br>
    @foreach ($comments as $comment)
        <h2 class="text-2xl">{{ $comment->author }}</h2>
        <p class="underline decoration-1">{{ $comment->content }}</p>
        <br>
    @endforeach
</x-layout>