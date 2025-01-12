<div wire:init="loadItems">
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-primary-700 dark:text-primary-400">
            {{ __('cashReceived.cashReceived') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="pr-0 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="p-5 overflow-hidden text-gray-800 shadow-xl lg:px-0 sm:px-10 bg-gray-50 sm:rounded-lg lg:rounded-3xl dark:bg-gray-800 dark:text-gray-400">
                <div class="flex flex-wrap items-center">
                    <div class="relative flex-row flex-1 w-full max-w-full px-4">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300"> {{ __('cashReceived.cashReceived') }}</h3>
                            </div>
                            <div class="ml-4">
                                <x-button wire:click="selectedItem('create',null)"
                                                class="text-white rounded-lg dark:text-gray-300 bg-primary-600 dark:bg-primary-700 hover:bg-primary-700 focus:border-primary-900 focus:ring-primary-300">
                                    <x-svg.svg-plus class="w-5 h-5"/>
                                    {{ __('app.create') }}   {{ __('cashReceived.cashReceived') }}
                                </x-button>
                            </div>
                        </div>

                        <div class="relative grid grid-cols-6 gap-6 mt-2 ">

                            <div class="col-span-3 md:col-span-2 lg:col-span-2">
                                <x-label class="text-xs" for="search" value="{{ __('app.search') }}"/>
                                <x-input wire:model.live.debounce.250ms="term" id="search" type="text" class="block w-full mt-1"
                                             autocomplete="off"/>
                            </div>

                            <div class="col-span-3 md:col-span-2 lg:col-span-1">
                                <x-label class="text-xs" for="select"
                                             value="{{ __('app.By') }} {{ __('role.role') }}"/>
                                <x-select wire:model.live="role" wire:key="roleTerm" class="mt-1">
                                    <option value="">{{ __('app.All') }} {{ __('role.roles') }}</option>
                                </x-select>
                            </div>

                            <div class="col-span-3 md:col-span-2 lg:col-span-1">
                                <x-label class="text-xs" for="select" value="{{ __('app.OrderBy') }}"/>
                                <x-select wire:model.live="orderBy" class="mt-1">
                                    <option value="id">{{ __('app.id') }}</option>
                                    <option value="name">{{ __('user.name') }}</option>
                                    <option value="username">{{ __('user.username') }}</option>
                                    <option value="email">{{ __('user.email') }}</option>
                                    <option value="role_id">{{ __('user.role') }}</option>
                                    <option value="last_seen">{{ __('user.last_seen') }}</option>
                                    <option value="created_at">{{ __('app.created_at') }}</option>
                                    <option value="updated_at">{{ __('app.updated_at') }}</option>
                                </x-select>
                            </div>

                            <div class="col-span-3 md:col-span-2 lg:col-span-1">
                                <x-label class="text-xs" for="select" value="{{ __('app.PerPage') }}"/>
                                <x-select wire:model.live="perPage" class="mt-1">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                </x-select>
                            </div>

                            <div class="col-span-3 md:col-span-2 lg:col-span-1">
                                <x-label class="text-xs" for="select" value="{{ __('app.SortBy') }}"/>
                                <x-select wire:model.live="sortBy" class="mt-1">
                                    <option value="asc">{{ __('app.ASC') }}</option>
                                    <option value="desc">{{ __('app.DESC') }}</option>
                                </x-select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full px-0 overflow-hidden mt-7">
                    <div class="w-full overflow-x-auto">
                        <table class="w-full whitespace-no-wrap">
                            <thead>
                            <tr class="text-sm font-semibold text-gray-500 border-y ltr:text-left rtl:text-right dark:border-gray-700 dark:text-gray-300 bg-gray-50 dark:bg-gray-700/30">
                                <th class="w-10 px-2 py-3 text-center">{{ __('app.id') }}</th>
                                <th class="px-4 py-3">{{ __('user.username') }}</th>
                                <th class="px-2 py-3">{{ __('cashReceived.currency') }}</th>
                                <th class="px-2 py-3 text-center">{{ __('app.category') }}</th>
                                <th class="px-2 py-3 text-center">{{ __('العدد') }}</th>
                                <th class="px-2 py-3 text-center">{{ __('الاجمالي') }}</th>
                                <th class="px-2 py-3 text-center">{{ __('app.created_at') }}</th>
                                <th class="px-2 py-3 text-center">{{ __('app.actions') }}</th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-900">
                            @forelse($cash_receiveds as $cash_received)
                                <tr class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-800 hover:dark:text-gray-200 hover:bg-gray-100 hover:dark:bg-gray-700">
                                    <td class="px-2 py-3 text-center text-xx">
                                        {{ $cash_received->id }}
                                    </td>
                                    <td class="px-4 py-3">
                                        {{ $cash_received->user->name }}
                                    </td>
                                    <td class="px-4 py-3">
                                        {{ $cash_received->currency->name }}
                                    </td>
                                    <td class="px-4 py-3">
                                        @isset($cash_received->category)
                                            {{ $cash_received->category->name }}
                                        @endisset
                                    </td>
                                    <td class="px-2 py-3 text-sm text-center">
                                        {{ $cash_received->amount }}
                                    </td>
                                    <td class="px-2 py-3 text-sm text-center">
                                        {{ $cash_received->total }}
                                    </td>
                                    <td class="px-2 py-3 text-sm text-center">
                                        {{ $cash_received->created_at->diffForHumans() }}
                                    </td>
                                    <td class="px-2 py-3 text-sm text-center">
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="px-4 py-3 text-sm text-center text-gray-700 dark:text-gray-400">{{ __('app.No Data') }}</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>

                    @if(!empty($cash_receiveds))
                        <div class="px-4 py-3 border-t dark:border-gray-700">
                            {{ $cash_receiveds->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <livewire:admin.cash-received.cash-received-create :users="$users" :currencies="$currencies"/>
</div>