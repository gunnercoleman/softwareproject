<div>
    <x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Brands') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">Brand Details</h3>
                    <a href="{{ route('brands.show', $brand) }}">
                        <x-brand-details
                            :name="$brand->name"
                            :image="$brand->image"
                            :description="$brand->description"
                            :environmental_score="$brand->environmental_score"
                            :environmental_impact="$brand->environmental_impact"
                        />


            </div>
        </div>
    </div>
</x-app-layout>
</div>