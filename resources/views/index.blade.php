@extends('index.layouts.default')

@section('content')

    {{-- Section 1 --}}
    <div class="flex flex-col text-center w-full mt-20">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Mark Twain</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">“Em uma boa biblioteca, você sente, de alguma forma misteriosa, que você está absorvendo, através da pele, a sabedoria contida em todos aqueles livros, mesmo sem abrí-los.”</p>
    </div>

    <section class="text-gray-600 body-font">
      <div class="container px-5 py-24 mx-auto flex flex-wrap">
        <div class="lg:w-2/3 mx-auto">
          <div class="flex flex-wrap w-full bg-gray-100 py-32 px-10 relative mb-4">
            <img alt="gallery" class="w-full object-cover h-full object-center block opacity-70 absolute inset-0" src="https://i.pinimg.com/originals/32/d6/d4/32d6d42fec1397731b87fe60386b48ed.jpg">
            <div class="text-center relative z-10 w-full">
              <h2 class="text-2xl text-gray-900 font-medium title-font mb-2">O Pequeno Principe</h2>
              <p class="leading-relaxed">O Pequeno Príncipe é uma obra literária do escritor francês Antoine de Saint-Exupéry, que conta a história da amizade entre um homem frustrado por ninguém compreender os seus desenhos, com um principezinho que habita um...</p>
              <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
          </div>
          <div class="flex flex-wrap -mx-2">
            <div class="px-2 w-1/2">
              <div class="flex flex-wrap w-full bg-gray-100 sm:py-24 py-16 sm:px-10 px-6 relative">
                <img alt="gallery" class="w-full object-cover h-full object-center block opacity-70 absolute inset-0" src="https://i.pinimg.com/236x/22/88/49/2288490fb4fa2b86598952b2b8a86d31.jpg">
                <div class="text-center relative z-10 w-full">
                  <h2 class="text-xl text-gray-900 font-medium title-font mb-2">Shooting Stars</h2>
                  <p class="leading-relaxed">Skateboard +1 mustache fixie paleo lumbersexual.</p>
                  <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                      <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <div class="px-2 w-1/2">
              <div class="flex flex-wrap w-full bg-gray-100 sm:py-24 py-16 sm:px-10 px-6 relative">
                <img alt="gallery" class="w-full object-cover h-full object-center block opacity-70 absolute inset-0" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTI0swx20z98xQaGSg6mhhaT11D-nTcWmBZmamqq6TAeyK_0HCz7Y6iORBRSvwwbAKi23I&usqp=CAU">
                <div class="text-center relative z-10 w-full">
                  <h2 class="text-xl text-gray-900 font-medium title-font mb-2">Shooting Stars</h2>
                  <p class="leading-relaxed">Skateboard +1 mustache fixie paleo lumbersexual.</p>
                  <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                      <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- Section 2 --}}

    <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        {{-- book 1 --}}
        <div class="flex flex-wrap -m-4">
        <div class="lg:w-1/3 sm:w-1/2 p-4">
            <div class="flex relative">
            <img alt="gallery" id="bookcover" class="absolute inset-0 w-full h-full object-cover object-center" src="https://i.pinimg.com/564x/35/84/bc/3584bc3d895ab842b4d1333651f810ae.jpg">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">Nome do livro</h2>
                <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Nome</h1>
                <p class="leading-relaxed">Descrição</p>
            </div>
            </div>
        </div>


        {{-- book 2 --}}
        <div class="lg:w-1/3 sm:w-1/2 p-4">
            <div class="flex relative">
            <img alt="gallery" id="bookcover" class="absolute inset-0 w-full h-full object-cover object-center" src="https://i.pinimg.com/564x/fe/8b/fb/fe8bfb083081b8d11997d71ff69bdfb1.jpg">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">Nome do livro</h2>
                <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Nome</h1>
                <p class="leading-relaxed">Descrição</p>
            </div>
            </div>
        </div>

        {{-- book 3 --}}
        <div class="lg:w-1/3 sm:w-1/2 p-4">
            <div class="flex relative">
            <img alt="gallery" id="bookcover" class="absolute inset-0 w-full h-full object-cover object-center" src="https://i.pinimg.com/236x/f8/2e/7a/f82e7a0be6e06b5ed20cdfe687a4aeda.jpg">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">Nome do livro</h2>
                <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Nome</h1>
                <p class="leading-relaxed">Descrição</p>
            </div>
            </div>
        </div>

        {{-- book 4 --}}
        <div class="lg:w-1/3 sm:w-1/2 p-4">
            <div class="flex relative">
            <img alt="gallery" id="bookcover" class="absolute inset-0 w-full h-full object-cover object-center" src="https://i.pinimg.com/236x/87/57/87/875787ca8c43a6b64b4e82cc498e6da3.jpg">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">Nome do livro</h2>
                <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Nome</h1>
                <p class="leading-relaxed">Descrição</p>
            </div>
            </div>
        </div>

        {{-- book 5 --}}
        <div class="lg:w-1/3 sm:w-1/2 p-4">
            <div class="flex relative">
            <img alt="gallery" id="bookcover" class="absolute inset-0 w-full h-full object-cover object-center" src="https://i.pinimg.com/236x/ce/8f/1c/ce8f1cd9404b0e6cf2f15fc0b54a7cff.jpg">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">Nome do livro</h2>
                <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Nome</h1>
                <p class="leading-relaxed">Descrição</p>
            </div>
            </div>
        </div>

        {{-- book 6 --}}
        <div class="lg:w-1/3 sm:w-1/2 p-4">
            <div class="flex relative">
            <img alt="gallery" id="bookcover" class="absolute inset-0 w-full h-full object-cover object-center" src="https://i.pinimg.com/564x/ca/8f/67/ca8f67acb44fe8dd0ff5c38b0d95ba2d.jpg">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">Nome do livro</h2>
                <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Nome</h1>
                <p class="leading-relaxed">Descrição</p>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>

      {{-- Section 3 --}}

@endsection

<style>
    #bookcover {
        margin: auto;
        width: 40%;
    }
</style>