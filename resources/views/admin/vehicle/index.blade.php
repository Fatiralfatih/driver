{{-- title vehicle data --}}
<x-head-title name='vehicle data'/>

<x-layout>
    
    <div class="content">
        <h2 class="intro-y text-lg font-medium mt-10">
            Product List
        </h2>
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                    <a href="{{ route('vehicle.create') }}" class="btn btn-primary shadow-md mr-2">Add New Product</a>
                <div class="dropdown">
                    <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                        <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-lucide="plus"></i> </span>
                    </button>
                    <div class="dropdown-menu w-40">
                        <ul class="dropdown-content">
                            <li>
                                <a href="" class="dropdown-item"> <i data-lucide="printer" class="w-4 h-4 mr-2"></i> Print </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to Excel </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to PDF </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="hidden md:block mx-auto text-slate-500">Showing 1 to 10 of 150 entries</div>
                <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                    <div class="w-56 relative text-slate-500">
                        <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                        <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i> 
                    </div>
                </div>
            </div>
            <!-- BEGIN: Data List -->
            <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                <table class="table table-report -mt-2">
                    <thead>
                        <tr>
                            <th class="whitespace-nowrap">IMAGES</th>
                            <th class="whitespace-nowrap">PRODUCT VEHICLE</th>
                            <th class="text-center whitespace-nowrap">TITLE</th>
                            <th class="text-center whitespace-nowrap">STATUS</th>
                            <th class="text-center whitespace-nowrap">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vehicles as $vehicle)

                        <tr class="intro-x">
                            <td class="w-12">
                                <div class="flex">
                                    @if ($vehicle->gambar)
                                        <div class="w-10 h-10 image-fit zoom-in">
                                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="{{ asset('storage/' . $vehicle->gambar) }}" 
                                            title="Uploaded at {{ $vehicle->created_at->diffForHumans() }}">
                                        </div>
                                    @else

                                        <div class="w-10 h-10 image-fit zoom-in">
                                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="{{ asset('dist/images/preview-1.jpg') }}" 
                                            title="Not Uploaded">
                                        </div>
                                    @endif
                                </div>
                            </td>
                            <td>
                                <a href="" class="font-medium whitespace-nowrap">{{ $vehicle->name_vehicle }}</a> 
                                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{ $vehicle->category->name }}</div>
                            </td>
                            <td class="text-center w-80">{{ $vehicle->title }}</td>
                            <td class="w-40">

                                @if ($vehicle->status)
                                    <div class="flex items-center justify-center text-success"> 
                                        <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> 
                                        Active 
                                    </div>
                                @else
                                    <div class="flex items-center justify-center text-danger"> 
                                        <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> 
                                       Not active 
                                    </div>
                                @endif

                                

                            </td>
                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    <a 
                                    class="flex items-center mr-3" 
                                    href="{{ route('vehicle.edit', ['vehicle' => $vehicle->slug]) }}"> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                    <div class="flex items-center text-danger" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal{{ $vehicle->id }}"> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </div>
                                </div>
                            </td>
                        </tr>
                        
                        <div id="delete-confirmation-modal{{ $vehicle->id }}" class="modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="{{ route('vehicle.destroy', [$vehicle->slug]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <div class="modal-body p-0">
                                            <div class="p-5 text-center">
                                                <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i> 
                                                <div class="text-3xl mt-5">Are you sure?</div>
                                                <div class="text-slate-500 mt-2">
                                                    Do you really want to delete these records? 
                                                    <br>
                                                    This process cannot be undone.
                                                </div>
                                            </div>
                                            <div class="px-5 pb-8 text-center">
                                                <button 
                                                    type="button" 
                                                    data-tw-dismiss="modal" 
                                                    class="py-2 px-6 rounded-lg bg-slate-100 text-slate hover:bg-slate-200 focus:text-slate"
                                                    >
                                                    Cancel
                                                </button>
                                                <button 
                                                    type="submit" 
                                                    data-tw-dismiss="modal" 
                                                    class="py-2 px-6 rounded-lg bg-red-500 text-slate hover:bg-red-600 focus:text-slate"
                                                    >
                                                    Delete
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- END: Data List -->
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
</x-layout>