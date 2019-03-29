@extends('layouts.app')

@section('content')
    <div class="p-3">
        <search-bar></search-bar>
        <div class="flex">
            <div>
                <h3 class="text-grey-light">Genres</h3>
                <search-results-genres></search-results-genres>
            </div>
            <search-results></search-results>
        </div>
    </div>
@endsection
