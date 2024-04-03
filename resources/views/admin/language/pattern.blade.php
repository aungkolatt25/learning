<table>
    <thead>
        <tr>
            <td>Level</td>
            <td>patterns</td>
            <td>Type</td>
            <td>Meaning</td>
            <td>Image</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($patterns as $pattern)
            <tr>
                <td>
                    {{ $pattern->level }}
                </td>
                <td>
                    {{ $pattern->vocab }}
                </td>
                <td>
                    {{ $pattern->type }}
                </td>
                <td>
                    {{ $pattern->meaning }}
                </td>
                <td>
                    {{ $pattern->image }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
