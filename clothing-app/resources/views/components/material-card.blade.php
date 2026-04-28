@props(['image', 'name', 'description', 'environmental_impact'])

<div class="border rounded-2xl shadow-sm bg-white overflow-hidden flex flex-col h-full transition transform hover:scale-[1.02] hover:shadow-lg duration-300">

    <!-- Image -->
    <div class="w-full h-52 overflow-hidden">
        <img 
            src="{{ asset('images/materials/' . $image) }}" 
            alt="{{ $name }}" 
            class="w-full h-full object-cover hover:scale-105 transition duration-300"
        >
    </div>

    <!-- Content -->
    <div class="p-4 flex flex-col flex-1">

        <!-- Title -->
        <h1 class="font-semibold text-lg mb-2 text-gray-800">
            {{ $name }}
        </h1>

        <!-- Description -->
        <p class="text-sm text-gray-600 mb-4 line-clamp-3">
            {{ $description }}
        </p>


        @php
            $impact = strtolower($environmental_impact);

            $badWords = ['bad', 'poor', 'non-sustainable', 'very bad', 'high impact'];
            $goodWords = ['good', 'low impact', 'sustainable', 'eco-friendly', 'beneficial'];

            $isBad = collect($badWords)->contains(fn($word) => str_contains($impact, $word));
            $isGood = collect($goodWords)->contains(fn($word) => str_contains($impact, $word));
        @endphp

        <span class="inline-block text-xs px-3 py-1 rounded-full
            {{ $isBad ? 'bg-red-100 text-red-600' : ($isGood ? 'bg-green-100 text-green-600' : 'bg-yellow-100 text-yellow-600') }}">
            {{ $environmental_impact }}
        </span>

    </div>
</div>