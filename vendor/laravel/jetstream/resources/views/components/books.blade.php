<section class="text-gray-600">
<div class="container px-5 py-12 mx-auto">
    <div class="container px-10 md-auto grid justify-items-end" id="search">
        <form
            method="GET"
            action=""
            class="flex items-center space-x-5"
        >
            <div class="relative">
                <input type="text" value="{{ request()->search }}" name="search" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>

            <div class="flex items-center space-x-2">
                <button type="submit" class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-4 focus:outline-none hover:bg-indigo-600 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </button>
                <a href="/admin/books">Limpar</a>
            </div>
        </form>
    </div>
    <div class="lg:w-2/3 w-full mx-auto overflow-auto">
        <div class="flex items-center justify-between mb-2">
            <h1 class="text-2xl font-medium title-font mb-2 text-gray-900">Livros</h1>
            <a class="flex ml-auto text-white bg-indigo-500 border-0 py-1.5 px-3 text-sm focus:outline-none hover:bg-indigo-600 rounded" href="/admin/create">Adicionar</a>
        </div>
        <table class="table-auto w-full text-left whitespace-no-wrap">
            <thead>
            <tr>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100" style="width: 150px">Capa</th>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Nome</th>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Valor</th>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Estoque</th>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 text-right">Ações</th>
            </tr>
            </thead>
            <tbody class="divide-y">
            @foreach ($books as $book)
                <tr @if($loop->even)class="bg-gray-100" @endif>
                <td class="px-4 py-3">
                    <a href="/admin/books/{{ $book->slug }}"><img alt="cover" class="object-cover object-center w-full h-full block" src="{{  $book->cover }}"></a>
                </td>
                <td class="px-4 py-3"><a href="/admin/books/{{ $book->slug }}">{{ $book->name }}</a></td>
                <td class="px-4 py-3">R${{ $book->price }}</td>
                <td class="px-4 py-3">{{ $book->stock }}</td>
                <td class="px-4 py-3 text-sm text-right space-x-3 text-gray-900">
                    <a class="mt-3 text-indigo-500 inline-flex items-center" href="/admin/books/{{ $book->id }}/edit">Editar</a>
                    <form action="/admin/books/{{ $book->id }}/delete" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="mt-3 text-indigo-500 inline-flex items-center">Excluir</button>
                    </form>
                </td>
                </tr>
            </tbody>
            @endforeach
        </table>
        <div class="mt-20">
            {{ $books->appends([
                'search' => request()->get('search', '')
            ])->links() }}
        </div>
    </div>
    </div>
</section>
