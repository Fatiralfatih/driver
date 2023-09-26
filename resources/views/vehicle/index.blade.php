<x-layout>
    
    <h2 class="intro-y text-lg font-medium mt-10">
        Vehicle Data
    </h2>

<div class="grid grid-cols-12 gap-6 mt-5">
        


        <x-vehicle.header-content name='Vehicle Data' /> 

        @if ( count($vehicle) > 0  )

                
            @foreach ($vehicle as $data)
            <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-3">
                <x-vehicle.card :vehicle="$data"/>
            </div>
            @endforeach
        
        
    @else
        <p class="flex justify-beetwen">Not Vehicles</p>
     @endif
        
</div>
</x-layout>