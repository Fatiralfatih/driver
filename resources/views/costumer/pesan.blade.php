{{-- title pesan vehicle --}}
<x-head-title name='pesan vehicle'/>

<x-layout>
    
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Vehicle Create
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5 ">
        <div class="intro-y col-span-12 lg:col-span-6 xl:col-span-12">
            <!-- BEGIN: Form Layout -->

            <form action="{{ route('pesanan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="intro-y box p-5">
                        
                    <x-form.input name='vehicle_id' :value="$vehicle->id" type='hidden' />
                    <x-form.input name='status' value='pending' type='hidden' />
                    <x-form.input name='costumer_id' :value="auth()->user()->id" type='hidden' />
                    <x-form.input name='tujuan'/>

                    <x-form.input name='harga' type='number'/>

                    <x-form.input name='pesan'/>
                    
                    <x-form.button name='pesan' link='costumer.show'/>
                </div>
            </form>
            <!-- END: Form Layout -->
        </div>
    </div>

</x-layout>