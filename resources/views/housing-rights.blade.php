<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Housing Rights') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-2xl font-bold">Understanding Housing Rights</h3>
                    <p class="mt-4">
                        The right to adequate housing is a fundamental human right recognized in various legal frameworks in the Philippines.
                        It ensures every individual has access to a safe, habitable, and affordable home.
                    </p>

                    <p class="mt-4">
                        This right is protected under international human rights treaties and Philippine laws, such as:
                    </p>
                    <ul class="mt-2 list-disc list-inside">
                        <li>Urban Development and Housing Act (RA 7279)</li>
                        <li>Rental Regulation Act (RA 9653)</li>
                        <li>Socialized Housing Program (RA 11201)</li>
                    </ul>

                    <p class="mt-4">
                        These laws aim to prevent forced evictions and provide better housing opportunities for low-income families.
                    </p>

                    <!-- Download Button -->
                    <div class="mt-6">
                        <a href="{{ asset('pdfs/housing_tips.pdf') }}"
                           download="housing_tips.pdf"
                           class="bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded">
                            Download PDF
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
