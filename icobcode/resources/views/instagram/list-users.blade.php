@extends('layouts.all')
@section('content')
<div class="h-screen pb-14 bg-right bg-cover">
	<div class="container pt-24 md:pt-48 px-6 mx-auto flex flex-wrap flex-col md:flex-row items-center">
		<div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden">
			<h3 class="my-4 text-lg md:text-5xl text-purple-800 leading-tight text-center md:text-left slide-in-bottom-h1">Birden fazla benzerlik isimler Göster</h3>
           @if (session()->has('error'))
            <div class="pb-2 font-semibold text-center text-red-600 alert alert-success dark:bg-slate-50 ">
                {{ session()->get('error') }}
            </div>
            @endif
            <form method="post" action="{{ route('userSearch')}}">
             @csrf
                <div class="flex">
                    <div class="relative w-full">
                        <input type="search" name="kullanciAdi" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-100 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="kullanci isim" required="">
                        <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg></button>
                    </div>
                </div>
            </form>
			</div>
		</div>	
	</div>
</div>
@endsection