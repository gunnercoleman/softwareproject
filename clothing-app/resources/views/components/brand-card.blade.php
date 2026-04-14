@props(['image', 'name', 'description', 'environmental_score', 'environmental_impact'])

<div class="group bg-white border border-gray-200 rounded-xl shadow-md overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col h-full">

    <!-- Image Section -->
    <div class="relative h-48 overflow-hidden flex-shrink-0">
        <img 
            src="{{ asset('images/brands/' . $image) }}" 
            alt="{{ $name }}"
            class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
        >

        <!-- Score -->
        <div class="absolute top-3 right-3 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-xs font-semibold text-green-800 shadow-sm">
            {{ $environmental_score }}
        </div>

        <!-- Gradient -->
        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-black/10 to-transparent"></div>

        <!-- Name -->
        <h2 class="absolute bottom-3 left-4 text-white text-lg font-bold drop-shadow">
            {{ $name }}
        </h2>
    </div>

    <!-- Content -->
    <div class="p-5 flex flex-col flex-grow">

        <!-- Description -->
        <p class="text-gray-600 text-md leading-relaxed mb-4 flex-grow">
            {{ Str::limit($description, 100) }}
        </p>

        <!-- Bottom Section -->
        <div class="flex items-center justify-between mt-auto">

            @if($environmental_impact)
                <span class="text-xs font-medium px-3 py-1 rounded-full
                    {{ $environmental_impact === 'Low' ? 'bg-green-100 text-green-700' : '' }}
                    {{ $environmental_impact === 'Medium' ? 'bg-yellow-100 text-yellow-700' : '' }}
                    {{ $environmental_impact === 'High' ? 'bg-red-100 text-red-700' : '' }}">
                    {{ $environmental_impact }} Impact
                </span>
            @endif

            <span class="text-sm font-semibold text-green-700 group-hover:underline">
                View →
            </span>

        </div>

    </div>
</div>