@extends('layouts.all')
@section('content')

<div class="overflow-x-auto relative">
@empty(Cookie::get('isim') && Cookie::get('eposta') && Cookie::get('konu') && Cookie::get('mesaj'))
     <div class="pb-2 font-semibold text-center text-red-700 alert alert-error dark:bg-yellow-400 ">
     {{'Şu an için hiçbir cookie bulunmamaktadır.'}}
        </div>
    @else
    <div class="pb-2 font-semibold text-center text-red-700 alert alert-error dark:bg-yellow-500 ">
     {{'Bir saat sonra bu cookie kaydedilecek.'}}
        </div>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                  {{'Isim'}}
                </th>
                <th scope="col" class="py-3 px-6">
                    {{'Eposta'}}
                </th>
                <th scope="col" class="py-3 px-6">
                    {{'Konu'}}
                </th>
                <th scope="col" class="py-3 px-6">
                   {{'Mesaj'}}
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{Cookie::get('isim')}}
                </th>
                <td class="py-4 px-6">
                    {{Cookie::get('eposta')}}
                </td>
                <td class="py-4 px-6">
                   {{Cookie::get('konu')}}
                </td>
                <td class="py-4 px-6">
                    <p> {{Cookie::get('mesaj')}}</p>
                </td>
            </tr>
        </tbody>
    </table>
    @endempty
</div>

@endsection