@extends('component.layout')

@section('content')
    {{ $page }}
    @foreach ($articles as $article)
        <div>
            {{ $article->id }} - {{ $article->translations[0]->name }}
        </div>
    @endforeach
    
    @include('vendor.pagination.bootstrap-5', [
        'paginator' => $articles,
        'elements' => $articles->links()->elements,
    ])

    <script>
        console.log('Articles:', @json($articles));
    </script>
@endsection
