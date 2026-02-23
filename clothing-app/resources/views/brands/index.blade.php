<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Brands') }}
        </h2>
    </x-slot>

    <x-alert-success>
        {{ session('success') }}
    </x-alert-success>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">List of Brands</h3>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($brands as $brand)
                        <a href="{{ route('brands.show', $brand) }}">
                            <x-brand-card
                                :name="$brand->name"
                                :environmental_score="$brand->environmental_score"
                                :environmental_impact="$brand->environmental_impact"
                                :description="$brand->description"
                                :image="$brand->image"
                            />

                        @endforeach
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>