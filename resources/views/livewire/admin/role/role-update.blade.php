<div>
    <!-- Update Role Modal -->
    <x-dialog-modal wire:model.live="showUpdateModel">
        <x-slot name="title">
            {{ __('app.update') }} {{ __('role.role') }}
        </x-slot>

        <form wire:submit="edit" autocomplete="off">
            <x-slot name="content">
                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                    <div class="col-span-1 md:col-span-2 lg:col-span-3">
                        <x-label for="name" value="{{ __('role.name') }}"/>
                        <x-input wire:model="name" id="nameUpdate" type="text" class="mt-1 block w-full" />
                        <x-input-error for="name" class="mt-2"/>
                    </div>

                    <div class="col-span-1 md:col-span-2 lg:col-span-3">
                        <x-label for="key" value="{{ __('role.key') }}"/>
                        <x-input wire:model="key" id="keyUpdate" type="text" class="mt-1 block w-full"/>
                        <x-input-error for="key" class="mt-2"/>
                    </div>

                    <div class="col-span-1 md:col-span-2 lg:col-span-3">
                        <x-label for="color" value="{{ __('role.color') }}"/>
                        <x-select-color wire:model.live="color" wire:key="colorUpdate" />
                        <x-input-error for="color" class="mt-2"/>
                    </div>

                    <div class="col-span-1 md:col-span-2 lg:col-span-3">
                        <div class="flex flex-row gap-2 h-16">
                            <div class="flex items-center justify-center bg-gary-100 w-1/2 px-4 rounded-md">
                                <span class="px-2 py-1 font-semibold leading-tight rounded-full {{ $color }}">
                                    Light
                                </span>
                            </div>
                            <div class="flex items-center justify-center bg-gray-900 w-1/2 px-4 rounded-md">
                                <span class="px-2 py-1 font-semibold leading-tight rounded-full {{ $color }}">
                                    Dark
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-2 md:col-span-4 lg:col-span-6">
                        <x-label for="permission" value="{{ __('role.permissions') }}"/>
                        <div class="overflow-y-auto h-48">
                            <div class="flex flex-wrap gap-4 justify-items-center ms-3 p-4">
                                @forelse($permissions->unique('table_name')->pluck('table_name') as $key => $value)
                                    <div class="relative w-full p-4 mt-3 bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg">
                                        <div class="absolute -top-4 rtl:right-3 ltr:left-3 px-3 py-1 w-40 text-center font-medium text-sm  bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg">
                                            {{ $value ?? __('app.general') }}
                                        </div>
                                        <div class="flex flex-wrap gap-2 mt-2">
                                            @foreach($permissions as $permission)
                                                @if($permission->table_name === $value)
                                                    <label class="flex items-center px-2">
                                                        <x-checkbox wire:model="permission"
                                                        value="{{ $permission->id }}" wire:key="permissionUpdate{{$permission->id}}"
                                                        class="w-6 h-6"/>
                                                        <span class="ms-2 text-sm text-gray-800 dark:text-gray-200">{{ $permission->name }}</span>
                                                    </label>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                @empty
                                    <div class="text-red-700">{{ __('app.No Data') }}</div>
                                @endforelse
                            </div>
                        </div>
                        <x-input-error for="permission" class="mt-2"/>
                    </div>
                </div>
            </x-slot>
            
            <x-slot name="footer">
                <x-secondary-button wire:click="closeUpdateModel" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-secondary-button>
                
                <x-button class="ms-3" wire:click="edit" wire:loading.attr="disabled">
                    {{ __('app.update') }}
                </x-button>
            </x-slot>
        </form>
    </x-dialog-modal>
</div>
