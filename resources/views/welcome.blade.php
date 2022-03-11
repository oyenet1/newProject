<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">

  @livewireStyles

  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}" defer></script>
  <title>SMS | Login</title>
</head>
<body class="relative bg-white flex justify-around h-screen w-full font-rubik">
  <div class="grid mx-auto justify-around my-auto w-full max-w-4xl xl:max-w-5xl px-4 md:grid-cols-2 gap-4 lg:gap-16 relative">
    <div class="rounded-md shadow-lg mx-auto w-full px-2 pb-8 md:pb-16 col-span-2 lg:col-span-1 ">
      <img src="/img/logo.svg" alt="bonifade logo" class="rounded-full w-20 mx-auto px-5 py-4 bg-background h-auto my-8">
      <form method="POST" action="{{ route('login') }}" class="w-full mx-auto px-4 sm:px-12 lg:px-16 flex space-y-6 flex-col pb-4">
        @csrf
        <h1 class="text-primary font-bold font-rubik text-xl md:text-2xl lg:text-3xl">Login to Dashboard</h1>
        <small class="text-gray-500">This software can be used to improve students learning. See what else you don't know about BT-SMS. <a href="https://bonifade.com" target="_blank" class="text-primary font-medium">Learn More</a></small>

        <div class="w-full space-y-8">
          <div class="text-gray-500 rounded w-full overflow-hidden relative h-11">
            <input type="email" value="{{ old('email') }}" name="email" class="border-gray-300 py-2 w-full h-full focus:border-primary border-2 text-sm rounded placeholder-gray-500 font-medium pl-8" placeholder="Enter your staff ID">
            {{-- span elements --}}
            <svg class="w-6 h-6 absolute z-20 left-2 my-auto top-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            @error('email')
               <span class="text-red-500 text-sm">{{ $message }}</span> 
            @enderror
          </div>
          <div class="text-gray-500 rounded w-full overflow-hidden relative h-11" x-data="{show: false}">
            <input :type="show ? 'text' : 'password'" value="{{ old('password') }}" placeholder="Enter your password" name="password" class="text-sm border-gray-300 py-2 pl-8 w-full h-full placeholder-gray-500 font-medium focus:border-primary border-2 rounded">
            <svg class="w-6 h-6 absolute left-2 top-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
            <span class="absolute right-2 top-2 cursor-pointer transition duration-300 hover:text-black" @click="show = !show">
              <svg :class="show ? 'block' : 'hidden'" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
              </svg>
              <svg :class="show ? 'hidden' : 'block'" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
            </span>
            @error('password')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
          </div>
          <button type="submit" class="bg-primary text-white w-full rounded text-center py-2 my-8 hover:bg-purple-900 duration-300 transition">Login</button>
        </div>
      </form>
    </div>
    <div class=" w-full relative hidden lg:flex flex-row justify-around grid-cols-2 gap-8 flex-wrap max-h-96">
      <img src="/img/image-card_1.jpg" alt="" class="shadow-lg w-36 h-auto 2xl:w-48  2xl:h-72 object-cover object-center rounded-md">
      <img src="/img/image-card_2.jpg" alt="" class="shadow-lg w-36 h-auto 2xl:w-48  2xl:h-72 object-cover object-center mt-16 rounded-md">
      <img src="/img/image-card_3.jpg" alt="" class="shadow-lg w-36 h-auto 2xl:w-48  2xl:h-72 object-cover object-center -mt-16 rounded-md">
      <img src="/img/image-card_4.jpg" alt="" class="shadow-lg w-36 h-auto 2xl:w-48  2xl:h-72 object-cover object-center rounded-md">
    </div>
    <p class="text-sm text-gray-500 font-medium max-w-max">Powered By<a href="https://bonifade.com" class="text-primary" target="_blank" title="Click to Contact"> Bonifade Technologies</a></p>
    <a href="mailto:info@bonifade.com" class="rounded text-primary border-2 border-primary px-4 transition duration-300 hover:bg-primary hover:text-white py-2 text-sm -mt-8 font-medium absolute right-3  top-0" target="_blank" title="Click to Contact">Contact</a>
  </div>
  {{-- <a href="https://bonifade.com" class="rounded text-primary border-2 border-primary px-4 transition duration-300 hover:bg-primary hover:text-white py-2 text-sm my-3 absolute right-3 top-2" target="_blank" title="Click to Contact">Contact</a> --}}
 @livewireScripts
</body>
</html>
