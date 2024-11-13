<x-site-layout title="Welcome Page!">
    @foreach($articles->sortByDesc('published_at') as $article)
        <div class="mt-4">
        <h2 class="font-bold text-lg">{{$article->title}}</h2>
            <div>
                {{\Carbon\Carbon::parse($article->published_at)->toDateString()}}
                |
                {{$article->author_id}}
            </div>
        <p class="text-sm">{{$article->content}}</p>
        </div>
    @endforeach

</x-site-layout>
