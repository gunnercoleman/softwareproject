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

                    <div class="border flex mt-10 mb-10 space-x-2 rounded-lg shadow-md p-6 bg-white justify-center max-w-xl mx-auto">
                        <h1 class="font-bold text-black-600 mb-2" style="font-size: 3rem;">Associated Items</h1>
                     </div>

                    <ul class="flex">
                        @foreach($brand->items as $item)
                        <div>
                                <h1 class="font-bold text-black-600 mb-2" style="font-size: 2rem;">{{ $item->name }}</h1>

                                <h3 class="font-semibold text-lg mb-4">Environmental Impact: {{ $item->environmental_impact }}</h3>

                                <h3 class="font-semibold text-lg mb-4">Price: {{ $item->price }}</h3>

                                <h3 class="font-semibold text-lg mb-4">Description: {{ $item->description }}</h3>

                                <div class="overflow-hidden rounded-lg flex justify-center mx-10">
                                    <img src="{{ asset('images/brands/' . $item->image)}}" alt="{{$item->name}}"
                                    class="w-full max-w-xs h-auto object-cover">
                                </div>
                        </div>

                                <button>
                                <a href="{{ route('items.edit', $item) }}" class="text-gray-600 bg-gray-300 hover:bg-red-700 font-bold py-2 px-4 rounded">
                                    Edit
                                </a>
                                </button>

                        @endforeach
                    </ul>

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