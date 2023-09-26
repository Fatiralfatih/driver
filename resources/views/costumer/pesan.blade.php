<x-layout>
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Pesan Vehicle
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5 ">
        <div class="intro-y col-span-12 lg:col-span-6 xl:col-span-12">
            <!-- BEGIN: Form Layout -->

            <form action="{{ route('costumer.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="intro-y box p-5">

                        <x-form.input name='user_id' :value="Auth()->user()->id" type="text" />
                        <x-form.input name='vehicle_id' :value="$vehicle->id" type="text" />

                        <x-form.input name='tujuan'/>
                        
                        <x-form.input name='pesan'/>

                        <div class="mt-3">

                            <label for="crud-form-1" class="form-label">{{ ucwords('transaction') }}</label>

                        <input 
                            id="crud-form-1" 
                            name="transaction" 
                            type="number" 
                            class="form-control w-full @error('transaction') border-2 border-red-500 @enderror" 
                            placeholder="Input Transaction ..."
                            value="{{ old('transaction', $vehicle->transaction) }}"
                            >
                    </div>
                    
                    @error('transaction')
                                                
                            <div class="mt-0 ms-1"> 
                                    <p class="text-red-500">{{ ucwords($message) }}</p> 
                            </div>
                    
                    @enderror
                        
                        <x-form.button name='Pesan' link='costumer.index'/>
                    </div>
            </form>
            <!-- END: Form Layout -->
        </div>
    </div>

<script>

    function previewImage(){
        const gambar = document.querySelector('#gambar');
        const imgPreview = document.querySelector('.img-preview');

        const ofReader = new FileReader();
        ofReader.readAsDataURL(gambar.files[0]);

        ofReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
    
</script>
</x-layout>