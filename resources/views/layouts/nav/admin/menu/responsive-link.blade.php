<div class="pt-2 pb-3 space-y-1">
    <x-responsive-nav-link href="{{ route('admin.index') }}" :active="request()->routeIs('admin.index')">
        {{ __('app.admin index') }}
    </x-responsive-nav-link>
</div>
<div class="pt-2 pb-3 space-y-1">
    <x-responsive-nav-link href="{{ route('admin.user.index') }}" :active="request()->routeIs('admin.user.index')">
        {{ __('user.users') }}
    </x-responsive-nav-link>
</div>
<div class="pt-2 pb-3 space-y-1">
    <x-responsive-nav-link href="{{ route('admin.role.index') }}" :active="request()->routeIs('admin.role.index')">
        {{ __('role.roles') }}
    </x-responsive-nav-link>
</div>
<div class="pt-2 pb-3 space-y-1">
    <x-responsive-nav-link href="{{ route('admin.cash-received.index') }}" :active="request()->routeIs('admin.cash-received.index')">
        {{ __('cashReceived.cashReceived') }}
    </x-responsive-nav-link>
</div>

