<div>
    <form wire:submit="attachStudent">
        <select name="student" id="student_id" wire:model="student_id"
            class="block w-auto px-4 py-3 mx-auto text-sm bg-gray-100 border-transparent rounded-lg course pe-9 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none ">
            <option value="">-- Sélectionner un étudiant --</option>
            @foreach ($students as $student)
                <option value="{{ $student['matricule'] }}">{{ $student['matricule'] }} - {{ $student['first_name'] }}
                    {{ $student['last_name'] }}</option>
            @endforeach
        </select>
        <button type="submit">Ajouter l'étudiant</button>
    </form>
</div>
