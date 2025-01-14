<div class="hidden space-x-8 sm:-my-px sm:flex sm:ms-10">
    <x-nav-link href="{{ route('admin.index') }}" :active="request()->routeIs('admin.index')">
        {{ __('app.admin index') }}
    </x-nav-link>
</div>

<div class="hidden space-x-8 sm:-my-px sm:flex sm:ms-10">
    <x-nav-link href="{{ route('admin.user.index') }}" :active="request()->routeIs('admin.user.index')">
        {{ __('user.users') }}
    </x-nav-link>
</div>

<div class="hidden space-x-8 sm:-my-px sm:flex sm:ms-10">
    <x-nav-link href="{{ route('admin.role.index') }}" :active="request()->routeIs('admin.role.index')">
        {{ __('role.roles') }}
    </x-nav-link>
</div>

<div class="hidden space-x-8 sm:-my-px sm:flex sm:ms-10">
    <x-nav-link href="{{ route('admin.cash-received.index') }}" :active="request()->routeIs('admin.cash-received.index')">
        {{ __('cashReceived.cashReceived') }}
    </x-nav-link>
</div>