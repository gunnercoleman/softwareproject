<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Materials') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">Material Details</h3>
                    <a href="{{ route('materials.show', $material) }}">
                        <x-material-details
                            :name="$material->name"
                            :image="$material->image"
                            :description="$material->description"
                            :environmental_impact="$material->environmental_impact"
                        />
                    </a>
                    
                    @if(Auth::user()->role === 'admin')
                    <div class="flex justify-center mb-10">
                        <div class="flex gap-4 justify-center">
                            <a href="{{ route('materials.edit', $material) }}"
                                class="inline-flex items-center justify-center px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                                Edit Material
                            </a>

                            <form action="{{ route('materials.destroy', $material) }}" method="POST" class="inline-flex"
                                onsubmit="return confirm('Delete this material?');">
                                @csrf
                                @method('DELETE')

                                <button 
                                    class="inline-flex items-center justify-center px-5 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                    @endif

                </div>    
            </div>        
        </div>            
    </div>         
</x-app-layout>
