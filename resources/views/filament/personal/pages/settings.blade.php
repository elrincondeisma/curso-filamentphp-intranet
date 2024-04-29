<x-filament-panels::page>
    <h1 class="text-xl font-bold">AJUSTES PERSONALIZADOS</h1>
    <div>
        <x-filament::button wire:click="increment">
            +
        </x-filament::button>
    {{ $count }}
    <x-filament::button wire:click="decrement">
            -
        </x-filament::button>

        <x-filament::modal>
            <x-slot name="trigger">
                <x-filament::button>
                    Open modal
                </x-filament::button>
            </x-slot>
            Hola mundo
            {{-- Modal content --}}
        </x-filament::modal>
    </div>
    <div>
        Para mas componentes <a href="https://filamentphp.com/docs/3.x/support/blade-components/overview" target="_blank">Click aqui</a>
    </div>
</x-filament-panels::page>
