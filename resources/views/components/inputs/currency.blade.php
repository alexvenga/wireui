<div x-data="wireui_inputs_currency({
    isLazy: @boolean($attributes->wire('model')->hasModifier('lazy')),
    model:  @entangle($attributes->wire('model')),
    emitFormatted: @boolean($emitFormatted),
    thousands: '{{ $thousands }}',
    decimal:   '{{ $decimal }}',
    precision:  {{ $precision }},
})">
    <x-input {{ $attributes->whereDoesntStartWith('wire:model')->except('type') }}
        :borderless="$borderless"
        :shadowless="$shadowless"
        :label="$label"
        :hint="$hint"
        :corner-hint="$cornerHint"
        :icon="$icon"
        :right-icon="$rightIcon"
        :prefix="$prefix"
        :suffix="$suffix"
        :prepend="$prepend"
        :append="$append"
        x-model="input"
        x-on:input="mask($event.target.value)"
        x-on:blur="emitInput($event.target.value)"
    />
</div>
