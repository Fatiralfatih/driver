{{-- title status pesanan --}}
<x-head-title name='status pesanan' />

<x-layout>
    <div class="content">
        <div class="intro-y flex flex-col justify-center sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Costumer Page
            </h2>
        </div>

        <div class="intro-y grid grid-cols-12 gap-6 mt-5">
            <!-- BEGIN: Blog Layout -->
            @foreach ($pesanans as $pesanan)
                <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">
                    <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 px-5 py-4">
                        <div class="ml-3 mr-auto">
                            <a href="" class="font-medium">{{ $pesanan->costumer->name }}</a>
                            <div class="flex text-slate-500 truncate text-xs mt-0.5">
                                <a class="text-slate-500 inline-block truncate">{{ $pesanan->costumer->email }}
                                </a>
                                <span class="mx-1">•</span> {{ $pesanan->created_at->diffForHumans() }}
                            </div>
                        </div>
                        <div class="dropdown ml-3">
                            <a href="javascript:;" class="dropdown-toggle w-5 h-5 text-slate-500" aria-expanded="false"
                                data-tw-toggle="dropdown"> <i data-lucide="more-vertical" class="w-4 h-4"></i> </a>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content">
                                    <li>
                                        <a href="" class="dropdown-item"> <i data-lucide="edit-2"
                                                class="w-4 h-4 mr-2"></i> Edit Post </a>
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item"> <i data-lucide="trash"
                                                class="w-4 h-4 mr-2"></i> Delete Post </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="h-40 2xl:h-56 image-fit">
                            @if ($pesanan->vehicle->gambar)
                                <img alt="fatir huhahuha" class="rounded-md"
                                    src="{{ asset('storage/' . $pesanan->vehicle->gambar) }}">
                            @else
                                <img alt="fatir huhahuha" class="rounded-md"
                                    src="{{ asset('dist/images/preview-6.jpg') }}">
                            @endif
                        </div>
                        <div class="text-slate-600 dark:text-slate-500 mt-5">
                            <div class="flex items-center"><i data-lucide="link" class="w-4 h-4 mr-2"></i>
                                Price: Rp.{{ number_format($pesanan->harga) }}
                            </div>
                            <div class="flex items-center mt-2">
                                <i data-lucide="navigation-2" class="w-4 h-4 mr-2"></i>
                                Tujuan: {{ ucwords($pesanan->tujuan) }}
                            </div>
                            @if ($pesanan->status == 'success')
                                <div class="flex items-center mt-2">
                                    @foreach ($pesanan->permission as $data)
                                        <i data-lucide="user" class="w-4 h-4 mr-2"></i>
                                        Driver: {{ ucwords($data->driver->name) }}
                                    @endforeach
                                </div>
                            @endif
                            <div class="flex items-center mt-2 space-x-2">
                                <i data-lucide="check-square" class="w-4 h-4 mr-2"></i>
                                Status:
                                @if ($pesanan->status == 'success')
                                    <span
                                        class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-800 ring-1 ring-inset ring-green-600/20">
                                        Pesanan sudah siap
                                    </span>
                                @elseif ($pesanan->status == 'pending')
                                    <span
                                        class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">
                                        {{ ucwords('menunggu konfirmasi admin') }}
                                    </span>
                                @elseif ($pesanan->status == 'confirmed')
                                    <span
                                        class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">
                                        {{ ucwords('sudah dikonfirmasi admin') }}
                                    </span>
                                @elseif ($pesanan->status == 'waiting')
                                    <span
                                        class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">
                                        {{ ucwords('Sedang menunggu Driver') }}
                                    </span>
                                @elseif ($pesanan->status == 'failed')
                                    <span
                                        class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">
                                        Pesanan gagal
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- END: Blog Layout -->
        </div>
    </div>

</x-layout>
