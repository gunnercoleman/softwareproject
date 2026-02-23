<div>
    <x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Brands') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">Brand Details</h3>
                    <a href="{{ route('brands.show', $brand) }}">
                        <x-brand-details
                            :name="$brand->name"
                            :image="$brand->image"
                            :description="$brand->description"
                            :environmental_score="$brand->environmental_score"
                            :environmental_impact="$brand->environmental_impact"
                        />

                    </a>

                    <div class="border flex space-x-2 rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300 max-w-xl mx-auto">

                            @if(Auth::user()->role === 'admin')

                                <button>
                                <a href="{{ route('brands.edit', $brand) }}" class="text-gray-600 bg-gray-300 hover:bg-red-700 font-bold py-2 px-4 rounded">
                                    Edit
                                </a>
                                </button>

                            @endif    

                                <form action="{{ route('brands.destroy', $brand) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this brand?');">

                                @if(Auth::user()->role === 'admin')

                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-gray-600 bg-gray-300 hover:bg-red-700 font-bold py-2 px-4 rounded">
                                        Delete
                                    </button>

                                @endif

                                </form>


            </div>
        </div>
    </div>
</x-app-layout>
</div>