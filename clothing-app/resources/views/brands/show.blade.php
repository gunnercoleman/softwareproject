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

                    <div class="flex flex-col gap-3 items-center mt-6">

                    @if(Auth::user()->role === 'admin')

                        <!-- Edit -->
                        <a href="{{ route('brands.edit', $brand) }}"
                            class="w-48 text-center text-gray-600 bg-gray-300 hover:bg-blue-700 font-bold py-2 px-4 rounded transition duration-200">
                            Edit
                        </a>

                        <!-- Delete -->
                        <form action="{{ route('brands.destroy', $brand) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this brand?');"
                                class="w-48">
                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                class="w-full text-white bg-red-600 hover:bg-red-800 font-bold py-2 px-4 rounded transition duration-200">
                                Delete
                            </button>
                        </form>

                    @endif

                    </div>

                    <div class="border flex mt-10 mb-10 space-x-2 rounded-lg shadow-md p-6 bg-white justify-center max-w-xl mx-auto">
                        <h1 class="font-bold text-black-600 mb-2" style="font-size: 3rem;">Associated Items</h1>
                     </div>

                    <div class="flex flex-wrap gap-10 justify-center">
                        @foreach($brand->items as $item)

                        <div class="border rounded-lg shadow-md p-6 bg-white max-w-sm">

                            <h1 class="font-bold mb-2 text-2xl">{{ $item->name }}</h1>

                            <h3 class="mb-2">Environmental Impact: {{ $item->environmental_impact }}</h3>
                            <h3 class="mb-2">Price: {{ $item->price }}</h3>
                            <h3 class="mb-4">Description: {{ $item->description }}</h3>

                            <div class="flex justify-center mb-4">
                                <img src="{{asset('images/items/' . $item->image)}}" alt="{{ $item->name }}"
                                class="w-full max-w-xs h-auto object-cover rounded">
                            </div>

                            <!-- Buttons UNDER everything -->
                            <div class="flex flex-col gap-2">
                                <a href="{{ route('items.edit', $item) }}" 
                                class="text-center text-gray-600 bg-gray-300 hover:bg-red-700 font-bold py-2 px-4 rounded">
                                    Edit
                                </a>

                                <form action="{{ route('items.destroy', $item) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="w-full text-gray-600 bg-red-500 hover:bg-red-700 font-bold py-2 px-4 rounded">
                                        Delete
                                    </button>
                                </form>
                            </div>

                        </div>
                        @endforeach
                    </div>
    </div>
</x-app-layout>
</div>