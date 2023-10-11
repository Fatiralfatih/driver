{{-- title Detail pesanan --}}
<x-head-title name='Detail pesanan' />

<x-layout>
    <div class="content">
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Transaction Details
            </h2>
            <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                <button class="btn btn-primary shadow-md mr-2">Print</button>
                <div class="dropdown ml-auto sm:ml-0">
                    <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                        <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4"
                                data-lucide="plus"></i> </span>
                    </button>
                    <div class="dropdown-menu w-40">
                        <ul class="dropdown-content">
                            <li>
                                <a href="" class="dropdown-item"> <i data-lucide="file" class="w-4 h-4 mr-2"></i>
                                    Export Word </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item"> <i data-lucide="file" class="w-4 h-4 mr-2"></i>
                                    Export PDF </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- BEGIN: Transaction Details -->
        <div class="intro-y grid grid-cols-11 gap-5 mt-5">
            <div class="col-span-12 lg:col-span-4 2xl:col-span-3">
                <div class="box p-5 rounded-md">
                    <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5    mb-5">
                        <div class="font-medium text-base">Transaction Details</div>
                    </div>
                    <div class="flex items-center mt-3 text-md text-bold">
                        Invoice : <div class="underline decoration-wavy"> {{ $pesanan->invoice }}</div>
                    </div>
                    <div class="flex items-center mt-3">
                        <i data-lucide="calendar" class="w-4 h-4 text-slate-500 mr-2"></i>
                        Purchase Date: {{ date($pesanan->created_at) }}
                    </div>
                    <div class="flex items-center mt-3">
                        <i data-lucide="clock" class="w-4 h-4 text-slate-500 mr-2"></i>
                        Transaction Status:
                        @if ($pesanan->status == 'success')
                            <span
                                class="inline-flex 
                            items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-800 ring-1 ring-inset ring-green-600/20">
                                Success
                            </span>
                        @elseif ($pesanan->status == 'pending')
                            <span
                                class="inline-flex 
                            items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">
                                Pending
                            </span>
                        @elseif ($pesanan->status == 'confirmed')
                            <span
                                class="inline-flex 
                            items-center rounded-md bg-slate-50 px-2 py-1 text-xs font-medium text-slate-800 ring-1 ring-inset ring-slate-600/20">
                                Confirmed
                            </span>
                        @elseif ($pesanan->status == 'waiting')
                            <span
                                class="inline-flex 
                            items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">
                               Waiting
                            </span>
                        @elseif ($pesanan->status == 'failed')
                            <span
                                class="inline-flex 
                            items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">
                                Failed
                            </span>
                        @endif
                    </div>
                </div>
                {{-- ------------- ----------- --}}
                {{-- -----Costumer Detail------- --}}
                {{-- ------------------------ --}}
                <div class="box p-5 rounded-md mt-5">
                    <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                        <div class="font-medium text-base truncate">Costumer Details</div>
                        <a href="" class="flex items-center ml-auto text-primary"> <i data-lucide="edit"
                                class="w-4 h-4 mr-2"></i> View Details </a>
                    </div>
                    <div class="flex items-center">
                        <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i>
                        Name:
                        <a href="" class="underline decoration-dotted ml-1">
                            {{ $pesanan->costumer->name }}
                        </a>
                    </div>
                    <div class="flex items-center mt-3">
                        <i data-lucide="calendar" class="w-4 h-4 text-slate-500 mr-2">
                        </i> Phone Number: {{ $pesanan->costumer->no_hp }}
                    </div>
                    <div class="flex items-center mt-3">
                        <i data-lucide="map-pin" class="w-4 h-4 text-slate-500 mr-2"></i>
                        Address: {{ $pesanan->costumer->alamat }}
                    </div>
                </div>

                {{-- ---------------- --------- --}}
                {{-- -------Driver Details --- --}}
                {{-- --------------------------- --}}
                @foreach ($pesanan->permission as $permission)
                    @if ($permission->driver_id && $permission->pesanan->status == 'success')
                        <div class="box p-5 rounded-md mt-5">
                            <div
                                class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                                <div class="font-medium text-base truncate">
                                    Driver Details
                                </div>
                                <a href="driver:" class="flex items-center ml-auto text-primary" data-tw-toggle="modal"
                                    data-tw-target="#change-driver">
                                    <i data-lucide="edit" class="w-4 h-4 mr-2"></i> View Detail
                                </a>
                            </div>
                            <div class="flex items-center">
                                <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i>
                                Name:
                                <a href="" class="underline decoration-dotted ml-1">
                                    {{ ucwords($permission->driver->name) }}
                                </a>
                            </div>
                            <div class="flex items-center mt-3">
                                <i data-lucide="calendar" class="w-4 h-4 text-slate-500 mr-2">
                                </i> Phone Number: {{ $permission->driver->no_hp }}
                            </div>
                            <div class="flex items-center mt-3">
                                <i data-lucide="map-pin" class="w-4 h-4 text-slate-500 mr-2"></i>
                                Email: {{ $permission->driver->email }}
                            </div>
                        </div>
                    @elseif ($permission->driver_id && $permission->pesanan->status == 'waiting')
                        <div class="box p-5 rounded-md mt-5">
                            <div
                                class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                                <div class="font-medium text-base truncate">
                                    Driver Details
                                </div>
                            </div>
                            <div class="flex items-center">
                                <i data-lucide="user" class="w-4 h-4 text-slate-500 mr-2">
                                </i>
                                <p class="text-sm text-red-500">Driver Belum Konfirmasi</p>
                            </div>
                        </div>
                    @elseif ($permission->driver_id && $permission->pesanan->status == 'failed')
                        <div class="box p-5 rounded-md mt-5">
                            <div
                                class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                                <div class="font-medium text-base truncate">
                                    Driver Details
                                </div>
                                <a href="{{route('permission.changeDriver', [$permission->id])}}" class="flex items-center ml-auto text-primary">
                                    <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Pilih Driver Lagi
                                </a>
                            </div>
                            <div class="flex items-center">
                                <i data-lucide="user" class="w-4 h-4 text-slate-500 mr-2">
                                </i>
                                <p class="text-sm text-red-500">Driver Menolak</p>
                            </div>
                        </div>
                    @endif
                    {{-- change driver--- --}}
                    {{-- -------------- --}}
                    {{-- <div id="change-driver{{ $permission->id }}" class="modal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- BEGIN: Modal Header -->
                                <div class="modal-header">
                                    <h2 class="font-medium text-base mr-auto">
                                        Detail data {{ $permission->pesanan->invoice }}
                                    </h2>
                                </div> <!-- END: Modal Header -->
                                <!-- BEGIN: Modal Body -->
                                <form action="" method="post">
                                    @csrf
                                    @method('put')
                                    <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                                        <div class="col-span-12 sm:col-span-6">
                                            <label for="modal-form-6" class="form-label">
                                                Change Status
                                            </label>
                                            <select id="modal-form-6" name="status" class="form-select">
                                                <option disabled selected>--Change status---</option>
                                                    <option value="success"></option>
                                                </option>
                                            </select>
                                        </div>
                                    </div> <!-- END: Modal Body -->
                                    <!-- BEGIN: Modal Footer -->
                                    <div class="modal-footer">
                                        <button type="button" data-tw-dismiss="modal"
                                            class="py-2 px-3 rounded-lg bg-slate-500 text-white hover:bg-slate-600 focus:text-white">Cancel
                                        </button>
                                        <button type="submit"
                                            class="py-2 px-5 rounded-lg bg-blue-500 text-white hover:bg-blue-600 focus:text-white">Send
                                        </button>
                                    </div>
                                    <!-- END: Modal Footer -->
                                </form>
                            </div>
                        </div>
                    </div> --}}
                    {{-- end change driver --}}
                @endforeach

            </div>

            {{-- ------------ ----- --}}
            {{-- -pesanan detail --- --}}
            {{-- ---------------- -- --}}
            <div class="col-span-12 lg:col-span-7 2xl:col-span-8">
                <div class="box p-5 rounded-md">
                    <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                        <div class="font-medium text-base truncate">Order Details</div>
                        <a href="" class="flex items-center ml-auto text-primary"> <i data-lucide="plus"
                                class="w-4 h-4 mr-2"></i> Add Notes </a>
                    </div>
                    <div class="lg:overflow-x-scroll overflow-x-auto -mt-3">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="whitespace-nowrap !py-5">Vehicle</th>
                                    <th class="whitespace-nowrap text-center">Costumer Name</th>
                                    <th class="whitespace-nowrap text-center">Tujuan</th>
                                    <th class="whitespace-nowrap text-center">Harga</th>
                                    <th class="whitespace-nowrap text-center">Pesan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="!py-4">
                                        <div class="flex items-center">
                                            <div class="w-10 h-10 image-fit zoom-in">
                                                @if ($pesanan->vehicle_id)
                                                <img alt="Midone - HTML Admin Template"
                                                    class="rounded-lg border-2 border-white shadow-md tooltip"
                                                    src="{{ asset('storage/' . $pesanan->vehicle->gambar) }}"
                                                    title="{{ $pesanan->vehicle->created_at->diffForHumans() }}">
                                                    @endif
                                                </div>
                                                <a class="font-medium whitespace-nowrap ml-4">
                                                    {{ $pesanan->vehicle->name_vehicle }}
                                                </a>
                                            </div>
                                        </td>
                                    <td class="text-right"> {{ $pesanan->costumer->name }} </td>
                                    <td class="text-right">{{ $pesanan->tujuan }}</td>
                                    <td class="text-right">Rp. {{ number_format($pesanan->harga) }} </td>
                                    <td class="text-right">{{ $pesanan->pesan }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</x-layout>
