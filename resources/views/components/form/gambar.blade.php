@props(['name'])

<div class="mt-3">
    <label for="{{ $name }}" class="form-label">Upload {{ $name }}</label>
    <input 
        type="hidden" 
        name="oldImage" 
        {{ $attributes(['value' => old($name)]) }}
        >
    <img class="img-preview rounded-xl mb-4" width="150" height="150">
        <input 
            type="file" 
            name="{{ $name }}" 
            class="w-full"
            id="{{ $name }}"
            onchange="previewImage()"
        >
</div>

@error($name)
                            
        <div class="mt-0 ms-1"> 
                <p class="text-red-500">{{ ucwords($message) }}</p> 
        </div>

@enderror