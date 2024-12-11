<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 font-bold text-sm outline-none focus:outline-none ease-linear transition-all duration-150 disabled:opacity-75 disabled:cursor-no-drop']) }}>
    {{ $slot }}
</button>