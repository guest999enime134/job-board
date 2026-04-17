<x-layout :title="$PageTitle">
    <div class="mb-8 p-6 bg-white shadow sm:rounded-lg">
        <form action="/comments/create" method="POST" class="flex items-center gap-4">
            @csrf

            <div class="flex-1">
                <input type="text" name="author" required placeholder="who are you?🤔" class="w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-sm shadow-sm focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 outline-hidden">
                <input type="text" name="content" required placeholder="Type what you want to share!" class="w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-sm shadow-sm focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 outline-hidden">
            </div>

            <button type="submit" class="cursor-pointer rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 transition">
                Post
            </button>
        </form>
    </div>
    <h1 class="text-3xl">Comments</h1>
    <br>
    @foreach ($comments as $comment)
        <h2 class="text-2xl">{{ $comment->author }}</h2>
        <p class="underline decoration-1">{{ $comment->content }}</p>
        <br>
    @endforeach
</x-layout>