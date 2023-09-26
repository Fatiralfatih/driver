<x-layout>
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Vehicle Edit
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5 ">
        <div class="intro-y col-span-12 lg:col-span-6 xl:col-span-12">
            <!-- BEGIN: Form Layout -->

            <form action="{{ route('vehicle.update', ['id' => $vehicle->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="PUT" >
                <div class="intro-y box p-5">

                    {{-- gambar --}}
                    <div class="mt-3">
                        <label for="gambar" class="form-label">Upload Image</label>

                        @if ($vehicle->gambar)
                            <img 
                            class="img-preview rounded-xl mb-4" 
                            src="{{ asset('storage/' . $vehicle->gambar) }}" 
                            width="150" height="150">
                            <input type="hidden" name="oldImage" value="{{ $vehicle->gambar }}">
                            <input 
                                type="file" 
                                name="gambar" 
                                class="w-full"
                                id="gambar"
                                required
                                onchange="previewImage()"
                            >
                        @else
                            <img class="img-preview rounded-xl mb-4" width="150" height="150">
                            <input 
                                type="file" 
                                name="gambar" 
                                class="w-full"
                                id="gambar"
                                onchange="previewImage()"
                            >
                        @endif
                        
                    </div>  

                    <x-form.input name='title' :value="$vehicle->title"/>

                    <x-form.input name='slug' :value="$vehicle->slug"/>

                    <x-form.input name='name_vehicle' :value="$vehicle->name_vehicle"/>


                    <x-form.option name='user_id'>

                        @foreach ($users as $data)
                            <option value="{{ $data->id }}">{{ $data->name }} | {{ $data->role }} </option>
                        @endforeach
                        
                    </x-form.option>

                    <x-form.option name='category_id'>

                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                        
                    </x-form.option>

                    <x-form.input name='body' :value="$vehicle->body"/>

                    {{-- status --}}
                    <div class="mt-3 mb-4">
                        <label for="">Status</label>
                      </div>
                      <div class="flex items-center mb-4">
                        <input 
                          id="default-radio-1"
                          type="radio"
                          value="on"
                          name="status"
                          class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                          @checked($vehicle->status)
                          >
                        <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ya</label>
                      </div>
                      <div class="flex items-center">
                        <input 
                          id="default-radio-2"
                          type="radio"
                          value="off"
                          name="status"
                          class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                          @checked(!$vehicle->status)
                        >
                        <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tidak</label>
                    </div>

                    <x-form.button name='edit' link="vehicle.index"/>
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