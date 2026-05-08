<x-app-layout>

<div class="max-w-7xl mx-auto p-6">

    <!-- Header -->
    <div class="mb-6">
        <h1 class="text-3xl font-bold text-green-800 mb-2">
            Explore Items in the {{ $category->name }} Category
        </h1>

        <p class="text-gray-600 max-w-2xl">
            Browse a range of clothing materials and learn more about their environmental impact,
            properties, and sustainability practices. Compare options and discover better alternatives.
        </p>

        @if(Auth::user()->role === 'admin')

            <div class="mt-10 flex justify-center gap-4 pt-6 border-t">

                <!-- Edit Category -->
                <a href="{{ route('categories.edit', $category) }}"
                class="px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                    Edit Category
                </a>

                <!-- Delete Category -->
                <form action="{{ route('categories.destroy', $category) }}" method="POST"
                    onsubmit="return confirm('Are you sure you want to delete this category?');">

                    @csrf
                    @method('DELETE')

                    <button class="px-5 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">
                        Delete Category
                    </button>

                </form>

            </div>

        @endif
        
    </div>


    @if($items->count() > 0)

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            @foreach($items as $item)

                <!-- CLICKABLE CARD -->
                <a href="{{ route('items.show', $item) }}"
                   class="block bg-white shadow rounded p-4 hover:shadow-lg hover:-translate-y-1 transform transition duration-200">

                    <img src="{{ asset('images/items/' . $item->image) }}"
                         class="w-full h-40 object-cover mb-3 rounded">

                    <h2 class="font-semibold text-gray-800">
                        {{ $item->name }}
                    </h2>

                    <p class="text-sm text-gray-600">
                        €{{ $item->price }}
                    </p>

                </a>

            @endforeach


        </div>

    @else

        <p>No items in this category.</p>

    @endif

</div>

</x-app-layout>