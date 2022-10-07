@extends('layouts.all')
@section('content')
<section class="bg-white dark:bg-gray-900">
  <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
      <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Bizimle iletişime geçin</h2>
       @if(session()->has('success'))
        <div class="pb-2 font-semibold text-center text-green-600 alert alert-success dark:bg-slate-50 ">
        {{ session()->get('success') }}
    </div>
    @elseif(session()->has('error'))
    <div class="pb-2 font-semibold text-center text-red-600 alert alert-success dark:bg-slate-50 ">
        {{ session()->get('error') }}
    </div>
    @endif
      <form action="{{route('setCookie')}}" method="post" class="space-y-8">
       @csrf
           <div>
              <label for="isim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Isiminiz</label>
              <input type="text" name="isim" value="{{old('isim')}}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder=" Isimininiz " required>
          </div>

          <div>
              <label for="espota" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Eposta</label>
              <input type="email" name="eposta" value="{{old('eposta')}}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="eposta@eposta.com" required>
          </div>
          <div>
              <label for="konu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Konu</label>
              <input type="text" name="konu" value="{{old('konu')}}"  class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Size nasıl yardımcı olabileceğimizi bize bildirin" required>
          </div>
          <div class="sm:col-span-2">
              <label for="mesaj" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Mesaj</label>
              <textarea name="mesaj"  value="{{old('mesaj')}}"  rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Mesajinizi yaz"></textarea>
          </div>
          <button type="submit" class="h-10 px-5 text-indigo-100 bg-indigo-700 rounded-lg transition-colors duration-150 focus:shadow-outline hover:bg-indigo-800">Gönder</button>
      </form>
  </div>
</section>
@endsection