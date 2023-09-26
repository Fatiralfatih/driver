@props(['vehicle'])

<div class="box">
    <div class="p-5">
        <div class="h-40 2xl:h-56 image-fit rounded-md overflow-hidden before:block before:absolute before:w-full before:h-full before:top-0 before:left-0 before:z-10 before:bg-gradient-to-t before:from-black before:to-black/10">
            @if ($vehicle->gambar)
                <img alt="fatir" class="rounded-md" src="{{ asset('storage/' . $vehicle->gambar) }}">
            @else
                <img src="{{ asset('dist/images/preview-13.jpg') }}" class="rounded-md" alt="hahaha">
            @endif
            
            <span class="absolute top-0 bg-pending/80 text-white text-xs m-5 px-2 py-1 rounded z-10">Featured</span> 
            <div class="absolute bottom-0 text-white px-5 pb-6 z-10"> 
                <span class="text-white/90 text-base mt-3 font-bold">{{ $vehicle->name_vehicle }}
                </span> 
                <a href="/vehicle/index/?category={{ $vehicle->category->name }}" class="block text-xs">
                    {{ $vehicle->Category->name }}
                </a> 
            </div>
        </div>
        <div class="text-slate-600 dark:text-slate-500 mt-5">
            <div class="flex items-center"> <i data-lucide="link" class="w-4 h-4 mr-2"></i> 
                Driver: {{ $vehicle->user->name }} 
            </div>
            <div class="flex items-center mt-2 "> 
                <i data-lucide="check-square" class="w-4 h-4 mr-2 ">
                    </i> Status:
                    @if ($vehicle->status)
                        <span class="inline-flex ms-2 items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Active
                        </span>
                    @else
                        <span class="inline-flex ms-2 items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/20">Not Active
                        </span>
                    @endif
                    
            </div>
        </div>
    </div>

    <div class="flex justify-center lg:justify-end items-center p-5 border-t border-slate-200/60 dark:border-darkmode-400">
        <a class="flex items-center mr-3" href="{{ route('vehicle.edit', ['vehicle' => $vehicle->slug]) }}"> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
        <div class="flex items-center text-danger" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal{{ $vehicle->id }}"> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> </div>
    </div>

    <div id="delete-confirmation-modal{{ $vehicle->id }}" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <form action="{{ route('vehicle.destroy', ['vehicle' => $vehicle->slug]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="p-5 text-center"> <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                        <div class="text-3xl mt-5">Are you sure?</div>
                        <div class="text-slate-500 mt-2">Do you really want to delete these records? <br>This process cannot be undone.</div>
                    </div>
                    <div class="px-5 pb-8 text-center"> <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button> <button type="submit" class="btn btn-danger w-24">Delete</button> </div>
                </form>
                </div>
            </div>
        </div>
    </div> 

</div>