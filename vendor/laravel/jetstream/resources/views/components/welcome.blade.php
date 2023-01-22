
<section class="text-gray-600 body-font">
<div class="container px-5 py-24 mx-auto">
    <div class="text-center mb-20">
    <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">Olá, {{ Auth::user()->name }}.</h1>
    <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">Logo abaixo estão as funcionalidades do sistema. Divirta-se!.</p>
    <div class="flex mt-6 justify-center">
        <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
    </div>
</div>

    <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
    <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
        <img src="https://cdn-icons-png.flaticon.com/512/3145/3145765.png" alt="">          
        </div>
        <div class="flex-grow">
        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Livros</h2>
        <p class="leading-relaxed text-base">Adicione, edite ou exclua os livros da biblioteca.</p>
        <a class="mt-3 text-indigo-500 inline-flex items-center" href=" {{ route('admin.index') }}">Vamos lá
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
        </a>
        </div>
    </div>
    <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
        <img src="https://cdn-icons-png.flaticon.com/512/1622/1622628.png" alt="">
        </div>
        <div class="flex-grow">
        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Fornecedores</h2>
        <p class="leading-relaxed text-base">Faça o controle dos forncedores da biblioteca.</p>
        <a class="mt-3 text-indigo-500 inline-flex items-center">Vamos lá
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
        </a>
        </div>
    </div>
    <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
        <img src="https://cdn-icons-png.flaticon.com/512/2936/2936774.png" alt="">           
        </div>
        <div class="flex-grow">
        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Equipe</h2>
        <p class="leading-relaxed text-base">Veja todos os colaboradores.</p>
        <a class="mt-3 text-indigo-500 inline-flex items-center">Vamos lá
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
        </a>
        </div>
    </div>
    </div>

    <div class="py-10"></div>

    <div class="flex flex-wrap sm:-m-4 -mx-4 -mt-10 -mt-4 md:space-y-0 space-y-6">
    <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
        <img src="https://cdn-icons-png.flaticon.com/512/508/508250.png" alt="">            
        </div>
        <div class="flex-grow">
        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Segurança</h2>
        <p class="leading-relaxed text-base">Termos e condições de seguranças.</p>
        <a class="mt-3 text-indigo-500 inline-flex items-center">Vamos lá
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
        </a>
        </div>
    </div>
    <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
        <img src="https://cdn-icons-png.flaticon.com/512/2452/2452655.png" alt="">
        </div>
        <div class="flex-grow">
        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Dados de migração</h2>
        <p class="leading-relaxed text-base">Veja todos os dados de imigração.</p>
        <a class="mt-3 text-indigo-500 inline-flex items-center">Vamos lá
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
        </a>
        </div>
    </div>
    <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
        <img src="https://cdn-icons-png.flaticon.com/512/998/998401.png" alt="">           
        </div>
        <div class="flex-grow">
        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Funções administrativas</h2>
        <p class="leading-relaxed text-base">Ver e editar funções de administradores.</p>
        <a class="mt-3 text-indigo-500 inline-flex items-center">Vamos lá
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
        </a>
        </div>
    </div>
    </div>
    <a href="/">
    <button class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Voltar</button>
    </a>
</div>
</section>