<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Recurring Transfer') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-4">
            <x-primary-button-link href="recurring-transfer/add">
                Add recurring transfer
            </x-primary-button-link>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
                <h2 class="text-xl font-bold mb-6">@lang('Recurring transfer history')</h2>
                @if (session('recurring-transfer-status') === 'success-created')
                    <div class="p-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
                        <span class="font-medium">@lang('Recurring transfer created!')</span>
                    </div>
                @elseif (session('recurring-transfer-status') === 'success-deleted')
                    <div class="p-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
                        <span class="font-medium">@lang('Recurring transfer deleted!')</span>
                    </div>
                @endif
                <table class="w-full text-sm text-left text-gray-500 border border-gray-200">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            @lang('ID')
                        </th>
                        <th scope="col" class="px-6 py-3">
                            @lang('Start date')
                        </th>
                        <th scope="col" class="px-6 py-3">
                            @lang('End date')
                        </th>
                        <th scope="col" class="px-6 py-3">
                            @lang('Frequency')
                        </th>
                        <th scope="col" class="px-6 py-3">
                            @lang('Recipient Email')
                        </th>
                        <th scope="col" class="px-6 py-3">
                            @lang('Amount')
                        </th>
                        <th scope="col" class="px-6 py-3">
                            @lang('Reason')
                        </th>
                        <th scope="col" class="px-6 py-3">
                            @lang('Action')
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($recurringTransfers as $recurringTransfer)
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{$recurringTransfer->id}}
                            </th>
                            <td class="px-6 py-4">
                                {{$recurringTransfer->start_date}}
                            </td>
                            <td class="px-6 py-4">
                                {{$recurringTransfer->end_date}}
                            </td>
                            <td class="px-6 py-4">
                                {{$recurringTransfer->frequency_in_day}}
                            </td>
                            <td class="px-6 py-4">
                                {{$recurringTransfer->recipient_email}}
                            </td>
                            <td class="px-6 py-4">
                                {{$recurringTransfer->amount}}
                            </td>
                            <td class="px-6 py-4">
                                {{$recurringTransfer->reason}}
                            </td>
                            <td class="px-6 py-4">
                                <x-primary-button>
                                    Remove
                                </x-primary-button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
