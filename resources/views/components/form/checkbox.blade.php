@props(['name', 'checked' => 'true'])
<div class="mt-3">
    <label>{{ ucwords($name) }}</label>
    <div class="form-switch mt-2">
        <input 
            type="checkbox" 
            class="form-check-input" 
            name="{{$name}}"
            {{ $attributes(['checked' => old('true')]) }}
        >
    </div>
</div>