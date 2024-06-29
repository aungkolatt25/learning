@extends('layouts.app')
@section('content')
    <div class="container mx-auto">
        <div class="flex items-center">
            <h2 class="text-lg me-auto">{{ $language->language }}</h2>
            @if (request('display') == 'card')
                <a
                    href="{{ route('admin.language.show', [
                        'language' => $language->id,
                        'display' => 'list',
                    ]) }}"><i
                        class="fa fa-list"></i></a>
            @else
                <a href="{{ route('admin.language.show', [
                    'language' => $language->id,
                    'display' => 'card',
                ]) }}"
                    class="ms-1"><i class="fa-solid fa-layer-group"></i></a>
            @endif
        </div>
        <div>
            @if (request()->type == 'pattern')
                @include('admin.language.pattern')
            @else
                @include('admin.language.vocabulary' . $display)
            @endif
        </div>
    </div>
@endsection
