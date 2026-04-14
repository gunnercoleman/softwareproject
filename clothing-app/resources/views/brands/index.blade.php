<x-app-layout>


    <x-alert-success>
        {{ session('success') }}
    </x-alert-success>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Header -->
            <div class="mb-6">
                <h1 class="text-3xl font-bold text-green-800 mb-2">
                    Explore Brands
                </h1>

                <p class="text-gray-600 max-w-2xl">
                    Browse a range of clothing brands and learn more about their environmental impact,
                    materials, and sustainability practices. Compare options and discover better alternatives.
                </p>
            </div>

            <!-- Card Container -->
            <div class="bg-white border border-gray-200 rounded-lg shadow-md p-6">

                <!-- Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 auto-rows-fr">

                    @foreach ($brands as $brand)
                        <a href="{{ route('brands.show', $brand) }}" class="h-full block">
                            <x-brand-card
                                :name="$brand->name"
                                :environmental_score="$brand->environmental_score"
                                :environmental_impact="$brand->environmental_impact"
                                :description="$brand->description"
                                :image="$brand->image"
                            />
                        </a>
                    @endforeach

                </div>

            </div>

        </div>
    </div>

</x-app-layout>