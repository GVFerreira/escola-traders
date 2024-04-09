<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-video@0.8.0/dist/css/splide-extension-video.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <title>Mentoria Avaçada de Day Trade</title>
  </head>
  <body class="bg-slate-950">
    <header class="bg-slate-950 w-full">
      <div class="container mx-auto mx-auto flex justify-beetwen p-3">
        <div class="w-1/2">
          <a href="/">
            <img src="./assets/img/dd-trader.png" alt="DD Trader" class="w-2/3 md:w-5/12 lg:w-4/12">
          </a>
        </div>
        <nav class="w-1/2 flex justify-end items-center">
          <a href="" class="text-xs text-green-100 font-bold uppercase py-2 px-6 border-2 border-green-100 rounded-md">Começar agora</a>
        </nav>
      </div>  
    </header>

    <main class="py-28 xl:py-40" style="background: url(./assets/img/bg-main.webp) center center no-repeat; background-size: cover;">
      <div class="container mx-auto mx-auto px-3 text-center md:w-3/4">
        <h1 class="text-5xl font-bold text-slate-100 mb-4">Se destaque no <span class="text-green-500">Mercado Financeiro</span></h1>
        <p class="text-slate-300 mb-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare.</p>
        <a href="" class="text-lime-50 font-bold py-2 px-6 bg-lime-600 rounded-md uppercase">Inscrever-se</a>
      </div>
    </main>

    <section class="py-28 bg-emerald-950">
      <div class="container mx-auto py-5 relative md:w-3/4 lg:w-11/12">
        <h2 class="text-5xl font-bold font-bold text-center text-slate-100 mb-10">O que nossos mentorados estão dizendo</h2>
        <div id="splide-videos" class="splide lg:h-auto">
          <div class="splide__track">
            <ul class="splide__list lg:max-h-64">
              <li class="flex flex-col lg:flex-row lg:items-center lg:gap-10 splide__slide"  data-splide-youtube="https://www.youtube.com/watch?v=ky47xn26Pu0">
                <div class="splide__slide__container mx-auto">
                  <img src="./assets/img/bg-main.webp" class="mx-auto py-2">
                </div>
                <div class="min-h-96 pt-10 px-3 md:px-0 md:min-h-20 md:mx-auto">
                  <!-- Stars -->
                  <div class="flex gap-2 mb-4">
                    <i data-lucide="star" fill="#84cc16" stroke="#3f6212" stroke-width="1.5"></i>
                    <i data-lucide="star" fill="#84cc16" stroke="#3f6212" stroke-width="1.5"></i>
                    <i data-lucide="star" fill="#84cc16" stroke="#3f6212" stroke-width="1.5"></i>
                    <i data-lucide="star" fill="#84cc16" stroke="#3f6212" stroke-width="1.5"></i>
                    <i data-lucide="star" fill="#84cc16" stroke="#3f6212" stroke-width="1.5"></i>
                  </div>
                  <p class="text-md text-lime-50 font-bold mb-4">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex explicabo perferendis itaque minima doloremque quis vitae iusto modi temporibus odio blanditiis recusandae numquam eligendi harum iste dolore fugiat, maiores deleniti."</p>
                  <p class="text-sm text-lime-200 font-bold">Nome Sobrenome</p>
                  <p class="text-sm text-lime-200">Cargo antigo</p>
                </div>
              </li>
              <li class="flex flex-col splide__slide"  data-splide-youtube="https://www.youtube.com/watch?v=ky47xn26Pu0">
                <div class="splide__slide__container mx-auto min-h-64">
                  <img src="./assets/img/futuristic-bull.webp" class="w-75 mx-auto py-2">
                </div>
                <div class="min-h-96 pt-10 px-5">
                  <!-- Stars -->
                  <div class="flex gap-2 mb-4">
                    <i data-lucide="star" fill="#84cc16" stroke="#3f6212" stroke-width="1.5"></i>
                    <i data-lucide="star" fill="#84cc16" stroke="#3f6212" stroke-width="1.5"></i>
                    <i data-lucide="star" fill="#84cc16" stroke="#3f6212" stroke-width="1.5"></i>
                    <i data-lucide="star" fill="#84cc16" stroke="#3f6212" stroke-width="1.5"></i>
                    <i data-lucide="star" fill="#84cc16" stroke="#3f6212" stroke-width="1.5"></i>
                  </div>
                  <p class="text-md text-lime-50 font-bold mb-4">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex explicabo perferendis itaque minima doloremque quis vitae iusto modi temporibus odio blanditiis recusandae numquam eligendi harum iste dolore fugiat, maiores deleniti."</p>
                  <p class="text-sm text-lime-200 font-bold">Nome Sobrenome</p>
                  <p class="text-sm text-lime-200">Cargo antigo</p>
                </div>
              </li>
              <li class="flex flex-col splide__slide"  data-splide-youtube="https://www.youtube.com/watch?v=ky47xn26Pu0">
                <div class="splide__slide__container mx-auto min-h-64">
                  <img src="./assets/img/operations.webp" class="w-75 mx-auto py-2">
                </div>
                <div class="min-h-96 pt-10 px-5">
                  <!-- Stars -->
                  <div class="flex gap-2 mb-4">
                    <i data-lucide="star" fill="#84cc16" stroke="#3f6212" stroke-width="1.5"></i>
                    <i data-lucide="star" fill="#84cc16" stroke="#3f6212" stroke-width="1.5"></i>
                    <i data-lucide="star" fill="#84cc16" stroke="#3f6212" stroke-width="1.5"></i>
                    <i data-lucide="star" fill="#84cc16" stroke="#3f6212" stroke-width="1.5"></i>
                    <i data-lucide="star" fill="#84cc16" stroke="#3f6212" stroke-width="1.5"></i>
                  </div>
                  <p class="text-md text-lime-50 font-bold mb-4">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex explicabo perferendis itaque minima doloremque quis vitae iusto modi temporibus odio blanditiis recusandae numquam eligendi harum iste dolore fugiat, maiores deleniti."</p>
                  <p class="text-sm text-lime-200 font-bold">Nome Sobrenome</p>
                  <p class="text-sm text-lime-200">Cargo antigo</p>
                </div>
              </li>
            </ul>
          </div>
          <div class="splide__arrows absolute bottom-0 right-20">
            <button class="splide__arrow splide__arrow--prev bg-green-500">
              <i data-lucide="chevron-left"></i>
            </button>
            <button class="splide__arrow splide__arrow--next bg-green-500">
              <i data-lucide="chevron-left"></i>
            </button>
          </div>
        </div>
      </div>
    </section>
    
    <section class="py-28 lg:py-16" style="background: url(./assets/img/business-person-futuristic.webp) center center no-repeat; background-size: cover;">
      <div class="container mx-auto py-5 px-3 md:w-3/4 lg:w-11/12">
        <div class="flex flex-col gap-10 lg:flex-row lg:justify-center lg:items-center">
          <div class="card p-5 bg-slate-100 rounded-md">
            <h3 class="flex justify-center items-center gap-2 text-4xl lg:text-3xl text-center mb-3">
              <i data-lucide="gem" class="inline size-8"></i>
              <span>Benefício 1</span>
            </h3>
            <p class="text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id voluptas nemo dolor animi necessitatibus laudantium, provident eos reiciendis modi reprehenderit!</p>
          </div>
          <div class="card p-5 bg-slate-100 rounded-md">
            <h3 class="flex justify-center items-center gap-2 text-4xl lg:text-3xl text-center mb-3">
              <i data-lucide="gem" class="inline size-8"></i>
              <span>Benefício 2</span>
            </h3>
            <p class="text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id voluptas nemo dolor animi necessitatibus laudantium, provident eos reiciendis modi reprehenderit!</p>
          </div>
          <div class="card p-5 bg-slate-100 rounded-md">
            <h3 class="flex justify-center items-center gap-2 text-4xl lg:text-3xl text-center mb-3">
              <i data-lucide="gem" class="inline size-8"></i>
              <span>Benefício 3</span>
            </h3>
            <p class="text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id voluptas nemo dolor animi necessitatibus laudantium, provident eos reiciendis modi reprehenderit!</p>
          </div>
        </div>
      </div>
    </section>
    
    <section class="py-28">
      <div class="container mx-auto py-5 px-3 md:w-3/4 lg:w-11/12">
        <h2 class="text-5xl font-bold text-slate-100 mb-10">Título para o vídeo explicativo</h2>
        <div class="lg:flex lg:flex-row lg:justify-beetwen lg:items-center lg:gap-20">
          <article class="flex flex-row justify-beetwen align-start gap-4 bg-green-700 rounded-md p-5 mb-10">
            <div class="w-25">
              <i data-lucide="gem" class="inline size-6 text-slate-200"></i>
            </div>
            <div>
              <h3 class="text-xl font-bold mb-2 text-slate-200">Técnicas exclusivas</h3>
              <p class="text-slate-300 text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat est nesciunt reiciendis! Accusantium, illum necessitatibus!</p>
            </div>
          </article>
          <article class="flex flex-row justify-beetwen align-start gap-4 bg-green-700 rounded-md p-5 mb-10">
            <div class="w-25">
              <i data-lucide="gem" class="inline size-6 text-slate-200"></i>
            </div>
            <div>
              <h3 class="text-xl font-bold mb-2 text-slate-200">Mentoria avançada</h3>
              <p class="text-slate-300 text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat est nesciunt reiciendis! Accusantium, illum necessitatibus!</p>
            </div>
          </article>
        </div>
        <iframe src="https://www.youtube.com/embed/ky47xn26Pu0?si=8tNDOAXN5LhFM2Ow" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" class="w-full min-h-60 mb-16 md:min-h-96 lg:min-h-192" allowfullscreen></iframe>
        <a href="" class="w-3/4 max-w-96 flex justify-center text-md text-lime-50 font-bold uppercase py-2 px-auto mx-auto bg-lime-600 rounded-md md:max-h-dvh">Sim, eu quero começar agora!</a>
      </div>
    </section>

    <section class="py-28">
      <div class="container mx-auto py-5 px-3 md:w-3/4 lg:w-11/12 lg:flex lg:flex-row lg:gap-20">
        <div class="lg:w-2/4">
          <img src="./assets/img/Demetrio-1.png" alt="" class="lg:w-fit">
        </div>
        <div class="flex flex-col gap-10 lg:w-2/4 lg:flex-col lg:gap-20">
          <div class="card p-5 bg-slate-100 rounded-md">
            <h3 class="flex justify-center items-center gap-2 text-4xl text-center mb-3 lg:text-3xl">
              <i data-lucide="gem" class="inline size-8"></i>
              <span>Curiosidade 1</span>
            </h3>
            <p class="text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id voluptas nemo dolor animi necessitatibus laudantium, provident eos reiciendis modi reprehenderit!</p>
          </div>
          <div class="card p-5 bg-slate-100 rounded-md">
            <h3 class="flex justify-center items-center gap-2 text-4xl text-center mb-3 lg:text-3xl">
              <i data-lucide="gem" class="inline size-8"></i>
              <span>Curiosidade 2</span>
            </h3>
            <p class="text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id voluptas nemo dolor animi necessitatibus laudantium, provident eos reiciendis modi reprehenderit!</p>
          </div>
          <div class="card p-5 bg-slate-100 rounded-md">
            <h3 class="flex justify-center items-center gap-2 text-4xl text-center mb-3 lg:text-3xl">
              <i data-lucide="gem" class="inline size-8"></i>
              <span>Curiosidade 3</span>
            </h3>
            <p class="text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id voluptas nemo dolor animi necessitatibus laudantium, provident eos reiciendis modi reprehenderit!</p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-28" style="background: url(./assets/img/operations.webp) center center no-repeat; background-size: cover;">
      <div class="container mx-auto py-5 px-3 md:w-3/4 lg:w-11/12">
        <h2 class="text-5xl font-bold text-slate-100 mb-10">Veja o que você vai <span class="text-green-500">aprender</span>!</h2>
          <div class="flex flex-col gap-5 lg:grid lg:grid-cols-3 ">
            <div class="p-5 bg-green-700 rounded-md flex flex-col gap-5">
              <div class="">
                <img src="./assets/img/business-person-futuristic.webp" alt="" class="w-full rounded-md shadow-xl">
              </div>
              <div class="">
                <h3 class="text-4xl mb-3 text-slate-200">Aula 1</h3>
                <p class="text-justify text-slate-300">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id voluptas nemo dolor animi necessitatibus laudantium, provident eos reiciendis modi reprehenderit!</p>
              </div>
            </div>
            <div class="p-5 bg-green-700 rounded-md flex flex-col gap-5">
              <div class="">
                <img src="./assets/img/business-person-futuristic.webp" alt="" class="w-full rounded-md shadow-xl">
              </div>
              <div class="">
                <h3 class="text-4xl mb-3 text-slate-200">Aula 2</h3>
                <p class="text-justify text-slate-300">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id voluptas nemo dolor animi necessitatibus laudantium, provident eos reiciendis modi reprehenderit!</p>
              </div>
            </div>
            <div class="p-5 bg-green-700 rounded-md flex flex-col gap-5">
              <div class="">
                <img src="./assets/img/business-person-futuristic.webp" alt="" class="w-full rounded-md shadow-xl">
              </div>
              <div class="">
                <h3 class="text-4xl mb-3 text-slate-200">Aula 3</h3>
                <p class="text-justify text-slate-300">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id voluptas nemo dolor animi necessitatibus laudantium, provident eos reiciendis modi reprehenderit!</p>
              </div>
            </div>
            <div class="p-5 bg-green-700 rounded-md flex flex-col gap-5">
              <div class="">
                <img src="./assets/img/business-person-futuristic.webp" alt="" class="w-full rounded-md shadow-xl">
              </div>
              <div class="">
                <h3 class="text-4xl mb-3 text-slate-200">Aula 4</h3>
                <p class="text-justify text-slate-300">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id voluptas nemo dolor animi necessitatibus laudantium, provident eos reiciendis modi reprehenderit!</p>
              </div>
            </div>
            <div class="p-5 bg-green-700 rounded-md flex flex-col gap-5">
              <div class="">
                <img src="./assets/img/business-person-futuristic.webp" alt="" class="w-full rounded-md shadow-xl">
              </div>
              <div class="">
                <h3 class="text-4xl mb-3 text-slate-200">Aula 5</h3>
                <p class="text-justify text-slate-300">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id voluptas nemo dolor animi necessitatibus laudantium, provident eos reiciendis modi reprehenderit!</p>
              </div>
            </div>
            <div class="p-5 bg-green-700 rounded-md flex flex-col gap-5">
              <div class="">
                <img src="./assets/img/business-person-futuristic.webp" alt="" class="w-full rounded-md shadow-xl">
              </div>
              <div class="">
                <h3 class="text-4xl mb-3 text-slate-200">Aula bônus</h3>
                <p class="text-justify text-slate-300">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id voluptas nemo dolor animi necessitatibus laudantium, provident eos reiciendis modi reprehenderit!</p>
              </div>
            </div>
          </div>
      </div>
    </section>

    <section class="py-28">
      <div class="container max-w-4xl mx-auto py-5 px-3 md:w-3/4">
        <h2 class="text-5xl font-bold text-slate-100 mb-10">Qual <span class="text-green-500">trader</span> você quer ser?</h2>
        <table class="table-auto border-spacing-y-2 text-slate-50 w-full mb-10">
          <thead>
            <tr class="border-b-2 text-lg" style="height: 3rem">
              <th></th>
              <th>Mentorado</th>
              <th>Tradicional</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b py-10" style="height: 3.5rem">
              <td>Feature text 1</td>
              <td align="center"><i data-lucide="check"></i></td>
              <td align="center"><i data-lucide="x"></i></td>
            </tr>
            <tr class="border-b py-10" style="height: 3.5rem">
              <td>Feature text 2</td>
              <td align="center"><i data-lucide="check"></i></td>
              <td align="center"><i data-lucide="x"></i></td>
            </tr>
            <tr class="border-b py-10" style="height: 3.5rem">
              <td>Feature text 3</td>
              <td align="center"><i data-lucide="check"></i></td>
              <td align="center"><i data-lucide="x"></i></td>
            </tr>
            <tr class="border-b py-10" style="height: 3.5rem">
              <td>Feature text 4</td>
              <td align="center"><i data-lucide="check"></i></td>
              <td align="center"><i data-lucide="x"></i></td>
            </tr>
            <tr class="border-b py-10" style="height: 3.5rem">
              <td>Feature text 5</td>
              <td align="center">30</td>
              <td align="center">0</td>
            </tr>
          </tbody>
        </table>
        <div class="w-100 flex justify-center">
          <a href="" class="py-2 px-4 bg-green-700 rounded-md uppercase text-slate-50">Iniciar mentoria</a>
        </div>
      </div>
    </section>
    
    <section class="py-28" style="background: url(./assets/img/futuristic-bull.webp) center center no-repeat; background-size: cover;">
      <div class=" mx-auto py-5 md:w-full">
        <h2 class="text-5xl font-bold text-slate-100 mb-10 px-3 md:w-3/4 md:mx-auto">Comentários dos mentorados</h2>
        <div id="splide-testemonials" class="splide" aria-label="Testemonials slide">
          <div class="splide__track">
            <ul class="splide__list">
              <li class="splide__slide bg-slate-100 p-5 rounded-md">
                <img src="./assets/img/whatsapp.jpg" alt="" class="rounded-md shadow-lg mb-5">
                <div class="flex gap-4">
                  <div>
                    <img src="./assets/img/bg-main.webp" alt="" class="rounded-full size-12">
                  </div>
                  <div>
                    <h4 class="text-md font-bold">Nome Sobrenome</h4>
                    <p>Cargo</p>
                  </div>
                </div>
              </li>
              <li class="splide__slide bg-slate-100 p-5 rounded-md">
                <img src="./assets/img/whatsapp.jpg" alt="" class="rounded-md shadow-lg mb-5">
                <div class="flex gap-4">
                  <div>
                    <img src="./assets/img/futuristic-bull.webp" alt="" class="rounded-full size-12">
                  </div>
                  <div>
                    <h4 class="text-md font-bold">Nome Sobrenome</h4>
                    <p>Cargo</p>
                  </div>
                </div>
              </li>
              <li class="splide__slide bg-slate-100 p-5 rounded-md">
                <img src="./assets/img/whatsapp.jpg" alt="" class="rounded-md shadow-lg mb-5">
                <div class="flex gap-4">
                  <div>
                    <img src="./assets/img/operations.webp" alt="" class="rounded-full size-12">
                  </div>
                  <div>
                    <h4 class="text-md font-bold">Nome Sobrenome</h4>
                    <p>Cargo</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
    </section>

    <section class="py-28 bg-emerald-950">
      <div class="container mx-auto py-5 px-3 flex flex-col gap-10 md:w-3/4 lg:w-11/12 lg:flex-row lg:items-center">
        <div class="lg:w-2/4">
          <img src="./assets/img/dd-trader.png" alt="" class="w-2/3 md:w-2/4">
          <h2 class="text-5xl font-bold text-slate-100 my-10">Acesso a <span class="text-green-500">Mentoria</span> Avançada de Day Trader</h2>
          <p class="text-slate-200">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga nostrum architecto, neque expedita nobis vero perferendis rem dolores illo corrupti corporis, rerum sed accusamus quo? Nihil omnis et similique minima!</p>
        </div>
        <div class="lg:w-2/4">
          <div class="bg-emerald-900 p-5 border border-emerald-600 rounded-md">
            <ul>
              <li class="flex flex-row gap-2 mb-2 mb-2">
                <i data-lucide="check" class="text-slate-50"></i>
                <p class="text-slate-200">Vantagens de compra 1</p>
              </li>
              <li class="flex flex-row gap-2 mb-2">
                <i data-lucide="check" class="text-slate-50"></i>
                <p class="text-slate-200">Vantagens de compra 2</p>
              </li>
              <li class="flex flex-row gap-2 mb-2">
                <i data-lucide="check" class="text-slate-50"></i>
                <p class="text-slate-200">Vantagens de compra 3</p>
              </li>
              <li class="flex flex-row gap-2 mb-2">
                <i data-lucide="check" class="text-slate-50"></i>
                <p class="text-slate-200">Vantagens de compra 4</p>
              </li>
              <li class="flex flex-row gap-2 mb-2">
                <i data-lucide="check" class="text-slate-50"></i>
                <p class="text-slate-200">Vantagens de compra 5</p>
              </li>
            </ul>
            <hr class="my-5">
            <p class="text-sm text-slate-200">6x de</p>
            <p class="text-3xl font-bold text-slate-50">R$ 498,33</p>
            <p class="text-sm text-slate-200 mb-5">ou R$ 2.990,00 à vista</p>
            <a href="" class="w-full flex justify-center text-md text-lime-50 font-bold uppercase py-2 px-auto bg-lime-600 rounded-md">Sim, eu quero começar agora!</a>
            <img src="./assets/img/payments-logo.webp" alt="" class="w-full mt-5">
          </div>
        </div>
      </div>
    </section>

    <section class="py-28">
      <div class="container max-w-4xl mx-auto py-5 px-3 md:w-3/4">
        <h2 class="text-5xl font-bold text-slate-100 mb-5">FAQs</h2>
        <p class="text-slate-200 mb-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, est!</p>
        <div>
          <div class="js-accordion">
            <button class="w-full flex items-center justify-between py-4 px-2 accordion-tab">
              <h4 class="text-lg text-slate-50 font-semibold">Lorem ipsum dolor sit amet?</h4>
              <span class="text-slate-200 w-6 h-6" style="position:relative;transform:translate(0%, 0%)">
                <svg xmlns="http://www.w3.org/2000/svg" style="position:absolute;top:0;left:0" class="w-6 h-6 transition-all duration-200 ease-in transform rotate-90 plus-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" style="position:absolute;top:0;left:0" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6"></path>
                </svg>
              </span>
            </button>
            <p class="w-full h-full hidden text-justify text-md text-slate-500 transition-all duration-200 mb-4 px-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas eaque nobis, fugit odit omnis fugiat deleniti animi ab maxime cum laboriosam recusandae facere dolorum veniam quia pariatur obcaecati illo ducimus?</p>
            <hr class="text-slate-100">
            <button class="w-full flex items-center justify-between py-4 px-2 accordion-tab">
              <h4 class="text-lg text-slate-50 font-semibold">Lorem ipsum dolor sit amet?</h4>
              <span class="text-slate-200 w-6 h-6" style="position:relative;transform:translate(0%, 0%)">
                <svg xmlns="http://www.w3.org/2000/svg" style="position:absolute;top:0;left:0" class="w-6 h-6 transition-all duration-200 ease-in transform rotate-90 plus-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" style="position:absolute;top:0;left:0" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6"></path>
                </svg>
              </span>
            </button>
            <p class="w-full h-full hidden text-justify text-md text-slate-500 transition-all duration-200 mb-4 px-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas eaque nobis, fugit odit omnis fugiat deleniti animi ab maxime cum laboriosam recusandae facere dolorum veniam quia pariatur obcaecati illo ducimus?</p>
            <hr class="text-slate-100">
            <button class="w-full flex items-center justify-between py-4 px-2 accordion-tab">
              <h4 class="text-lg text-slate-50 font-semibold">Lorem ipsum dolor sit amet?</h4>
              <span class="text-slate-200 w-6 h-6" style="position:relative;transform:translate(0%, 0%)">
                <svg xmlns="http://www.w3.org/2000/svg" style="position:absolute;top:0;left:0" class="w-6 h-6 transition-all duration-200 ease-in transform rotate-90 plus-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" style="position:absolute;top:0;left:0" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6"></path>
                </svg>
              </span>
            </button>
            <p class="w-full h-full hidden text-justify text-md text-slate-500 transition-all duration-200 mb-4 px-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas eaque nobis, fugit odit omnis fugiat deleniti animi ab maxime cum laboriosam recusandae facere dolorum veniam quia pariatur obcaecati illo ducimus?</p>
            <hr class="text-slate-100">
            <button class="w-full flex items-center justify-between py-4 px-2 accordion-tab">
              <h4 class="text-lg text-slate-50 font-semibold">Lorem ipsum dolor sit amet?</h4>
              <span class="text-slate-200 w-6 h-6" style="position:relative;transform:translate(0%, 0%)">
                <svg xmlns="http://www.w3.org/2000/svg" style="position:absolute;top:0;left:0" class="w-6 h-6 transition-all duration-200 ease-in transform rotate-90 plus-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" style="position:absolute;top:0;left:0" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6"></path>
                </svg>
              </span>
            </button>
            <p class="w-full h-full hidden text-justify text-md text-slate-500 transition-all duration-200 mb-4 px-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas eaque nobis, fugit odit omnis fugiat deleniti animi ab maxime cum laboriosam recusandae facere dolorum veniam quia pariatur obcaecati illo ducimus?</p>
            <hr class="text-slate-100">
          </div>
        </div>
        <div class="text-center mt-20">
          <h3 class="text-3xl font-bold mb-4 text-slate-100">Ainda ficou com dúvidas?</h3>
          <p class="mb-6 text-slate-200">Clique no botão abaixo para entrar em contato conosco.</p>
          <a href="mailto:" class="px-6 py-2 border-2 border-green-500 rounded-md text-green-500 uppercase text-sm">
            <span class="leading-8">Contato</span></a>
          </div>
      </div>
    </section>

    <footer class="py-5 bg-slate-900">
      <div class="container mx-auto px-3 text-xs text-center md:w-3/4">
        <div class="flex flex-row gap-4 justify-center text-slate-100 mb-4">
          <a href="">Termos & Condições</a>
          <span> | </span>
          <a href="">Política de Privacidade</a>
        </div>
        <p class="text-slate-200">
          Mentoria Avançada de Trade 2024 - Todos os direitos reservados.
          Desenvolvido por 
            <a href="https://instagram.com/eudevgustavo" target="_blank" class="cursor-pointer">
              <img src="./assets/img/gvf.svg" alt="Gustavo Ferreira | Desenvolvedor Web" class="h-4 inline">
            </a>
        </p>
      </div>
    </footer>
  </body>

  <script src="./assets/js/accordion.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-video@0.8.0/dist/js/splide-extension-video.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js"></script>
  <script src="https://unpkg.com/lucide@latest"></script>
  <script>
    // Tailwind CSS config
    tailwind.config = {
      theme: {
        fontFamily: {
          'sans': 'Sora'
        },
        extend: {
          spacing: {
            "192": "40rem",
          },
        }
      }
    }

    // Lucide Icons config
    lucide.createIcons()

    // Splide configs
    document.addEventListener( 'DOMContentLoaded', () => {
      // Video Carousel config
      new Splide( '#splide-videos', {
        type: 'fade',
        pagination: false,
        rewind: true,
        autoScroll: {
          autoStart: false,
        }
      }).mount(window.splide.Extensions)
  
      // Image Carousel config
      new Splide( '#splide-testemonials', {
        pagination: false,
        arrows: false,
        gap: 32,
        type: 'loop',
        drag: 'free',
        focus: 'center',
        perPage: 4,
        autoScroll: {
          speed: 0.5,
        },
        breakpoints: {
          1440: {
            perPage: 3
          },
          1024: {
            perPage: 2
          },
          600: {
            perPage: 1
          },
        },
      }).mount( window.splide.Extensions )
    })
  </script>
</html>