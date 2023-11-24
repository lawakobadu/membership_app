<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  @livewireStyles
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script src="https://kit.fontawesome.com/bfa0fbe579.js" crossorigin="anonymous"></script>

  <title>{{ config('app.name', 'Laravel') }}</title>

</head>
<body class="antialiased bg-black">
  <nav class="h-14 items-center flex justify-between text-center p-4">
    <div class="flex-initial w-32">
      <a href="#" class="flex items-center font-semibold text-white dark:text-gray-400 dark:hover:text-white"><img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">Logo</a>
    </div>
    <div class="flex-initial w-76 space-x-4">
      <a href="/" class="font-semibold text-gray-500 hover:text-white dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
      <a href="#" class="font-semibold text-gray-500 hover:text-white dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><i class="px-2 fa-solid fa-lock"></i>Basic</a>
      <a href="#" class="font-semibold text-gray-500 hover:text-white dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><i class="px-2 fa-solid fa-lock"></i>Middle</a>
      <a href="#" class="font-semibold text-gray-500 hover:text-white dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><i class="px-2 fa-solid fa-lock"></i>Advance</a>
    </div>
    <div class="flex-initial w-32">
      @if (Route::has('login'))
        @auth
          <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-500 hover:text-white dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
          @else
          <a href="{{ route('login') }}" class="font-semibold text-gray-500 hover:text-white dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

          @if (Route::has('register'))
          <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-500 hover:text-white dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
          @endif
        @endauth
      @endif
    </div>
  </nav>

  <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white space-x-4">
    
    <div x-data="{ name:'Free' }" class="border-2 rounded-md box-decoration-clone bg-gradient-to-r from-indigo-600 to-pink-500 text-white px-2 w-80">
      <div class="p-4">
        <h1 class="font-bold text-6xl">
          <span x-text="name"></span>
        </h1>
        <p class="mt-4">Best for guest</p>
        <div class="flex my-4">
          <h1 class="text-4xl font-bold">$0 </h1><p class="self-end text-slate-400">/Month</p>
        </div>
        <hr>
        <div class="flex flex-col items-start my-4">
          <p><i class="fa-regular fa-circle-check me-2" style="color: #37ff00;"></i>Lorem ipsum dolor sit amet.</p>
          <p><i class="fa-regular fa-circle-check me-2" style="color: #37ff00;"></i>Lorem ipsum dolor sit amet.</p>
          <p><i class="fa-regular fa-circle-check me-2" style="color: #37ff00;"></i>Lorem ipsum dolor sit amet.</p>
        </div>
        <livewire:counter /> 
      </div>
    </div>
    
    @foreach($plans as $plan)
    <div x-data="{ name:'{{ $plan->name }}' }" class="border-2 rounded-md box-decoration-clone bg-gradient-to-r from-indigo-600 to-pink-500 text-white px-2 w-80">
      <div class="p-4">
        <h1 class="font-bold text-6xl">
          <span x-text="name"></span>
        </h1>
        <p class="mt-4">Best for membership</p>
        <div class="flex my-4">
          <h1 class="text-4xl font-bold">${{ $plan->price }}</h1><p class="self-end text-slate-400">/Month</p>
        </div>
        <hr>
        <div class="flex flex-col items-start my-4">
          <p><i class="fa-regular fa-circle-check me-2" style="color: #37ff00;"></i>Lorem ipsum dolor sit amet.</p>
          <p><i class="fa-regular fa-circle-check me-2" style="color: #37ff00;"></i>Lorem ipsum dolor sit amet.</p>
          <p><i class="fa-regular fa-circle-check me-2" style="color: #37ff00;"></i>Lorem ipsum dolor sit amet.</p>
          <p><i class="fa-regular fa-circle-check me-2" style="color: #37ff00;"></i>Lorem ipsum dolor sit amet.</p>
          <p><i class="fa-regular fa-circle-check me-2" style="color: #37ff00;"></i>Lorem ipsum dolor sit amet.</p>
          <p><i class="fa-regular fa-circle-check me-2" style="color: #37ff00;"></i>Lorem ipsum dolor sit amet.</p>
        </div>
        <livewire:counter /> 
      </div>
    </div>
    @endforeach

  </div>
  @livewireScripts
</body>
</html>