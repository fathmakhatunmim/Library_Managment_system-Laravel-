@extends('library.default')
@section('title', 'Register')
@section('content')

@if($errors->any())
<div class="alert alert-error mb-4">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="navbar bg-[#98DDED] shadow-sm">
  <div class="flex-1 flex item-center">
   <img src="images/icons.png" alt="Flower Image" class="w-10 h-auto rounded-lg">

    <a class="btn btn-ghost text-xl"
    >Library Managment system</a>
  </div>
  <div class="flex-none">
    <ul class="menu menu-horizontal px-1 space-x-4">
       <div class="flex justify-center">
      <a href="{{ route('login') }}"
       class="px-6 py-2 bg-[#313C2C] hover:bg-yellow-600 rounded-lg font-bold transition-all text-white ">
       Admin
        </a>
</div>

 <div class="flex justify-center">
      <a href="{{ route('login') }}"
       class="px-6 py-2 bg-[#313C2C]
       hover:bg-yellow-600 rounded-lg font-bold transition-all text-white ">
       Sign In
        </a>
</div>

    
      <li>
        {{-- <details>
          <summary>Parent</summary>
          <ul class="bg-base-100 rounded-t-none p-2">
            <li><a>Link 1</a></li>
            <li><a>Link 2</a></li>
          </ul>
        </details> --}}
      </li>
    </ul>
  </div>
</div>

<div>


<div class="min-h-screen flex items-center justify-center bg-[#EFFAFC]">

   <div class="flex flex-col md:flex-row rounded-3xl shadow-lg overflow-hidden w-full max-w-6xl border-4 border-dashed border-gray-400 p-2">

        <form action="{{ route('register.post') }}" method="POST">
            @csrf
            <div class="p-10 w-2xl">
           <h2 class="text-2xl font-bold mb-6 text-gray-800">Register</h2>

            <label class="block mb-2 text-sm font-medium text-gray-700">Full Name</label>
            <input type="text" name="fullname" placeholder="Full Name"
                class="w-full mb-4 px-4 py-2 border border-dark rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">

            <label class="block mb-2 text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" placeholder="Email"
                class="w-full mb-4 px-4 py-2 border border-dark rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">

            <label class="block mb-2 text-sm font-medium text-gray-700">Password</label>
            <input type="password" name="password" placeholder="Password"
                class="w-full mb-4 px-4 py-2 border border-dark rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">

            <label class="block mb-2 text-sm font-medium text-gray-700">Confirm Password</label>
            <input type="password" name="password_confirmation" placeholder="Confirm Password"
                class="w-full mb-6 px-4 py-2 border border-dark rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">

            <button type="submit"
                class="w-full py-2 bg-[#313C2C] hover:bg-yellow-600 text-white font-bold rounded-lg transition-all">Sign Up</button>

            </div>
           
        </form>


  <div class="hidden md:block text-white p-5 flex flex-col items-center justify-center rounded-3xl py-50 w-2xl shadow-cyan-700"
     style="background-image: url('{{ asset('images/log.avif') }}'); background-size: 450px; background-repeat: no-repeat; background-position: center;">






        
      {{-- <div class="flex justify-center">
      <a href="{{ route('login') }}"
       class="px-6 py-2 bg-yellow-500 hover:bg-yellow-600 rounded-lg font-bold transition-all">
       Sign In
        </a>
</div> --}}

</div>

    </div>


    </div>

</div>


@endsection