<x-head-title name="Change Driver" />

<x-layout>

    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Change Driver
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5 ">
        <div class="intro-y col-span-12 lg:col-span-6 xl:col-span-12">
            <!-- BEGIN: Form Layout -->

            <form action="{{ route('permission.update', [$permission->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="intro-y box p-5">
                    <input type="hidden" name="pesanan_id" value="{{ $permission->pesanan->id }}">
                    <input type="hidden" name="admin_id" value="{{ Auth()->user()->id }}">
                    <input type="hidden" name="confirmed" value="0">
                    <select class="tom-select w-full" name="driver_id">
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                    <x-form.button name='Create' link='pesanan.index' />
                </div>
            </form>
            <!-- END: Form Layout -->
        </div>
    </div>

</x-layout>
