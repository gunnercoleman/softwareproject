<x-app-layout>

<div class="py-12 bg-gray-50">
    <div class="max-w-5xl mx-auto px-6">

        <div class="bg-white rounded-xl shadow-md p-8">

            <!-- Item Header -->
            <h1 class="text-3xl font-bold text-gray-800 mb-2">
                {{ $item->name }}
            </h1>

            <p class="text-gray-500 mb-6">
                Brand: {{ $item->brand->name }} |
                Category: {{ $item->category->name }}
            </p>

            <!-- Image -->
            <div class="mb-6">
                <img src="{{ asset('images/items/' . $item->image) }}"
                     class="w-full max-w-md h-64 object-cover rounded-lg">
            </div>

            <!-- Description -->
            <div class="mb-6">
                <h3 class="text-lime-700 font-semibold mb-1">Description</h3>
                <p class="text-gray-600">
                    {{ $item->description }}
                </p>
            </div>

            <!-- Price / Score -->
            <div class="flex gap-6 mb-8 text-sm text-gray-700">
                <p><strong>Price:</strong> €{{ $item->price }}</p>
                <p><strong>Score:</strong> {{ $item->environmental_score }}</p>
                <p><strong>Impact:</strong> {{ $item->environmental_impact }}</p>
            </div>

            <!-- Materials -->
            <div>
                <h3 class="text-lime-700 font-semibold mb-3">
                    Materials Used
                </h3>

                <div class="flex flex-wrap gap-2">

                    @forelse($item->materials as $material)

                        <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm">
                            {{ $material->name }}
                        </span>

                    @empty

                        <p class="text-gray-500">No materials assigned.</p>

                    @endforelse

                </div>
            </div>

            @if(Auth::user()->role === 'admin')

            <div class="mt-10 flex justify-end gap-3 border-t pt-6">

                <a href="{{ route('items.edit', $item) }}"
                    class="px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                    Edit
                </a>

                <form action="{{ route('items.destroy', $item) }}"
                     method="POST"
                        onsubmit="return confirm('Delete this material?');">

                    @csrf
                    @method('DELETE')

                    <button class="px-5 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">
                        Delete
                    </button>

                </form>

            </div>

            @endif

        </div>

    </div>
</div>

</x-app-layout>