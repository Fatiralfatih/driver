<x-layout>

    <div class="content">
        <h2 class=" text-lg font-medium mt-10">
            Transaction List
        </h2>
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class=" col-span-12 flex flex-wrap xl:flex-nowrap items-center mt-2">
                <div class="flex w-full sm:w-auto">
                    <div class="w-48 relative text-slate-500">
                        <input type="text" class="form-control w-48 box pr-10" placeholder="Search by invoice...">
                        <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i> 
                    </div>
                    <select class="form-select box ml-2">
                        <option>Status</option>
                        <option>Waiting Payment</option>
                        <option>Confirmed</option>
                        <option>Packing</option>
                        <option>Delivered</option>
                        <option>Completed</option>
                    </select>
                </div>
                <div class="hidden xl:block mx-auto text-slate-500">Showing 1 to 10 of 150 entries</div>
                <div class="w-full xl:w-auto flex items-center mt-3 xl:mt-0">
                    <button class="btn btn-primary shadow-md mr-2"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to Excel </button>
                    <button class="btn btn-primary shadow-md mr-2"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to PDF </button>
                    <div class="dropdown">
                        <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                            <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-lucide="plus"></i> </span>
                        </button>
                        <div class="dropdown-menu w-40">
                            <ul class="dropdown-content">
                                <li>
                                    <a href="" class="dropdown-item"> <i data-lucide="arrow-left-right" class="w-4 h-4 mr-2"></i> Change Status </a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item"> <i data-lucide="bookmark" class="w-4 h-4 mr-2"></i> Bookmark </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- BEGIN: Data List -->
            <div class="col-span-12 overflow-y-visible 2xl:overflow-y-visible">
                <table class="table table-report -mt-2">
                    <thead>
                        <tr>
                            <th class="whitespace-nowrap">TUJUAN</th>
                            <th class="whitespace-nowrap">BUYER NAME</th>
                            <th class="whitespace-nowrap">DRIVER</th>
                            <th class="text-center whitespace-nowrap">STATUS</th>
                            <th class="text-center whitespace-nowrap">
                                TOTAL TRANSACTION
                            </th>
                            <th class="text-center whitespace-nowrap">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pesanans as $pesanan)
                        <tr class="intro-x">
                            <td class="w-40 !py-4"> 
                                <a href="" class="underline decoration-dotted whitespace-nowrap">
                                   {{ $pesanan->costumer->tujuan }}
                                </a> 
                            </td>
                            <td class="w-40">
                                <a href="" class="font-medium whitespace-nowrap"></a> 
                                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">
                                    {{ $pesanan->costumer->name }}
                                </div>
                            </td>
                            <td class="w-40">
                                <a href="" class="font-medium whitespace-nowrap">FATIR</a> 
                                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">gambiran</div>
                            </td>
                            <td class="text-center">

                                <div 
                                    class="flex items-center justify-center whitespace-nowrap text-success"
                                > 
                                    <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> 
                                    
                                </div>    
                                
                            </td>
                            <td class="w-40 text-center">
                                <div class="pr-10 ps-5"></div>
                            </td>
                            <td class="table-report__action">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center text-primary whitespace-nowrap mr-5" href="javascript:;"> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> View Details </a>
                                    <div class="flex items-center text-primary whitespace-nowrap" data-tw-toggle="modal" data-tw-target="#header-footer-modal-preview"> 
                                        <i data-lucide="arrow-left-right" class="w-4 h-4 mr-1"></i><span>Change status</span> 
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <div id="header-footer-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- BEGIN: Modal Header -->
                                    <div class="modal-header">
                                        <h2 class="font-medium text-base mr-auto">Broadcast Message</h2>
                                        <div class="dropdown sm:hidden"> <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i> </a>
                                            <div class="dropdown-menu w-40">
                                                <ul class="dropdown-content">
                                                    <li> <a href="javascript:;" class="dropdown-item"> <i data-lucide="file" class="w-4 h-4 mr-2"></i> Download Docs </a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> <!-- END: Modal Header -->
                                    <!-- BEGIN: Modal Body -->
                                    <form action="" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                                            <div class="col-span-12 sm:col-span-12"> 
                                                <label for="modal-form-6" class="flex justify-center form-label">
                                                    Status
                                                </label> 
                                                <select id="modal-form-6" name="status" class="form-select text-center">
                                                    <option value="success">Success</option>
                                                    <option value="pending">Pending</option>
                                                    <option value="failed">Failed</option>
                                                </select> 
                                            </div>
                                        </div> <!-- END: Modal Body -->
                                        <!-- BEGIN: Modal Footer -->
                                        <div class="modal-footer"> 
                                            <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cancel</button> 
                                            <button type="submit" class="btn btn-primary w-20">Send</button>
                                        </div> 
                                    </form>
                                    <!-- END: Modal Footer -->
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- END: Data List -->
            <!-- BEGIN: Pagination -->
            {{-- <div class=" col-span-12 flex fixed-bottom flex-wrap sm:flex-row sm:flex-nowrap items-center">
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
        <!-- BEGIN: Delete Confirmation Modal -->
        
        <!-- END: Delete Confirmation Modal -->
    </div>

</x-layout>