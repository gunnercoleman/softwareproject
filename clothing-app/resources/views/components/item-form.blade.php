

    @props(['action', 'method', 'item', 'brands' => []])

    <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
        @csrf

        @if($method === 'PUT' || $method === 'PATCH')
            @method($method)
        @endif

        <!-- Name Input -->
        <div class="mb-4">
            <label for="name" class="block text-sm text-gray-700">Name</label>
            <input
                type="text"
                name="name"
                id="name"
                value="{{ old('name', $item->name ?? '') }}"
                required
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
            />
            @error('name')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- environmental_score Input  -->

        <div class="mb-4">
            <label for="environmental_score" class="block text-sm text-gray-700">Environmental Score</label>
            <input
                type="text"
                name="environmental_score"
                id="environmental_score"
                value="{{ old('environmental_score', $item->environmental_score ?? '') }}"
                required
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
            />
            @error('environmental_score')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- environmental_impact Input -->
        <div class="mb-4">
            <label for="environmental_impact" class="block text-sm text-gray-700">Environmental Impact</label>
            <input
                type="text"
                name="environmental_impact"
                id="environmental_impact"
                value="{{ old('environmental_impact', $item->environmental_impact ?? '') }}"
                required
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
            />
            @error('environmental_impact')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Description Input -->

        <div class="mb-4">
            <label for="description" class="block text-sm text-gray-700">Description</label>
            <input
                type="text"
                name="description"
                id="description"
                value="{{ old('description', $item->description ?? '') }}"
                required
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
            />
            @error('description')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Price Input -->

        <div class="mb-4">
            <label for="price" class="block text-sm text-gray-700">Price</label>
            <input
                type="text"
                name="price"
                id="price"
                value="{{ old('price', $item->price ?? '') }}"
                required
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
            />
            @error('price')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        
        <!-- Brands -->

        <div class="mt-2 mb-5 space-y-2">
            @foreach($brands as $brand)
                <div class="flex items-center px-5">
                    <input
                        type="checkbox"
                        name="brands[]"
                        id="brand_{{ $brand->id }}"
                        value="{{ $brand->id }}"
                        @checked(isset($item) && $item->brands->contains($brand->id))
                        class="h-4 w-4 text-blue-600 border-gray-300 rounded"
                    />

                    <label for="brand_{{ $brand->id }}" class="ml-2 text-sm text-gray-700">
                        {{ $brand->name }}
                    </label>
                </div>
            @endforeach
        </div>

        <!-- Image Upload -->
        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Item Image</label>
            <input
                type="file"
                name="image"
                id="image"
                {{ isset($item) ? '' : 'required' }}
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
            />
            @error('image')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Preview Existing Image -->
        @isset($item->image)
            <div class="mb-4">
                <img src="{{ asset('images/brands/' . $item->image) }}" alt="$brand->image" class="w-24 h-32 object-cover">
            </div>
        @endisset

        {{-- Submit Button --}}
        <div>
            <x-primary-button>
                {{ isset($item) ? 'Update Item' : 'Add Item' }}
            </x-primary-button>
        </div>
    </form>