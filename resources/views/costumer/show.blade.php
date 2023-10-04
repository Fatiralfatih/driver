{{-- title show pesanan --}}
<x-head-title name='show pesanan' />

<x-layout>
    <div class="content">
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Daftar Kendaraan
            </h2>
        </div>
        <div class="intro-y grid grid-cols-12 gap-4 mt-5">
            @foreach ($vehicles as $vehicle)
                <!-- BEGIN: Blog Layout -->
                <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">
                    <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 px-5 py-4">
                        <div class="ml-3 mr-auto">
                            <a class="font-medium">{{ $vehicle->name_vehicle }}</a>
                            <div class="flex text-slate-500 truncate text-xs mt-0.5"> <a
                                    class="text-primary inline-block truncate"
                                    href="">{{ $vehicle->category->name }}</a> <span class="mx-1">•</span>
                                {{ $vehicle->created_at->diffForHumans() }} </div>
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="h-40 2xl:h-56 image-fit">
                            @if ($vehicle->gambar)
                                <img alt="fatirdadada" class="rounded-md"
                                    src="{{ asset('storage/' . $vehicle->gambar) }}">
                            @else
                                <img alt="fatirdadada" class="rounded-md"
                                    src="{{ asset('dist/images/preview-6.jpg') }}">
                            @endif

                        </div>
                        <a href="" class="block font-medium text-base mt-5">
                            {{ $vehicle->title }}
                        </a>
                        <div class="text-slate-600 dark:text-slate-500 mt-2">
                            {{ $vehicle->deskripsi }}
                        </div>
                    </div>
                    <div class="px-5 pt-3 pb-5 border-t border-slate-200/60 dark:border-darkmode-400">
                        <div class="text-right space-x-1">
                            <button
                                class="py-2 px-4 bg-slate-500 rounded-xl text-white hover:bg-slate-600 focus:text-white ">
                                <a href="{{ Route('vehicle.show', ['vehicle' => $vehicle->slug]) }}">
                                    Review
                                </a>
                            </button>

                            <button
                                class="py-2 px-4 bg-blue-500 rounded-xl text-white hover:bg-blue-600 focus:text-white ">
                                <a href="{{ route('costumer.pesan', ['vehilce' => $vehicle->slug]) }}">
                                    Pesan
                                </a>
                            </button>
                        </div>
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
    </div </x-layout>
