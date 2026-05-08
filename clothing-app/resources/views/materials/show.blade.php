<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Material Details') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50">
        <div class="max-w-5xl mx-auto px-6">

            <!-- Material Card -->
            <div class="bg-white shadow-md rounded-xl p-8">

                <x-material-details
                    :name="$material->name"
                    :image="$material->image"
                    :description="$material->description"
                    :environmental_impact="$material->environmental_impact"
                />

                <!-- Admin Actions -->
                @if(Auth::user()->role === 'admin')

                    <div class="mt-10 flex justify-end gap-3 border-t pt-6">

                        <a href="{{ route('materials.edit', $material) }}"
                           class="px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                            Edit
                        </a>

                        <form action="{{ route('materials.destroy', $material) }}"
                              method="POST"
                              onsubmit="return confirm('Delete this material?');">

                            @csrf
                            @method('DELETE')

                            <button class="px-5 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">
                                Delete
                            </button>

                        </form>

                    </div>

                @endif

            </div>

        </div>
    </div>
</x-app-layout>
