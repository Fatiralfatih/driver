@props(['name', 'type' => 'text'])

<div class="mt-3">

        <label for="crud-form-1" class="form-label">{{ ucwords($name) }}</label>
        
    <input 
        id="crud-form-1" 
        name="{{$name}}" 
        type="{{ $type }}" 
        class="form-control w-full @error($name) border-2 border-red-500 @enderror" 
        placeholder="Input {{ $name }} ..."
        {{ $attributes(['value' => old($name)]) }}
        >
</div>

@error($name)
                            
        <div class="mt-0 ms-1"> 
                <p class="text-red-500">{{ ucwords($message) }}</p> 
        </div>

@enderror