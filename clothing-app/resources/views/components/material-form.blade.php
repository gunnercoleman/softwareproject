

    @props(['action', 'method', 'material', 'items' => []])

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
                value="{{ old('name', $material->name ?? '') }}"
                required
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
            />
            @error('name')
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
                value="{{ old('description', $material->description ?? '') }}"
                required
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
            />
            @error('description')
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
                value="{{ old('environmental_impact', $material->environmental_impact ?? '') }}"
                required
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
            />
            @error('environmental_impact')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        
        <!-- Brands -->
        <div class="mb-4">
            <label for="item_id" class="block text-sm text-gray-700">Associated Items</label>

            <select name="item_id" id="item_id"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">

                @foreach($items as $item)
                    <option value="{{ $item->id }}"
                        @selected(old('item_id', $material->item_id ?? '') == $item->id)>
                        {{ $item->name }}
                    </option>
                @endforeach

            </select>

            @error('item_id')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>


        <!-- Image Upload -->
        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Material Image</label>
            <input
                type="file"
                name="image"
                id="image"
                {{ isset($material) ? '' : 'required' }}
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
            />
            @error('image')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>


        <!-- Preview Existing Image -->
        @isset($material->image)
            <div class="mb-4">
                <img src="{{ asset('images/materials/' . $material->image) }}" alt="$material->image" class="w-24 h-32 object-cover">
            </div>
        @endisset

        {{-- Submit Button --}}
        <div>
            <x-primary-button>
                {{ isset($material) ? 'Update Material' : 'Add Material' }}
            </x-primary-button>
        </div>
    </form>