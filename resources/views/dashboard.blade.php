<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-4">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Dear Fellow Learner, keep striving for a better future, and know your rights!") }}
                </div>

                <!-- New Section for Housing Rights Information -->
                <div class="mt-6 bg-gray-900 text-white p-6 rounded-lg">
                    <h3 class="text-2xl font-bold">Housing Rights in the Philippines</h3>
                    <p class="mt-4">
                        The right to adequate housing is recognized as a fundamental human right in various laws and policies in the Philippines.
                        <br> This includes protection against forced evictions, access to affordable housing, and security of tenure.
                    </p>

                    <p class="mt-4">
                        Key laws in the Philippines related to Housing Rights:
                    </p>
                    <ul class="mt-2 list-disc list-inside">
                        <li>> Urban Development and Housing Act (RA 7279)</li>
                        <li>> Rental Regulation Act (RA 9653)</li>
                        <li>> Socialized Housing Program (RA 11201)</li>
                        <li>> Anti-Squatting Law (RA 7279, amended by RA 8368)</li>
                    </ul>

                    <p class="mt-4">
                        Remember, ensuring proper housing rights protects vulnerable communities and promotes social justice.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Section -->
    <div class="mt-6 border-t border-gray-200 dark:border-gray-700 pt-6">
        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-3">Learn More</h3>
        <div class="flex flex-col sm:flex-row gap-3">
            <a href="{{ route('housing-rights') }}" class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 transition">
                Housing Rights
            </a>
            <a href="{{ route('philippine-laws') }}" class="px-4 py-2 bg-green-600 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 transition">
                Philippine Laws on Housing
            </a>
            <a href="{{ route('importance-of-housing') }}" class="px-4 py-2 bg-purple-600 text-white font-semibold rounded-lg shadow-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-400 transition">
                Importance of Housing
            </a>
        </div>
    </div>
</x-app-layout>
