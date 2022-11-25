    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Flash Toast Demo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              {{-- grid for multiple buttons tailwind --}}
                <div class="grid grid-cols-3 gap-4">
                    <div class="p-6 bg-white border-b border-gray-200">

                    <x-jet-button
                    wire:click="success">
                        {{ __('Success') }}
                    </x-jet-button>

                    <x-jet-button wire:click="danger">
                        {{ __('danger') }}
                    </x-jet-button>
                    {{-- warning --}}
                    <x-jet-button wire:click="warning">
                        {{ __('warning') }}
                    </x-jet-button>
                    {{-- info --}}
                    <x-jet-button wire:click="info">
                        {{ __('info') }}
                    </x-jet-button>
                    {{-- error --}}
                    <x-jet-button wire:click="error">
                        {{ __('error') }}
                    </x-jet-button>
                    {{-- primary --}}
                    <x-jet-button wire:click="primary">
                        {{ __('primary') }}
                    </x-jet-button>
                    {{-- secondary --}}
                    <x-jet-button wire:click="secondary">
                        {{ __('secondary') }}
                    </x-jet-button>
                    {{-- light --}}
                    <x-jet-button wire:click="light">
                        {{ __('light') }}
                    </x-jet-button>
                    {{-- dark --}}
                    <x-jet-button wire:click="dark">
                        {{ __('dark') }}
                    </x-jet-button>
                    {{-- link --}}
                    <x-jet-button wire:click="link">
                        {{ __('link') }}
                    </x-jet-button>
                    </div>
                    <div class="p-6 bg-white border-b border-gray-200">
                    <x-jet-button wire:click="text">
                        {{ __('String or Text') }}
                    </x-jet-button>
                    </div>
                    <div class="p-6 bg-white border-b border-gray-200">
                    <x-jet-button wire:click="html">
                        {{ __('Toast with HTML entities') }}
                    </x-jet-button>
                    <x-jet-button wire:click="duration">
                        {{ __('Custom Duration') }}
                    </x-jet-button>
                    <x-jet-button wire:click="withWarning">
                        {{ __('Warning Toast') }}
                    </x-jet-button>
                    </div>
            </div>
        </div>
    </div>
