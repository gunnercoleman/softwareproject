<x-app-layout>
    <div class="py-12 bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Hero / Welcome Section -->
            <div class="bg-white overflow-hidden sm:rounded-lg mb-6 shadow-md">
                <div class="p-8 text-gray-900">

                    <h1 class="text-3xl font-bold text-green-800 mb-4">
                        Welcome to GreenClothing
                    </h1>

                    <p class="text-lg text-gray-600 leading-relaxed">
                        GreenClothing is a platform that intends to help you make more informed and sustainable fashion choices. We take a look at varios clothing brands and products, comparing how they are made, and what materials were used during production, good or bad. Our platform does this so you dont have to, allowing you to better understand their impact on the environment. 
                    </p>

                </div>
            </div>

            <!-- Banner -->
            <div class="mt-6 rounded-lg overflow-hidden shadow-md mb-6">
                <img 
                    src="{{ asset('images/sussy.jpeg') }}" 
                    alt="GreenClothing Banner"
                    class="w-full h-auto object-cover"
                />
            </div>

            <!-- About Us Section -->
            <div class="bg-white overflow-hidden sm:rounded-lg mb-6 shadow-md">
                <div class="p-8 text-gray-900">
                    <h2 class="text-2xl font-semibold text-green-800 mb-4">About Us</h2>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        The fashion industry is one of the largest contributors to global pollution. At GreenClothing, our goal is to make sustainable fashion easier to understand by giving people clear and simple information about clothing materials, brand ethics, and environmental impact.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        Whether a product is made from organic cotton, recycled polyester, or synthetic blends, we provide information into the environmental implications of each material and brand. Our goal is to encourage consumers to make choices that are better for the planet and promote a more sustainable future for fashion.
                    </p>
                </div>
            </div>

            <!-- Mission Section -->
            <div class="grid md:grid-cols-3 gap-6 mb-6">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-green-800 mb-2">Compare Brands</h3>
                    <p class="text-gray-600">
                        View side-by-side comparisons of sustainable and non-sustainable clothing brands to better understand their impact.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-green-800 mb-2">Material Insights</h3>
                    <p class="text-gray-600">
                        Learn about different materials such as cotton, polyester, wool, and recycled fabrics, and how they affect the planet.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-green-800 mb-2">Better Alternatives</h3>
                    <p class="text-gray-600">
                        Discover eco-friendly alternatives to popular products and make more sustainable shopping decisions.
                    </p>
                </div>
            </div>

            <!-- Banner Section -->
            <div class="mt-6 rounded-lg overflow-hidden shadow-md">
                <img 
                    src="{{ asset('images/homeimage.jpg') }}" 
                    alt="GreenClothing Banner"
                    class="w-full h-auto object-cover"
                />
            </div>

            <!-- Final Section -->
            <div class="bg-lime-700 text-white rounded-lg shadow-sm p-8 text-center">

                <h2 class="text-2xl font-bold mb-2">Our Mission</h2>

                <p class="text-green-100 leading-relaxed max-w-3xl mx-auto">
                    To educate and empower users to make environmentally conscious fashion choices by providing transparent,
                    accessible, and data-driven insights into clothing brands and materials.
                </p>

            </div>

        </div>
    </div>
    
</x-app-layout>
