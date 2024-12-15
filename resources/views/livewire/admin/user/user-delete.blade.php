<div>
    <!-- Delete Token Confirmation Modal -->
    <x-confirmation-modal wire:model.live="showDeleteModel">
        <x-slot name="title">
            {{ __('app.delete') }} {{ __('user.user') }}
        </x-slot>

        <x-slot name="content">
            {{ __('user.delete question') }}
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="closeDeleteModel" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-danger-button class="ms-3" wire:click="delete" wire:loading.attr="disabled">
                {{ __('Delete') }}
            </x-danger-button>
        </x-slot>
    </x-confirmation-modal>
</div>
