

    @props(['action', 'method', 'brand'])

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
                value="{{ old('name', $brand->name ?? '') }}"
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
                value="{{ old('environmental_score', $brand->environmental_score ?? '') }}"
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
                value="{{ old('environmental_impact', $brand->environmental_impact ?? '') }}"
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
                value="{{ old('description', $brand->description ?? '') }}"
                required
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
            />
            @error('description')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Image Upload -->
        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Brand Image</label>
            <input
                type="file"
                name="image"
                id="image"
                {{ isset($brand) ? '' : 'required' }}
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
            />
            @error('image')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Preview Existing Image -->
        @isset($brand->image)
            <div class="mb-4">
                <img src="{{ asset('images/brands/' . $brand->image) }}" alt="$brand->image" class="w-24 h-32 object-cover">
            </div>
        @endisset

        {{-- Submit Button --}}
        <div>
            <x-primary-button>
                {{ isset($brand) ? 'Update Brand' : 'Add Brand' }}
            </x-primary-button>
        </div>
    </form>