<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/latest/css/all.min.css">
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

        
    </head>
    <body style='font-family: "Schibsted Grotesk", sans-serif;'>
        
        

        <section class="h-screen relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:px-8">
            <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover">
                <source src="{{ asset('img/chef.mp4') }}" type="video/mp4">
                <!-- Add additional source elements for different video formats if needed -->
            </video>
            
            <!-- Black overlay with opacity -->
            <div class="absolute inset-0 bg-black opacity-80"></div>
        
            <div class="mx-auto max-w-2xl lg:max-w-4xl relative z-10">
                <img class="mx-auto h-20" src="{{ asset('img/logo.png') }}" alt="logo">
                <figure class="mt-10">
                    <blockquote class="text-center text-xl font-semibold leading-8 text-[#e4e4e7] sm:text-2xl sm:leading-9">
                        <p>“Concerned about health conditions or food allergies? Count on us to provide personalized guidance and support tailored to your specific needs, ensuring a safe and enjoyable culinary journey.”</p>
                    </blockquote>
                    <figcaption class="mt-10">
                        <img class="mx-auto h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?q=80&w=1480&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                        <div class="mt-4 flex items-center justify-center space-x-3 text-base">
                            <div class="font-semibold text-[#e4e4e7]">El Khesassi</div>
                            <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="fill-white">
                                <circle cx="1" cy="1" r="1" />
                            </svg>
                            <div class="text-[#d6d3d1]">CEO of Nutrify</div>
                        </div>
                    </figcaption>
                </figure>
                <div class="mt-10 text-center">
                    <a
                    class="group relative inline-flex items-center overflow-hidden rounded bg-[#14532d] px-8 py-3 text-white focus:outline-none focus:ring active:bg-indigo-500"
                    href="{{ route('health.create') }}"
                    >
                    <span class="absolute -end-full transition-all group-hover:end-4">
                        <svg
                        class="size-5 rtl:rotate-180"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"
                        />
                        </svg>
                    </span>

                    <span class="text-sm font-medium transition-all group-hover:me-4"> Get started </span>
                    </a>
                </div>
            </div>
        </section>
        
        
          
          



    </body>
</html>

