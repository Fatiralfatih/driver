{{-- title Data pesanan --}}
<x-head-title name='Data pesanan' />

<x-layout>

    <div class="content">
        <h2 class="intro-y text-lg font-medium mt-10">
            Transaction List
        </h2>
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 flex flex-wrap xl:flex-nowrap items-center mt-2">
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
                    <button class="btn btn-primary shadow-md mr-2"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i>
                        Export to Excel </button>
                    <button class="btn btn-primary shadow-md mr-2"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i>
                        Export to PDF </button>
                    <div class="dropdown">
                        <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                            <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4"
                                    data-lucide="plus"></i> </span>
                        </button>
                        <div class="dropdown-menu w-40">
                            <ul class="dropdown-content">
                                <li>
                                    <a href="" class="dropdown-item"> <i data-lucide="arrow-left-right"
                                            class="w-4 h-4 mr-2"></i> Change Status </a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item"> <i data-lucide="bookmark"
                                            class="w-4 h-4 mr-2"></i> Bookmark </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- BEGIN: Data List -->
            <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                <table class="table table-report -mt-2">
                    <thead>
                        <tr>
                            <th class="text-center whitespace-nowrap">Vehicle</th>
                            <th class="text-center whitespace-nowrap">Nama Costumer</th>
                            <th class="whitespace-nowrap">Tujuan</th>
                            <th class="text-center whitespace-nowrap">
                                Total Harga
                            </th>
                            <th class="whitespace-nowrap text-center">Status</th>
                            <th class="text-center whitespace-nowrap">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pesanans as $pesanan)
                            <tr class="intro-x ">
                                <td class="flex items-center overview-hidden">
                                    <div class="w-10 h-10 image-fit zoom-in">
                                        <img alt="Midone - HTML Admin Template"
                                            class="rounded-lg border-2 w-10 border-white shadow-md tooltip"
                                            src="{{ asset('storage/' . $pesanan->vehicle->gambar) }}"
                                            title="{{ $pesanan->vehicle->created_at->diffForHumans() }}">
                                    </div>
                                    <div class="flex justify-center items-center ml-4">
                                        {{ $pesanan->vehicle->name_vehicle }}
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="font-medium whitespace-nowrap">{{ $pesanan->costumer->name }}</div>
                                </td>
                                <td>
                                    <div class="whitespace-nowrap">{{ $pesanan->tujuan }}</div>
                                </td>
                                <td class="w-40 text-left">
                                    Rp.{{ number_format($pesanan->harga) }}
                                </td>
                                <td class="text-center">
                                    @if ($pesanan->status == 'pending')
                                        <div class="flex items-center justify-center whitespace-nowrap text-warning">
                                            <i data-lucide="check-square" class="w-4 h-4 mr-2"></i>
                                            pesanan belum dikonfirmasi
                                        </div>
                                    @elseif ($pesanan->status == 'success')
                                        <div class="flex items-center justify-center whitespace-nowrap text-success">
                                            <i data-lucide="check-square" class="w-4 h-4 mr-2"></i>
                                            Success
                                        </div>
                                    @elseif ($pesanan->status == 'confirmed')
                                        <div class="flex items-center justify-center whitespace-nowrap text-success">
                                            <i data-lucide="check-square" class="w-4 h-4 mr-2"></i>
                                            Pesanan sudah dikonfrimasi
                                        </div>
                                    @elseif ($pesanan->status == 'waiting')
                                        <div class="flex items-center justify-center whitespace-nowrap text-primary">
                                            <i data-lucide="check-square" class="w-4 h-4 mr-2"></i>
                                            sedang menunggu konfirmasi driver
                                        </div>
                                    @elseif ($pesanan->status == 'failed')
                                        <div class="flex items-center justify-center whitespace-nowrap text-danger">
                                            <i data-lucide="check-square" class="w-4 h-4 mr-2"></i>
                                            Failed
                                        </div>
                                    @endif
                                </td>
                                <td class="table-report__action">
                                    @if ($pesanan->status == 'pending')
                                        <div class="flex justify-center items-center">
                                            <a class="flex items-center text-success whitespace-nowrap"
                                                href="javascript:;" data-tw-toggle="modal"
                                                data-tw-target="#konfirmasi-pesanan{{ $pesanan->id }}">
                                                <i data-lucide="check-square" class="w-4 h-4 mr-1">
                                                </i>
                                                konfirmasi pesanan
                                            </a>
                                        </div>
                                    @elseif ($pesanan->status == 'success')
                                        <div class="flex justify-center items-center">
                                            <a class="flex items-center text-primary whitespace-nowrap mr-5"
                                                href="{{ route('pesanan.show', [$pesanan->invoice]) }}">
                                                <i data-lucide="check-square" class="w-4 h-4 mr-1"></i>
                                                View Details
                                            </a>
                                            <a class="flex items-center text-danger whitespace-nowrap"
                                                href="javascript:;" data-tw-toggle="modal"
                                                data-tw-target="#delete-pesanan{{ $pesanan->id }}">
                                                <i data-lucide="trash-2" class="w-4 h-4 mr-1">
                                                </i>
                                                Delete Pesanan
                                            </a>
                                        </div>
                                    @elseif ($pesanan->status == 'failed')
                                        <div class="flex justify-center items-center">
                                            <a class="flex items-center text-primary whitespace-nowrap mr-5"
                                                href="{{ route('pesanan.show', [$pesanan->invoice]) }}">
                                                <i data-lucide="check-square" class="w-4 h-4 mr-1"></i>
                                                Lihat Pesan Driver
                                            </a>
                                            <a class="flex items-center text-danger whitespace-nowrap"
                                                href="javascript:;" data-tw-toggle="modal"
                                                data-tw-target="#delete-pesanan{{ $pesanan->id }}">
                                                <i data-lucide="trash-2" class="w-4 h-4 mr-1">
                                                </i>
                                                Delete Pesanan
                                            </a>
                                        </div>
                                    @endif

                                    @if ($pesanan->status == 'confirmed')
                                        @foreach ($pesanan->permission as $item)
                                            <div class="flex justify-center items-center">
                                                <a class="flex items-center text-secondary whitespace-nowrap"
                                                    href="{{ route('permission.changeDriver', [$item->id]) }}">
                                                    <i data-lucide="users" class="w-4 h-4 mr-1">
                                                    </i>
                                                    Pilih driver
                                                </a>
                                            </div>
                                        @endforeach
                                    @elseif ($pesanan->status == 'waiting')
                                        <div class="flex justify-center items-center">
                                            <a class="flex items-center text-secondary whitespace-nowrap"
                                                href="{{ route('pesanan.show', [$pesanan->invoice]) }}">
                                                <i data-lucide="check-square" class="w-4 h-4 mr-1">
                                                </i>
                                                View Details
                                            </a>
                                        </div>
                                    @endif
                                </td>
                            </tr>
                            {{-- ------------- ---------- --}}
                            {{-- ----konfirmasi-pesanan- --}}
                            {{-- ------------------------ --}}
                            <div id="konfirmasi-pesanan{{ $pesanan->id }}" class="modal" data-tw-backdrop="static"
                                tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body p-0">
                                            <form action="{{ route('permission.store') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="pesanan_id" value={{ $pesanan->id }}>
                                                <input type="hidden" name="admin_id" value={{ Auth()->user()->id }}>
                                                <input type="hidden" name="confirmed" value="0">
                                                <div class="p-5 text-center"> <i data-lucide="check-circle"
                                                        class="w-16 h-16 text-primary mx-auto mt-3"></i>
                                                    <div class="text-3xl mt-5">Berhasil Dikonfirmasi </div>
                                                    <div class="text-slate-500 mt-2">klik konfirmasi untuk melanjutkan
                                                    </div>
                                                </div>
                                                <div class="px-5 pb-8 text-center">
                                                    <button type="button" data-tw-dismiss="modal"
                                                        class="py-2 px-4 rounded-lg bg-slate-500 text-white hover:bg-slate-600 focus:text-white">
                                                        Cancel
                                                    </button>
                                                    <button type="submit"
                                                        class="py-2 px-4 rounded-lg bg-blue-500 text-white hover:bg-blue-600 focus:text-white">Konfirmasi
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- end konfirmasi-pesanan --}}

                            {{-- ----------------------- --}}
                            {{-- ------Delete pesanan---- --}}
                            {{-- ----------------------- --}}
                            <div id="delete-pesanan{{ $pesanan->id }}" class="modal" tabindex="-1"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body p-0">
                                            <div class="p-5 text-center"> <i data-lucide="x-circle"
                                                    class="w-16 h-16 text-danger mx-auto mt-3"></i>
                                                <div class="text-3xl mt-5">Are you sure?</div>
                                                <div class="text-slate-500 mt-2">Do you really want to delete these
                                                    records? <br>This process cannot be undone.</div>
                                            </div>
                                            <form action="{{ route('pesanan.delete', [$pesanan->id]) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <div class="px-5 pb-8 text-center">
                                                    <button type="button" data-tw-dismiss="modal"
                                                        class="py-2 px-6 rounded-md bg-white-500 border-2 mr-2">
                                                        Cancel
                                                    </button>
                                                    <button type="submit" class="py-2 px-6 rounded-md bg-red-500">
                                                        Delete
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <!-- END: Data List -->
        </div>

    </div>


</x-layout>
