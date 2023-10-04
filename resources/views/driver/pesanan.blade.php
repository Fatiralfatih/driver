{{-- title pesanan driver --}}
<x-head-title name='pesanan driver' />

<x-layout>

    <div class="content">
        <h2 class="intro-y text-lg font-medium mt-10">
            Daftar Pesanan
        </h2>
        <div class="grid grid-cols-12 gap-6 mt-5">
            <!-- BEGIN: Users Layout -->
            <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-3">
                @foreach ($pesanans as $pesanan)
                    @if ($pesanan->status == 'pending')
                        <div class="box">
                            <div class="p-5">
                                <div
                                    class="h-40 2xl:h-56 image-fit rounded-md overflow-hidden before:block before:absolute before:w-full before:h-full before:top-0 before:left-0 before:z-10 before:bg-gradient-to-t before:from-black before:to-black/10">
                                    @if ($pesanan->vehicle_id)
                                        <img alt="fatirhahaha" class="rounded-md"
                                            src="{{ asset('storage/'. $pesanan->vehicle->gambar) }}">
                                    @else
                                        <img alt="fatirhahaha" class="rounded-md"
                                            src="{{ asset('dist/images/preview-7.jpg') }}">
                                    @endif
                                    <span
                                        class="absolute top-0 bg-pending/80 text-white text-xs m-5 px-2 py-1 rounded z-10">Featured</span>
                                    <div class="absolute bottom-0 text-white px-5 pb-6 z-10"> <a href=""
                                            class="block font-medium text-base">{{ $pesanan->vehicle->name_vehicle }}3</a>
                                        <span
                                            class="text-white/90 text-xs mt-3">{{ $pesanan->vehicle->category->name }}</span>
                                    </div>
                                </div>
                                <div class="text-slate-600 dark:text-slate-500 mt-5">
                                    <div class="flex items-center mb-2"> <i data-lucide="user" class="w-4 h-4 mr-2"></i>
                                        Costumer: {{ $pesanan->costumer->name }}
                                    </div>
                                    <div class="flex items-center"> <i data-lucide="link" class="w-4 h-4 mr-2"></i>
                                        Price: Rp. {{ number_format($pesanan->harga) }}
                                    </div>
                                    <div class="flex items-center mt-2 "> <i data-lucide="navigation-2"
                                            class="w-4 h-4 mr-2"></i> Tujuan: {{ $pesanan->tujuan }} </div>
                                    <div class="flex items-center mt-2"> <i data-lucide="message-circle"
                                            class="w-4 h-4 mr-2"></i>
                                        Pesan: {{ $pesanan->pesan }}
                                    </div>
                                </div>
                            </div>
                            <div
                                class="flex justify-center lg:justify-end items-center p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                                <div class="flex items-center mr-3" data-tw-toggle="modal"
                                    data-tw-target="#terima{{ $pesanan->id }}">
                                    <i data-lucide="check-square" class="w-4 h-4 mr-1"></i>
                                    Terima
                                </div>
                                <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal"
                                    data-tw-target="#tolak{{ $pesanan->id }}">
                                    <i data-lucide="trash-2"class="w-4 h-4 mr-1"></i>
                                    Tolak
                                </a>
                            </div>
                        </div>
                        {{-- ----------------------- --}}
                        {{-- ---- terima pesanan ----- --}}
                        {{-- ----------------------- --}}
                        <div id="terima{{ $pesanan->id }}" class="modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content"> <a data-tw-dismiss="modal" href="javascript:;"> <i
                                            data-lucide="x" class="w-8 h-8 text-slate-400"></i> </a>
                                    <div class="modal-body p-0">
                                        <div class="p-5 text-center"> <i data-lucide="check-circle"
                                                class="w-16 h-16 text-success mx-auto mt-3"></i>
                                            <div class="text-3xl mt-5">Pesanan Telah diterima</div>
                                            <div class="text-slate-500 mt-2">klik ok untuk menerima</div>
                                        </div>
                                        <form action="{{ route('pesanan.update', [$pesanan->id]) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="status" value="confirmed">
                                            <input type="hidden" name="driver_id" value="{{ Auth()->user()->id }}">
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
                        <div id="tolak{{ $pesanan->id }}" class="modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content"> <a data-tw-dismiss="modal" href="javascript:;"> <i
                                            data-lucide="x" class="w-8 h-8 text-slate-400"></i> </a>
                                    <div class="modal-body p-0">
                                        <div class="p-5 text-center"> <i data-lucide="check-circle"
                                                class="w-16 h-16 text-success mx-auto mt-3"></i>
                                            <div class="text-3xl mt-5">Pesanan Telah ditolak</div>
                                            <div class="text-slate-500 mt-2">klik ok untuk menolak</div>
                                        </div>
                                        <form action="{{ route('pesanan.update', [$pesanan->id]) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="status" value="failed">
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
                    @elseif ($pesanan->status == 'success')
                        <div class="box">
                            <div class="p-5">
                                <div
                                    class="h-40 2xl:h-56 image-fit rounded-md overflow-hidden before:block before:absolute before:w-full before:h-full before:top-0 before:left-0 before:z-10 before:bg-gradient-to-t before:from-black before:to-black/10">
                                    <img alt="Midone - HTML Admin Template" class="rounded-md"
                                        src="{{ asset('dist/images/preview-7.jpg') }}">
                                    <span
                                        class="absolute top-0 bg-pending/80 text-white text-xs m-5 px-2 py-1 rounded z-10">Featured</span>
                                    <div class="absolute bottom-0 text-white px-5 pb-6 z-10"> <a href=""
                                            class="block font-medium text-base">{{ $pesanan->vehicle->name_vehicle }}3</a>
                                        <span
                                            class="text-white/90 text-xs mt-3">{{ $pesanan->vehicle->category->name }}</span>
                                    </div>
                                </div>
                                <div class="text-slate-600 dark:text-slate-500 mt-5">
                                    <div class="flex items-center mb-2"> <i data-lucide="user"
                                            class="w-4 h-4 mr-2"></i>
                                        Costumer: {{ $pesanan->costumer->name }}
                                    </div>
                                    <div class="flex items-center"> <i data-lucide="link" class="w-4 h-4 mr-2"></i>
                                        Price: Rp. {{ number_format($pesanan->harga) }}
                                    </div>
                                    <div class="flex items-center mt-2 "> <i data-lucide="navigation-2"
                                            class="w-4 h-4 mr-2"></i> Tujuan: {{ $pesanan->tujuan }} </div>
                                    <div class="flex items-center mt-2"> <i data-lucide="message-circle"
                                            class="w-4 h-4 mr-2"></i>
                                        Pesan: {{ $pesanan->pesan }}
                                    </div>
                                </div>
                            </div>
                            <div
                                class="flex justify-center lg:justify-end items-center p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                                <div class="flex items-center mr-3">
                                    <button class="py-3 px-5 bg-green-500 rounded-xl text-white">Pesanan sudah
                                        diterima</button>
                                </div>
                            </div>
                        </div>
                    @elseif ($pesanan->status == 'confirmed')
                        <div class="box">
                            <div class="p-5">
                                <div
                                    class="h-40 2xl:h-56 image-fit rounded-md overflow-hidden before:block before:absolute before:w-full before:h-full before:top-0 before:left-0 before:z-10 before:bg-gradient-to-t before:from-black before:to-black/10">
                                    <img alt="Midone - HTML Admin Template" class="rounded-md"
                                        src="{{ asset('dist/images/preview-7.jpg') }}">
                                    <span
                                        class="absolute top-0 bg-pending/80 text-white text-xs m-5 px-2 py-1 rounded z-10">Featured</span>
                                    <div class="absolute bottom-0 text-white px-5 pb-6 z-10"> <a href=""
                                            class="block font-medium text-base">{{ $pesanan->vehicle->name_vehicle }}3</a>
                                        <span
                                            class="text-white/90 text-xs mt-3">{{ $pesanan->vehicle->category->name }}</span>
                                    </div>
                                </div>
                                <div class="text-slate-600 dark:text-slate-500 mt-5">
                                    <div class="flex items-center mb-2"> <i data-lucide="user"
                                            class="w-4 h-4 mr-2"></i>
                                        Costumer: {{ $pesanan->costumer->name }}
                                    </div>
                                    <div class="flex items-center"> <i data-lucide="link" class="w-4 h-4 mr-2"></i>
                                        Price: Rp. {{ number_format($pesanan->harga) }}
                                    </div>
                                    <div class="flex items-center mt-2 "> <i data-lucide="navigation-2"
                                            class="w-4 h-4 mr-2"></i> Tujuan: {{ $pesanan->tujuan }} </div>
                                    <div class="flex items-center mt-2"> <i data-lucide="message-circle"
                                            class="w-4 h-4 mr-2"></i>
                                        Pesan: {{ $pesanan->pesan }}
                                    </div>
                                </div>
                            </div>
                            <div
                                class="flex justify-center lg:justify-end items-center p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                                <div class="flex items-center mr-3">
                                    <button class="py-3 px-5 bg-yellow-500 rounded-xl text-white">
                                        tunggu konfirmasi admin
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>


            <!-- END: Users Layout -->
        </div>
    </div>

</x-layout>
