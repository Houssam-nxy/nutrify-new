
<x-app-layout>

    <div class="p-4 sm:ml-64">
        <div class="p-4 border-1 rounded-lg bg-white mt-10">
      
    
    
            <form method="POST" action="{{ route('health.store') }}">
                @csrf

                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Additional Details</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">Add any extra details you'd like to share.</p>
            
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="height" class="block text-sm font-medium leading-6 text-gray-900">Height</label>
                            <div class="mt-2">
                                <input type="text" name="height" id="height" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
            
                        <div class="sm:col-span-3">
                            <label for="weight" class="block text-sm font-medium leading-6 text-gray-900">Weight</label>
                            <div class="mt-2">
                                <input type="text" name="weight" id="weight" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
            
                        <!-- personal information -->
            
                        <div class="sm:col-span-3">
                            <label for="age" class="block text-sm font-medium leading-6 text-gray-900">Age</label>
                            <div class="mt-2">
                                <input type="text" name="age" id="age" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
            
                        <div class="sm:col-span-3">
                            <label for="gender" class="block text-sm font-medium leading-6 text-gray-900">Gender</label>
                            <div class="mt-2">
                                <input type="text" name="gender" id="gender" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
            
                        <!-- personal information -->
            
                        <div class="sm:col-span-6">
                            <label for="condition" class="block text-sm font-medium leading-6 text-gray-900">Medical Condition</label>
                            <div class="mt-2">
                                <input type="text" name="condition" id="condition" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
            
                        <!-- personal information -->
            
                        <div class="sm:col-span-6">
                            <label for="ethnicity" class="block text-sm font-medium leading-6 text-gray-900">Ethnicity</label>
                            <div class="mt-2">
                                <input type="text" name="ethnicity" id="ethnicity" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
            
                        <!-- personal information -->

                        <div class="col-span-full">
                            <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Anything you want to say?</label>
                            <div class="mt-2">
                                <textarea id="about" name="about" rows="3" placeholder="Allergies? Best recipes? etc." class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                            </div>
                            <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about yourself.</p>
                        </div>
            
                    </div>
                </div>
            
                <div class="mt-6 flex items-center justify-center gap-x-6">
                    <button type="submit" class="rounded-md bg-[#14532d] px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-green-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                </div>
            </form>
            
            
    
    
        </div>
    </div>
    
    <br><br>
    </x-app-layout>
    