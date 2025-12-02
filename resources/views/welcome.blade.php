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
       Dashboad
        </a>
</div>


 <div class="flex justify-center">
      <a href="{{ route('login') }}"
       class="px-6 py-2 bg-[#313C2C]
       hover:bg-yellow-600 rounded-lg font-bold transition-all text-white ">
       Books
        </a>
</div>

     <div class="flex justify-center">
      <a href="{{ route('login') }}"
       class="px-6 py-2 bg-[#313C2C]
       hover:bg-yellow-600 rounded-lg font-bold transition-all text-white ">
       Issues
        </a>
</div>
 <div class="flex justify-center">
      <a href="{{ route('login') }}"
       class="px-6 py-2 bg-[#313C2C]
       hover:bg-yellow-600 rounded-lg font-bold transition-all text-white ">
       Reserved
        </a>
</div>
<div class="flex justify-center">
    <a href="{{ route('login') }}"
       class="flex items-center px-4 py-2 bg-[#313C2C] hover:bg-yellow-600 rounded-lg font-bold transition-all text-white space-x-2">
       
       <!-- Image -->
       <img src="{{ asset('images/notification.png') }}" alt="Notification" class="w-6 h-6">
       
      
    </a>
</div>

 <div class="flex justify-center">
      <a href="{{ route('login') }}"
       class="px-6 py-2 bg-[#313C2C]
       hover:bg-yellow-600 rounded-lg font-bold transition-all text-white mb-2">
       logout
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
<div class="p-6">
  <h1 class="text-4xl font-bold text-gray-800 mb-4 text-center ">
    Welcome to Our Library
  </h1>   
</div>
<div class="grid grid-cols-3 ">
    
<div class="w-120  mx-auto bg-[#EFFAFC] rounded-3xl shadow-lg p-6 mt-10 "> 
  <div class="flex justify-center mb-4">
    <img src="{{ asset('images/iconbook.png') }}" alt="Notification" class="w-24 h-24 rounded-full">
  </div>
  <div class="flex justify-center">
    <a href="{{ route('login') }}"
       class="flex items-center px-6 py-2 border-3 hover:bg-yellow-600 rounded-lg font-bold transition-all text-black space-x-2">    
       <span>Review Book</span>
    </a>
  </div>
</div>


<div class="w-120  mx-auto bg-[#EFFAFC] rounded-3xl shadow-lg p-6 mt-10"> 
  <div class="flex justify-center mb-4">
    <img src="{{ asset('images/iconbook.png') }}" alt="Notification" class="w-24 h-24 rounded-full">
  </div>
  <div class="flex justify-center">
    <a href="{{ route('login') }}"
       class="flex items-center px-6 py-2 border-3 hover:bg-yellow-600 rounded-lg font-bold transition-all text-black space-x-2">    
       <span>Available books</span>
    </a>
  </div>
</div>

<div class="w-120 mx-auto bg-[#EFFAFC] rounded-3xl shadow-lg p-6 mt-10"> 
  <div class="flex justify-center mb-4">
    <img src="{{ asset('images/iconbook.png') }}" alt="Notification" class="w-24 h-24 rounded-full">
  </div>
  <div class="flex justify-center">
    <a href="{{ route('login') }}"
       class="flex items-center px-6 py-2 border-3 hover:bg-yellow-600 rounded-lg font-bold transition-all text-black space-x-2">    
       <span>My Account</span>
    </a>
  </div>
</div>

<div class="w-120 mx-auto bg-[#EFFAFC] rounded-3xl shadow-lg p-6 mt-10"> 
  <div class="flex justify-center mb-4">
    <img src="{{ asset('images/iconbook.png') }}" alt="Notification" class="w-24 h-24 rounded-full">
  </div>
  <div class="flex justify-center">
    <a href="{{ route('login') }}"
       class="flex items-center px-6 py-2 border-3 hover:bg-yellow-600 rounded-lg font-bold transition-all text-black space-x-2">    
       <span>Issued Book</span>
    </a>
  </div>
</div>

<div class="w-120 mx-auto bg-[#EFFAFC] rounded-3xl shadow-lg p-6 mt-10"> 
  <div class="flex justify-center mb-4">
    <img src="{{ asset('images/iconbook.png') }}" alt="Notification" class="w-24 h-24 rounded-full">
  </div>
  <div class="flex justify-center">
    <a href="{{ route('login') }}"
       class="flex items-center px-6 py-2 border-3 hover:bg-yellow-600 rounded-lg font-bold transition-all text-black space-x-2">    
       <span>Reservation Request</span>
    </a>
  </div>
</div>

<div class="w-120 mx-auto bg-[#EFFAFC] rounded-3xl shadow-lg p-6 mt-10"> 
  <div class="flex justify-center mb-4">
    <img src="{{ asset('images/iconbook.png') }}" alt="Notification" class="w-24 h-24 rounded-full">
  </div>
  <div class="flex justify-center">
    <a href="{{ route('login') }}"
       class="flex items-center px-6 py-2 border-3 hover:bg-yellow-600 rounded-lg font-bold transition-all text-black space-x-2">    
       <span>issued Book</span>
    </a>
  </div>
</div>







</div>


@endsection