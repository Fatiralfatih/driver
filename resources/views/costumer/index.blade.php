<x-layout>
    
    <div class="content">
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Costumer
            </h2>
            
        </div>
       
        
        <div class="intro-y grid grid-cols-12 gap-6 mt-5">
            <!-- BEGIN: Blog Layout -->
        
        @foreach ($vehicles as $vehicle)
            <div class="intro-y grid grid-col-12 md:col-span-6 xl:col-span-4 box">
                <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 px-5 py-4">
                    <div class="w-10 h-10 flex-none image-fit">
                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/profile-10.jpg') }}">
                    </div>
                    <div class="ml-3 mr-auto">
                        <a href="" class="font-medium">{{ $vehicle->user->name }}</a> 
                        <div class="flex text-slate-500 truncate text-xs mt-0.5"> <a class="text-primary inline-block truncate" href="/costumer/index/?category={{ $vehicle->category->name }}"> {{ $vehicle->category->name }} •</span> {{ $vehicle->created_at->diffForHumans() }} </div>
                    </div>
                </div>
                <div class="flex-shrink-0 px-4 py-0">
                    <div class=" h-40 2xl:h-56 relative">
                        @if ($vehicle->gambar)
                        <img alt="fatir" class="rounded-md" src="{{ asset('storage/' . $vehicle->gambar) }}">
                        @else
                            <img src="{{ asset('dist/images/preview-13.jpg') }}" class="rounded-md" alt="hahaha">
                        @endif
                    </div>
                    <a  
                        class="block font-medium text-base mt-5">
                        {{ $vehicle->title }}
                    </a> 
                    <div 
                        class="text-slate-600  dark:text-slate-500 mt-2"
                    >
                        {{ $vehicle->body }}
                    </div>

                    {{-- <div class="text-slate-600 dark:text-slate-500 mt-5">
                        <div 
                            class="flex items-center mt-2">
                            <i data-lucide="link" class="w-4 h-4 mr-2"></i> Tujuan: {{ $vehicle->tujuan }}
                        </div>
                        <div 
                            class="flex items-center mt-2">
                            <i data-lucide="link" class="w-4 h-4 mr-2"></i> price: Rp. {{ number_format ($vehicle->price) }}
                        </div>
                    </div> --}}

                </div>
                    {{-- <div class="text-slate-600 dark:text-slate-500 ms-2">
                        <div class="flex items-center"> <i data-lucide="link" class="w-4 h-4 mr-2"></i> Price: Rp. 25,000 </div>
                        <div class="flex items-center mt-2"> <i data-lucide="layers" class="w-4 h-4 mr-2"></i> Driver:  </div>
                        <div class="flex items-center mt-2 "> 
                            <i data-lucide="check-square" class="w-4 h-4 mr-2 ">
                            </i> Tujuan : 
                        </div>
                    </div> --}}

                <div class="flex justify-center lg:justify-beetwen items-center p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <a class="text-center rounded-xl mr-3 px-7 py-2 w-full bg-blue-500 text-white hover:bg-blue-600 focus:text-white" href="{{ route('costumer.pesan', ['vehicle' => $vehicle->slug]) }}"> Pesan </a>
                </div>

            </div>
            
        @endforeach
            <!-- END: Blog Layout -->
            <!-- BEGIN: Pagination -->
            {{-- <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
                <nav class="w-full sm:w-auto sm:mr-auto">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-left"></i> </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-left"></i> </a>
                        </li>
                        <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                        <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                        <li class="page-item active"> <a class="page-link" href="#">2</a> </li>
                        <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                        <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                        <li class="page-item">
                            <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-right"></i> </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-right"></i> </a>
                        </li>
                    </ul>
                </nav>
                <select class="w-20 form-select box mt-3 sm:mt-0">
                    <option>10</option>
                    <option>25</option>
                    <option>35</option>
                    <option>50</option>
                </select>
            </div> --}}
            <!-- END: Pagination -->
        </div>

    </div>
    <!-- END: Content -->
</div>
</x-layout>