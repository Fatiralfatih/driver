<x-layout>

        <h2 class="intro-y text-lg font-medium mt-10">
            Daftar pesanan Costumer
        </h2>
        <div class="grid grid-cols-12 gap-6 mt-5">
            <!-- BEGIN: Users Layout -->
            <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4">

            @foreach ($costumers as $costumer)
                <div class="box">
                    <div class="flex items-start px-5 pt-5">
                        <div class="w-full flex flex-col lg:flex-row items-center">
                            {{-- <div class="w-16 h-16 image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/profile-13.jpg')}}">
                            </div> --}}
                            <div class="lg:ml-4 text-center lg:text-right mt-3 lg:mt-0">
                                <a href="" class="font-medium">Nama Pelanggan : {{ $costumer->user->name }}</a> 
                                {{-- <div class="text-slate-500 text-xs mt-0.5">Software Engineer</div> --}}
                            </div>
                        </div>
                        
                    </div>
                    <div class="text-center lg:text-left p-5">
                        <div>
                            Tujuan : {{ ucwords($costumer->tujuan) }}
                        </div>
                        <div class="mt-2">
                            Pesan : {{ $costumer->pesan }}
                        </div>
                        <div class="mt-2">
                            Money : {{ $costumer->transaction }}
                        </div>
                        
                    </div>
                    <div class="text-center lg:text-right p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                        <button class="btn btn-primary py-1 px-2 mr-2" data-tw-toggle="modal" data-tw-target="#button-modal-preview">
                            Terima
                        </button>
                        {{-- <button class="btn btn-outline-secondary py-1 px-2">Profile</button> --}}
                    </div>
                </div>

                <div id="button-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content"> <a data-tw-dismiss="modal" href="javascript:;"> <i data-lucide="x" class="w-8 h-8 text-slate-400"></i> </a>
                            <div class="modal-body p-0">
                                <div class="p-5 text-center"> <i data-lucide="check-circle" class="w-16 h-16 text-success mx-auto mt-3"></i>
                                    <div class="text-3xl mt-5">Modal Example</div>
                                    <div class="text-slate-500 mt-2">Modal with close button</div>
                                </div>

                            <form action="{{ route('driver.store') }}" method="post">
                                @csrf
                                <input type="text" name="costumer_id" value="{{ $costumer->id }}">
                                <input type="text" name="user_id" value="{{ Auth()->user()->id }}">
                                <input type="text" name="confirmed" value="1">

                                <div class="px-5 pb-8 text-center"> 
                                    <button 
                                        type="button" 
                                        data-tw-dismiss="modal" 
                                        class="px-7 py-2 bg-red-500 text-white rounded-xl hover:bg-red-600 focus:text-white"
                                        >
                                        Cancel
                                    </button>

                                    <button 
                                        type="submit" 
                                        data-tw-dismiss="modal" 
                                        class="px-7 py-2 bg-blue-500 text-white rounded-xl hover:bg-blue-600 focus:text-white"
                                        >
                                        Terima
                                    </button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
            </div>
            <!-- END: Users Layout -->
        </div>


</x-layout>