<div>
    <!-- Modal container -->
    <div class="fixed inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <!-- Modal background -->
        <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <!-- Modal content -->
            <div class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                role="dialog" aria-modal="true" aria-labelledby="modal-title">
                <!-- Modal header -->
                <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                    <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">Ajouter un étudiant</h3>
                </div>

                <!-- Modal body -->
                <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                    <form wire:submit="attachStudent">
                        <select name="student" id="student_id" wire:model="student_id"
                            class="block w-auto px-4 py-3 mx-auto text-sm bg-gray-100 border-transparent rounded-lg course pe-9 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none ">
                            <option value="">-- Sélectionner un étudiant --</option>
                            @foreach ($students as $student)
                                <option value="{{ $student['matricule'] }}">{{ $student['matricule'] }} -
                                    {{ $student['first_name'] }}
                                    {{ $student['last_name'] }}</option>
                            @endforeach
                        </select>
                        <button type="submit"
                            class="inline-flex justify-center px-4 py-2 mx-auto text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Ajouter
                            l'étudiant</button>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="px-4 py-3 bg-gray-50 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="button" wire:click="closeModal"
                        class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Fermer</button>
                </div>
            </div>
        </div>
    </div>

</div>
