<!DOCTYPE html>
<html lang="en" dir="ltr">


  <head>
    <title>Christian</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />


    <!-- Css -->
    <link rel="stylesheet" href="./css/style.css" />

    <!-- Dark Mode JS -->
    <script src="./js/darkMode.bundle.js"></script>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>


    <!-- Flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet"/>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    
  </head>

  <body
    class="overflow-x-hidden font-body text-jacarta-500 dark:bg-jacarta-900"
  >
    <!-- Header -->
    <header class="js-page-header fixed top-0 z-20 w-full transition-colors">
      <div class="flex items-center px-6 py-6 xl:px-24">
        <!-- Logo -->
        <a href="index.html" class="shrink-0">
          <img src="img/logo.png" class="max-h-14 dark:hidden"/>
          <img src="img/logo.png" class="hidden max-h-14 dark:block" />
        </a>

        <!-- Search -->
        <form action="search" class="relative ml-12 mr-8 hidden basis-3/12 lg:block xl:ml-[8%]">
          <input
            type="search"
            class="w-full rounded-2xl border border-jacarta-100 py-[0.6875rem] px-4 pl-10 text-jacarta-700 placeholder-jacarta-500 focus:ring-accent dark:border-transparent dark:bg-white/[.15] dark:text-white dark:placeholder-white"
            placeholder="Search"
          />
          <span class="absolute left-0 top-0 flex h-full w-12 items-center justify-center rounded-2xl">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              width="24"
              height="24"
              class="h-4 w-4 fill-jacarta-500 dark:fill-white"
            >
              <path fill="none" d="M0 0h24v24H0z" />
              <path
                d="M18.031 16.617l4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617zm-2.006-.742A6.977 6.977 0 0 0 18 11c0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7a6.977 6.977 0 0 0 4.875-1.975l.15-.15z"
              />
            </svg>
          </span>
        </form>

        <!-- Menu / Actions -->
        <div
          class="js-mobile-menu invisible lg:visible fixed inset-0 z-10 ml-auto items-center bg-white opacity-0 dark:bg-jacarta-800 lg:relative lg:inset-auto lg:flex lg:bg-transparent lg:opacity-100 dark:lg:bg-transparent"
        >
          <!-- Mobile Logo / Menu Close -->
          <div
            class="t-0 fixed left-0 z-10 flex w-full items-center justify-between bg-white p-6 dark:bg-jacarta-800 lg:hidden"
          >
            <!-- Mobile Logo -->
            <a href="index.html" class="shrink-0">
              <img src="img/logo.png" class="max-h-7 dark:hidden" alt="Xhibiter | NFT Marketplace" />
              <img src="img/logo_white.png" class="hidden max-h-7 dark:block" alt="Xhibiter | NFT Marketplace" />
            </a>

            <!-- Mobile Menu Close -->
            <button
              class="js-mobile-close group ml-2 flex h-10 w-10 items-center justify-center rounded-full border border-jacarta-100 bg-white transition-colors hover:border-transparent hover:bg-accent focus:border-transparent focus:bg-accent dark:border-transparent dark:bg-white/[.15] dark:hover:bg-accent"
              aria-label="close mobile menu"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                width="24"
                height="24"
                class="h-4 w-4 fill-jacarta-700 transition-colors group-hover:fill-white group-focus:fill-white dark:fill-white"
              >
                <path fill="none" d="M0 0h24v24H0z" />
                <path
                  d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z"
                />
              </svg>
            </button>
          </div>

          <!-- Mobile Search -->
          <form action="search" class="relative mt-24 mb-8 w-full lg:hidden">
            <input
              type="search"
              class="w-full rounded-2xl border border-jacarta-100 py-3 px-4 pl-10 text-jacarta-700 placeholder-jacarta-500 focus:ring-accent dark:border-transparent dark:bg-white/[.15] dark:text-white dark:placeholder-white"
              placeholder="Search"
            />
            <span class="absolute left-0 top-0 flex h-full w-12 items-center justify-center rounded-2xl">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                width="24"
                height="24"
                class="h-4 w-4 fill-jacarta-500 dark:fill-white"
              >
                <path fill="none" d="M0 0h24v24H0z" />
                <path
                  d="M18.031 16.617l4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617zm-2.006-.742A6.977 6.977 0 0 0 18 11c0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7a6.977 6.977 0 0 0 4.875-1.975l.15-.15z"
                />
              </svg>
            </span>
          </form>

          <!-- Primary Nav -->
          <nav class="navbar w-full">
            <ul class="flex flex-col lg:flex-row">
              <li class="js-nav-dropdown group relative">
                <a
                  href="#"
                  class="dropdown-toggle flex items-center justify-between py-3.5 font-display text-base text-jacarta-700 hover:text-yellow-500 focus:text-yellow-500 dark:text-white dark:hover:text-yellow-300 dark:focus:text-yellow-300 lg:px-5"
                  aria-expanded="false"
                  role="button"
                  data-bs-toggle="dropdown"
                  >Home
                  <i class="lg:hidden">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      width="24"
                      height="24"
                      class="h-4 w-4 dark:fill-white"
                    >
                      <path fill="none" d="M0 0h24v24H0z" />
                      <path d="M12 13.172l4.95-4.95 1.414 1.414L12 16 5.636 9.636 7.05 8.222z" />
                    </svg>
                  </i>
                </a>
              </li>
              <li class="js-nav-dropdown group relative">
                <a
                  href="#"
                  class="dropdown-toggle flex items-center justify-between py-3.5 font-display text-base text-jacarta-700 hover:text-yellow-500 focus:text-yellow-500 dark:text-white dark:hover:text-yellow-300 dark:focus:text-yellow-300 lg:px-5"
                  id="navDropdown-2"
                  aria-expanded="false"
                  role="button"
                  data-bs-toggle="dropdown"
                  >Card Games
                  <i class="lg:hidden">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      width="24"
                      height="24"
                      class="h-4 w-4 dark:fill-white"
                    >
                      <path fill="none" d="M0 0h24v24H0z" />
                      <path d="M12 13.172l4.95-4.95 1.414 1.414L12 16 5.636 9.636 7.05 8.222z" />
                    </svg>
                  </i>
                </a>
                <ul
                  class="dropdown-menu group-hover:visible lg:invisible -left-6 top-[85%] z-10 hidden grid-flow-row grid-cols-[repeat(2,_1fr)] gap-x-4 whitespace-nowrap rounded-xl bg-yellow-300 transition-all will-change-transform group-hover:opacity-100 dark:bg-jacarta-800 lg:absolute lg:!grid lg:translate-y-4 lg:py-8 lg:px-5 lg:opacity-0 lg:shadow-2xl lg:group-hover:translate-y-2"
                  aria-labelledby="navDropdown-2"
                >
                  <li>
                    <a
                      href="maintenance.html"
                      class="flex items-center justify-between rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="mr-4 font-display text-sm text-jacarta-700 dark:text-white">BSP Board</span>
                      <span class="rounded bg-green py-1 px-2 text-xxs font-bold uppercase leading-none text-white"
                        >new</span
                      >
                    </a>
                  </li>
                  <li>
                    <a
                      href="case-studies.html"
                      class="flex items-center justify-between rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="mr-4 font-display text-sm text-jacarta-700 dark:text-white">BSP Board</span>
                      <span class="rounded bg-green py-1 px-2 text-xxs font-bold uppercase leading-none text-white"
                        >new</span
                      >
                    </a>
                  </li>
                  <li>
                    <a
                      href="single-case-study.html"
                      class="flex items-center justify-between rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="mr-4 font-display text-sm text-jacarta-700 dark:text-white">TP Games</span>
                      <span class="rounded bg-green py-1 px-2 text-xxs font-bold uppercase leading-none text-white"
                        >new</span
                      >
                    </a>
                  </li>
                  <li>
                    <a
                      href="careers.html"
                      class="flex items-center justify-between rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="mr-4 font-display text-sm text-jacarta-700 dark:text-white">TP Games</span>
                      <span class="rounded bg-green py-1 px-2 text-xxs font-bold uppercase leading-none text-white"
                        >new</span
                      >
                    </a>
                  </li>
                  <li>
                    <a
                      href="item.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="font-display text-sm text-jacarta-700 dark:text-white">FG Card Games</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="collections.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="font-display text-sm text-jacarta-700 dark:text-white">KY Card Games</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="collection.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="font-display text-sm text-jacarta-700 dark:text-white">JDB Board</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="activity.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="font-display text-sm text-jacarta-700 dark:text-white">MW Board</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="rankings.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="font-display text-sm text-jacarta-700 dark:text-white">SY Board</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="user.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="font-display text-sm text-jacarta-700 dark:text-white">MT Board</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="edit-profile.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="font-display text-sm text-jacarta-700 dark:text-white">NW Board</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="about.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="font-display text-sm text-jacarta-700 dark:text-white">MB Board</span>
                    </a>
                  </li>

                  <li>
                    <a
                      href="contact.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="font-display text-sm text-jacarta-700 dark:text-white">GF Board</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="wallet.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="font-display text-sm text-jacarta-700 dark:text-white">KGame Board</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="login.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="font-display text-sm text-jacarta-700 dark:text-white">WL Board</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="404.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="font-display text-sm text-jacarta-700 dark:text-white">GL Board</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="tos.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="font-display text-sm text-jacarta-700 dark:text-white">More Board</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="js-nav-dropdown nav-item dropdown group relative">
                <a
                  href="collections.html"
                  class="dropdown-toggle flex items-center justify-between py-3.5 font-display text-base text-jacarta-700 hover:text-yellow-500 focus:text-yellow-500 dark:text-white dark:hover:text-yellow-300 dark:focus:text-yellow-300 lg:px-5"
                  id="navDropdown-3"
                  aria-expanded="false"
                  role="button"
                  data-bs-toggle="dropdown"
                  >Fish Games
                  <i class="lg:hidden">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      width="24"
                      height="24"
                      class="h-4 w-4 dark:fill-white"
                    >
                      <path fill="none" d="M0 0h24v24H0z" />
                      <path d="M12 13.172l4.95-4.95 1.414 1.414L12 16 5.636 9.636 7.05 8.222z" />
                    </svg>
                  </i>
                </a>
                <ul
                  class="dropdown-menu group-hover:visible lg:invisible -left-6 top-[85%] z-10 hidden grid-flow-col grid-rows-5 gap-x-4 whitespace-nowrap rounded-xl bg-yellow-300 transition-all will-change-transform group-hover:opacity-100 dark:bg-jacarta-800 lg:absolute lg:!grid lg:translate-y-4 lg:py-8 lg:px-5 lg:opacity-0 lg:shadow-2xl lg:group-hover:translate-y-2"
                  aria-labelledby="navDropdown-1"
                >
                  <li>
                    <a
                      href="#"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="font-display text-sm text-jacarta-700 dark:text-white">TP TwoYeah</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="#"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="font-display text-sm text-jacarta-700 dark:text-white">TP Fish</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="#"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="font-display text-sm text-jacarta-700 dark:text-white">TP Cut Fish</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="#"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="font-display text-sm text-jacarta-700 dark:text-white">FG Beauty Fishing</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="#"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="font-display text-sm text-jacarta-700 dark:text-white">CQ9 Oneshot Fish</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="#"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="font-display text-sm text-jacarta-700 dark:text-white">TH MonkeyKing2</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="#"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="font-display text-sm text-jacarta-700 dark:text-white">TH BirdCatcher</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="#"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="font-display text-sm text-jacarta-700 dark:text-white">JS FishJoy</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="#"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="font-display text-sm text-jacarta-700 dark:text-white">MW Fish</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="#"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="font-display text-sm text-jacarta-700 dark:text-white">Fish Master</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="#"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="font-display text-sm text-jacarta-700 dark:text-white">BSP Fish Mermaid</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="#"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="font-display text-sm text-jacarta-700 dark:text-white">TP Fishing King</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="#"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="font-display text-sm text-jacarta-700 dark:text-white">TP Monopoly</span>
                    </a>
                  </li>
                
                  
                </ul>
              </li>



              <li class="js-nav-dropdown group relative">
                <a
                  href="#"
                  class="dropdown-toggle flex items-center justify-between py-3.5 font-display text-base text-jacarta-700 hover:text-yellow-500 focus:text-yellow-500 dark:text-white dark:hover:text-yellow-300 dark:focus:text-yellow-300 lg:px-5"
                  id="navDropdown-4"
                  aria-expanded="false"
                  role="button"
                  data-bs-toggle="dropdown"
                  >Live Casino
                  <i class="lg:hidden">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      width="24"
                      height="24"
                      class="h-4 w-4 dark:fill-white"
                    >
                      <path fill="none" d="M0 0h24v24H0z" />
                      <path d="M12 13.172l4.95-4.95 1.414 1.414L12 16 5.636 9.636 7.05 8.222z" />
                    </svg>
                  </i>
                </a>
                <ul
                  class="dropdown-menu group-hover:visible lg:invisible left-0 top-[85%] z-10 hidden min-w-[200px] gap-x-4 whitespace-nowrap rounded-xl bg-yellow-300 transition-all will-change-transform group-hover:opacity-100 dark:bg-jacarta-800 lg:absolute lg:grid lg:translate-y-4 lg:py-4 lg:px-2 lg:opacity-0 lg:shadow-2xl lg:group-hover:translate-y-2"
                  aria-labelledby="navDropdown-4"
                >
                  <li>
                    <a
                      href="help-center.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="font-display text-sm text-jacarta-700 dark:text-white">TP Live</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="platform-status.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="font-display text-sm text-jacarta-700 dark:text-white">BBIN Live</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="partners.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="font-display text-sm text-jacarta-700 dark:text-white">MG Live</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="blog.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="font-display text-sm text-jacarta-700 dark:text-white">OG Live</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="single-post.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="font-display text-sm text-jacarta-700 dark:text-white">XG Live</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="newsletter.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="font-display text-sm text-jacarta-700 dark:text-white">PP Live</span>
                    </a>
                  </li>
                </ul>
              </li>


             <li class="js-nav-dropdown group relative">
                <a
                  href="#"
                  class="dropdown-toggle flex items-center justify-between py-3.5 font-display text-base text-jacarta-700 hover:text-yellow-500 focus:text-yellow-500ow dark:text-white dark:hover:text-yellow-300 dark:focus:text-yellow-300 lg:px-5"
                  id="navDropdown-4"
                  aria-expanded="false"
                  role="button"
                  data-bs-toggle="dropdown"
                  >Lottery
                  <i class="lg:hidden">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      width="24"
                      height="24"
                      class="h-4 w-4 dark:fill-white"
                    >
                      <path fill="none" d="M0 0h24v24H0z" />
                      <path d="M12 13.172l4.95-4.95 1.414 1.414L12 16 5.636 9.636 7.05 8.222z" />
                    </svg>
                  </i>
                </a>
                <ul
                  class="dropdown-menu group-hover:visible lg:invisible left-0 top-[85%] z-10 hidden min-w-[200px] gap-x-4 whitespace-nowrap rounded-xl bg-yellow-300 transition-all will-change-transform group-hover:opacity-100 dark:bg-jacarta-800 lg:absolute lg:grid lg:translate-y-4 lg:py-4 lg:px-2 lg:opacity-0 lg:shadow-2xl lg:group-hover:translate-y-2"
                  aria-labelledby="navDropdown-4"
                >
                  <li>
                    <a
                      href="help-center.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="font-display text-sm text-jacarta-700 dark:text-white">TP Lottery</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="platform-status.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="font-display text-sm text-jacarta-700 dark:text-white">BBIN Lottery</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="partners.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="font-display text-sm text-jacarta-700 dark:text-white">SY Lottery</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="blog.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="font-display text-sm text-jacarta-700 dark:text-white">VR Lottery</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="single-post.html"
                      class="flex items-center rounded-xl px-5 py-2 transition-colors hover:bg-jacarta-50 hover:text-accent focus:text-accent dark:hover:bg-jacarta-600"
                    >
                      <span class="font-display text-sm text-jacarta-700 dark:text-white">VGC Lottery</span>
                    </a>
                  </li>
                  
                </ul>
              </li>
            </ul>
          </nav>

         
          <!-- Wallet -->
          <div class="ml-8 hidden lg:flex xl:ml-12">
            <!-- Wallet -->
            <a
              href="#loginModal"
              class="js-wallet group flex h-10 w-10 items-center justify-center rounded-full border border-jacarta-100 bg-white transition-colors hover:border-transparent hover:bg-jacarta-600 focus:border-transparent focus:bg-accent dark:border-transparent dark:bg-white/[.15] dark:hover:bg-yellow-300"
              data-bs-toggle="modal"
              data-bs-target="#loginModal"
              aria-label="login"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                width="24"
                height="24"
                class="h-4 w-4 fill-jacarta-700 transition-colors group-hover:fill-white group-focus:fill-white dark:fill-white"
              >
                <path fill="none" d="M0 0h24v24H0z" />
                <path
                  d="M22 6h-7a6 6 0 1 0 0 12h7v2a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v2zm-7 2h8v8h-8a4 4 0 1 1 0-8zm0 3v2h3v-2h-3z"
                />
              </svg>
            </a>

            <!-- Profile -->
            <div class="js-nav-dropdown group-dropdown relative">
              <button
                class="dropdown-toggle group ml-2 flex h-10 w-10 items-center justify-center rounded-full border border-jacarta-100 bg-white transition-colors hover:border-transparent hover:bg-jacarta-600 focus:border-transparent focus:bg-yellow-300 dark:border-transparent dark:bg-white/[.15] dark:hover:bg-yellow-300"
                id="profileDropdown"
                aria-expanded="false"
                data-bs-toggle="dropdown"
                aria-label="profile"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  width="24"
                  height="24"
                  class="h-4 w-4 fill-jacarta-700 transition-colors group-hover:fill-white group-focus:fill-white dark:fill-white"
                >
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path
                    d="M11 14.062V20h2v-5.938c3.946.492 7 3.858 7 7.938H4a8.001 8.001 0 0 1 7-7.938zM12 13c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6z"
                  />
                </svg>
              </button>
              <div
                class="dropdown-menu group-dropdown-hover:visible lg:invisible !-right-4 !top-[85%] !left-auto z-10 hidden min-w-[14rem] whitespace-nowrap rounded-xl bg-yellow-300 transition-all will-change-transform before:absolute before:-top-3 before:h-3 before:w-full group-dropdown-hover:opacity-100 dark:bg-jacarta-800 lg:absolute lg:grid lg:!translate-y-4 lg:py-4 lg:px-2 lg:opacity-0 lg:shadow-2xl"
                aria-labelledby="profileDropdown"
              >
                

                <form id="contact-form" method="post">
                  <div class="mb-4">
                  <input
                      name="name"
                      class="contact-form-input w-full rounded-lg border-jacarta-100 py-3 hover:ring-2 hover:ring-accent/10 focus:ring-accent dark:border-jacarta-600 dark:bg-jacarta-700 dark:text-white dark:placeholder:text-jacarta-300"
                      id="name"
                      type="text"
                      placeholder="Username"
                      required
                    />
                </div>
                <div class="mb-4">
                 
                  <input
                      name="name"
                      class="contact-form-input w-full rounded-lg border-jacarta-100 py-3 hover:ring-2 hover:ring-accent/10 focus:ring-accent dark:border-jacarta-600 dark:bg-jacarta-700 dark:text-white dark:placeholder:text-jacarta-300"
                      id="name"
                      type="password"
                      placeholder="Password"
                      required
                    />
                </div>
            </form>

            	<button
                    class="mb-4 flex w-full items-center justify-center rounded-full border-2 border-jacarta-100 bg-yellow-500 py-4 px-8 text-center font-semibold text-jacarta-700 transition-all hover:border-transparent hover:bg-accent hover:text-white dark:border-jacarta-600 dark:bg-jacarta-700 dark:text-white dark:hover:border-transparent dark:hover:bg-accent"
                  >
                  	<svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    width="24"
                    height="24"
                    class="h-4 w-4 fill-jacarta-700 transition-colors dark:fill-white"
                  >
                    <path fill="none" d="M0 0h24v24H0z"></path>
                    <path
                      d="M4 15h2v5h12V4H6v5H4V3a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-6zm6-4V8l5 4-5 4v-3H2v-2h8z"
                    ></path>
                  </svg>
                    <span>Login</span>
                  </button>

                  <button
                    class="mb-4 flex w-full items-center justify-center rounded-full border-2 border-jacarta-100 bg-yellow-500 py-4 px-8 text-center font-semibold text-jacarta-700 transition-all hover:border-transparent hover:bg-accent hover:text-white dark:border-jacarta-600 dark:bg-jacarta-700 dark:text-white dark:hover:border-transparent dark:hover:bg-accent"
                  >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    width="24"
                    height="24"
                    class="h-4 w-4 fill-jacarta-700 transition-colors dark:fill-white"
                  >
                    <path fill="none" d="M0 0h24v24H0z"></path>
                    <path
                      d="M4 15h2v5h12V4H6v5H4V3a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-6zm6-4V8l5 4-5 4v-3H2v-2h8z"
                    ></path>
                  </svg>
                    <span>Register</span>
                  </button>
                <
              </div>
            </div>

            <!-- Dark Mode -->
            <a
              href="#"
              class="js-dark-mode-trigger group ml-2 flex h-10 w-10 items-center justify-center rounded-full border border-jacarta-100 bg-white transition-colors hover:border-transparent hover:bg-jacarta-600 focus:border-transparent focus:bg-jacarta-600 dark:border-transparent dark:bg-white/[.15] dark:hover:bg-yellow-300"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                width="24"
                height="24"
                class="dark-mode-light h-4 w-4 fill-jacarta-700 transition-colors group-hover:fill-white group-focus:fill-white dark:hidden"
              >
                <path fill="none" d="M0 0h24v24H0z" />
                <path
                  d="M11.38 2.019a7.5 7.5 0 1 0 10.6 10.6C21.662 17.854 17.316 22 12.001 22 6.477 22 2 17.523 2 12c0-5.315 4.146-9.661 9.38-9.981z"
                />
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                width="24"
                height="24"
                class="dark-mode-dark hidden h-4 w-4 fill-jacarta-700 transition-colors group-hover:fill-white group-focus:fill-white dark:block dark:fill-white"
              >
                <path fill="none" d="M0 0h24v24H0z" />
                <path
                  d="M12 18a6 6 0 1 1 0-12 6 6 0 0 1 0 12zM11 1h2v3h-2V1zm0 19h2v3h-2v-3zM3.515 4.929l1.414-1.414L7.05 5.636 5.636 7.05 3.515 4.93zM16.95 18.364l1.414-1.414 2.121 2.121-1.414 1.414-2.121-2.121zm2.121-14.85l1.414 1.415-2.121 2.121-1.414-1.414 2.121-2.121zM5.636 16.95l1.414 1.414-2.121 2.121-1.414-1.414 2.121-2.121zM23 11v2h-3v-2h3zM4 11v2H1v-2h3z"
                />
              </svg>
            </a>
          </div>
        </div>

        <!-- Mobile Menu Actions -->
        <div class="ml-auto flex lg:hidden">
          <!-- Profile -->
          <a
            href="edit-profile.html"
            class="group ml-2 flex h-10 w-10 items-center justify-center rounded-full border border-jacarta-100 bg-white transition-colors hover:border-transparent hover:bg-accent focus:border-transparent focus:bg-accent dark:border-transparent dark:bg-white/[.15] dark:hover:bg-accent"
            aria-label="profile"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              width="24"
              height="24"
              class="h-4 w-4 fill-jacarta-700 transition-colors group-hover:fill-white group-focus:fill-white dark:fill-white"
            >
              <path fill="none" d="M0 0h24v24H0z" />
              <path
                d="M11 14.062V20h2v-5.938c3.946.492 7 3.858 7 7.938H4a8.001 8.001 0 0 1 7-7.938zM12 13c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6z"
              />
            </svg>
          </a>

          <!-- Dark Mode -->
          <a
            href="#"
            class="js-dark-mode-trigger group ml-2 flex h-10 w-10 items-center justify-center rounded-full border border-jacarta-100 bg-white transition-colors hover:border-transparent hover:bg-accent focus:border-transparent focus:bg-accent dark:border-transparent dark:bg-white/[.15] dark:hover:bg-accent"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              width="24"
              height="24"
              class="dark-mode-light h-4 w-4 fill-jacarta-700 transition-colors group-hover:fill-white group-focus:fill-white dark:hidden"
            >
              <path fill="none" d="M0 0h24v24H0z" />
              <path
                d="M11.38 2.019a7.5 7.5 0 1 0 10.6 10.6C21.662 17.854 17.316 22 12.001 22 6.477 22 2 17.523 2 12c0-5.315 4.146-9.661 9.38-9.981z"
              />
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              width="24"
              height="24"
              class="dark-mode-dark hidden h-4 w-4 fill-jacarta-700 transition-colors group-hover:fill-white group-focus:fill-white dark:block dark:fill-white"
            >
              <path fill="none" d="M0 0h24v24H0z" />
              <path
                d="M12 18a6 6 0 1 1 0-12 6 6 0 0 1 0 12zM11 1h2v3h-2V1zm0 19h2v3h-2v-3zM3.515 4.929l1.414-1.414L7.05 5.636 5.636 7.05 3.515 4.93zM16.95 18.364l1.414-1.414 2.121 2.121-1.414 1.414-2.121-2.121zm2.121-14.85l1.414 1.415-2.121 2.121-1.414-1.414 2.121-2.121zM5.636 16.95l1.414 1.414-2.121 2.121-1.414-1.414 2.121-2.121zM23 11v2h-3v-2h3zM4 11v2H1v-2h3z"
              />
            </svg>
          </a>

          <!-- Mobile Menu Toggle -->
          <button
            class="js-mobile-toggle group ml-2 flex h-10 w-10 items-center justify-center rounded-full border border-jacarta-100 bg-white transition-colors hover:border-transparent hover:bg-accent focus:border-transparent focus:bg-accent dark:border-transparent dark:bg-white/[.15] dark:hover:bg-accent"
            aria-label="open mobile menu"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              width="24"
              height="24"
              class="h-4 w-4 fill-jacarta-700 transition-colors group-hover:fill-white group-focus:fill-white dark:fill-white"
            >
              <path fill="none" d="M0 0h24v24H0z" />
              <path d="M18 18v2H6v-2h12zm3-7v2H3v-2h18zm-3-7v2H6V4h12z" />
            </svg>
          </button>
        </div>
      </div>
    </header>

    <div class="relative">
        <img src="img/bannerhome.png" alt="banner" class="  object-cover" />
      </div>

    <main class="pt-[6.5rem] lg:pt-0">




          <div class="container -mt-52 sm:-mt-64 md:-mt-72 "> 


			<div id="indicators-carousel" class="relative" data-carousel="static">
			    <!-- Carousel wrapper -->
			    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
			         <!-- Item 1 -->
			        <div class="hidden duration-300 ease-in-out" data-carousel-item="active">
			            <img src="/img/caro3.jpeg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
			        </div>
			        <!-- Item 2 -->
			        <div class="hidden duration-300 ease-in-out" data-carousel-item>
			            <img src="img/caro4.jpeg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
			        </div>
			        <!-- Item 3 -->
			        <div class="hidden duration-300 ease-in-out" data-carousel-item>
			            <img src="img/caro5.jpeg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
			        </div>
			        <!-- Item 4 -->
			        <div class="hidden duration-300 ease-in-out" data-carousel-item>
			            <img src="img/caro6.jpeg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
			        </div>
			        <!-- Item 5 -->
			        <div class="hidden duration-300 ease-in-out" data-carousel-item>
			            <img src="img/caro7.jpeg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
			        </div>
			    </div>
			    <!-- Slider indicators -->
			    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
			        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
			        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
			        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
			        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
			        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
			    </div>
			    <!-- Slider controls -->
			    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
			        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
			            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
			            <span class="sr-only">Previous</span>
			        </span>
			    </button>
			    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
			        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
			            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
			            <span class="sr-only">Next</span>
			        </span>
			    </button>
			</div>


			<div class="ticker"> 
              <div class="title">
              </div> 
              <div class="news bg-yellow-100 flex">
              	<img src="img/news_bg.png"> 
                <marquee class="news-content text-jacarta-700 bg-yellow-100">
                  <p>本网站纯属网页测试，无法进行交易~~~~~~本网站纯属网页测试，无法进行交易~~~~~~本网站纯属网页测试，无法进行交易~~~~~~~
                  </p> 
                </marquee> 
              </div> 
            </div> 


          </div>


          <div class="container mx-auto pt-10">
			  <div class="flex flex-row">

				  <div class="basis-1/2 text-center px-4 pt-20">

				  		<!-- Jackpot Counting -->
				  		<div class="px-20 items-center">
						    <div class="flex items-center">
						      <div class="flex flex-col inline-flex flex-wrap text-sm items-center">
						        <img src="img/jackpot.png" class="drop-shadow-lg">
						        <div class="flex justify-between mb-3 text-center">
						          <h4 class="font-extrabold text-transparent text-6xl bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-500 drop-shadow-lg">
						            <span x-data="animatedCounter(673923919, 100000000000, 99999999)" x-init="updatecounter" x-text="Math.round(current)"></span>
						          </h4>
						          
						        </div>
						       
						      </div>
						    </div>
						  </div>


						  <!-- Jackpot Winners -->
				  		 <div class="mb-8 inline-flex flex-wrap items-center justify-center rounded-xl border border-jacarta-100 bg-gradient-to-r from-red-400 to-red-500 border-double border-4 border-yellow-500 sm:w-max shadow-lg">
              
				              <a
				                href="#"
				                class="w-1 border-jacarta-100 py-4 hover:shadow-md dark:border-jacarta-600 sm:w-32 sm:border-r"
				              >
				                <div class="text-xs font-bold tracking-tight dark:text-yellow-400 pb-3">客户ID</div>
				                <marquee class="text-center text-sm	 text-white" width="60%" direction="up" height="100px" scrollamount="2">
				                <!-- FOREACH FUNCTION FOR DISPLAYING ALL JACKPOT WINNERS -->
				                <span>y25***9</span>
				                <span>c12***2</span>
				                <span>axt***6</span>
				                <span>sn8***8</span>
				                <span>dtt***8</span>
				                <span>pw7***w</span>
				                <span>wws***8</span>
				                <span>y25***9</span>
				                <span>pw7***w</span>
				                <span>c12***2</span>
				                <span>axt***6</span>
				                <span>sn8***8</span>
				                <span>dtt***8</span>
				                <span>pw7***w</span>
				                <span>wws***8</span>
				                <span>y25***9</span>

				                </marquee>
				  
				                 
				             </a>
				              <a
				                href="#"
				                class="w-1 border-jacarta-100 py-4 hover:shadow-md dark:border-jacarta-600 sm:w-32 sm:border-r"
				              >
				                <div class="text-xs font-medium tracking-tight dark:text-yellow-400 pb-3">客户ID</div>
				                <marquee class="text-center text-sm	 text-yellow-300" width="60%" direction="up" height="100px" scrollamount="2">
				                <!-- FOREACH FUNCTION FOR DISPLAYING ALL JACKPOT WINNERS -->
				                <span>1512411</span>
				                <span>5131231</span>
				                <span>1231226</span>
				                <span>2344228</span>
				                <span>6533454</span>
				                <span>5543321</span>
				                <span>3435212</span>
				                <span>6765549</span>
				                <span>5745632</span>
				                <span>7456333</span>
				                <span>3456633</span>
				                <span>8754544</span>
				                <span>8456456</span>
				                <span>2423322</span>
				                <span>5453321</span>
				                <span>4634633</span>

				                </marquee>
				  
				                 
				             </a>
				             <a
				                href="#"
				                class="w-1 border-jacarta-100 py-4 hover:shadow-md dark:border-jacarta-600 sm:w-32 "
				              >
				                <div class="text-xs font-medium tracking-tight dark:text-yellow-400 pb-3">客户ID</div>
				                <marquee class="text-center text-sm	 text-white" width="60%" direction="up" height="100px" scrollamount="2">
				                <!-- FOREACH FUNCTION FOR DISPLAYING ALL JACKPOT WINNERS -->
				                <span>美人捕鱼</span>
				                <span>抢庄牛牛</span>
				                <span>飞禽走兽</span>
				                <span>王者捕鱼</span>
				                <span>捕鱼大亨</span>
				                <span>美人捕鱼</span>
				                <span>美人捕鱼</span>
				                <span>飞禽走兽</span>
				                <span>美人捕鱼</span>
				                <span>美人捕鱼</span>
				                <span>抢庄牛牛</span>
				                <span>美人捕鱼</span>
				                <span>捕鱼大亨</span>
				                <span>王者捕鱼</span>
				                <span>飞禽走兽</span>
				                <span>抢庄牛牛</span>
				                <span>王者捕鱼</span>
				                <span>飞禽走兽</span>
				                <span>抢庄牛牛</span>

				                </marquee>
				  
				                 
				             </a>
           			 </div>


				  </div>


				  <div class="basis-1/2 text-center">

				  	<div class="container ">
				          <!-- Tabs Nav -->
				          <ul
				            class="nav nav-tabs mb-5 flex items-center justify-center border-b border-jacarta-100 dark:border-jacarta-600"
				            role="tablist"
				          >
				            <li class="nav-item hover:bg-yellow-300" role="presentation">
				              <button
				                class="nav-link active relative flex items-center whitespace-nowrap py-3 px-6 text-jacarta-400 hover:text-jacarta-700 dark:hover:text-white"
				                id="items-tab"
				                data-bs-toggle="tab"
				                data-bs-target="#livecasino"
				                type="button"
				                role="tab"
				                aria-controls="livecasino"
				                aria-selected="true"
				              >
				                <img src="img/Games2/live.png" class="pr-2 h-6">
				                <span class="font-display text-base font-medium">Live Casino</span>
				              </button>
				            </li>
				            <li class="nav-item hover:bg-yellow-300" role="presentation">
				              <button
				                class="nav-link relative flex items-center whitespace-nowrap py-3 px-6 text-jacarta-400 hover:text-jacarta-700 dark:hover:text-white"
				                id="activity-tab"
				                data-bs-toggle="tab"
				                data-bs-target="#fishinggames"
				                type="button"
				                role="tab"
				                aria-controls="fishinggames"
				                aria-selected="false"
				              >
				                <img src="img/Games2/fish.png" class="px-2">
				                <span class="font-display text-base font-medium">Fishing Games</span>
				              </button>
				            </li>

				            <li class="nav-item hover:bg-yellow-300" role="presentation">
				              <button
				                class="nav-link relative flex items-center whitespace-nowrap py-3 px-6 text-jacarta-400 hover:text-jacarta-700 dark:hover:text-white"
				                id="sportsbetgames-tab"
				                data-bs-toggle="tab"
				                data-bs-target="#sportsbetgames"
				                type="button"
				                role="tab"
				                aria-controls="sportsbetgames"
				                aria-selected="false"
				              >
				                <img src="img/Games2/sport.png" class="px-2 h-6">
				                <span class="font-display text-base font-medium">Sports Bet</span>
				              </button>
				            </li>
				            <li class="nav-item hover:bg-yellow-300" role="presentation">
				              <button
				                class="nav-link relative flex items-center whitespace-nowrap py-3 px-6 text-jacarta-400 hover:text-jacarta-700 dark:hover:text-white"
				                id="activity-tab"
				                data-bs-toggle="tab"
				                data-bs-target="#lotterygames"
				                type="button"
				                role="tab"
				                aria-controls="lotterygames"
				                aria-selected="false"
				              >
				                <img src="img/Games2/lottery.png" class="px-2 h-6">
				                <span class="font-display text-base font-medium">Lottery Games</span>
				              </button>
				            </li>
				          </ul>

				          <!-- Upper Tab Panel -->

				          <div class="tab-content">
            				<div class="tab-pane fade show active block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700" id="livecasino" role="tabpanel" aria-labelledby="livecasino-tab">

            					<div>
	            					<img src="img/Games2/livecasinobanner.jpeg" class="mx-auto object-fill">
	            				</div>
            				
	            				
	            				
	            				<div class="pt-2">
	            					<span class="font-display text-xl text-jacarta-700 hover:text-yellow-500 focus:text-jacarta-200 dark:text-yellow-300 dark:hover:text-white dark:focus:text-yellow-300 lg:px-5">LIVE CASINO</span>
	            				</div>
	            				<div>
	            					<span class="font-display text-2xs text-jacarta-700 focus:text-jacarta-200 dark:text-jacarta-200 dark:focus:text-yellow-300 lg:px-5">全球最佳真人视讯平台，真人荷官在线发牌，画面真实高清，给您亲临赌场的真实爽快感受！</span>
	            				</div>
	            				<div class="flex flex-row pt-2 flex items-center justify-center">
	            					<div class="px-2 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
	            						<a href="">
		            						<img src="img/Games2/live1.png">
		            						<span>百家乐</span>
	            						</a>
	            					</div>
	            					<div class="px-2 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
	            						<a href="">
		            						<img src="img/Games2/live2.png">
		            						<span>百家乐</span>
	            						</a>
	            					</div>
	            					<div class="px-2 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
	            						<a href="">
		            						<img src="img/Games2/live3.png">
		            						<span>百家乐</span>
	            						</a>
	            					</div>
	            				</div>
            				</div>
            			

            		
            				<div class="tab-pane fade show block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700" id="fishinggames" role="tabpanel" aria-labelledby="fishinggames-tab">

            					<div>
	            					<img src="img/Games2/fishinggamesbanner.jpeg" class="mx-auto">
	            				</div>
            				
	            				
	            				
	            				<div class="pt-2">
	            					<span class="font-display text-xl text-jacarta-700 hover:text-yellow-500 focus:text-jacarta-200 dark:text-yellow-300 dark:hover:text-white dark:focus:text-yellow-300 lg:px-5">FISHING GAMES</span>
	            				</div>
	            				<div>
	            					<span class="font-display text-2xs text-jacarta-700 focus:text-jacarta-200 dark:text-jacarta-200 dark:focus:text-yellow-300 lg:px-5">捕鱼游戏强势来袭，众多热门平台，千炮捕鱼，深海捕鱼，王者捕鱼，天天送豪礼！</span>
	            				</div>
	            				<div class="flex flex-row pt-2 flex items-center justify-center">
	            					<div class="px-2 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
	            						<a href="">
		            						<img src="img/Games2/fishing1.png">
		            						<span>AG捕魚王</span>
	            						</a>
	            					</div>
	            					<div class="px-2 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
	            						<a href="">
		            						<img src="img/Games2/fishing2.png">
		            						<span>FG雷霆战警</span>
	            						</a>
	            					</div>
	            					<div class="px-2 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
	            						<a href="">
		            						<img src="img/Games2/fishing3.png">
		            						<span>TP劈魚來了</span>
	            						</a>
	            					</div>
	            				</div>
            				</div>

            				<div class="tab-pane fade show block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700" id="sportsbetgames" role="tabpanel" aria-labelledby="sportsbetgames-tab">

            					<div>
	            					<img src="img/Games2/sportsbetbanner.jpeg" class="mx-auto">
	            				</div>
            				
	            				
	            				
	            				<div class="pt-2">
	            					<span class="font-display text-xl text-jacarta-700 hover:text-yellow-500 focus:text-jacarta-200 dark:text-yellow-300 dark:hover:text-white dark:focus:text-yellow-300 lg:px-5">SPORTS BET</span>
	            				</div>
	            				<div>
	            					<span class="font-display text-2xs text-jacarta-700 focus:text-jacarta-200 dark:text-jacarta-200 dark:focus:text-yellow-300 lg:px-5">汇集全球顶级经典赛事，欧洲杯，世界杯，篮球，网球，排球，棒球，F1赛车等各赛事！</span>
	            				</div>
	            				<div class="flex flex-row pt-2 flex items-center justify-center">
	            					<div class="px-2 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
	            						<a href="">
		            						<img src="img/Games2/sport1.png">
		            						<span>足球</span>
	            						</a>
	            					</div>
	            					<div class="px-2 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
	            						<a href="">
		            						<img src="img/Games2/sport2.png">
		            						<span>篮球</span>
	            						</a>
	            					</div>
	            					<div class="px-2 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
	            						<a href="">
		            						<img src="img/Games2/sport3.png">
		            						<span>排球</span>
	            						</a>
	            					</div>
	            				</div>
            				</div>


            				<div class="tab-pane fade show block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700" id="lotterygames" role="tabpanel" aria-labelledby="lotterygames-tab">

            					<div>
	            					<img src="img/Games2/lotterygamesbanner.jpeg" class="mx-auto">
	            				</div>
            				
	            				
	            				
	            				<div class="pt-2">
	            					<span class="font-display text-xl text-jacarta-700 hover:text-yellow-500 focus:text-jacarta-200 dark:text-yellow-300 dark:hover:text-white dark:focus:text-yellow-300 lg:px-5">LOTTERY GAMES</span>
	            				</div>
	            				<div>
	            					<span class="font-display text-2xs text-jacarta-700 focus:text-jacarta-200 dark:text-jacarta-200 dark:focus:text-yellow-300 lg:px-5">捕鱼游戏强势来袭，众多热门平台，千炮捕鱼，深海捕鱼，王者捕鱼，天天送豪礼！</span>
	            				</div>
	            				<div class="flex flex-row pt-2 flex items-center justify-center">
	            					<div class="px-2 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
	            						<a href="">
		            						<img src="img/Games2/lottery1.png">
		            						<span>六合彩</span>
	            						</a>
	            					</div>
	            					<div class="px-2 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
	            						<a href="">
		            						<img src="img/Games2/lottery2.png">
		            						<span>时时彩</span>
	            						</a>
	            					</div>
	            					<div class="px-2 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
	            						<a href="">
		            						<img src="img/Games2/lottery3.png">
		            						<span>PK10</span>
	            						</a>
	            					</div>
	            				</div>
            				</div>



            			</div>
            			




				      </div>
				  	
				  </div>



			  </div>
		  </div>





          





      <!-- Collection -->
      <section class="relative py-10">
        <picture class="pointer-events-none absolute inset-0 -z-10 dark:hidden">
          <img src="img/gradient_light.jpg" alt="gradient" class="h-full w-full" />
        </picture>
        <div class="container">
          <!-- Tabs Nav -->
          <ul
            class="nav nav-tabs mb-12 flex items-center justify-center border-b border-jacarta-100 dark:border-jacarta-600"
            role="tablist"
          >
            <li class="nav-item hover:bg-yellow-300" role="presentation">
              <button
                class="nav-link active relative flex items-center whitespace-nowrap py-3 px-6 text-jacarta-400 hover:text-jacarta-700 dark:hover:text-white"
                id="kygames-tab"
                data-bs-toggle="tab"
                data-bs-target="#kygames"
                type="button"
                role="tab"
                aria-controls="kygames"
                aria-selected="true"
              >
                <img src="img/Games/kycard/KY.png">
                <span class="font-display text-base font-medium">KY Card</span>
              </button>
            </li>
            <li class="nav-item hover:bg-yellow-300" role="presentation">
              <button
                class="nav-link relative flex items-center whitespace-nowrap py-3 px-6 text-jacarta-400 hover:text-jacarta-700 dark:hover:text-white"
                id="activity-tab"
                data-bs-toggle="tab"
                data-bs-target="#sggames"
                type="button"
                role="tab"
                aria-controls="sggames"
                aria-selected="false"
              >
                <img src="img/Games/sg.png">
                <span class="font-display text-base font-medium">SG Casino</span>
              </button>
            </li>

            <li class="nav-item hover:bg-yellow-300" role="presentation">
              <button
                class="nav-link relative flex items-center whitespace-nowrap py-3 px-6 text-jacarta-400 hover:text-jacarta-700 dark:hover:text-white"
                id="activity-tab"
                data-bs-toggle="tab"
                data-bs-target="#apboardgames"
                type="button"
                role="tab"
                aria-controls="apboardgames"
                aria-selected="false"
              >
                <img src="img/Games/ap.png">
                <span class="font-display text-base font-medium">AP Board</span>
              </button>
            </li>
            <li class="nav-item hover:bg-yellow-300" role="presentation">
              <button
                class="nav-link relative flex items-center whitespace-nowrap py-3 px-6 text-jacarta-400 hover:text-jacarta-700 dark:hover:text-white"
                id="activity-tab"
                data-bs-toggle="tab"
                data-bs-target="#pgcasino"
                type="button"
                role="tab"
                aria-controls="pgcasino"
                aria-selected="false"
              >
                <img src="img/Games/pg.png" class="dark:hidden"/>
            	<img src="img/Games/pgwhite.png" class="hidden dark:block" />
                <span class="font-display text-base font-medium">PG Casino</span>
              </button>
            </li>
            <li class="nav-item hover:bg-yellow-300" role="presentation">
              <button
                class="nav-link relative flex items-center whitespace-nowrap py-3 px-6 text-jacarta-400 hover:text-jacarta-700 dark:hover:text-white"
                id="cq9casino-tab"
                data-bs-toggle="tab"
                data-bs-target="#cq9casino"
                type="button"
                role="tab"
                aria-controls="cq9casino"
                aria-selected="false"
              >
                <img src="img/Games/cq9.png">
                <span class="font-display text-base font-medium">CQ9 Casino</span>
              </button>
            </li>
            <li class="nav-item hover:bg-yellow-300" role="presentation">
              <button
                class="nav-link relative flex items-center whitespace-nowrap py-3 px-6 text-jacarta-400 hover:text-jacarta-700 dark:hover:text-white"
                id="agcasino-tab"
                data-bs-toggle="tab"
                data-bs-target="#agcasino"
                type="button"
                role="tab"
                aria-controls="agcasino"
                aria-selected="false"
              >
                 <img src="img/Games/ag.png">
                <span class="font-display text-base font-medium">AG Casino</span>
              </button>
            </li>
          </ul>



          <div class="tab-content">
            <!-- KY Games Tab -->
            <div class="tab-pane fade show active" id="kygames" role="tabpanel" aria-labelledby="kygames-tab">
            	

            	<div class="grid grid-cols-4 gap-4 sm:grid-cols-2 md:grid-cols-2 md:gap-8">

              <!-- Grid Games-->
              <div class="grid grid-cols-2 gap-4 sm:grid-cols-2 md:grid-cols-3 md:gap-4">
                <article>
                  <div
                    class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <figure class="relative">
                      <a href="#loginModal" 
                      data-bs-toggle="modal"
		              data-bs-target="#loginModal"
		              aria-label="login">
                        <img
                          src="img/games/kycard/02.png"
                          alt="item 5"
                          class="w-full rounded-[0.625rem]"
                          loading="lazy"
                        />
                      </a>
                    </figure>
                    <div class="mt-7 flex items-center justify-between">
                      <a href="#">
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >斗地主</span
                        >
                      </a>
                    </div>
                    <div class="mt-2 text-sm">
                      <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">经典棋牌对战</span>
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                      <button
                        class="font-display text-sm font-semibold text-yellow-300"
                        data-bs-toggle="modal"
                        data-bs-target="#buyNowModal"
                      >
                        KY Card
                      </button>
                      <a href="#loginModal" 
	                      data-bs-toggle="modal"
			              data-bs-target="#loginModal"
			              aria-label="login" 
			              class="group flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-yellow-300 dark:fill-jacarta-200"
                        >
                          <path fill="none" d="M0 0H24V24H0z" />
                          <path d="M17 4a6 6 0 0 1 6 6v4a6 6 0 0 1-6 6H7a6 6 0 0 1-6-6v-4a6 6 0 0 1 6-6h10zm-7 5H8v2H6v2h1.999L8 15h2l-.001-2H12v-2h-2V9zm8 4h-2v2h2v-2zm-2-4h-2v2h2V9z"/>
                          
                        </svg>
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >现在播放</span
                        >
                      </a>
                    </div>
                  </div>
                </article>

                <article>
                  <div
                    class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <figure class="relative">
                      <a href="#loginModal" 
                      data-bs-toggle="modal"
		              data-bs-target="#loginModal"
		              aria-label="login">
                        <img
                          src="img/games/kycard/03.png"
                          alt="item 5"
                          class="w-full rounded-[0.625rem]"
                          loading="lazy"
                        />
                      </a>
                    </figure>
                    <div class="mt-7 flex items-center justify-between">
                      <a href="#">
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >斗地主</span
                        >
                      </a>
                    </div>
                    <div class="mt-2 text-sm">
                      <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">经典棋牌对战</span>
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                      <button
                        class="font-display text-sm font-semibold text-yellow-300"
                        data-bs-toggle="modal"
                        data-bs-target="#buyNowModal"
                      >
                        KY Card
                      </button>
                      <a href="#loginModal" 
	                      data-bs-toggle="modal"
			              data-bs-target="#loginModal"
			              aria-label="login" 
			              class="group flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-yellow-300 dark:fill-jacarta-200"
                        >
                          <path fill="none" d="M0 0H24V24H0z" />
                          <path d="M17 4a6 6 0 0 1 6 6v4a6 6 0 0 1-6 6H7a6 6 0 0 1-6-6v-4a6 6 0 0 1 6-6h10zm-7 5H8v2H6v2h1.999L8 15h2l-.001-2H12v-2h-2V9zm8 4h-2v2h2v-2zm-2-4h-2v2h2V9z"/>
                          
                        </svg>
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >现在播放</span
                        >
                      </a>
                    </div>
                  </div>
                </article>

                <article>
                  <div
                    class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <figure class="relative">
                      <a href="#loginModal" 
                      data-bs-toggle="modal"
		              data-bs-target="#loginModal"
		              aria-label="login">
                        <img
                          src="img/games/kycard/04.png"
                          alt="item 5"
                          class="w-full rounded-[0.625rem]"
                          loading="lazy"
                        />
                      </a>
                    </figure>
                    <div class="mt-7 flex items-center justify-between">
                      <a href="#">
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >斗地主</span
                        >
                      </a>
                    </div>
                    <div class="mt-2 text-sm">
                      <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">经典棋牌对战</span>
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                      <button
                        class="font-display text-sm font-semibold text-yellow-300"
                        data-bs-toggle="modal"
                        data-bs-target="#buyNowModal"
                      >
                        KY Card
                      </button>
                      <a href="#loginModal" 
	                      data-bs-toggle="modal"
			              data-bs-target="#loginModal"
			              aria-label="login" 
			              class="group flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-yellow-300 dark:fill-jacarta-200"
                        >
                          <path fill="none" d="M0 0H24V24H0z" />
                          <path d="M17 4a6 6 0 0 1 6 6v4a6 6 0 0 1-6 6H7a6 6 0 0 1-6-6v-4a6 6 0 0 1 6-6h10zm-7 5H8v2H6v2h1.999L8 15h2l-.001-2H12v-2h-2V9zm8 4h-2v2h2v-2zm-2-4h-2v2h2V9z"/>
                          
                        </svg>
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >现在播放</span
                        >
                      </a>
                    </div>
                  </div>
                </article>

                <article>
                  <div
                    class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <figure class="relative">
                      <a href="#loginModal" 
                      data-bs-toggle="modal"
		              data-bs-target="#loginModal"
		              aria-label="login">
                        <img
                          src="img/games/kycard/05.png"
                          alt="item 5"
                          class="w-full rounded-[0.625rem]"
                          loading="lazy"
                        />
                      </a>
                    </figure>
                    <div class="mt-7 flex items-center justify-between">
                      <a href="#">
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >斗地主</span
                        >
                      </a>
                    </div>
                    <div class="mt-2 text-sm">
                      <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">经典棋牌对战</span>
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                      <button
                        class="font-display text-sm font-semibold text-yellow-300"
                        data-bs-toggle="modal"
                        data-bs-target="#buyNowModal"
                      >
                        KY Card
                      </button>
                      <a href="#loginModal" 
	                      data-bs-toggle="modal"
			              data-bs-target="#loginModal"
			              aria-label="login" 
			              class="group flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-yellow-300 dark:fill-jacarta-200"
                        >
                          <path fill="none" d="M0 0H24V24H0z" />
                          <path d="M17 4a6 6 0 0 1 6 6v4a6 6 0 0 1-6 6H7a6 6 0 0 1-6-6v-4a6 6 0 0 1 6-6h10zm-7 5H8v2H6v2h1.999L8 15h2l-.001-2H12v-2h-2V9zm8 4h-2v2h2v-2zm-2-4h-2v2h2V9z"/>
                          
                        </svg>
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >现在播放</span
                        >
                      </a>
                    </div>
                  </div>
                </article>

                <article>
                  <div
                    class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <figure class="relative">
                      <a href="#loginModal" 
                      data-bs-toggle="modal"
		              data-bs-target="#loginModal"
		              aria-label="login">
                        <img
                          src="img/games/kycard/06.png"
                          alt="item 5"
                          class="w-full rounded-[0.625rem]"
                          loading="lazy"
                        />
                      </a>
                    </figure>
                    <div class="mt-7 flex items-center justify-between">
                      <a href="#">
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >斗地主</span
                        >
                      </a>
                    </div>
                    <div class="mt-2 text-sm">
                      <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">经典棋牌对战</span>
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                      <button
                        class="font-display text-sm font-semibold text-yellow-300"
                        data-bs-toggle="modal"
                        data-bs-target="#buyNowModal"
                      >
                        KY Card
                      </button>
                      <a href="#loginModal" 
	                      data-bs-toggle="modal"
			              data-bs-target="#loginModal"
			              aria-label="login" 
			              class="group flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-yellow-300 dark:fill-jacarta-200"
                        >
                          <path fill="none" d="M0 0H24V24H0z" />
                          <path d="M17 4a6 6 0 0 1 6 6v4a6 6 0 0 1-6 6H7a6 6 0 0 1-6-6v-4a6 6 0 0 1 6-6h10zm-7 5H8v2H6v2h1.999L8 15h2l-.001-2H12v-2h-2V9zm8 4h-2v2h2v-2zm-2-4h-2v2h2V9z"/>
                          
                        </svg>
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >现在播放</span
                        >
                      </a>
                    </div>
                  </div>
                </article>

               <article>
                  <div
                    class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <figure class="relative">
                      <a href="#loginModal" 
                      data-bs-toggle="modal"
		              data-bs-target="#loginModal"
		              aria-label="login">
                        <img
                          src="img/games/kycard/07.png"
                          alt="item 5"
                          class="w-full rounded-[0.625rem]"
                          loading="lazy"
                        />
                      </a>
                    </figure>
                    <div class="mt-7 flex items-center justify-between">
                      <a href="#">
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >斗地主</span
                        >
                      </a>
                    </div>
                    <div class="mt-2 text-sm">
                      <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">经典棋牌对战</span>
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                      <button
                        class="font-display text-sm font-semibold text-yellow-300"
                        data-bs-toggle="modal"
                        data-bs-target="#buyNowModal"
                      >
                        KY Card
                      </button>
                      <a href="#loginModal" 
	                      data-bs-toggle="modal"
			              data-bs-target="#loginModal"
			              aria-label="login" 
			              class="group flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-yellow-300 dark:fill-jacarta-200"
                        >
                          <path fill="none" d="M0 0H24V24H0z" />
                          <path d="M17 4a6 6 0 0 1 6 6v4a6 6 0 0 1-6 6H7a6 6 0 0 1-6-6v-4a6 6 0 0 1 6-6h10zm-7 5H8v2H6v2h1.999L8 15h2l-.001-2H12v-2h-2V9zm8 4h-2v2h2v-2zm-2-4h-2v2h2V9z"/>
                          
                        </svg>
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >现在播放</span
                        >
                      </a>
                    </div>
                  </div>
                </article>

              </div> <!-- grid ends here -->

              <div>
                <img src="img/Games/kyside.png" class="object-cover">
              </div>

            </div>                
          
             
           </div>   


    

        <!-- SG GAMES -->
            <!-- Items Tab -->
            <div class="tab-pane fade show" id="sggames" role="tabpanel" aria-labelledby="sggames-tab">
                
              <!-- Main Grid -->
              <div class="grid grid-cols-4 gap-4 sm:grid-cols-2 md:grid-cols-2 md:gap-8">

              <!-- Grid Games-->
              <div class="grid grid-cols-2 gap-4 sm:grid-cols-2 md:grid-cols-3 md:gap-8">
                <article>
                  <div
                    class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <figure class="relative">
                      <a href="#loginModal" 
                      data-bs-toggle="modal"
		              data-bs-target="#loginModal"
		              aria-label="login">
                        <img
                          src="img/games/sggames/01.png"
                          alt="item 5"
                          class="w-full rounded-[0.625rem]"
                          loading="lazy"
                        />
                      </a>
                    </figure>
                    <div class="mt-7 flex items-center justify-between">
                      <a href="#">
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >斗地主</span
                        >
                      </a>
                    </div>
                    <div class="mt-2 text-sm">
                      <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">经典棋牌对战</span>
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                      <button
                        class="font-display text-sm font-semibold text-yellow-300"
                        data-bs-toggle="modal"
                        data-bs-target="#buyNowModal"
                      >
                        SG Casino
                      </button>
                      <a href="#loginModal" 
	                      data-bs-toggle="modal"
			              data-bs-target="#loginModal"
			              aria-label="login" 
			              class="group flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-yellow-300 dark:fill-jacarta-200"
                        >
                          <path fill="none" d="M0 0H24V24H0z" />
                          <path d="M17 4a6 6 0 0 1 6 6v4a6 6 0 0 1-6 6H7a6 6 0 0 1-6-6v-4a6 6 0 0 1 6-6h10zm-7 5H8v2H6v2h1.999L8 15h2l-.001-2H12v-2h-2V9zm8 4h-2v2h2v-2zm-2-4h-2v2h2V9z"/>
                          
                        </svg>
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >现在播放</span
                        >
                      </a>
                    </div>
                  </div>
                </article>

                <article>
                  <div
                    class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <figure class="relative">
                      <a href="#loginModal" 
                      data-bs-toggle="modal"
		              data-bs-target="#loginModal"
		              aria-label="login">
                        <img
                          src="img/games/sggames/02.png"
                          alt="item 5"
                          class="w-full rounded-[0.625rem]"
                          loading="lazy"
                        />
                      </a>
                    </figure>
                    <div class="mt-7 flex items-center justify-between">
                      <a href="#">
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >斗地主</span
                        >
                      </a>
                    </div>
                    <div class="mt-2 text-sm">
                      <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">经典棋牌对战</span>
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                      <button
                        class="font-display text-sm font-semibold text-yellow-300"
                        data-bs-toggle="modal"
                        data-bs-target="#buyNowModal"
                      >
                        SG Casino
                      </button>
                      <a href="#loginModal" 
	                      data-bs-toggle="modal"
			              data-bs-target="#loginModal"
			              aria-label="login" 
			              class="group flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-yellow-300 dark:fill-jacarta-200"
                        >
                          <path fill="none" d="M0 0H24V24H0z" />
                          <path d="M17 4a6 6 0 0 1 6 6v4a6 6 0 0 1-6 6H7a6 6 0 0 1-6-6v-4a6 6 0 0 1 6-6h10zm-7 5H8v2H6v2h1.999L8 15h2l-.001-2H12v-2h-2V9zm8 4h-2v2h2v-2zm-2-4h-2v2h2V9z"/>
                          
                        </svg>
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >现在播放</span
                        >
                      </a>
                    </div>
                  </div>
                </article>

                <article>
                  <div
                    class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <figure class="relative">
                      <a href="#loginModal" 
                      data-bs-toggle="modal"
		              data-bs-target="#loginModal"
		              aria-label="login">
                        <img
                          src="img/games/sggames/03.png"
                          alt="item 5"
                          class="w-full rounded-[0.625rem]"
                          loading="lazy"
                        />
                      </a>
                    </figure>
                    <div class="mt-7 flex items-center justify-between">
                      <a href="#">
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >斗地主</span
                        >
                      </a>
                    </div>
                    <div class="mt-2 text-sm">
                      <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">经典棋牌对战</span>
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                      <button
                        class="font-display text-sm font-semibold text-yellow-300"
                        data-bs-toggle="modal"
                        data-bs-target="#buyNowModal"
                      >
                        SG Casino
                      </button>
                      <a href="#loginModal" 
	                      data-bs-toggle="modal"
			              data-bs-target="#loginModal"
			              aria-label="login" 
			              class="group flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-yellow-300 dark:fill-jacarta-200"
                        >
                          <path fill="none" d="M0 0H24V24H0z" />
                          <path d="M17 4a6 6 0 0 1 6 6v4a6 6 0 0 1-6 6H7a6 6 0 0 1-6-6v-4a6 6 0 0 1 6-6h10zm-7 5H8v2H6v2h1.999L8 15h2l-.001-2H12v-2h-2V9zm8 4h-2v2h2v-2zm-2-4h-2v2h2V9z"/>
                          
                        </svg>
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >现在播放</span
                        >
                      </a>
                    </div>
                  </div>
                </article>

                <article>
                  <div
                    class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <figure class="relative">
                      <a href="#loginModal" 
                      data-bs-toggle="modal"
		              data-bs-target="#loginModal"
		              aria-label="login">
                        <img
                          src="img/games/sggames/04.png"
                          alt="item 5"
                          class="w-full rounded-[0.625rem]"
                          loading="lazy"
                        />
                      </a>
                    </figure>
                    <div class="mt-7 flex items-center justify-between">
                      <a href="#">
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >斗地主</span
                        >
                      </a>
                    </div>
                    <div class="mt-2 text-sm">
                      <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">经典棋牌对战</span>
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                      <button
                        class="font-display text-sm font-semibold text-yellow-300"
                        data-bs-toggle="modal"
                        data-bs-target="#buyNowModal"
                      >
                        SG Casino
                      </button>
                      <a href="#loginModal" 
	                      data-bs-toggle="modal"
			              data-bs-target="#loginModal"
			              aria-label="login" 
			              class="group flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-yellow-300 dark:fill-jacarta-200"
                        >
                          <path fill="none" d="M0 0H24V24H0z" />
                          <path d="M17 4a6 6 0 0 1 6 6v4a6 6 0 0 1-6 6H7a6 6 0 0 1-6-6v-4a6 6 0 0 1 6-6h10zm-7 5H8v2H6v2h1.999L8 15h2l-.001-2H12v-2h-2V9zm8 4h-2v2h2v-2zm-2-4h-2v2h2V9z"/>
                          
                        </svg>
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >现在播放</span
                        >
                      </a>
                    </div>
                  </div>
                </article>

                <article>
                  <div
                    class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <figure class="relative">
                      <a href="#loginModal" 
                      data-bs-toggle="modal"
		              data-bs-target="#loginModal"
		              aria-label="login">
                        <img
                          src="img/games/sggames/05.png"
                          alt="item 5"
                          class="w-full rounded-[0.625rem]"
                          loading="lazy"
                        />
                      </a>
                    </figure>
                    <div class="mt-7 flex items-center justify-between">
                      <a href="#">
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >斗地主</span
                        >
                      </a>
                    </div>
                    <div class="mt-2 text-sm">
                      <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">经典棋牌对战</span>
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                      <button
                        class="font-display text-sm font-semibold text-yellow-300"
                        data-bs-toggle="modal"
                        data-bs-target="#buyNowModal"
                      >
                        SG Casino
                      </button>
                      <a href="#loginModal" 
	                      data-bs-toggle="modal"
			              data-bs-target="#loginModal"
			              aria-label="login" 
			              class="group flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-yellow-300 dark:fill-jacarta-200"
                        >
                          <path fill="none" d="M0 0H24V24H0z" />
                          <path d="M17 4a6 6 0 0 1 6 6v4a6 6 0 0 1-6 6H7a6 6 0 0 1-6-6v-4a6 6 0 0 1 6-6h10zm-7 5H8v2H6v2h1.999L8 15h2l-.001-2H12v-2h-2V9zm8 4h-2v2h2v-2zm-2-4h-2v2h2V9z"/>
                          
                        </svg>
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >现在播放</span
                        >
                      </a>
                    </div>
                  </div>
                </article>

                <article>
                  <div
                    class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <figure class="relative">
                      <a href="#loginModal" 
                      data-bs-toggle="modal"
		              data-bs-target="#loginModal"
		              aria-label="login">
                        <img
                          src="img/games/sggames/06.png"
                          alt="item 5"
                          class="w-full rounded-[0.625rem]"
                          loading="lazy"
                        />
                      </a>
                    </figure>
                    <div class="mt-7 flex items-center justify-between">
                      <a href="#">
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >斗地主</span
                        >
                      </a>
                    </div>
                    <div class="mt-2 text-sm">
                      <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">经典棋牌对战</span>
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                      <button
                        class="font-display text-sm font-semibold text-yellow-300"
                        data-bs-toggle="modal"
                        data-bs-target="#buyNowModal"
                      >
                        SG Casino
                      </button>
                      <a href="#loginModal" 
	                      data-bs-toggle="modal"
			              data-bs-target="#loginModal"
			              aria-label="login" 
			              class="group flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-yellow-300 dark:fill-jacarta-200"
                        >
                          <path fill="none" d="M0 0H24V24H0z" />
                          <path d="M17 4a6 6 0 0 1 6 6v4a6 6 0 0 1-6 6H7a6 6 0 0 1-6-6v-4a6 6 0 0 1 6-6h10zm-7 5H8v2H6v2h1.999L8 15h2l-.001-2H12v-2h-2V9zm8 4h-2v2h2v-2zm-2-4h-2v2h2V9z"/>
                          
                        </svg>
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >现在播放</span
                        >
                      </a>
                    </div>
                  </div>
                </article>

              </div> <!-- grid ends here -->

              <div>
                <img src="img/Games/sggamesside.png" class="object-cover">
              </div>

            </div>

              <!-- end grid -->
            </div>







             <!-- AP GAMES -->
            <div class="tab-pane fade show" id="apboardgames" role="tabpanel" aria-labelledby="apboardgames-tab">
                

              <div class="grid grid-cols-4 gap-4 sm:grid-cols-2 md:grid-cols-2 md:gap-8">


              <div class="grid grid-cols-2 gap-4 sm:grid-cols-2 md:grid-cols-3 md:gap-8">
                <article>
                  <div
                    class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <figure class="relative">
                      <a href="#loginModal" 
                      data-bs-toggle="modal"
		              data-bs-target="#loginModal"
		              aria-label="login">
                        <img
                          src="img/games/apboard/01.png"
                          alt="item 5"
                          class="w-full rounded-[0.625rem]"
                          loading="lazy"
                        />
                      </a>
                    </figure>
                    <div class="mt-7 flex items-center justify-between">
                      <a href="#">
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >斗地主</span
                        >
                      </a>
                    </div>
                    <div class="mt-2 text-sm">
                      <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">经典棋牌对战</span>
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                      <button
                        class="font-display text-sm font-semibold text-yellow-300"
                        data-bs-toggle="modal"
                        data-bs-target="#buyNowModal"
                      >
                        AP Board
                      </button>
                      <a href="#loginModal" 
	                      data-bs-toggle="modal"
			              data-bs-target="#loginModal"
			              aria-label="login" 
			              class="group flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-yellow-300 dark:fill-jacarta-200"
                        >
                          <path fill="none" d="M0 0H24V24H0z" />
                          <path d="M17 4a6 6 0 0 1 6 6v4a6 6 0 0 1-6 6H7a6 6 0 0 1-6-6v-4a6 6 0 0 1 6-6h10zm-7 5H8v2H6v2h1.999L8 15h2l-.001-2H12v-2h-2V9zm8 4h-2v2h2v-2zm-2-4h-2v2h2V9z"/>
                          
                        </svg>
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >现在播放</span
                        >
                      </a>
                    </div>
                  </div>
                </article>

                <article>
                  <div
                    class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <figure class="relative">
                      <a href="#loginModal" 
                      data-bs-toggle="modal"
		              data-bs-target="#loginModal"
		              aria-label="login">
                        <img
                          src="img/games/apboard/02.png"
                          alt="item 5"
                          class="w-full rounded-[0.625rem]"
                          loading="lazy"
                        />
                      </a>
                    </figure>
                    <div class="mt-7 flex items-center justify-between">
                      <a href="#">
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >斗地主</span
                        >
                      </a>
                    </div>
                    <div class="mt-2 text-sm">
                      <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">经典棋牌对战</span>
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                      <button
                        class="font-display text-sm font-semibold text-yellow-300"
                        data-bs-toggle="modal"
                        data-bs-target="#buyNowModal"
                      >
                        AP Board
                      </button>
                      <a href="#loginModal" 
	                      data-bs-toggle="modal"
			              data-bs-target="#loginModal"
			              aria-label="login" 
			              class="group flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-yellow-300 dark:fill-jacarta-200"
                        >
                          <path fill="none" d="M0 0H24V24H0z" />
                          <path d="M17 4a6 6 0 0 1 6 6v4a6 6 0 0 1-6 6H7a6 6 0 0 1-6-6v-4a6 6 0 0 1 6-6h10zm-7 5H8v2H6v2h1.999L8 15h2l-.001-2H12v-2h-2V9zm8 4h-2v2h2v-2zm-2-4h-2v2h2V9z"/>
                          
                        </svg>
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >现在播放</span
                        >
                      </a>
                    </div>
                  </div>
                </article>

                <article>
                  <div
                    class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <figure class="relative">
                      <a href="#loginModal" 
                      data-bs-toggle="modal"
		              data-bs-target="#loginModal"
		              aria-label="login">
                        <img
                          src="img/games/apboard/03.png"
                          alt="item 5"
                          class="w-full rounded-[0.625rem]"
                          loading="lazy"
                        />
                      </a>
                    </figure>
                    <div class="mt-7 flex items-center justify-between">
                      <a href="#">
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >斗地主</span
                        >
                      </a>
                    </div>
                    <div class="mt-2 text-sm">
                      <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">经典棋牌对战</span>
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                      <button
                        class="font-display text-sm font-semibold text-yellow-300"
                        data-bs-toggle="modal"
                        data-bs-target="#buyNowModal"
                      >
                        AP Board
                      </button>
                      <a href="#loginModal" 
	                      data-bs-toggle="modal"
			              data-bs-target="#loginModal"
			              aria-label="login" 
			              class="group flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-yellow-300 dark:fill-jacarta-200"
                        >
                          <path fill="none" d="M0 0H24V24H0z" />
                          <path d="M17 4a6 6 0 0 1 6 6v4a6 6 0 0 1-6 6H7a6 6 0 0 1-6-6v-4a6 6 0 0 1 6-6h10zm-7 5H8v2H6v2h1.999L8 15h2l-.001-2H12v-2h-2V9zm8 4h-2v2h2v-2zm-2-4h-2v2h2V9z"/>
                          
                        </svg>
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >现在播放</span
                        >
                      </a>
                    </div>
                  </div>
                </article>

                <article>
                  <div
                    class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <figure class="relative">
                      <a href="#loginModal" 
                      data-bs-toggle="modal"
		              data-bs-target="#loginModal"
		              aria-label="login">
                        <img
                          src="img/games/apboard/04.png"
                          alt="item 5"
                          class="w-full rounded-[0.625rem]"
                          loading="lazy"
                        />
                      </a>
                    </figure>
                    <div class="mt-7 flex items-center justify-between">
                      <a href="#">
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >斗地主</span
                        >
                      </a>
                    </div>
                    <div class="mt-2 text-sm">
                      <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">经典棋牌对战</span>
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                      <button
                        class="font-display text-sm font-semibold text-yellow-300"
                        data-bs-toggle="modal"
                        data-bs-target="#buyNowModal"
                      >
                        AP Board
                      </button>
                      <a href="#loginModal" 
	                      data-bs-toggle="modal"
			              data-bs-target="#loginModal"
			              aria-label="login" 
			              class="group flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-yellow-300 dark:fill-jacarta-200"
                        >
                          <path fill="none" d="M0 0H24V24H0z" />
                          <path d="M17 4a6 6 0 0 1 6 6v4a6 6 0 0 1-6 6H7a6 6 0 0 1-6-6v-4a6 6 0 0 1 6-6h10zm-7 5H8v2H6v2h1.999L8 15h2l-.001-2H12v-2h-2V9zm8 4h-2v2h2v-2zm-2-4h-2v2h2V9z"/>
                          
                        </svg>
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >现在播放</span
                        >
                      </a>
                    </div>
                  </div>
                </article>

                <article>
                  <div
                    class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <figure class="relative">
                      <a href="#loginModal" 
                      data-bs-toggle="modal"
		              data-bs-target="#loginModal"
		              aria-label="login">
                        <img
                          src="img/games/apboard/05.png"
                          alt="item 5"
                          class="w-full rounded-[0.625rem]"
                          loading="lazy"
                        />
                      </a>
                    </figure>
                    <div class="mt-7 flex items-center justify-between">
                      <a href="#">
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >斗地主</span
                        >
                      </a>
                    </div>
                    <div class="mt-2 text-sm">
                      <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">经典棋牌对战</span>
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                      <button
                        class="font-display text-sm font-semibold text-yellow-300"
                        data-bs-toggle="modal"
                        data-bs-target="#buyNowModal"
                      >
                        AP Board
                      </button>
                      <a href="#loginModal" 
	                      data-bs-toggle="modal"
			              data-bs-target="#loginModal"
			              aria-label="login" 
			              class="group flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-yellow-300 dark:fill-jacarta-200"
                        >
                          <path fill="none" d="M0 0H24V24H0z" />
                          <path d="M17 4a6 6 0 0 1 6 6v4a6 6 0 0 1-6 6H7a6 6 0 0 1-6-6v-4a6 6 0 0 1 6-6h10zm-7 5H8v2H6v2h1.999L8 15h2l-.001-2H12v-2h-2V9zm8 4h-2v2h2v-2zm-2-4h-2v2h2V9z"/>
                          
                        </svg>
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >现在播放</span
                        >
                      </a>
                    </div>
                  </div>
                </article>

                <article>
                  <div
                    class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <figure class="relative">
                      <a href="#loginModal" 
                      data-bs-toggle="modal"
		              data-bs-target="#loginModal"
		              aria-label="login">
                        <img
                          src="img/games/apboard/06.png"
                          alt="item 5"
                          class="w-full rounded-[0.625rem]"
                          loading="lazy"
                        />
                      </a>
                    </figure>
                    <div class="mt-7 flex items-center justify-between">
                      <a href="#">
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >斗地主</span
                        >
                      </a>
                    </div>
                    <div class="mt-2 text-sm">
                      <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">经典棋牌对战</span>
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                      <button
                        class="font-display text-sm font-semibold text-yellow-300"
                        data-bs-toggle="modal"
                        data-bs-target="#buyNowModal"
                      >
                        AP Board
                      </button>
                      <a href="#loginModal" 
	                      data-bs-toggle="modal"
			              data-bs-target="#loginModal"
			              aria-label="login" 
			              class="group flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-yellow-300 dark:fill-jacarta-200"
                        >
                          <path fill="none" d="M0 0H24V24H0z" />
                          <path d="M17 4a6 6 0 0 1 6 6v4a6 6 0 0 1-6 6H7a6 6 0 0 1-6-6v-4a6 6 0 0 1 6-6h10zm-7 5H8v2H6v2h1.999L8 15h2l-.001-2H12v-2h-2V9zm8 4h-2v2h2v-2zm-2-4h-2v2h2V9z"/>
                          
                        </svg>
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >现在播放</span
                        >
                      </a>
                    </div>
                  </div>
                </article>

              </div> <!-- grid ends here -->

             <div>
                <img src="img/Games/apboardside.png" class="object-cover">
              </div>

            </div>

              <!-- end grid -->
            </div>




              <!-- PG CASINO GAMES -->
            <div class="tab-pane fade show" id="pgcasino" role="tabpanel" aria-labelledby="pgcasino-tab">
                
              <!-- Main Grid -->
              <div class="grid grid-cols-4 gap-4 sm:grid-cols-2 md:grid-cols-2 md:gap-8">

              <!-- Grid Games-->
              <div class="grid grid-cols-2 gap-4 sm:grid-cols-2 md:grid-cols-3 md:gap-8">
                <article>
                  <div
                    class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <figure class="relative">
                      <a href="#loginModal" 
                      data-bs-toggle="modal"
		              data-bs-target="#loginModal"
		              aria-label="login">
                        <img
                          src="img/games/pgcasino/01.png"
                          alt="item 5"
                          class="w-full rounded-[0.625rem]"
                          loading="lazy"
                        />
                      </a>
                    </figure>
                    <div class="mt-7 flex items-center justify-between">
                      <a href="#">
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >斗地主</span
                        >
                      </a>
                    </div>
                    <div class="mt-2 text-sm">
                      <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">经典棋牌对战</span>
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                      <button
                        class="font-display text-sm font-semibold text-yellow-300"
                        data-bs-toggle="modal"
                        data-bs-target="#buyNowModal"
                      >
                        PGames
                      </button>
                      <a href="#loginModal" 
	                      data-bs-toggle="modal"
			              data-bs-target="#loginModal"
			              aria-label="login" 
			              class="group flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-yellow-300 dark:fill-jacarta-200"
                        >
                          <path fill="none" d="M0 0H24V24H0z" />
                          <path d="M17 4a6 6 0 0 1 6 6v4a6 6 0 0 1-6 6H7a6 6 0 0 1-6-6v-4a6 6 0 0 1 6-6h10zm-7 5H8v2H6v2h1.999L8 15h2l-.001-2H12v-2h-2V9zm8 4h-2v2h2v-2zm-2-4h-2v2h2V9z"/>
                          
                        </svg>
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >现在播放</span
                        >
                      </a>
                    </div>
                  </div>
                </article>

                <article>
                  <div
                    class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <figure class="relative">
                      <a href="#loginModal" 
                      data-bs-toggle="modal"
		              data-bs-target="#loginModal"
		              aria-label="login">
                        <img
                          src="img/games/pgcasino/02.png"
                          alt="item 5"
                          class="w-full rounded-[0.625rem]"
                          loading="lazy"
                        />
                      </a>
                    </figure>
                    <div class="mt-7 flex items-center justify-between">
                      <a href="#">
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >斗地主</span
                        >
                      </a>
                    </div>
                    <div class="mt-2 text-sm">
                      <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">经典棋牌对战</span>
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                      <button
                        class="font-display text-sm font-semibold text-yellow-300"
                        data-bs-toggle="modal"
                        data-bs-target="#buyNowModal"
                      >
                        PGames
                      </button>
                      <a href="#loginModal" 
	                      data-bs-toggle="modal"
			              data-bs-target="#loginModal"
			              aria-label="login" 
			              class="group flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-yellow-300 dark:fill-jacarta-200"
                        >
                          <path fill="none" d="M0 0H24V24H0z" />
                          <path d="M17 4a6 6 0 0 1 6 6v4a6 6 0 0 1-6 6H7a6 6 0 0 1-6-6v-4a6 6 0 0 1 6-6h10zm-7 5H8v2H6v2h1.999L8 15h2l-.001-2H12v-2h-2V9zm8 4h-2v2h2v-2zm-2-4h-2v2h2V9z"/>
                          
                        </svg>
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >现在播放</span
                        >
                      </a>
                    </div>
                  </div>
                </article>

                <article>
                  <div
                    class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <figure class="relative">
                      <a href="#loginModal" 
                      data-bs-toggle="modal"
		              data-bs-target="#loginModal"
		              aria-label="login">
                        <img
                          src="img/games/pgcasino/03.png"
                          alt="item 5"
                          class="w-full rounded-[0.625rem]"
                          loading="lazy"
                        />
                      </a>
                    </figure>
                    <div class="mt-7 flex items-center justify-between">
                      <a href="#">
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >斗地主</span
                        >
                      </a>
                    </div>
                    <div class="mt-2 text-sm">
                      <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">经典棋牌对战</span>
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                      <button
                        class="font-display text-sm font-semibold text-yellow-300"
                        data-bs-toggle="modal"
                        data-bs-target="#buyNowModal"
                      >
                        PGames
                      </button>
                      <a href="#loginModal" 
	                      data-bs-toggle="modal"
			              data-bs-target="#loginModal"
			              aria-label="login" 
			              class="group flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-yellow-300 dark:fill-jacarta-200"
                        >
                          <path fill="none" d="M0 0H24V24H0z" />
                          <path d="M17 4a6 6 0 0 1 6 6v4a6 6 0 0 1-6 6H7a6 6 0 0 1-6-6v-4a6 6 0 0 1 6-6h10zm-7 5H8v2H6v2h1.999L8 15h2l-.001-2H12v-2h-2V9zm8 4h-2v2h2v-2zm-2-4h-2v2h2V9z"/>
                          
                        </svg>
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >现在播放</span
                        >
                      </a>
                    </div>
                  </div>
                </article>

                <article>
                  <div
                    class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <figure class="relative">
                      <a href="#loginModal" 
                      data-bs-toggle="modal"
		              data-bs-target="#loginModal"
		              aria-label="login">
                        <img
                          src="img/games/pgcasino/04.png"
                          alt="item 5"
                          class="w-full rounded-[0.625rem]"
                          loading="lazy"
                        />
                      </a>
                    </figure>
                    <div class="mt-7 flex items-center justify-between">
                      <a href="#">
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >斗地主</span
                        >
                      </a>
                    </div>
                    <div class="mt-2 text-sm">
                      <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">经典棋牌对战</span>
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                      <button
                        class="font-display text-sm font-semibold text-yellow-300"
                        data-bs-toggle="modal"
                        data-bs-target="#buyNowModal"
                      >
                        PGames
                      </button>
                      <a href="#loginModal" 
	                      data-bs-toggle="modal"
			              data-bs-target="#loginModal"
			              aria-label="login" 
			              class="group flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-yellow-300 dark:fill-jacarta-200"
                        >
                          <path fill="none" d="M0 0H24V24H0z" />
                          <path d="M17 4a6 6 0 0 1 6 6v4a6 6 0 0 1-6 6H7a6 6 0 0 1-6-6v-4a6 6 0 0 1 6-6h10zm-7 5H8v2H6v2h1.999L8 15h2l-.001-2H12v-2h-2V9zm8 4h-2v2h2v-2zm-2-4h-2v2h2V9z"/>
                          
                        </svg>
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >现在播放</span
                        >
                      </a>
                    </div>
                  </div>
                </article>

                <article>
                  <div
                    class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <figure class="relative">
                      <a href="#loginModal" 
                      data-bs-toggle="modal"
		              data-bs-target="#loginModal"
		              aria-label="login">
                        <img
                          src="img/games/pgcasino/05.png"
                          alt="item 5"
                          class="w-full rounded-[0.625rem]"
                          loading="lazy"
                        />
                      </a>
                    </figure>
                    <div class="mt-7 flex items-center justify-between">
                      <a href="#">
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >斗地主</span
                        >
                      </a>
                    </div>
                    <div class="mt-2 text-sm">
                      <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">经典棋牌对战</span>
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                      <button
                        class="font-display text-sm font-semibold text-yellow-300"
                        data-bs-toggle="modal"
                        data-bs-target="#buyNowModal"
                      >
                        PGames
                      </button>
                      <a href="#loginModal" 
	                      data-bs-toggle="modal"
			              data-bs-target="#loginModal"
			              aria-label="login" 
			              class="group flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-yellow-300 dark:fill-jacarta-200"
                        >
                          <path fill="none" d="M0 0H24V24H0z" />
                          <path d="M17 4a6 6 0 0 1 6 6v4a6 6 0 0 1-6 6H7a6 6 0 0 1-6-6v-4a6 6 0 0 1 6-6h10zm-7 5H8v2H6v2h1.999L8 15h2l-.001-2H12v-2h-2V9zm8 4h-2v2h2v-2zm-2-4h-2v2h2V9z"/>
                          
                        </svg>
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >现在播放</span
                        >
                      </a>
                    </div>
                  </div>
                </article>

                <article>
                  <div
                    class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <figure class="relative">
                      <a href="#loginModal" 
                      data-bs-toggle="modal"
		              data-bs-target="#loginModal"
		              aria-label="login">
                        <img
                          src="img/games/pgcasino/06.png"
                          alt="item 5"
                          class="w-full rounded-[0.625rem]"
                          loading="lazy"
                        />
                      </a>
                    </figure>
                    <div class="mt-7 flex items-center justify-between">
                      <a href="#">
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >斗地主</span
                        >
                      </a>
                    </div>
                    <div class="mt-2 text-sm">
                      <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">经典棋牌对战</span>
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                      <button
                        class="font-display text-sm font-semibold text-yellow-300"
                        data-bs-toggle="modal"
                        data-bs-target="#buyNowModal"
                      >
                        PGames
                      </button>
                      <a href="#loginModal" 
	                      data-bs-toggle="modal"
			              data-bs-target="#loginModal"
			              aria-label="login" 
			              class="group flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-yellow-300 dark:fill-jacarta-200"
                        >
                          <path fill="none" d="M0 0H24V24H0z" />
                          <path d="M17 4a6 6 0 0 1 6 6v4a6 6 0 0 1-6 6H7a6 6 0 0 1-6-6v-4a6 6 0 0 1 6-6h10zm-7 5H8v2H6v2h1.999L8 15h2l-.001-2H12v-2h-2V9zm8 4h-2v2h2v-2zm-2-4h-2v2h2V9z"/>
                          
                        </svg>
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >现在播放</span
                        >
                      </a>
                    </div>
                  </div>
                </article>

              </div> <!-- grid ends here -->

              <div>
                <img src="img/Games/pgcasinoside.png" class="object-cover">
              </div>

            </div>

              <!-- end grid -->
            </div>






            <!-- CQ9 Casino -->

              <div class="tab-pane fade show" id="cq9casino" role="tabpanel" aria-labelledby="cq9casino-tab">
                
              <!-- Main Grid -->
              <div class="grid grid-cols-4 gap-4 sm:grid-cols-2 md:grid-cols-2 md:gap-8">

              <!-- Grid Games-->
              <div class="grid grid-cols-2 gap-4 sm:grid-cols-2 md:grid-cols-3 md:gap-8">
                <article>
                  <div
                    class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <figure class="relative">
                      <a href="#loginModal" 
                      data-bs-toggle="modal"
		              data-bs-target="#loginModal"
		              aria-label="login">
                        <img
                          src="img/games/cq9casino/01.png"
                          alt="item 5"
                          class="w-full rounded-[0.625rem]"
                          loading="lazy"
                        />
                      </a>
                    </figure>
                    <div class="mt-7 flex items-center justify-between">
                      <a href="#">
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >斗地主</span
                        >
                      </a>
                    </div>
                    <div class="mt-2 text-sm">
                      <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">经典棋牌对战</span>
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                      <button
                        class="font-display text-sm font-semibold text-yellow-300"
                        data-bs-toggle="modal"
                        data-bs-target="#buyNowModal"
                      >
                        CQ9
                      </button>
                      <a href="#loginModal" 
	                      data-bs-toggle="modal"
			              data-bs-target="#loginModal"
			              aria-label="login" 
			              class="group flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-yellow-300 dark:fill-jacarta-200"
                        >
                          <path fill="none" d="M0 0H24V24H0z" />
                          <path d="M17 4a6 6 0 0 1 6 6v4a6 6 0 0 1-6 6H7a6 6 0 0 1-6-6v-4a6 6 0 0 1 6-6h10zm-7 5H8v2H6v2h1.999L8 15h2l-.001-2H12v-2h-2V9zm8 4h-2v2h2v-2zm-2-4h-2v2h2V9z"/>
                          
                        </svg>
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >现在播放</span
                        >
                      </a>
                    </div>
                  </div>
                </article>

                <article>
                  <div
                    class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <figure class="relative">
                      <a href="#loginModal" 
                      data-bs-toggle="modal"
		              data-bs-target="#loginModal"
		              aria-label="login">
                        <img
                          src="img/games/cq9casino/02.png"
                          alt="item 5"
                          class="w-full rounded-[0.625rem]"
                          loading="lazy"
                        />
                      </a>
                    </figure>
                    <div class="mt-7 flex items-center justify-between">
                      <a href="#">
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >斗地主</span
                        >
                      </a>
                    </div>
                    <div class="mt-2 text-sm">
                      <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">经典棋牌对战</span>
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                      <button
                        class="font-display text-sm font-semibold text-yellow-300"
                        data-bs-toggle="modal"
                        data-bs-target="#buyNowModal"
                      >
                        CQ9
                      </button>
                      <a href="#loginModal" 
	                      data-bs-toggle="modal"
			              data-bs-target="#loginModal"
			              aria-label="login" 
			              class="group flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-yellow-300 dark:fill-jacarta-200"
                        >
                          <path fill="none" d="M0 0H24V24H0z" />
                          <path d="M17 4a6 6 0 0 1 6 6v4a6 6 0 0 1-6 6H7a6 6 0 0 1-6-6v-4a6 6 0 0 1 6-6h10zm-7 5H8v2H6v2h1.999L8 15h2l-.001-2H12v-2h-2V9zm8 4h-2v2h2v-2zm-2-4h-2v2h2V9z"/>
                          
                        </svg>
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >现在播放</span
                        >
                      </a>
                    </div>
                  </div>
                </article>

                <article>
                  <div
                    class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <figure class="relative">
                      <a href="#loginModal" 
                      data-bs-toggle="modal"
		              data-bs-target="#loginModal"
		              aria-label="login">
                        <img
                          src="img/games/cq9casino/03.png"
                          alt="item 5"
                          class="w-full rounded-[0.625rem]"
                          loading="lazy"
                        />
                      </a>
                    </figure>
                    <div class="mt-7 flex items-center justify-between">
                      <a href="#">
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >斗地主</span
                        >
                      </a>
                    </div>
                    <div class="mt-2 text-sm">
                      <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">经典棋牌对战</span>
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                      <button
                        class="font-display text-sm font-semibold text-yellow-300"
                        data-bs-toggle="modal"
                        data-bs-target="#buyNowModal"
                      >
                        CQ9
                      </button>
                      <a href="#loginModal" 
	                      data-bs-toggle="modal"
			              data-bs-target="#loginModal"
			              aria-label="login" 
			              class="group flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-yellow-300 dark:fill-jacarta-200"
                        >
                          <path fill="none" d="M0 0H24V24H0z" />
                          <path d="M17 4a6 6 0 0 1 6 6v4a6 6 0 0 1-6 6H7a6 6 0 0 1-6-6v-4a6 6 0 0 1 6-6h10zm-7 5H8v2H6v2h1.999L8 15h2l-.001-2H12v-2h-2V9zm8 4h-2v2h2v-2zm-2-4h-2v2h2V9z"/>
                          
                        </svg>
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >现在播放</span
                        >
                      </a>
                    </div>
                  </div>
                </article>

                <article>
                  <div
                    class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <figure class="relative">
                      <a href="#loginModal" 
                      data-bs-toggle="modal"
		              data-bs-target="#loginModal"
		              aria-label="login">
                        <img
                          src="img/games/cq9casino/04.png"
                          alt="item 5"
                          class="w-full rounded-[0.625rem]"
                          loading="lazy"
                        />
                      </a>
                    </figure>
                    <div class="mt-7 flex items-center justify-between">
                      <a href="#">
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >斗地主</span
                        >
                      </a>
                    </div>
                    <div class="mt-2 text-sm">
                      <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">经典棋牌对战</span>
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                      <button
                        class="font-display text-sm font-semibold text-yellow-300"
                        data-bs-toggle="modal"
                        data-bs-target="#buyNowModal"
                      >
                        CQ9
                      </button>
                      <a href="#loginModal" 
	                      data-bs-toggle="modal"
			              data-bs-target="#loginModal"
			              aria-label="login" 
			              class="group flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-yellow-300 dark:fill-jacarta-200"
                        >
                          <path fill="none" d="M0 0H24V24H0z" />
                          <path d="M17 4a6 6 0 0 1 6 6v4a6 6 0 0 1-6 6H7a6 6 0 0 1-6-6v-4a6 6 0 0 1 6-6h10zm-7 5H8v2H6v2h1.999L8 15h2l-.001-2H12v-2h-2V9zm8 4h-2v2h2v-2zm-2-4h-2v2h2V9z"/>
                          
                        </svg>
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >现在播放</span
                        >
                      </a>
                    </div>
                  </div>
                </article>

                <article>
                  <div
                    class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <figure class="relative">
                      <a href="#loginModal" 
                      data-bs-toggle="modal"
		              data-bs-target="#loginModal"
		              aria-label="login">
                        <img
                          src="img/games/cq9casino/05.png"
                          alt="item 5"
                          class="w-full rounded-[0.625rem]"
                          loading="lazy"
                        />
                      </a>
                    </figure>
                    <div class="mt-7 flex items-center justify-between">
                      <a href="#">
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >斗地主</span
                        >
                      </a>
                    </div>
                    <div class="mt-2 text-sm">
                      <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">经典棋牌对战</span>
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                      <button
                        class="font-display text-sm font-semibold text-yellow-300"
                        data-bs-toggle="modal"
                        data-bs-target="#buyNowModal"
                      >
                        CQ9
                      </button>
                      <a href="#loginModal" 
	                      data-bs-toggle="modal"
			              data-bs-target="#loginModal"
			              aria-label="login" 
			              class="group flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-yellow-300 dark:fill-jacarta-200"
                        >
                          <path fill="none" d="M0 0H24V24H0z" />
                          <path d="M17 4a6 6 0 0 1 6 6v4a6 6 0 0 1-6 6H7a6 6 0 0 1-6-6v-4a6 6 0 0 1 6-6h10zm-7 5H8v2H6v2h1.999L8 15h2l-.001-2H12v-2h-2V9zm8 4h-2v2h2v-2zm-2-4h-2v2h2V9z"/>
                          
                        </svg>
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >现在播放</span
                        >
                      </a>
                    </div>
                  </div>
                </article>

                <article>
                  <div
                    class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <figure class="relative">
                      <a href="#loginModal" 
                      data-bs-toggle="modal"
		              data-bs-target="#loginModal"
		              aria-label="login">
                        <img
                          src="img/games/cq9casino/06.png"
                          alt="item 5"
                          class="w-full rounded-[0.625rem]"
                          loading="lazy"
                        />
                      </a>
                    </figure>
                    <div class="mt-7 flex items-center justify-between">
                      <a href="#">
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >斗地主</span
                        >
                      </a>
                    </div>
                    <div class="mt-2 text-sm">
                      <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">经典棋牌对战</span>
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                      <button
                        class="font-display text-sm font-semibold text-yellow-300"
                        data-bs-toggle="modal"
                        data-bs-target="#buyNowModal"
                      >
                        CQ9
                      </button>
                      <a href="#loginModal" 
	                      data-bs-toggle="modal"
			              data-bs-target="#loginModal"
			              aria-label="login" 
			              class="group flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-yellow-300 dark:fill-jacarta-200"
                        >
                          <path fill="none" d="M0 0H24V24H0z" />
                          <path d="M17 4a6 6 0 0 1 6 6v4a6 6 0 0 1-6 6H7a6 6 0 0 1-6-6v-4a6 6 0 0 1 6-6h10zm-7 5H8v2H6v2h1.999L8 15h2l-.001-2H12v-2h-2V9zm8 4h-2v2h2v-2zm-2-4h-2v2h2V9z"/>
                          
                        </svg>
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >现在播放</span
                        >
                      </a>
                    </div>
                  </div>
                </article>

              </div> <!-- grid ends here -->

              <div>
                <img src="img/Games/cq9side.png" class="object-cover">
              </div>

            </div>

              <!-- end grid -->
            </div>




            <!-- AG Casino -->

             <div class="tab-pane fade show" id="agcasino" role="tabpanel" aria-labelledby="agcasino-tab">
                
              <!-- Main Grid -->
              <div class="grid grid-cols-4 gap-4 sm:grid-cols-2 md:grid-cols-2 md:gap-8">

              <!-- Grid Games-->
              <div class="grid grid-cols-2 gap-4 sm:grid-cols-2 md:grid-cols-3 md:gap-8">
                <article>
                  <div
                    class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <figure class="relative">
                      <a href="#loginModal" 
                      data-bs-toggle="modal"
		              data-bs-target="#loginModal"
		              aria-label="login">
                        <img
                          src="img/games/agcasino/01.png"
                          alt="item 5"
                          class="w-full rounded-[0.625rem]"
                          loading="lazy"
                        />
                      </a>
                    </figure>
                    <div class="mt-7 flex items-center justify-between">
                      <a href="#">
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >斗地主</span
                        >
                      </a>
                    </div>
                    <div class="mt-2 text-sm">
                      <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">经典棋牌对战</span>
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                      <button
                        class="font-display text-sm font-semibold text-yellow-300"
                        data-bs-toggle="modal"
                        data-bs-target="#buyNowModal"
                      >
                        AGames
                      </button>
                      <a href="#loginModal" 
	                      data-bs-toggle="modal"
			              data-bs-target="#loginModal"
			              aria-label="login" 
			              class="group flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-yellow-300 dark:fill-jacarta-200"
                        >
                          <path fill="none" d="M0 0H24V24H0z" />
                          <path d="M17 4a6 6 0 0 1 6 6v4a6 6 0 0 1-6 6H7a6 6 0 0 1-6-6v-4a6 6 0 0 1 6-6h10zm-7 5H8v2H6v2h1.999L8 15h2l-.001-2H12v-2h-2V9zm8 4h-2v2h2v-2zm-2-4h-2v2h2V9z"/>
                          
                        </svg>
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >现在播放</span
                        >
                      </a>
                    </div>
                  </div>
                </article>

                <article>
                  <div
                    class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <figure class="relative">
                      <a href="#loginModal" 
                      data-bs-toggle="modal"
		              data-bs-target="#loginModal"
		              aria-label="login">
                        <img
                          src="img/games/agcasino/02.png"
                          alt="item 5"
                          class="w-full rounded-[0.625rem]"
                          loading="lazy"
                        />
                      </a>
                    </figure>
                    <div class="mt-7 flex items-center justify-between">
                      <a href="#">
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >斗地主</span
                        >
                      </a>
                    </div>
                    <div class="mt-2 text-sm">
                      <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">经典棋牌对战</span>
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                      <button
                        class="font-display text-sm font-semibold text-yellow-300"
                        data-bs-toggle="modal"
                        data-bs-target="#buyNowModal"
                      >
                        AGames
                      </button>
                      <a href="#loginModal" 
	                      data-bs-toggle="modal"
			              data-bs-target="#loginModal"
			              aria-label="login" 
			              class="group flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-yellow-300 dark:fill-jacarta-200"
                        >
                          <path fill="none" d="M0 0H24V24H0z" />
                          <path d="M17 4a6 6 0 0 1 6 6v4a6 6 0 0 1-6 6H7a6 6 0 0 1-6-6v-4a6 6 0 0 1 6-6h10zm-7 5H8v2H6v2h1.999L8 15h2l-.001-2H12v-2h-2V9zm8 4h-2v2h2v-2zm-2-4h-2v2h2V9z"/>
                          
                        </svg>
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >现在播放</span
                        >
                      </a>
                    </div>
                  </div>
                </article>

                <article>
                  <div
                    class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <figure class="relative">
                      <a href="#loginModal" 
                      data-bs-toggle="modal"
		              data-bs-target="#loginModal"
		              aria-label="login">
                        <img
                          src="img/games/agcasino/03.png"
                          alt="item 5"
                          class="w-full rounded-[0.625rem]"
                          loading="lazy"
                        />
                      </a>
                    </figure>
                    <div class="mt-7 flex items-center justify-between">
                      <a href="#">
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >斗地主</span
                        >
                      </a>
                    </div>
                    <div class="mt-2 text-sm">
                      <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">经典棋牌对战</span>
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                      <button
                        class="font-display text-sm font-semibold text-yellow-300"
                        data-bs-toggle="modal"
                        data-bs-target="#buyNowModal"
                      >
                        AGames
                      </button>
                      <a href="#loginModal" 
	                      data-bs-toggle="modal"
			              data-bs-target="#loginModal"
			              aria-label="login" 
			              class="group flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-yellow-300 dark:fill-jacarta-200"
                        >
                          <path fill="none" d="M0 0H24V24H0z" />
                          <path d="M17 4a6 6 0 0 1 6 6v4a6 6 0 0 1-6 6H7a6 6 0 0 1-6-6v-4a6 6 0 0 1 6-6h10zm-7 5H8v2H6v2h1.999L8 15h2l-.001-2H12v-2h-2V9zm8 4h-2v2h2v-2zm-2-4h-2v2h2V9z"/>
                          
                        </svg>
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >现在播放</span
                        >
                      </a>
                    </div>
                  </div>
                </article>

                <article>
                  <div
                    class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <figure class="relative">
                      <a href="#loginModal" 
                      data-bs-toggle="modal"
		              data-bs-target="#loginModal"
		              aria-label="login">
                        <img
                          src="img/games/agcasino/04.png"
                          alt="item 5"
                          class="w-full rounded-[0.625rem]"
                          loading="lazy"
                        />
                      </a>
                    </figure>
                    <div class="mt-7 flex items-center justify-between">
                      <a href="#">
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >斗地主</span
                        >
                      </a>
                    </div>
                    <div class="mt-2 text-sm">
                      <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">经典棋牌对战</span>
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                      <button
                        class="font-display text-sm font-semibold text-yellow-300"
                        data-bs-toggle="modal"
                        data-bs-target="#buyNowModal"
                      >
                        AGames
                      </button>
                      <a href="#loginModal" 
	                      data-bs-toggle="modal"
			              data-bs-target="#loginModal"
			              aria-label="login" 
			              class="group flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-yellow-300 dark:fill-jacarta-200"
                        >
                          <path fill="none" d="M0 0H24V24H0z" />
                          <path d="M17 4a6 6 0 0 1 6 6v4a6 6 0 0 1-6 6H7a6 6 0 0 1-6-6v-4a6 6 0 0 1 6-6h10zm-7 5H8v2H6v2h1.999L8 15h2l-.001-2H12v-2h-2V9zm8 4h-2v2h2v-2zm-2-4h-2v2h2V9z"/>
                          
                        </svg>
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >现在播放</span
                        >
                      </a>
                    </div>
                  </div>
                </article>

                <article>
                  <div
                    class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <figure class="relative">
                      <a href="#loginModal" 
                      data-bs-toggle="modal"
		              data-bs-target="#loginModal"
		              aria-label="login">
                        <img
                          src="img/games/agcasino/05.png"
                          alt="item 5"
                          class="w-full rounded-[0.625rem]"
                          loading="lazy"
                        />
                      </a>
                    </figure>
                    <div class="mt-7 flex items-center justify-between">
                      <a href="#">
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >斗地主</span
                        >
                      </a>
                    </div>
                    <div class="mt-2 text-sm">
                      <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">经典棋牌对战</span>
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                      <button
                        class="font-display text-sm font-semibold text-yellow-300"
                        data-bs-toggle="modal"
                        data-bs-target="#buyNowModal"
                      >
                        AGames
                      </button>
                      <a href="#loginModal" 
	                      data-bs-toggle="modal"
			              data-bs-target="#loginModal"
			              aria-label="login" 
			              class="group flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-yellow-300 dark:fill-jacarta-200"
                        >
                          <path fill="none" d="M0 0H24V24H0z" />
                          <path d="M17 4a6 6 0 0 1 6 6v4a6 6 0 0 1-6 6H7a6 6 0 0 1-6-6v-4a6 6 0 0 1 6-6h10zm-7 5H8v2H6v2h1.999L8 15h2l-.001-2H12v-2h-2V9zm8 4h-2v2h2v-2zm-2-4h-2v2h2V9z"/>
                          
                        </svg>
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >现在播放</span
                        >
                      </a>
                    </div>
                  </div>
                </article>

                <article>
                  <div
                    class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700 drop-shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <figure class="relative">
                      <a href="#loginModal" 
                      data-bs-toggle="modal"
		              data-bs-target="#loginModal"
		              aria-label="login">
                        <img
                          src="img/games/agcasino/06.png"
                          alt="item 5"
                          class="w-full rounded-[0.625rem]"
                          loading="lazy"
                        />
                      </a>
                    </figure>
                    <div class="mt-7 flex items-center justify-between">
                      <a href="#">
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >斗地主</span
                        >
                      </a>
                    </div>
                    <div class="mt-2 text-sm">
                      <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">经典棋牌对战</span>
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                      <button
                        class="font-display text-sm font-semibold text-yellow-300"
                        data-bs-toggle="modal"
                        data-bs-target="#buyNowModal"
                      >
                        AGames
                      </button>
                      <a href="#loginModal" 
	                      data-bs-toggle="modal"
			              data-bs-target="#loginModal"
			              aria-label="login" 
			              class="group flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="24"
                          height="24"
                          class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-yellow-300 dark:fill-jacarta-200"
                        >
                          <path fill="none" d="M0 0H24V24H0z" />
                          <path d="M17 4a6 6 0 0 1 6 6v4a6 6 0 0 1-6 6H7a6 6 0 0 1-6-6v-4a6 6 0 0 1 6-6h10zm-7 5H8v2H6v2h1.999L8 15h2l-.001-2H12v-2h-2V9zm8 4h-2v2h2v-2zm-2-4h-2v2h2V9z"/>
                          
                        </svg>
                        <span class="font-display text-sm font-semibold group-hover:text-yellow-300 dark:text-jacarta-200"
                          >现在播放</span
                        >
                      </a>
                    </div>
                  </div>
                </article>

              </div> <!-- grid ends here -->

              <div>
                <img src="img/Games/agcasinoside.png" class="object-cover">
              </div>

            </div>

              <!-- end grid -->
            </div>




        </div>
      </section>
      <!-- end collection -->
      	


			

	<script>
	  function animatedCounter(targer, time = 4000, start = 0) {
	    return {
	      current: 102112,
	      target: targer,
	      time: time,
	      start: start,
	      updatecounter: function() {
	        start = this.start;
	        const increment = (this.target - start) / this.time;
	        const handle = setInterval(() => {
	          if (this.current < this.target)
	            this.current += increment
	          else {
	            clearInterval(handle);
	            this.current = this.target
	          }
	        }, 1);
	      }
	    };
	  }
	</script>










    </main>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
      <div class="modal-dialog max-w-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="loginModalLabel">Login/Register</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                width="24"
                height="24"
                class="h-6 w-6 fill-jacarta-700 dark:fill-white"
              >
                <path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-11.414L9.172 7.757 7.757 9.172 10.586 12l-2.829 2.828 1.415 1.415L12 13.414l2.828 2.829 1.415-1.415L13.414 12l2.829-2.828-1.415-1.415L12 10.586z"/>
              </svg>
            </button>
          </div>

          <!-- Body -->
          <div class="modal-body p-6 text-center">
         
           
            <div class="w-full max-w-[25.625rem] text-center">
              <h1 class="mb-6 font-display text-4xl text-jacarta-700 dark:text-white">Quick Login</h1>
              

         
              <ul
                class="nav nav-tabs scrollbar-custom mb-12 flex items-center justify-start overflow-x-auto overflow-y-hidden border-b border-jacarta-100 pb-px dark:border-jacarta-600 md:justify-center"
                role="tablist"
              >
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link active relative flex items-center whitespace-nowrap py-3 px-6 text-jacarta-400 hover:text-jacarta-700 dark:hover:text-white"
                    id="ethereum-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#ethereum"
                    type="button"
                    role="tab"
                    aria-controls="ethereum"
                    aria-selected="true"
                  >
                    
                    <span class="font-display text-base font-medium">Log In</span>
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link relative flex items-center whitespace-nowrap py-3 px-6 text-jacarta-400 hover:text-jacarta-700 dark:hover:text-white"
                    id="torus-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#torus"
                    type="button"
                    role="tab"
                    aria-controls="torus"
                    aria-selected="false"
                  >
                    
                    <span class="font-display text-base font-medium">Sign Up</span>
                  </button>
                </li>
                
              </ul>

          
              <div class="tab-content">
                <div class="tab-pane fade show active" id="ethereum" role="tabpanel" aria-labelledby="ethereum-tab">

                  <form id="contact-form" method="post">
                  <div class="mb-4">
                  <input
                      name="name"
                      class="contact-form-input w-full rounded-lg border-jacarta-100 py-3 hover:ring-2 hover:ring-accent/10 focus:ring-accent dark:border-jacarta-600 dark:bg-jacarta-700 dark:text-white dark:placeholder:text-jacarta-300"
                      id="name"
                      type="text"
                      placeholder="Username"
                      required
                    />
                </div>
                <div class="mb-4">
                 
                  <input
                      name="name"
                      class="contact-form-input w-full rounded-lg border-jacarta-100 py-3 hover:ring-2 hover:ring-accent/10 focus:ring-accent dark:border-jacarta-600 dark:bg-jacarta-700 dark:text-white dark:placeholder:text-jacarta-300"
                      id="name"
                      type="password"
                      placeholder="Password"
                      required
                    />
                </div>
              </form>
                  
                  <button
                    class="mb-4 flex w-full items-center justify-center rounded-full border-2 border-jacarta-100 bg-white py-4 px-8 text-center font-semibold text-jacarta-700 transition-all hover:border-transparent hover:bg-accent hover:text-white dark:border-jacarta-600 dark:bg-jacarta-700 dark:text-white dark:hover:border-transparent dark:hover:bg-accent"
                  >
                    
                    <span>Log In</span>
                  </button>

                  
                </div>
                <!-- end Log In -->

                <!-- Sign Up -->
                <div class="tab-pane fade" id="torus" role="tabpanel" aria-labelledby="torus-tab">
                 

                 <form id="contact-form" method="post">
                  <div class="mb-4">
                  <input
                      name="name"
                      class="contact-form-input w-full rounded-lg border-jacarta-100 py-3 hover:ring-2 hover:ring-accent/10 focus:ring-accent dark:border-jacarta-600 dark:bg-jacarta-700 dark:text-white dark:placeholder:text-jacarta-300"
                      id="name"
                      type="text"
                      placeholder="Full Name"
                      required
                    />
                </div>
                <div class="mb-4">
                 
                  <input
                      name="name"
                      class="contact-form-input w-full rounded-lg border-jacarta-100 py-3 hover:ring-2 hover:ring-accent/10 focus:ring-accent dark:border-jacarta-600 dark:bg-jacarta-700 dark:text-white dark:placeholder:text-jacarta-300"
                      id="name"
                      type="text"
                      placeholder="Username"
                      required
                    />
                </div>
                <div class="mb-4">
                  <input
                      name="name"
                      class="contact-form-input w-full rounded-lg border-jacarta-100 py-3 hover:ring-2 hover:ring-accent/10 focus:ring-accent dark:border-jacarta-600 dark:bg-jacarta-700 dark:text-white dark:placeholder:text-jacarta-300"
                      id="name"
                      type="text"
                      placeholder="Email"
                      required
                    />
                </div>
                <div class="mb-4">
                  <input
                      name="name"
                      class="contact-form-input w-full rounded-lg border-jacarta-100 py-3 hover:ring-2 hover:ring-accent/10 focus:ring-accent dark:border-jacarta-600 dark:bg-jacarta-700 dark:text-white dark:placeholder:text-jacarta-300"
                      id="name"
                      type="text"

                      placeholder="Retype Email"
                      required
                    />
                </div>
                <div class="mb-4">
                  
                  <input
                      name="name"
                      class="contact-form-input w-full rounded-lg border-jacarta-100 py-3 hover:ring-2 hover:ring-accent/10 focus:ring-accent dark:border-jacarta-600 dark:bg-jacarta-700 dark:text-white dark:placeholder:text-jacarta-300"
                      id="name"
                      type="password"
                      placeholder="Password"
                      required
                    />
                </div>
                <div class="mb-4">
                  <input
                      name="name"
                      class="contact-form-input w-full rounded-lg border-jacarta-100 py-3 hover:ring-2 hover:ring-accent/10 focus:ring-accent dark:border-jacarta-600 dark:bg-jacarta-700 dark:text-white dark:placeholder:text-jacarta-300"
                      id="name"
                      type="password"
                      required
                      placeholder="Retype Password"
                    />
                </div>
                <div class="mb-6 flex items-center space-x-2">
                  <input
                    type="checkbox"
                    id="contact-form-consent-input"
                    name="agree-to-terms"
                    class="h-5 w-5 self-start rounded border-jacarta-200 text-accent checked:bg-accent focus:ring-accent/20 focus:ring-offset-0 dark:border-jacarta-500 dark:bg-jacarta-600"
                  />
                  <label for="contact-form-consent-input" class="text-sm dark:text-jacarta-200"
                    >I agree to the <a href="tos.html" class="text-accent">Terms of Service</a></label
                  >
                </div>
                <button
                    class="mb-4 flex w-full items-center justify-center rounded-full border-2 border-jacarta-100 bg-white py-4 px-8 text-center font-semibold text-jacarta-700 transition-all hover:border-transparent hover:bg-accent hover:text-white dark:border-jacarta-600 dark:bg-jacarta-700 dark:text-white dark:hover:border-transparent dark:hover:bg-accent"
                  >
                    
                    <span>Register</span>
                  </button>
              </form>
                  
               
                </div>

              </div>
            </div>
          </div>
          <!-- end body -->

          
        </div>
      </div>
    </div>

    <!-- Speed Icon -->

    	<div data-dial-init class="fixed right-6 bottom-6 group">
    		<div id="speed-dial-menu-default" class="flex flex-col items-center hidden mb-4 space-y-2">
    			
    		</div>
    	</div>

	    <div data-dial-init class="fixed right-6 bottom-6 group">

		    <button type="button" class="btn-close transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300" data-bs-dismiss="modal" aria-label="Close">
	              <svg
	                xmlns="http://www.w3.org/2000/svg"
	                viewBox="0 0 24 24"
	                width="24"
	                height="24"
	                class="h-12 w-6 fill-jacarta-700 dark:fill-yellow-200 animate-bounce drop-shadow-lg"
	              >
	                <path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-11.414L9.172 7.757 7.757 9.172 10.586 12l-2.829 2.828 1.415 1.415L12 13.414l2.828 2.829 1.415-1.415L13.414 12l2.829-2.828-1.415-1.415L12 10.586z"/>
	              </svg>
	            </button>

		    <button type="button" data-dial-toggle="speed-dial-menu-default" aria-controls="speed-dial-menu-default" aria-expanded="false" class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300 flex items-center justify-center ">
		       <a href="#" data-bs-toggle="modal"
	              data-bs-target="#loginModal"
	              aria-label="wallet">
		       	<img src="img/angpao.png" class="animate-bounce drop-shadow-lg">
		       </a>
		    </button>
		</div>

    

    <!-- Footer -->
    <footer class="page-footer pt-7">
     <div class="">
    	<div class="">
    		<img src="img/footer_pay.png" class="mx-auto">
    	</div>
    	<div class="bg-zinc-100 text-center py-5">
      		<ul class="inline-flex flex flex-col lg:flex-row">
      			<li class="text-zinc-800 hover:text-red-500 px-12 py-2 flex">
      				<img src="img/footer_mail.png" class="mx-auto">
      				<span class="pl-2 pt-2">官方邮箱</span>
      			</li>
      			<li class="text-zinc-800 hover:text-red-500 px-12 py-2 flex">
      				<img src="img/footer_wechat.png" class="mx-auto">
      				<span class="pl-2 pt-2">微信客服：<br>7x24小时</span>
      			</li>
      			<li class="text-zinc-800 hover:text-red-500 px-12 py-2 flex">
      				<img src="img/footer_qq.png" class="mx-auto">
      				<span class="pl-2 pt-2">QQ客服：<br>7x24小时</span>
      			</li>
      			<li class="text-zinc-800 hover:text-red-500 px-12 py-2 flex">
      				<img src="img/footer_chat.png" class="mx-auto">
      				<span class="pl-2 pt-2">7x24小时在线客服<br>立即咨询</span>
      			</li>
      			
      		</ul>

      	</div>
    </div>


      <div class=" bg-jacarta-900 dark:bg-jacarta-900">
      	<div class="pt-7">
      		<img src="img/partners.png" class="mx-auto">
      	</div>
        
      	<div class="text-center pt-2">
      		<ul class="inline-flex flex flex-col lg:flex-row">
      			<li class="text-white hover:text-yellow-200 px-5 py-2">AFFILITATION</li>
      			<li class="text-white hover:text-yellow-200 px-5 py-2">HOW TO DEPOSIT</li>
      			<li class="text-white hover:text-yellow-200 px-5 py-2">HOW TO WITHDRAW</li>
      			<li class="text-white hover:text-yellow-200 px-5 py-2">MOBILE BET</li>
      			<li class="text-white hover:text-yellow-200 px-5 py-2">ABOUT US</li>
      			<li class="text-white hover:text-yellow-200 px-5 py-2">CONTACT US</li>
      			<li class="text-white hover:text-yellow-200 px-5 py-2">CLIENTS</li>
      		</ul>

      	</div>
      	<div class="text-center pb-7">
      		<span class="text-white text-sm">Copyright 2023 © Christian Fresno</span>
      	</div>
      	

      </div>
    </footer>

    <!-- JS Scripts -->
        <script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>
        <script src="../path/to/flowbite/dist/flowbite.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <script src="./js/app.bundle.js"></script>
    <script src="./js/charts.bundle.js"></script>

  </body>
</html>
