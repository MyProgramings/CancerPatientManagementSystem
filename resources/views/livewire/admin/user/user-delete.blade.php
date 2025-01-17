<div>
    <!-- Delete User Modal -->
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
    
    <!-- Restore User Modal -->
    <x-confirmation-modal wire:model.live="showRestoreModel">
        <x-slot name="title">
            {{ __('app.restore') }} {{ __('user.user') }}
        </x-slot>

        <x-slot name="content">
            {{ __('user.restore question') }}
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="closeRestoreModel" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-danger-button class="ms-3" wire:click="restore" wire:loading.attr="disabled">
                {{ __('app.restore') }}
            </x-danger-button>
        </x-slot>
    </x-confirmation-modal>

    <!-- Force Delete User Modal -->
    <x-confirmation-modal wire:model.live="showForceDeleteModel">
        <x-slot name="title">
            {{ __('app.force delete') }} {{ __('user.user') }}
        </x-slot>

        <x-slot name="content">
            {{ __('user.force delete question') }}
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="closeForceDeleteModel" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-danger-button class="ms-3" wire:click="forceDelete" wire:loading.attr="disabled">
                {{ __('app.delete') }}
            </x-danger-button>
        </x-slot>
    </x-confirmation-modal>
</div>
