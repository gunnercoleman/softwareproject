@props(['name', 'image', 'description', 'environmental_impact'])

<div class="bg-white border border-gray-200 rounded-xl shadow-sm hover:shadow-md transition p-6 max-w-2xl mx-auto">

    <h1 class="text-2xl font-bold text-gray-800 mb-4">
        {{ $name }}
    </h1>

    <div class="flex justify-center mb-6">
        <img src="{{ asset('images/materials/' . $image) }}"
             alt="{{ $name }}"
             class="w-full max-w-sm h-56 object-cover rounded-lg">
    </div>

    <div class="mb-5">
        <h3 class="text-sm font-semibold text-lime-700 uppercase tracking-wide mb-1">
            Description
        </h3>
        <p class="text-gray-600 leading-relaxed text-sm">
            {{ $description }}
        </p>
    </div>

    <div>
        <h3 class="text-sm font-semibold text-lime-700 uppercase tracking-wide mb-1">
            Environmental Impact
        </h3>
        <p class="text-gray-600 leading-relaxed text-sm">
            {{ $environmental_impact }}
        </p>
    </div>

</div>