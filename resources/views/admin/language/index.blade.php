@extends('layouts.app')
@section('content')
    <div class="container mx-auto mt-2">
        <div>
            <table class="w-full">
                <thead>
                    <tr>
                        <th class="border-2 px-2">
                            Language <a href="{{ route('admin.language.create') }}" class="bg-primary px-2 py-1">Add</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($languages as $language)
                        <tr>
                            <td class="border-2 px-2">
                                <a href="{{ route('admin.language.show', $language->id) }}" class="underline hover:no-underline">
                                    {{ $language->language }}
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>Empty</td>
                        </tr>
                    @endforelse
                    <tr>
                        <td class="border-2 px-2 py-0.5">
                            <form action="{{route('admin.language.store')}}" method="post">
                            @csrf
                            <div class="flex">
                                <input type="text" autofocus="true" class="grow border-2 rounded-sm" name="language" />
                                <button class="bg-primary px-2 py-1 text-white">
                                    Add
                                </button>
                            </div>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
