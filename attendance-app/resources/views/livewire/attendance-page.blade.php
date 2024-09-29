@assets
    <script src=""></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
@endassets

<div class="w-3/4 px-4 py-4 mx-auto bg-white rounded-md shadow-sm">
    <div class="py-4">
        <select wire:model.change="selectedValue" name="course" id="course"
            class="block w-auto px-4 py-3 mx-auto text-sm bg-gray-100 border-transparent rounded-lg course pe-9 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none ">
            <option value="">-- Sélectionner un cours --</option>
            @foreach ($courses as $course)
                <option value="{{ $course['sigle'] }}">{{ $course['sigle'] }}</option>
            @endforeach
        </select>
    </div>
    <div class="py-4">
        @if ($selectedValue != '')
            @if (!$showAddForm)
                <button wire:click="toggle">Ajouter un étudiant</button>
            @else
                <button wire:click="toggle">Fermer le formulaire</button>
                <livewire:add-student-form :course_id="$selectedValue" wire:ignore />
            @endif
        @endif

    </div>
    <div class="py-4">
        @if ($data && count($data) >= 1)
            <table class="min-w-full text-sm font-light text-left text-surface">
                <thead class="font-medium border-b border-neutral-200 dark:border-white/10">
                    <tr>
                        <th class="p-4 px-6">Matricule</th>
                        <th class="p-4 px-6">Prénom</th>
                        <th class="p-4 px-6">Nom</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr class="border-b border-neutral-200 dark:border-white/10">
                            <td class="px-6 py-4 whitespace-nowrap">{{ $item['matricule'] }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $item['first_name'] }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $item['last_name'] }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <button wire:click="deleteStudent({{ $item['matricule'] }})"
                                    wire:confirm="Supprimer l'étudiant de la liste" class="text-red-500"
                                    type="submit">Supprimer</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>
