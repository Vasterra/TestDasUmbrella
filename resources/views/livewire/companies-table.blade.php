<div>
    <span class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg mt-3" wire:poll>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                    <tr>
                        <th
                            class="px-4 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider text-center">
                            Company name
                        </th>
                        <th
                            class="px-4 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider text-center">
                            Address
                        </th>
                        <th
                            class="px-4 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider text-center">
                            Phone number
                        </th>
                        <th
                            class="px-4 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider text-center">
                            Fax number
                        </th>
                        <th
                            class="px-4 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider text-center">
                            Website URL
                        </th>
                        <th
                            class="px-4 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider text-center">
                            Owner name
                        </th><th
                            class="px-4 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider text-center">
                            Owner email
                        </th>

                        <th
                            class="px-4 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider text-center">
                            Action
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($companies as $index => $company)
                        <tr class="">
                            <td class="w-1 px-4 py-3 whitespace-no-wrap">
                                <div class="leading-5 text-gray-900 text-xs">{{ $company->name }}</div>
                            </td>
                            <td class="w-1 px-4 py-3 whitespace-no-wrap">
                                <div class="leading-5 text-gray-900 text-xs">{{ $company->address }}</div>
                            </td>
                            <td class="w-1 px-4 py-3 whitespace-no-wrap">
                                <div class="leading-5 text-gray-900 text-xs">{{ $company->phone_number }}</div>
                            </td>
                            <td class="w-1 px-4 py-3 whitespace-no-wrap">
                                <div class="leading-5 text-gray-900 text-xs">{{ $company->fax_number }}</div>
                            </td>
                            <td class="w-1 px-4 py-3 whitespace-no-wrap">
                                <div class="leading-5 text-gray-900 text-xs">{{ $company->website_url }}</div>
                            </td>
                            <td class="w-1 px-4 py-3 whitespace-no-wrap">
                                <div class="leading-5 text-gray-900 text-xs">{{ $company->owner->name }}</div>
                            </td>
                            <td class="w-1 px-4 py-3 whitespace-no-wrap">
                                <div class="leading-5 text-gray-900 text-xs">{{ $company->owner->email }}</div>
                            </td>
                            <td class="w-1 px-4 py-3 whitespace-no-wrap">
                                <div class="h-10 grid grid-rows-2 grid-flow-col gap-2">
                                    <a href="{{ route('generatePDF', $company->id) }}" target="_blank">
                                        <button
                                            class="text-left text-xs leading-4 font-medium text-gray-500 tracking-wider tooltip">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6" fill="none" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                                  d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                        </svg>
                                        <span class="text-xs tooltiptext px-2"
                                              style="margin-left:-30px; width: 90px;">Click here to generate new PDF</span>
                                    </button>
                                        </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </span>
</div>
