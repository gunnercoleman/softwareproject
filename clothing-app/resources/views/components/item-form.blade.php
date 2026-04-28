

    @props(['action', 'method', 'item', 'brands' => [], 'categories' => []])

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

        <div class="mb-4">
            <label for="brand_id" class="block text-sm text-gray-700">Brand</label>

            <select name="brand_id" id="brand_id"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">

                @foreach($brands as $brand)
                    <option value="{{ $brand->id }}"
                        @selected(old('brand_id', $item->brand_id ?? '') == $brand->id)>
                        {{ $brand->name }}
                    </option>
                @endforeach

            </select>

            @error('brand_id')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

         <!-- Category -->

         <div class="mb-4">
            <label for="category_id" class="block text-sm text-gray-700">Category</label>

            <select name="category_id" id="category_id"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">

                @foreach($categories as $category)
                    <option value="{{ $category->id }}"
                        @selected(old('category_id', $item->category_id ?? '') == $category->id)>
                        {{ $category->name }}
                    </option>
                @endforeach

            </select>

            @error('category_id')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror

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
                <img src="{{ asset('images/items/' . $item->image) }}" alt="$item->image" class="w-24 h-32 object-cover">
            </div>
        @endisset

        {{-- Submit Button --}}
        <div>
            <x-primary-button>
                {{ isset($item) ? 'Update Item' : 'Add Item' }}
            </x-primary-button>
        </div>
    </form>