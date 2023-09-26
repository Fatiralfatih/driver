<div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">

    <button class="btn btn-primary shadow-md mr-2">
        <a href="{{ route('vehicle.create') }}">
            Add New Product
        </a>
    </button>

    <div class="dropdown">
        <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
            <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-lucide="plus"></i> </span>
        </button>
        <div class="dropdown-menu w-40">
            <ul class="dropdown-content">
                <li>
                    <a href="" class="dropdown-item"> <i data-lucide="printer" class="w-4 h-4 mr-2"></i> Print </a>
                </li>
                <li>
                    <a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to Excel </a>
                </li>
                <li>
                    <a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to PDF </a>
                </li>
            </ul>
        </div>
    </div>
   
    <div class="hidden md:block mx-auto text-slate-500">Showing 1 to 10 of 150 entries</div>
    <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
        <div class="w-56 relative text-slate-500">
        <form action="/vehicle/index" method="GET">

            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}" >
            @endif

            <input 
                type="text" 
                class="form-control w-56 box pr-10"
                name="search"
                placeholder="Search..."
                value="{{ request('search')}}"
            >
            <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
        </form>
        </div>
    </div>
</div>