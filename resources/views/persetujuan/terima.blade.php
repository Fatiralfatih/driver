{{-- title terima pesanan --}}
<x-head-title name='terima pesanan'/>

<x-layout>
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Terima Pesanan
            </h2>
        </div>
        <div class="grid grid-cols-12 gap-6 mt-5 ">
            <div class="intro-y col-span-12 lg:col-span-6 xl:col-span-12">
                <!-- BEGIN: Form Layout -->

                <form action="{{ route('persetujuan.store') }}" method="POST">
                    @csrf
                    <div class="intro-y box p-5">
                        <x-form.input name='driver_id' :value='Auth()->user()->id' type='text' />
                        <x-form.input name='pesanan_id' :value='$pesanans->id' type='text' />
                        <x-form.input name='pesan'/>
                        <x-form.input name='confirmed' value='1' type='text'/>
                        
                        <x-form.button name='Terima' link='driver.pesanan'/>
                    </div>
                </form>
                <!-- END: Form Layout -->
            </div>
        </div>
</x-layout>