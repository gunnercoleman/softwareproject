<x-app-layout>

    <div class="bg-gray-50 min-h-screen">

        <!-- HERO SECTION -->
        <div class="relative h-[300px] w-full overflow-hidden">
            <img 
                src="{{ asset('images/brands/' . $brand->image) }}" 
                class="w-full h-full object-cover"
            >

            <!-- Overlay -->
            <div class="absolute inset-0 bg-black/50"></div>

            <!-- Content -->
            <div class="absolute inset-0 flex flex-col justify-center items-center text-center text-white px-4">
                <h1 class="text-4xl font-bold mb-2">
                    {{ $brand->name }}
                </h1>

                <p class="max-w-2xl text-sm text-gray-200">
                    {{ $brand->description }}
                </p>
            </div>
        </div>

        <!-- Main Content -->
        <div class="max-w-6xl mx-auto px-6 py-10">

            <!-- Info -->
            <div class="grid md:grid-cols-3 gap-6 mb-10">

                <!-- Score -->
                <div class="bg-white border border-gray-200 rounded-xl shadow-md p-6 text-center">
                    <h3 class="text-sm text-gray-500 mb-1">Environmental Score</h3>
                    <p class="text-3xl font-bold text-green-700">
                        {{ $brand->environmental_score }}
                    </p>
                </div>

                <!-- Impact -->
                <div class="bg-white border border-gray-200 rounded-xl shadow-md p-6 text-center">
                    <h3 class="text-sm text-gray-500 mb-1">Impact Level</h3>

                    <span class="px-4 py-2 rounded-full text-sm font-semibold
                        {{ $brand->environmental_impact === 'Low' ? 'bg-green-100 text-green-700' : '' }}
                        {{ $brand->environmental_impact === 'Medium' ? 'bg-yellow-100 text-yellow-700' : '' }}
                        {{ $brand->environmental_impact === 'High' ? 'bg-red-100 text-red-700' : '' }}">
                        {{ $brand->environmental_impact }}
                    </span>
                </div>

                <!-- Items Count -->
                <div class="bg-white border border-gray-200 rounded-xl shadow-md p-6 text-center">
                    <h3 class="text-sm text-gray-500 mb-1">Products Listed</h3>
                    <p class="text-3xl font-bold text-green-700">
                        {{ $brand->items->count() }}
                    </p>
                </div>

            </div>


            @if(Auth::user()->role === 'admin')
            <div class="flex gap-4 mb-10 justify-center">

                <a href="{{ route('brands.edit', $brand) }}"
                    class="px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                    Edit Brand
                </a>

                <form action="{{ route('brands.destroy', $brand) }}" method="POST"
                    onsubmit="return confirm('Delete this brand?');">
                    @csrf
                    @method('DELETE')

                    <button 
                        class="px-5 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">
                        Delete
                    </button>
                </form>

            </div>
            @endif

            <!-- ITEMS SECTION -->
            <div class="mb-6 text-center">
                <h2 class="text-2xl font-bold text-green-800 mb-2">
                    Products from this Brand
                </h2>
                <p class="text-gray-600">
                    Explore individual items and their environmental impact.
                </p>
            </div>

            <!-- ITEMS GRID -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

                @foreach($brand->items as $item)

                <div class="bg-white border border-gray-200 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition flex flex-col">

                    <!-- Image -->
                    <div class="h-44 overflow-hidden">
                        <img 
                            src="{{ asset('images/items/' . $item->image) }}" 
                            class="w-full h-full object-cover"
                        >
                    </div>

                    <!-- Content -->
                    <div class="p-5 flex flex-col flex-grow">

                        <h3 class="text-lg font-bold text-green-800 mb-1">
                            {{ $item->name }}
                        </h3>

                        <p class="text-sm text-gray-500 mb-2">
                            €{{ $item->price }}
                        </p>

                        <p class="text-sm text-gray-600 mb-3 flex-grow">
                            {{ Str::limit($item->description, 80) }}
                        </p>

                        <span class="text-xs font-medium px-3 py-1 rounded-full w-fit
                            {{ $item->environmental_impact === 'Low' ? 'bg-green-100 text-green-700' : '' }}
                            {{ $item->environmental_impact === 'Medium' ? 'bg-yellow-100 text-yellow-700' : '' }}
                            {{ $item->environmental_impact === 'High' ? 'bg-red-100 text-red-700' : '' }}">
                            {{ $item->environmental_impact }} Impact
                        </span>

                    </div>

                     @if(Auth::user()->role === 'admin')
                    <div class="flex gap-4 mb-10 justify-center">

                        <a href="{{ route('items.edit', $item) }}"
                            class="px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                            Edit Item
                        </a>

                        <form action="{{ route('items.destroy', $item) }}" method="POST"
                            onsubmit="return confirm('Delete this item?');">
                            @csrf
                            @method('DELETE')

                            <button 
                                class="px-5 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">
                                Delete
                            </button>
                        </form>

                    </div>
                    @endif

                </div>

                @endforeach

            </div>

        </div>
    </div>

</x-app-layout>