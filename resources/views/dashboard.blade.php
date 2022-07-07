<x-app-layout>
    <div class="py-12" x-data="{ modalOpen:false }">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 text-center">
                    <h2 class="p-6">Find out your next movie to watch</h2>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Generate</button>
                    <livewire:settings-modal />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>