<x-guest-layout>
    
<section class="bg-white">
    <div class="lg:grid lg:min-h-screen lg:grid-cols-12">
      <aside class="relative block h-16 lg:order-last lg:col-span-5 lg:h-full xl:col-span-6">
        <img
          alt=""
          src="https://images.unsplash.com/photo-1506863530036-1efeddceb993?q=80&w=1344&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
          class="absolute inset-0 h-full w-full object-cover"
        />
      </aside>
  
      <main
        class="flex items-center justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6"
      >
        <div class="max-w-xl lg:max-w-3xl">
          <a class="block text-[#14532d]" href="#">
            <span class="sr-only">Home</span>
            <img src="{{ asset('img/logo.png') }}" alt="logo" class="h-8 sm:h-10">
          </a>
  
          <h1 class="mt-6 text-2xl font-bold text-gray-900 sm:text-3xl md:text-4xl">
            Welcome to Nutrify
          </h1>
  
          <p class="mt-4 leading-relaxed text-gray-500">
            Your personalized nutrition planner for healthier eating. Discover delicious recipes tailored to your tastes and dietary needs.
          </p>

          <!-- Validation Errors -->
        @if ($errors->any())
            <div class="mb-4">
                <div class="font-medium text-red-600">{{ __('Whoops! Something went wrong.') }}</div>

                <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
  
          <form method="POST" action="{{ route('register') }}" class="mt-8 grid grid-cols-6 gap-6">
            @csrf

            <div class="col-span-6">
              <label for="name" class="block text-sm font-medium text-gray-700">
                {{ __('Name') }}
              </label>
  
              <input 
                :value="old('name')"
                required autofocus
                type="text"
                id="name"
                name="name"
                class="mt-1 h-10 w-full pl-3 rounded-md border-gray bg-white text-sm text-gray-700 shadow-sm"
                style="border: 1px solid gray"
              />
            </div>
  
  
            <div class="col-span-6">
              <label for="email" class="block text-sm font-medium text-gray-700"> {{ __('Email') }} </label>
  
              <input
                :value="old('email')" 
                required
                type="email"
                id="email"
                name="email"
                class="mt-1 h-10 w-full pl-3 rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                style="border: 1px solid gray"
              />
            </div>
  
            <div class="col-span-6 sm:col-span-3">
              <label for="Password" class="block text-sm font-medium text-gray-700"> {{ __('Password') }} </label>
  
              <input 
                required 
                autocomplete="new-password"
                type="password"
                id="Password"
                name="password"
                class="mt-1 h-10 w-full pl-3 rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                style="border: 1px solid gray"
              />
            </div>
  
            <div class="col-span-6 sm:col-span-3">
              <label for="PasswordConfirmation" class="block text-sm font-medium text-gray-700">
                {{ __('Confirm Password') }}
              </label>
  
              <input 
                required 
                autocomplete="new-password"
                type="password"
                id="password_confirmation"
                name="password_confirmation"
                class="mt-1 h-10 w-full pl-3 rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                style="border: 1px solid gray"
              />
            </div>
  
            <div class="col-span-6">
              <p class="text-sm text-gray-500">
                By creating an account, you agree to our
                <a href="#" class="text-gray-700 underline"> terms and conditions </a>
                and
                <a href="#" class="text-gray-700 underline">privacy policy</a>.
              </p>
            </div>
  
            <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
              <button type="submit"
                class="inline-block shrink-0 rounded-md border border-[#14532d] bg-[#14532d] px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-[#14532d] focus:outline-none focus:ring active:text-blue-500"
              >
              {{ __('Register') }}
              </button>
  
              <p class="mt-4 text-sm text-gray-500 sm:mt-0">
                {{ __('Already registered?') }}
                <a href="{{ route('login') }}" class="text-gray-700 underline">Log in</a>.
              </p>
            </div>
          </form>
        </div>
      </main>
    </div>
  </section>

</x-guest-layout>
