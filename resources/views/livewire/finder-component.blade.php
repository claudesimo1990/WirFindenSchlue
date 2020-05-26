<div>
    <div class="">
        <div class="mb-6 ml-10">
            <label class="block text-black font-bold">
                <span class="text-sm">Der Schlüßel wurde von mir an folgenden Polizeiabschnitt hinterlegt Bzw einen Polizeibeamten
                        übergeben.</span>
                <input wire:model.debounce.500ms="perPolizei" class="ml-5 text-black" type="checkbox">
            </label>
        </div>
        @if($perPolizei)
            <div>
                <form class="bg-white shadow-md rounded px-12 pt-6 pb-8 mb-4 w-full">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="adresse_polizei">
                            Polizei Addresse
                        </label>
                        <input
                            class="shadow border rounded w-full py-5 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="adresse_polizei" type="text" placeholder="polizei Addresse" wire:model="addPolice">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                            Vorname und Nachname des finders (Optional)
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                            id="name" type="text" placeholder="Vorname + Nachname ..." wire:model="name">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="Kontaktnummer">
                            Kontaktnummer des finders (Optional)
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                            id="Kontaktnummer" type="text" placeholder="Kontaktnummer ..."  wire:model="nummer">
                    </div>
                    <div class="flex items-center justify-between">
                        <button
                            class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="button" wire:click="sendMessage">
                            Senden
                        </button>
                    </div>
                </form>
            </div>
        @endif
    </div>
</div>
