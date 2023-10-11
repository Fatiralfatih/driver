{{-- title pesanan driver --}}
<x-head-title name='pesanan driver' />

<x-layout>

    <div class="content">
        <h2 class="intro-y text-lg font-medium mt-10">
            Daftar Pesanan
        </h2>
        <div class="grid grid-cols-12 gap-6 mt-5">
            <!-- BEGIN: Users Layout -->
            @foreach ($permissions as $permission)
                <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-3">
                    <div class="box">
                        <div class="p-5">
                            <div
                                class="h-40 2xl:h-56 image-fit rounded-md overflow-hidden before:block before:absolute before:w-full before:h-full before:top-0 before:left-0 before:z-10 before:bg-gradient-to-t before:from-black before:to-black/10">
                                @if ($permission->pesanan->vehicle->gambar)
                                    <img alt="fatirhahaha" class="rounded-md"
                                        src="{{ asset('storage/' . $permission->pesanan->vehicle->gambar) }}">
                                @else
                                    <img alt="fatirhahaha" class="rounded-md"
                                        src="{{ asset('dist/images/preview-7.jpg') }}">
                                @endif
                                <span
                                    class="absolute top-0 bg-pending/80 text-white text-xs m-5 px-2 py-1 rounded z-10">Featured</span>
                                <div class="absolute bottom-0 text-white px-5 pb-6 z-10"> <a href=""
                                        class="block font-medium text-base">{{ $permission->pesanan->vehicle->name_vehicle }}3</a>
                                    <span
                                        class="text-white/90 text-xs mt-3">{{ $permission->pesanan->vehicle->category->name }}</span>
                                </div>
                            </div>
                            <div class="text-slate-600 dark:text-slate-500 mt-5">
                                <div class="flex items-center mb-2"> <i data-lucide="user" class="w-4 h-4 mr-2"></i>
                                    Costumer: {{ $permission->pesanan->costumer->name }}
                                </div>
                                <div class="flex items-center"> <i data-lucide="link" class="w-4 h-4 mr-2"></i>
                                    Harga: Rp. {{ number_format($permission->pesanan->harga) }}
                                </div>
                                <div class="flex items-center mt-2 "> <i data-lucide="navigation-2"
                                        class="w-4 h-4 mr-2"></i> Tujuan: {{ $permission->pesanan->tujuan }} </div>
                                <div class="flex items-center mt-2"> <i data-lucide="message-circle"
                                        class="w-4 h-4 mr-2"></i>
                                    Pesan: {{ $permission->pesanan->pesan }}
                                </div>
                            </div>
                        </div>
                        @if ($permission->pesanan->status == 'waiting')
                            <div
                                class="flex justify-center lg:justify-end items-center p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                                <a href="terima:" class="flex items-center mr-3" data-tw-toggle="modal"
                                    data-tw-target="#terima{{ $permission->id }}">
                                    <i data-lucide="check-square" class="w-4 h-4 mr-1"></i>
                                    Terima
                                </a>
                                <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal"
                                    data-tw-target="#tolak{{ $permission->id }}">
                                    <i data-lucide="trash-2"class="w-4 h-4 mr-1"></i>
                                    Tolak
                                </a>
                            </div>
                        @elseif ($permission->pesanan->status == 'success')
                            <div class="flex justify-center items-center pt-3 border-t border-slate-200/60">
                                <a href=""
                                    class="py-2 px-4 rounded-lg bg-slate-200 mb-5 text-slate hover:bg-slate-300 focus:text-slate">
                                    {{ucwords('pesanan berhasil diterima')}}
                                </a>
                            </div>
                        @elseif ($permission->pesanan->status == 'failed')
                            <div class="flex justify-center items-center pt-3 border-t border-slate-200/60">
                                <a href="failed:;"
                                    class="py-2 px-9 rounded-lg bg-red-200 mb-5 text-slate hover:bg-red-300 focus:text-slate">
                                    Pesanan Gagal
                                </a>
                            </div>
                        @endif

                    </div>
                    {{-- ----------------------- --}}
                    {{-- ---- terima pesanan ----- --}}
                    {{-- ----------------------- --}}
                    <div id="terima{{ $permission->id }}" class="modal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content"> <a data-tw-dismiss="modal" href="javascript:;"> <i
                                        data-lucide="x" class="w-8 h-8 text-slate-400"></i> </a>
                                <div class="modal-body p-0">
                                    <div class="p-5 text-center"> <i data-lucide="check-circle"
                                            class="w-16 h-16 text-success mx-auto mt-3"></i>
                                        <div class="text-3xl mt-5">Pesanan Telah diterima</div>
                                        <div class="text-slate-500 mt-2">klik ok untuk menerima</div>
                                    </div>
                                    <form action="{{ route('permission.update', ['id' => $permission->id]) }}"
                                        method="post">
                                        @csrf
                                        @method('PUT')
                                        <input type="text" name="pesanan_id" value="{{ $permission->pesanan->id }}">
                                        <input type="text" name="driver_id" value="{{ Auth()->user()->id }}">
                                        <input type="text" name="admin_id" value="{{ $permission->admin_id }}">
                                        <input type="hidden" name="confirmed" value="1">
                                        <div class="px-5 pb-8 text-center">
                                            <button type="submit" data-tw-dismiss="modal"
                                                class="py-2 px-8 rounded-lg bg-blue-500 text-white hover:bg-blue-700 focus:text-white">
                                                Ok
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- ---------- ------ --}}
                    {{-- ---Tolak pesanan --}}
                    {{-- -------------- --}}
                    <div id="tolak{{ $permission->id }}" class="modal" tabindex="-1" data-tw-backdrop="static"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content"> <a data-tw-dismiss="modal" href="javascript:;"> <i
                                        data-lucide="x" class="w-8 h-8 text-slate-400"></i> </a>
                                <div class="modal-body p-0">
                                    <div class="p-5 text-center"> <i data-lucide="x-circle"
                                            class="w-16 h-16 text-danger mx-auto mt-3"></i>
                                        <div class="text-3xl mt-5">Pesanan Telah ditolak</div>
                                        <div class="text-slate-500 mt-2">klik ok untuk menolak</div>
                                    </div>
                                    <form action="{{ route('permission.update', [$permission->id]) }}"
                                        method="post">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="pesanan_id"
                                            value="{{ $permission->pesanan_id }}">
                                        <input type="hidden" name="admin_id" value="{{ $permission->admin_id }}">
                                        <input type="hidden" name="confirmed" value="0">
                                        <input type="text" name="pesan">
                                        <div class="px-5 pb-8 text-center">
                                            <button type="submit" data-tw-dismiss="modal"
                                                class="py-2 px-8 rounded-lg bg-blue-500 text-white hover:bg-blue-700 focus:text-white">
                                                Ok
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


            <!-- END: Users Layout -->
        </div>
    </div>

</x-layout>
