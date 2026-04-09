<x-layout :title="$PageTitle">
    <h2>blog</h2>
    @foreach ($posts as $post)
        <h1 class="text-3xl">{{ $post->author }}</h1>
        <h2 class="text-2xl">{{ $post->title }}</h2>
        <p><b>{{ $post->body }}</b></p>
        <br>
    @endforeach
    {{ $posts->links() }}
</x-layout>