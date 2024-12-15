<div class="pt-2 pb-3 space-y-1">
    <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
        {{ __('Dashboard') }}
    </x-responsive-nav-link>
</div>

<div class="pt-2 pb-3 space-y-1">
    <x-responsive-nav-link href="{{ route('admin.index') }}" :active="request()->routeIs('admin.index')">
        {{ __('app.admin index') }}
    </x-responsive-nav-link>
</div>