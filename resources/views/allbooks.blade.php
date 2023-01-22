@extends('index.layouts.default')

@section('content')
        <section>
            <div class="container px-10 md-auto grid justify-items-end" id="search">
                <form
                    method="GET"
                    action=""
                    class="flex items-center space-x-5">
                    <div class="relative">
                        <input type="text"  value="{{ request()->search }}" name="search" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>

                    <div class="flex items-center space-x-2">
                        <button type="submit" class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-4 focus:outline-none hover:bg-indigo-600 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </button>
                        <a href="books">Limpar</a>
                    </div>
                </form>
            </div>
        </section>
        <section class="text-gray-600 body-font">
        <div class="container px-5 py-12 mx-auto">
            <div class="flex flex-wrap -m-4">
            @foreach ($books as $book) 
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <div class="block relative h-48 rounded overflow-hidden">
                        <a href="/admin/{{ $book->slug }}">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ $book->cover }}">
                        </a>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Gênero</h3>
                        <a href="/admin/{{ $book->slug }}">
                        <h2 class="text-gray-900 title-font text-lg font-medium">{{ $book->name }}</h2>
                        </a>
                        <p class="mt-1">R$ {{ $book->price }}</p>
                    </div>
                </div>
            @endforeach
            </div>
            <div class="mt-20">
                {{ $books->appends([
                    'search' => request()->get('search', '')
                ])->links() }}
            </div>
        </div>
        </section>
@endsection