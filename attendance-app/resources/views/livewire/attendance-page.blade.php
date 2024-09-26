@assets
    <script src=""></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
@endassets

<div>
    <div>
        <select wire:model.change="selectedValue" name="course" id="course">
            <option value="">-- Sélectionner un cours --</option>
            @foreach ($courses as $course)
                <option value="{{ $course['sigle'] }}">{{ $course['title'] }}</option>
            @endforeach
        </select>
    </div>
    <div>
        @if ($data)
            <table>
                <tr>
                    <th>Matricule</th>
                    <th>Prénom</th>
                    <th>Nom</td>
                </tr>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item['matricule'] }}</td>
                        <td>{{ $item['first_name'] }}</td>
                        <td>{{ $item['last_name'] }}</td>
                    </tr>
                @endforeach
            </table>
        @endif
    </div>
</div>
