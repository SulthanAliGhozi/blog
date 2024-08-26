<x-layout>
    <x-slot:head>{{ $post['title'] }}</x-slot:head>
    <article class="py-8 max-w-screen-md ">
        @if ($post)
            <h2 class="mb-3 text-3xl tracking-tight font-bold text-gray-950">{{ $post['title'] ?? 'Judul Postingan Tidak Ditemukan' }}</h2>
            <div>
                By
                <a class="text-base text-gray-500 mb-5 hover:underline" href="/authors/{{ $post->author->username}} ">{{ $post->author->name }}</a>
                In
                <a class="text-base text-gray-500 mb-5 hover:underline" href="/categories/{{ $post->category->slug }}">{{  $post->category->name }}</a> 
                | {{ $post->created_at->diffForHumans() }}
            </div>
            <p class="my-4 font-light">{{ $post['body'] ?? 'Konten Postingan Tidak Ditemukan' }}</p>
        @else
            <p>Postingan tidak ditemukan.</p>
        @endif

        <a href="/posts" class="font-medium text-blue-500 hover:underline-offset-4">&laquo; Back To Menu</a>
    </article>
</x-layout>

