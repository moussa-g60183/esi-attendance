@assets
    <script src=""></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
@endassets

<div>
    <select wire:model.change="selectedValue" name="course" id="course">
        <option value="">-- Sélectionner un cours --</option>
        @foreach ($courses as $course)
            <option value="{{ $course['sigle'] }}">{{ $course['title'] }}</option>
        @endforeach
    </select>
    @if ($data)
        @foreach ($data as $item)
            {{ $item['matricule'] }}
        @endforeach
    @endif
</div>
