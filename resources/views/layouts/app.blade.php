<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
    <link href="/css/sb-admin-2.css" rel="stylesheet">
  </head>
  <body class="bg-gray-100 text-gray-800">
    <nav class="flex py-10 text-white "navbar navbar-default" 
    style="background-color:green ;" role="navigation">
      <div class="w-1/2 px-12 mr-auto">
        <p class="text-2xl font-bold">UPTFLIX</p>
      </div>
      <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
      @if(auth()->check())
        <li class="mx-8">
          <p class="text-xl">Welcome <b>{{ auth()->user()->name }}</b></p>
        </li>
        <li>
          <a href="{{ route('login.destroy') }}" class="font-bold
          py-3 px-4 rounded-md bg-red-500 hover:bg-red-600">Log Out</a>
        </li>
      @else
        <li class="mx-6">
          <a href="{{ route('login.index') }}" class="font-semibold 
          hover:bg-red-700 py-3 px-4 rounded-md">INICIAR SECION</a>
        </li>
           <li>
          <a href="{{ route('register.index') }}" class="font-semibold
          border-2 border-white py-2 px-4 rounded-md hover:bg-white 
          hover:text-red-700">REGISTRARSE</a>
        </li>
       
      @endif
         </ul>
        </nav>
    @yield('content')
  </body>
  </html>