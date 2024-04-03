@extends('layouts.app')
@section('content')
    <div class="container">
        <div>
            <table class="w-full">
                <thead>
                    <tr>
                        <th>Language</th>
                        <th>Level</th>
                        <th>Vocab</th>
                        <th>Type</th>
                        <th>Meaning</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($vocabularies as $vocabulary)
                    <tr>
                        <th>Language</th>
                        <th>Level</th>
                        <th>Vocab</th>
                        <th>Type</th>
                        <th>Meaning</th>
                        <th>Image</th>
                    </tr>
                    @empty
                    <tr>
                        <th colspan="6">Empty</th>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            {{$vocabularies->links()}}
        </div>
    </div>
@endsection
