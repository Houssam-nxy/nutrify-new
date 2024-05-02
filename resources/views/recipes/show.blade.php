<x-app-layout>

    <div class="p-4 sm:ml-64">
       <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-10">
            <div class="relative flex flex-col text-gray-700 bg-white shadow-md w-full rounded-md bg-clip-border">
 
                <br>
        
                <p class="pl-19">
                    {!! str_replace(['```html', '```'], '', $recipe->description) !!}
                </p>
                

                <br>
               
         
            </div> 
       </div>
    </div>
 
 </x-app-layout>
   