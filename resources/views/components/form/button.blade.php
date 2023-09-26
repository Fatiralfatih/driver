@props(['link', 'name'])

<div class="text-right mt-5">
    <button 
        type="button" 
        class="bg-slate-500 p-2 rounded-xl text-white hover:bg-slate-600 focus:text-white w-24 mr-1"
    >
        <a 
            href="{{ route($link) }}"
        >   Cancel
        </a>
    </button>
    <button 
        type="submit" 
        class="bg-sky-500 p-2 rounded-xl text-white hover:bg-sky-600 focus:text-white w-24"
        >
        {{ ucwords($name) }}
    </button>
</div>