<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Philippine Laws on Housing') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-2xl font-bold">Key Philippine Housing Laws</h3>
                    <p class="mt-4">
                        Several laws regulate housing rights in the Philippines to ensure fair access to housing, protect tenants, and support urban development:
                    </p>

                    <ul class="mt-4 list-disc list-inside">
                        <li><strong>Republic Act No. 7279</strong> - The Urban Development and Housing Act (UDHA), which promotes social housing programs.</li>
                        <li><strong>Republic Act No. 9653</strong> - The Rent Control Act, protecting tenants from unreasonable rental increases.</li>
                        <li><strong>Republic Act No. 11201</strong> - Establishes the Department of Human Settlements and Urban Development (DHSUD).</li>
                        <li><strong>Republic Act No. 8368</strong> - Repealed the Anti-Squatting Law but retains provisions to prevent illegal settlements.</li>
                    </ul>

                    <p class="mt-4">
                        These laws serve to ensure that housing remains a right, not a privilege, and that citizens have legal recourse against unjust evictions and housing policies.
                    </p>

                    <!-- Download Button -->
                    <div class="mt-6">
                        <a href="{{ asset('pdfs/housing_rights.pdf') }}"
                           download="Philippine_Housing_Laws.pdf"
                           class="bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded">
                            Download PDF
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
