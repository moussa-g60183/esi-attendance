@assets
    <script src=""></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
@endassets

<div class="w-3/4 mx-auto py-4 px-4 rounded-md shadow-sm bg-white">
    <div class="py-4">
        <select wire:model.change="selectedValue" name="course" id="course"
            class="py-3 px-4 pe-9 block w-auto mx-auto bg-gray-100 border-transparent rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-transparent dark:text-neutral-400 dark:focus:ring-neutral-600">
            <option value="">-- Sélectionner un cours --</option>
            @foreach ($courses as $course)
                <option value="{{ $course['sigle'] }}">{{ $course['sigle'] }}</option>
            @endforeach
        </select>
    </div>
    <div class="py-4">
        @if ($data)
            <table class="min-w-full text-left text-sm font-light text-surface">
                <thead class="border-b border-neutral-200 font-medium dark:border-white/10">
                    <tr>
                        <th class="px-6 p-4">Matricule</th>
                        <th class="px-6 p-4">Prénom</th>
                        <th class="px-6 p-4">Nom</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr class="border-b border-neutral-200 dark:border-white/10">
                            <td class="whitespace-nowrap px-6 py-4">{{ $item['matricule'] }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $item['first_name'] }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $item['last_name'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>
