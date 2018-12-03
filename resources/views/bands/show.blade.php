@extends('layouts.app')

@section('content')
    <div class="p-3">
        <div class="mb-6 flex flex-col">
            <h1 class="text-grey-light p-4">{{ $band->name }}</h1>
            <img class="rounded p-4" src="/storage/{{$band->photoLocalPath or ""}}" alt="photo">
            <img class="rounded p-4" src="/storage/{{$band->logoLocalPath or ""}}" alt="photo">
        </div>

        @if ($band->albums->isEmpty() == false)
            <h2 class="text-grey-light">Albums</h2>
            @foreach ($band->albums as $album)
                <album-search-result :initial-album="{{$album}}"></album-search-result>
            @endforeach
        @endif

    </div>
@endsection
