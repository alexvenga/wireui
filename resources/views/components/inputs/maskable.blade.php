<div x-data="wireui_inputs_maskable({
    isLazy: @boolean($attributes->wire('model')->hasModifier('lazy')),
    model: @entangle($attributes->wire('model')),
    emitFormatted: @boolean($emitFormatted),
    mask: {{ $mask }},
})">
    <x-input
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
        x-on:input="onInput($event.target.value)"
        x-on:blur="emitInput"
        {{ $attributes->whereDoesntStartWith(['wire:model', 'x-model']) }}
    />
</div>
