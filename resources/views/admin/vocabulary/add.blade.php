@extends('layouts.app')
@section('content')
    <div class="m-auto w-1/3 min-h-screen">
        <div class="border-2">
            <div class="text-xl px-2 border-b-2">
                Add Vocab
            </div>
            <form
                action="{{ route('admin.vocabulary.store', [
                    'refer' => request()->refer,
                ]) }}"
                method="post" enctype="multipart/form-data" class="flex flex-col gap-1 p-2">
                @csrf()
                <input type="hidden" name="language" value="{{ request()->language }}">
                <div class="flex">
                    <label class="basis-1/4">{{ 'Level' }}</label>
                    <select name="level" class="select2 border-2 basis-3/4 rounded-sm">
                        @foreach ($levels as $level)
                            <option>{{$level}}</option>    
                        @endforeach
                    </select>
                </div>
                <div class="flex">
                    <label class="basis-1/4">{{ 'Vocab' }}</label>
                    <input type="text" name="vocab" class="border-2 basis-3/4 rounded-sm">
                </div>
                <div class="flex">
                    <label class="basis-1/4">{{ 'Type' }}</label>
                    <select name="type" class="select2 border-2 basis-3/4 rounded-sm" data-tags="true">
                        @foreach ($types as $type)
                            <option>{{$type}}</option>    
                        @endforeach
                    </select>
                </div>
                <div class="flex">
                    <label class="basis-1/4">{{ 'Meaning' }}</label>
                    <textarea type="text" name="meaning" class="border-2 basis-3/4 rounded-sm"></textarea>
                </div>
                <div class="flex">
                    <label class="basis-1/4">{{ 'Image' }}</label>
                    <input type="file" name="image" class="basis-3/4 rounded-sm">
                </div>
                <div class="flex gap-1">
                    <button class="bg-blue-300 hover:bg-blue-200 py-1 hover:text-black hover:font-bold rounded-md text-white grow">Cancel</button>
                    <button class="bg-blue-300 hover:bg-blue-200 py-1 hover:text-black hover:font-bold rounded-md text-white grow">Save</button>
                </div>
                
            </form>
        </div>
    </div>
@endsection
