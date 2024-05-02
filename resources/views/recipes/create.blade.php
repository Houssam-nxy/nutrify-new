
<x-app-layout>

    <div class="p-4 sm:ml-64">
        <div class="p-4 border-1 rounded-lg bg-white mt-10">
      
    
    
            <form method="POST" action="{{ route('recipe.store') }}">
                @csrf

                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Personal Information</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">Be careful what you share.</p>
                
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                        <div class="sm:col-span-6">
                            <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Create a name for this Reco ?</label>
                            <div class="mt-2">
                                <input type="text" name="title" id="title" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-6">
                            <label for="dietary_restrictions" class="block text-sm font-medium leading-6 text-gray-900">Do you have any dietary restrictions ?</label>
                            <div class="mt-2">
                                <input type="text" name="dietary_restrictions" id="dietary_restrictions" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                
                        <div class="sm:col-span-6">
                            <label for="cuisines" class="block text-sm font-medium leading-6 text-gray-900">Are there any cuisines you particularly enjoy or dislike?</label>
                            <div class="mt-2">
                                <input type="text" name="cuisines" id="cuisines" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                
                        <div class="sm:col-span-6">
                            <label for="dish_preference" class="block text-sm font-medium leading-6 text-gray-900">Do you have a preference for the type of dish (e.g., breakfast, lunch, dinner, snack, dessert)?</label>
                            <div class="mt-2">
                                <select name="dish_preference" id="dish_preference" class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <option value="">Select preference</option>
                                    <option value="Breakfast">Breakfast</option>
                                    <option value="Lunch">Lunch</option>
                                    <option value="Dinner">Dinner</option>
                                    <option value="Snack">Snack</option>
                                    <option value="Dessert">Dessert</option>
                                </select>
                            </div>
                        </div>
                
                        <div class="sm:col-span-6">
                            <label for="cook_time" class="block text-sm font-medium leading-6 text-gray-900">Are you looking for something quick and easy, or do you have more time to cook?</label>
                            <div class="mt-2">
                                <input type="text" name="cook_time" id="cook_time" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                
                        <div class="col-span-full">
                            <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Anything you want to say?</label>
                            <div class="mt-2">
                                <textarea id="about" name="about" rows="3" placeholder="Best recipes? etc." class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                            </div>
                            <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about yourself.</p>
                        </div>

                        <div class="col-span-full">
                            <label for="Option1" class="flex cursor-pointer items-start gap-4 py-4">
                                <div class="flex items-center">
                                  &#8203;
                                  <input type="checkbox" class="size-4 rounded border-gray-300" id="Option1" required/>
                                </div>
                          
                                <div>
                                  <strong class="font-medium text-gray-900"> I agree </strong>
                          
                                  <p class="mt-1 text-pretty text-sm text-red-700">
                                    Your information helps us tailor content just for you. You're in control—you can choose to give your consent before we use it to create personalized recommendations.
                                  </p>
                                </div>
                              </label>
                        </div>
                
                    </div>
                </div>
                
            
                <div class="mt-6 flex items-center justify-center gap-x-6">
                    <button type="submit" class="rounded-md bg-[#14532d] px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-green-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Generate ✨
                    </button>
                </div>
            </form>
            
            
    
    
        </div>
    </div>
    
    <br><br>
    </x-app-layout>
    