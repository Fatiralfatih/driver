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