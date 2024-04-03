@extends('layouts.app')
@section('content')
    <div class="container">
        <div>
            <form action="{{route('admin.language.store')}}" method="post">
                @csrf()
                <input type="text" name="language">
                <button>Save</button>
            </form>
        </div>
    </div>
@endsection
