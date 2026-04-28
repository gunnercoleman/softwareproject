<x-app-layout>

    <x-alert-success>
        {{ session('success') }}
    </x-alert-success>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                                
                    <!-- Header -->
                    <div class="mb-6">
                        <h1 class="text-3xl font-bold text-green-800 mb-2">
                            Explore Materials
                        </h1>

                        <p class="text-gray-600 max-w-2xl">
                            Browse a range of clothing materials and learn more about their environmental impact,
                            properties, and sustainability practices. Compare options and discover better alternatives.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                        @foreach ($materials as $material)
                        <a href="{{ route('materials.show', $material) }}">
                            <x-material-card
                                :name="$material->name"
                                :environmental_impact="$material->environmental_impact"
                                :description="$material->description"
                                :image="$material->image"
                            />
                        @endforeach
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>