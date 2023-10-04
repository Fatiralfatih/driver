{{-- title vehicle create --}}
<x-head-title name='vehicle create'/>

<x-layout>
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Vehicle Create
            </h2>
        </div>
        <div class="grid grid-cols-12 gap-6 mt-5 ">
            <div class="intro-y col-span-12 lg:col-span-6 xl:col-span-12">
                <!-- BEGIN: Form Layout -->

                <form action="{{ route('vehicle.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="intro-y box p-5">

                        <x-form.gambar name='gambar'/>

                        <x-form.input name='name_vehicle'/>
                        <x-form.input name='slug'/>
                        <x-form.input name='title'/>
                        <x-form.input name='deskripsi'/>

                        <x-form.option name='category_id'>

                                <option selected disabled>Pilih Category</option>
                            @foreach ($vehicles as $data)
                               <option value="{{ $data->category->id }}">{{ $data->category->name }}</option>
                            @endforeach
                        
                        </x-form.option>

                        <x-form.checkbox name='status' checked=''/>
                        
                        <x-form.button name='Create' link='vehicle.index'/>
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