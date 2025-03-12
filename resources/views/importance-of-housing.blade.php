<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Importance of Housing') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-2xl font-bold">Why Housing is Essential</h3>
                    <p class="mt-4">
                        Housing is more than just shelter—it is a fundamental need that affects every aspect of human life.
                    </p>

                    <ul class="mt-4 list-disc list-inside">
                        <li><strong>Health & Well-being:</strong> Stable housing improves physical and mental health by providing a safe and secure environment.</li>
                        <li><strong>Economic Stability:</strong> Owning or renting a home allows individuals to participate in economic activities without constant fear of eviction.</li>
                        <li><strong>Social Development:</strong> Proper housing strengthens communities, reduces crime, and enhances education opportunities for children.</li>
                        <li><strong>Legal Protection:</strong> Housing rights protect people from unjust eviction and discrimination in real estate markets.</li>
                    </ul>

                    <p class="mt-4">
                        Governments and organizations worldwide recognize the necessity of ensuring adequate housing as a basic human right.
                    </p>
                    <!-- Download Button -->
                    <div class="mt-6">
                        <a href="{{ asset('pdfs/Pros and Cons.pdf') }}"
                           download="Pros_and_Cons.pdf"
                           class="bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded">
                            Download PDF
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>


</x-app-layout>
