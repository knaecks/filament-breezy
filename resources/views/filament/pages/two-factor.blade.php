<x-filament-panels::page.simple>
    <form wire:submit="authenticate">
        {{ $this->form }}

        <div class="flex flex-wrap items-center gap-4 justify-start">
            @foreach ($this->getCachedFormActions() as $action)
                {{ $action }}
            @endforeach
        </div>
    </form>
</x-filament-panels::page.simple>
