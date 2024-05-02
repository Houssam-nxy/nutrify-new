<x-app-layout>

    <div class="p-4 sm:ml-64">
       <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-10">
 
        
        <div class="relative flex flex-col text-gray-700 bg-white shadow-md w-full rounded-md bg-clip-border">
            <div class="flex justify-between p-4">
            <div class="text-lg text-blue-gray-700 font-semibold p-3">All recipes created</div>
                <div>
                    <a href="{{ route('recipe.create') }}" class="group relative inline-flex items-center overflow-hidden rounded bg-[#14532d] px-8 py-3 text-white focus:outline-none focus:ring active:bg-indigo-500">
                        <span class="absolute -end-full transition-all group-hover:end-4">
                            <svg class="size-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </span>
                        <span class="text-sm font-medium transition-all group-hover:me-4"> Add </span>
                    </a>
                </div>
            </div>
            <hr>
            <nav class="flex min-w-[240px] flex-col gap-1 p-2 font-sans text-base font-normal text-blue-gray-700">

                @if (count($health) > 0)
                    

                @foreach ($health as $health)


                    <a href="{{ route('health.edit', $health->id) }}">
                        <div role="button"class="flex items-center w-full p-3 py-1 pl-4 pr-1 leading-tight transition-all rounded-md outline-none text-start hover:bg-gray-100 hover:text-black">
                            <div class="">
                                    <div class="mr-auto">{{ $health->user_id }}</div>
                                    <br>
                                    <div class="text-xs pl-3 text-blue-gray-500">ID : {{ $health->id }}</div>
                                
                            </div>
                            <div class="grid ml-auto place-items-center justify-self-end">
                                <form action="{{ route('health.destroy', $health->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="relative h-10 max-h-[40px] w-10 max-w-[40px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-blue-gray-500 transition-all hover:bg-white">
                                        <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5"><path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd"></path></svg>
                                        </span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </a>
                
                @endforeach

                @else

                <div class="text-sm text-blue-gray-400 font-semibold p-3 pl-10">* Click<span class="text-gray-900"> "Add" </span>to add a new recipe</div>
                    
                @endif
        
            </nav>
            
        </div>
        
        
        
        
        
         
                
       </div>
    </div>
 
 </x-app-layout>
   