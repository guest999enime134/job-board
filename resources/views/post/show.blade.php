<x-layout :title="$PageTitle">
    <h2>blog</h2>
        <h2>{{ $post->title }}</h2>
        <h2>{{ $post->body }}</h2>
        <h2>{{ $post->author }}
</x-layout>