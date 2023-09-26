@props(['name'])

<div class="mt-3">
    <label for="crud-form-2" class="form-label"> {{ ucwords($name) }} </label>
    <select 
        data-placeholder="Select your favorite actors"
        name="{{$name}}" 
        class="tom-select w-full @error($name) border-2 border-red-500 @enderror " 
        id="crud-form-2" 
        
    >   

        {{ $slot }}
        
    </select>
</div>

@error($name)
    
<div class="mt-0 ms-1"> 
    <p class="text-red-500">{{ $message }}</p> 
</div>

@enderror