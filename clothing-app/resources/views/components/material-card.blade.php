@props(['image', 'name', 'description', 'environmental_impact'])

<div class="border rounded-lg shadow-md bg-white p-4 h-full flex flex-col">

    <div class="w-full h-48 mb-4">
        <img 
            src="{{ asset('images/materials/' . $image) }}" 
            alt="{{ $name }}" 
            class="w-full h-full object-cover rounded"
        >
    </div>

    <h1 class="font-bold text-xl mb-2">{{ $name }}</h1>

    <p class="text-sm mb-2 line-clamp-3">
        {{ $description }}
    </p>

</div>