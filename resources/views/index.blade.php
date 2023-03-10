@extends('index.layouts.default')

@section('content')

    {{-- Section 1 --}}

    <section class="text-gray-600 body-font">
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap w-full mb-20">
          <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Os maiores escritores de todos<br> os tempos</h1>
            <div class="h-1 w-20 bg-indigo-500 rounded"></div>
          </div>
          <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Se você é daqueles que mal acabou de abrir um livro e já está pensado no próximo que irá ler então chega junto, esse artigo é a sua cara!

            Separamos para você a biografia dos maiores escritores da literatura universal. <br>Aproveite para se inspirar e adicionar mais títulos na sua lista de leitura.</p>
        </div>
        <div class="flex flex-wrap -m-4">
          <div class="xl:w-1/4 md:w-1/2 p-4">
            <div class="bg-gray-100 p-6 rounded-lg">
              <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://s.ebiografia.com/img/ma/ch/machado_de_assis_c.jpg" alt="content">
              <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">1839-1908</h3>
              <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Machado de Assis</h2>
              <p class="leading-relaxed text-base">Falar de literatura brasileira e não citar o nome de Machado de Assis seria um crime. 
                De origem humilde, filho de um pintor de paredes com uma imigrante açoriana, 
                Machado enfrentou desde a mais tenra infância uma série de barreiras. Ele passou por dificuldades econômicas, 
                ficou órfão cedo, 
                também perdeu a irmã e teve que conviver com uma terrível epilepsia...</p>
            </div>
          </div>
          <div class="xl:w-1/4 md:w-1/2 p-4">
            <div class="bg-gray-100 p-6 rounded-lg">
              <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://s.ebiografia.com/img/sh/ak/shakespeare_maconha_weed_c.jpg" alt="content">
              <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">1564-1616</h3>
              <h2 class="text-lg text-gray-900 font-medium title-font mb-4">William Shakespeare</h2>
              <p class="leading-relaxed text-base">O nome por trás dos maiores clássicos do teatro - Hamlet, Othelo, Macbeth e Romeu e Julieta - é o de William Shakespeare, um nome incontornável da dramaturgia.<br>

                O escritor inglês começou a trabalhar quando tinha 13 anos depois de uma súbita falência da família. Quando se mudou para Londres, trabalhou como guardador de cavalos na porta do primeiro teatro da cidade...</p>
            </div>
          </div>
          <div class="xl:w-1/4 md:w-1/2 p-4">
            <div class="bg-gray-100 p-6 rounded-lg">
              <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://s.ebiografia.com/img/sa/ra/saramago_c.jpg" alt="content">
              <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">1922-2010</h3>
              <h2 class="text-lg text-gray-900 font-medium title-font mb-4">José Saramago</h2>
              <p class="leading-relaxed text-base">Vencedor do Prêmio Nobel de Literatura, é preciso dizer mais alguma coisa? José Saramago colecionou uma série de prêmios ao longo da vida como, por exemplo, o Camões.

                Nascido em Santarém e criado em Lisboa, Saramago era filho de camponeses e se formou no ensino técnico como serralheiro mecânico. Para se sustentar, também trabalhou como funcionário público...</p>
            </div>
          </div>
          <div class="xl:w-1/4 md:w-1/2 p-4">
            <div class="bg-gray-100 p-6 rounded-lg">
              <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://s.ebiografia.com/img/fi/oi/fioi_dor_dostoiei_vski1_c.jpg" alt="content">
              <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">1821-1881</h3>
              <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Fiódor Dostoiévski</h2>
              <p class="leading-relaxed text-base">Fiódor Dostoiévski escreveu obras-primas como Os Irmãos Karamázov (1880) e Crime e Castigo (1866).

                Nascido na capital da Rússia, ficou órfão de mãe ainda cedo e teve o pai assassinado quando tinha 18 anos. Se formou em engenharia e começou a carreira literária fazendo traduções de obras de Balzac e Schiller.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- Section 2 --}} 
    <div class="flex flex-col text-center w-full mt-5">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Livros "BEST SELLERS" em 2022</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base"><em>Escritoras dominam entre os livros mais vendidos em 2022<em></p>
    </div>

    <section class="text-gray-600 body-font">
      <div class="container px-5 py-24 mx-auto flex flex-wrap">
        <div class="lg:w-2/3 mx-auto">
          <div class="flex flex-wrap w-full bg-gray-100 py-32 px-10 relative mb-4">
            <img alt="gallery" class="w-full object-cover h-full object-center block opacity-80 absolute inset-0" src="https://tocalivros.s3.amazonaws.com/images/audiolivros/200/o/-/o-homem-mais-rico-da-babilonia-george-s-clason-pablo-spyer-105345.jpg">
            <div class="text-center relative z-10 w-full">
              <a class="mt-3 text-white inline-flex items-center">Learn More
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
          </div>
          <div class="flex flex-wrap -mx-2">
            <div class="px-2 w-1/2">
              <div class="flex flex-wrap w-full bg-gray-100 sm:py-24 py-16 sm:px-10 px-6 relative">
                <img alt="gallery" class="w-full object-cover h-full object-center block opacity-80 absolute inset-0" src="https://i.zst.com.br/thumbs/12/38/35/1458379596.jpg">
                <div class="text-center relative z-10 w-full">
                  
                  <a class="mt-3 text-black inline-flex items-center">Learn More
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                      <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <div class="px-2 w-1/2">
              <div class="flex flex-wrap w-full bg-gray-100 sm:py-24 py-16 sm:px-10 px-6 relative">
                <img alt="gallery" class="w-full object-cover h-full object-center block opacity-80 absolute inset-0" src="https://resenhandosonhos.com/wp-content/uploads/2020/01/83316365_241746960145069_1740131885742292992_n.jpg">
                <div class="text-center relative z-10 w-full">
                  
                  <a class="mt-3 text-white inline-flex items-center">Learn More
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

      {{-- Section 3 --}}
      <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">Gêneros de livros mais vendidos no Brasil</h1>
            <h1 class="mt-3">Dentre os gêneros de livros mais vendidos em nosso país, é importante destacar que a Bíblia Sagrada continua sendo a obra mais lida, sendo considerada uma categoria à parte, não sendo incluída no gênero “Religioso”, com 42% da preferência.

              Na sequência, aparecem os livros religiosos, contos e romances, cada qual com 22%.
              
              O que se percebe nesses últimos anos, mesmo sem os dados oficiais, é um forte crescimento de livros com temática religiosa, em função do aumento vertiginoso dos evangélicos no país.
              
              Confira a seguir algumas características dos gêneros de livros mais vendidos no Brasil.</h1>
          </div>
          <div class="flex flex-wrap -m-4">
            <div class="p-4 md:w-1/3">
              <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                <div class="flex items-center mb-3">
                  <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                    <img src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/512/external-religions-religion-flaticons-lineal-color-flat-icons-4.png" alt="">
                  </div>
                  <h2 class="text-gray-900 text-lg title-font font-medium">Religiosos</h2>
                </div>
                <div class="flex-grow">
                  <p class="leading-relaxed text-base">Os livros religiosos são obras literárias que tratam sobre a religião de modo geral, seja sobre uma religião específica ou sobre assuntos relacionados a ela em qualquer nível, inclusive aqueles que abordam a espiritualidade como um todo. Esta obra pode ser de ficção ou não e geralmente é escrita em prosa ou versos.</p>
                  <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                      <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <div class="p-4 md:w-1/3">
              <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                <div class="flex items-center mb-3">
                  <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                    <img src="https://cdn-icons-png.flaticon.com/512/8545/8545842.png" alt="">
                  </div>
                  <h2 class="text-gray-900 text-lg title-font font-medium">Contos</h2>
                </div>
                <div class="flex-grow">
                  <p class="leading-relaxed text-base">Os contos, por sua vez, são obras com uma narrativa curta e com um conflito único. Ou seja, sua estrutura tem um espaço narrativo menor que outros gêneros, e a narrativa é composta por poucos personagens que interagem acerca de um momento de tensão literariamente conhecido como clímax.</p>
                  <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                      <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <div class="p-4 md:w-1/3">
              <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                <div class="flex items-center mb-3">
                  <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                    <img src="https://cdn-icons-png.flaticon.com/512/2267/2267557.png" alt="">
                  </div>
                  <h2 class="text-gray-900 text-lg title-font font-medium">Romances</h2>
                </div>
                <div class="flex-grow">
                  <p class="leading-relaxed text-base">Já os romances são narrativas longas, com diversos conflitos e uma rede de personagens muito mais complexa.

                    Neste gênero de livro, o texto é estruturado em forma de prosa, trazendo um enredo integral, com marcas temporais, cenários e personagens bem explorados, e geralmente é de caráter fantasioso.</p>
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
      </section>

      {{-- Section 4 --}}

      <div class="flex flex-col text-center w-full mt-5 mb-5">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Entre em contato conosco</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base"></p>
      </div>

    <section class="text-gray-600 body-font relative">
      <div class="absolute inset-0 bg-gray-300">
        <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d14772.680370033546!2d-49.981659592187505!3d-22.2336243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sunivem!5e0!3m2!1spt-BR!2sbr!4v1673093948089!5m2!1spt-BR!2sbr"></iframe>
      </div>
      <div class="container px-5 py-24 mx-auto flex">
        <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
          <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
          <p class="leading-relaxed mb-5 text-gray-600">Deixe seu contato e seu feedback nos campos abaixos!</p>
          <div class="relative mb-4">
            <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
            <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
          <div class="relative mb-4">
            <label for="message" class="leading-7 text-sm text-gray-600">Messagem</label>
            <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
          </div>
          <button class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Enviar</button>
          <p class="text-xs text-gray-500 mt-3">Projeto library - pedbot</p>
        </div>
      </div>
    </section>

    {{-- Section 5 --}}

    <section class="text-gray-600 body-font">
      <div class="container px-5 py-20 mx-auto flex items-center md:flex-row flex-col">
        <div class="flex flex-col md:pr-10 md:mb-0 mb-6 pr-0 w-full md:w-auto md:text-left text-center">
          <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">TECH LIBRARY</h2>
          <h1 class="md:text-3xl text-2xl font-medium title-font text-gray-900">BAIXE O TECH LIBRARY</h1>
        </div>
        <div class="flex md:ml-auto md:mr-0 mx-auto items-center flex-shrink-0 space-x-4">
          <button class="bg-gray-100 inline-flex py-3 px-5 rounded-lg items-center hover:bg-gray-200 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 512 512">
              <path d="M99.617 8.057a50.191 50.191 0 00-38.815-6.713l230.932 230.933 74.846-74.846L99.617 8.057zM32.139 20.116c-6.441 8.563-10.148 19.077-10.148 30.199v411.358c0 11.123 3.708 21.636 10.148 30.199l235.877-235.877L32.139 20.116zM464.261 212.087l-67.266-37.637-81.544 81.544 81.548 81.548 67.273-37.64c16.117-9.03 25.738-25.442 25.738-43.908s-9.621-34.877-25.749-43.907zM291.733 279.711L60.815 510.629c3.786.891 7.639 1.371 11.492 1.371a50.275 50.275 0 0027.31-8.07l266.965-149.372-74.849-74.847z"></path>
            </svg>
            <span class="ml-4 flex items-start flex-col leading-none">
              <span class="text-xs text-gray-600 mb-1">GET IT ON</span>
              <span class="title-font font-medium">Google Play</span>
            </span>
          </button>
          <button class="bg-gray-100 inline-flex py-3 px-5 rounded-lg items-center hover:bg-gray-200 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 305 305">
              <path d="M40.74 112.12c-25.79 44.74-9.4 112.65 19.12 153.82C74.09 286.52 88.5 305 108.24 305c.37 0 .74 0 1.13-.02 9.27-.37 15.97-3.23 22.45-5.99 7.27-3.1 14.8-6.3 26.6-6.3 11.22 0 18.39 3.1 25.31 6.1 6.83 2.95 13.87 6 24.26 5.81 22.23-.41 35.88-20.35 47.92-37.94a168.18 168.18 0 0021-43l.09-.28a2.5 2.5 0 00-1.33-3.06l-.18-.08c-3.92-1.6-38.26-16.84-38.62-58.36-.34-33.74 25.76-51.6 31-54.84l.24-.15a2.5 2.5 0 00.7-3.51c-18-26.37-45.62-30.34-56.73-30.82a50.04 50.04 0 00-4.95-.24c-13.06 0-25.56 4.93-35.61 8.9-6.94 2.73-12.93 5.09-17.06 5.09-4.64 0-10.67-2.4-17.65-5.16-9.33-3.7-19.9-7.9-31.1-7.9l-.79.01c-26.03.38-50.62 15.27-64.18 38.86z"></path>
              <path d="M212.1 0c-15.76.64-34.67 10.35-45.97 23.58-9.6 11.13-19 29.68-16.52 48.38a2.5 2.5 0 002.29 2.17c1.06.08 2.15.12 3.23.12 15.41 0 32.04-8.52 43.4-22.25 11.94-14.5 17.99-33.1 16.16-49.77A2.52 2.52 0 00212.1 0z"></path>
            </svg>
            <span class="ml-4 flex items-start flex-col leading-none">
              <span class="text-xs text-gray-600 mb-1">Download on the</span>
              <span class="title-font font-medium">App Store</span>
            </span>
          </button>
        </div>
      </div>
    </section>


    {{-- Section 6 --}}

    <section class="text-gray-600 body-font">
      <div class="container px-5 py-24 mx-auto">
        <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-8 h-8 text-gray-400 mb-8" viewBox="0 0 975.036 975.036">
            <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
          </svg>
          <p class="leading-relaxed text-lg">Para que escrevo? E eu sei? Sei não. Sim, é verdade, às vezes também penso que eu não sou eu, pareço pertencer a uma galáxia longínqua de tão estranho que sou de mim. Sou eu? Espanto-me com o meu encontro.</p>
          <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-8 mb-6"></span>
          <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">CLARICE LISPECTOR</h2>
          <p class="text-gray-500">Escritora e Jornalista</p>
        </div>
      </div>
    </section>
@endsection

<style>
    #bookcover {
        margin: auto;
        width: 40%;
    }
</style>