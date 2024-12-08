<div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex ltr:sm:ml-10 rtl:sm:mr-10">
    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
        {{ __('Dashboard') }}
    </x-nav-link>
</div>
