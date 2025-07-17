@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6">Products</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($products as $product)
        <div class="relative m-2 flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md">
            <a class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl" href="#">
                <img class="object-cover w-full h-full" src='https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse3.mm.bing.net%2Fth%2Fid%2FOIP.0N_-pJLPt0l0Xm77YiYLBwHaG9%3Fr%3D0%26pid%3DApi&f=1&ipt=95bace79c327c4e1b3524ad0ab05e4a345331cd572a3927b67f38ee6484436cd&ipo=images' }}" alt="product image" />
            </a>
            <div class="mt-4 px-5 pb-5">
                <h5 class="text-xl tracking-tight text-slate-900">{{ $product->name }}</h5>
                <p class="text-gray-500 text-sm mt-1 mb-2">{{ $product->description }}</p>
                <div class="mt-2 mb-5 flex items-center justify-between">
                    <span class="text-3xl font-bold text-slate-900">${{ $product->price }}</span>
                </div>
                <div class="flex flex-col gap-6">
                    <span class="text-xs text-gray-500">Product By {{ $product->user->name ?? 'Unknown' }}</span>
                    <button class="bg-green-400 font-bold p-3">Buy</button>
                </div>

            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
