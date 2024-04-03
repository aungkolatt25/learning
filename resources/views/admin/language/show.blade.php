@extends('layouts.app')
@section('content')
    <div class="container mx-auto">
        <div>
            <h2 class="text-lg">{{ $language->language }}</h2>
        </div>
        <div>
            @if (request()->type == 'pattern')
                @include('admin.language.pattern')
            @else
                @include('admin.language.vocabulary'.$display)
            @endif
        </div>
    </div>
@endsection
