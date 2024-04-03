<form method="post" action="{{route("admin.vocabulary.store", [
    "refer" => "back",
    'language' => $language->id,
])}}">
<table class="w-full">
    <thead>
        <tr>
            <td class="border-2 w-60 py-0.5 px-1">
                Vocabularies
                <a
                    href="{{ route('admin.vocabulary.create', [
                        'refer' => 'language',
                        'language' => $language->id,
                    ]) }}">Add</a>
            </td>
            <td class="border-2 py-0.5 px-1">Type</td>
            <td class="border-2 py-0.5 px-1">Meaning</td>
            <td class="border-2 py-0.5 px-1">Image</td>
            <td class="border-2 py-0.5 px-1">Level</td>
        </tr>
    </thead>
    <tbody>
        @forelse ($vocabularies as $vocabulary)
            <tr>
                <td class="border-2 py-0.5 px-1">
                    {{ $vocabulary->vocab }}
                </td>
                <td class="border-2 py-0.5 px-1">
                    {{ $vocabulary->type }}
                </td>
                <td class="border-2 py-0.5 px-1">
                    {{ $vocabulary->meaning }}
                </td>
                <td class="border-2 py-0.5 px-1">
                    {{ $vocabulary->image }}
                </td>
                <td class="border-2 py-0.5 px-1">
                    {{ $vocabulary->level }}
                </td>
            </tr>
        @empty
            <tr>
                <td class="border-2 py-0.5 px-1">Empty</td>
            </tr>
        @endforelse
        <tr>
            <td class="border-2 py-0.5 px-1">
                <input type="text" autofocus="true" class="w-full border-2 rounded-sm" name="vocab" />
            </td>
            <td class="border-2 py-0.5 px-1">
                <select name="type" class="select2 border-2 basis-3/4 rounded-sm" data-tags="true">
                    @foreach ($types as $type)
                        <option>{{ $type }}</option>
                    @endforeach
                </select>
            </td>
            <td class="border-2 py-0.5 px-1">
                <textarea type="text" name="meaning" class="border-2 basis-3/4 rounded-sm w-full h-full" rows="1"></textarea>
            </td>
            <td class="border-2 py-0.5 px-1">
                <input type="file" name="image" class="basis-3/4 rounded-sm">
            </td>
            <td class="border-2 py-0.5 px-1">
                <select name="level" class="select2 border-2 basis-3/4 rounded-sm">
                    @foreach ($levels as $level)
                        <option>{{ $level }}</option>
                    @endforeach
                </select>
                @csrf
                <button tabindex="0">
                Add
                </button>
            </td>
        </tr>
    </tbody>
</table>
</form>
{{$vocabularies->links()}}