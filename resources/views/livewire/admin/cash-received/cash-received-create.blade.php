<div>
    <!-- Create User Modal -->
    <x-dialog-modal wire:model.live="showCreateModel">
        <x-slot name="title">
            {{ __('app.create') }} {{ __('cashReceived.cashReceived') }}
        </x-slot>

        <form wire:submit="create" autocomplete="off">
            <x-slot name="content">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <div class="col-span-1 md:col-span-1">
                        <x-label class="text-xs" for="currency_id" value="{{ __('cashReceived.currency') }}"/>
                        <x-select wire:model.live="currency_id" wire:key="roleCreate" class="mt-1">
                            <option value="" readonly="true" selected>{{ __('app.select') }} {{ __('cashReceived.currency') }}</option>
                            @forelse($currencies as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @empty
                                <option value="" disabled>{{ __('No categories available') }}</option>
                            @endforelse
                        </x-select>
                        <x-input-error for="currency_id" class="mt-2"/>
                    </div>

                    <div class="col-span-1 md:col-span-1">
                        <x-label class="text-xs" for="category_id" value="{{ __('app.category') }}"/>
                        <x-select wire:model.live="category_id" wire:key="roleCreate" class="mt-1">
                            <option value="" selected>{{ __('app.select') }} {{ __('app.category') }}</option>
                                @if ($categories && $categories->isNotEmpty())
                                    @foreach($categories as $category)
                                        <option value="{{ $category['id'] }}">{{ $category['name'] }} {{ $category['value'] }}</option>
                                    @endforeach
                                @else
                                    <option value="" disabled>{{ __('No categories available') }}</option>
                                @endif
                        </x-select>
                        <x-input-error for="category_id" class="mt-2"/>
                    </div>

                    <div class="col-span-1 md:col-span-1">
                        <x-label for="amount" value="{{ __('cashReceived.amount') }}"/>
                        <x-input wire:model.live="amount" type="number" class="mt-1 block w-full"/>
                        <x-input-error for="amount" class="mt-2"/>
                    </div>

                    <div class="col-span-1 md:col-span-1">
                        <x-label for="total" value="{{ __('cashReceived.total') }}"/>
                        <x-input wire:model="total" type="number" class="mt-1 block w-full" readonly/>
                        <x-input-error for="total" class="mt-2"/>
                    </div>
                </div>
            </x-slot>
            
            <x-slot name="footer">
                <x-secondary-button wire:click="closeCreateModel" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-secondary-button>
                
                <x-button class="ms-3" wire:click="create" wire:loading.attr="disabled">
                    {{ __('Save') }}
                </x-button>
            </x-slot>
        </form>
    </x-dialog-modal>
</div>
