<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Recurring Transfer') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
                <h2 class="text-xl font-bold mb-6">@lang('Add a Recurring Transfer')</h2>
                <form method="POST" action="{{ route('recurring-transfer') }}" class="space-y-4">
                    @csrf

                    @if (session('recurring-transfer-status') === 'error')
                        <div class="p-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
                            <span class="font-medium">@lang('An error has occurred')</span>
                        </div>
                    @endif

                    <div>
                        <x-input-label for="start_date" :value="__('Start date')" />
                        <x-text-input id="start_date"
                                      class="block mt-1 w-full"
                                      type="date"
                                      name="start_date"
                                      :value="old('start_date')"
                                      required />
                        <x-input-error :messages="$errors->get('start_date')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="end_date" :value="__('End date')" />
                        <x-text-input id="end_date"
                                      class="block mt-1 w-full"
                                      type="date"
                                      name="end_date"
                                      :value="old('end_date')"
                                      required />
                        <x-input-error :messages="$errors->get('end_date')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="frequency_in_day" :value="__('Frequency in day')" />
                        <x-text-input id="frequency_in_day"
                                      class="block mt-1 w-full"
                                      type="number"
                                      name="frequency_in_day"
                                      min="1"
                                      :value="old('frequency_in_day')"
                                      required />
                        <x-input-error :messages="$errors->get('frequency_in_day')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="recipient_email" :value="__('Recipient email')" />
                        <x-text-input id="recipient_email"
                                      class="block mt-1 w-full"
                                      type="text"
                                      name="recipient_email"
                                      :value="old('recipient_email')"
                                      required />
                        <x-input-error :messages="$errors->get('recipient_email')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="amount" :value="__('Amount (€)')" />
                        <x-text-input id="amount"
                                      class="block mt-1 w-full"
                                      type="number"
                                      min="0"
                                      step="0.01"
                                      :value="old('amount')"
                                      name="amount"
                                      required />
                        <x-input-error :messages="$errors->get('amount')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="reason" :value="__('Reason')" />
                        <x-text-input id="reason"
                                      class="block mt-1 w-full"
                                      type="text"
                                      :value="old('reason')"
                                      name="reason"
                                      required />
                        <x-input-error :messages="$errors->get('reason')" class="mt-2" />
                    </div>

                    <div class="flex justify-end mt-4">
                        <x-primary-button>
                            {{ __('Create recurring transfer') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
