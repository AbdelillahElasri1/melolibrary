<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Melolibrary</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
            .scrollbar-hide::-webkit-scrollbar {
                display: none;
            }
        </style>
    </head>
    <body class="antialiased">
        <header>
            <nav class="bg-gray-700 w-full">
              <div class="container mx-auto py-4 flex justify-between items-center">
                <h1 class="text-2xl font-bold text-gray-50">RapidTutorials</h1>
                <div class="flex space-x-10">
                  <div class="flex items-center space-x-2">
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                      </svg>
                    </span>
                    <a href="#" class="text-gray-50">Topics</a>
                  </div>
                  <div class="flex items-center space-x-2">
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                      </svg>
                    </span>
                    <a href="#" class="text-gray-50">News</a>
                  </div>
                  <div class="flex items-center space-x-2">
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                      </svg>
                    </span>
                    <a href="#" class="text-gray-50">Artists</a>
                  </div>
                </div>
                <div class="lg:flex hidden items-center space-x-2 bg-white py-1 px-2 rounded-full">
                  <span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                  </span>
                  <input class="outline-none" type="text" placeholder="Search" />
                </div>
              </div>
            </nav>
          </header>
        {{-- end header --}}
        {{-- start navbar  --}}
    <div class="flex">
        <div class="p-0 w-64">
            <!--light mode - wide side navigation-->
            <div class="w-full h-full py-4 px-2 text-gray-900 bg-white text-left capitalize font-medium shadow-lg">
              {{-- <img src="https://www.freepnglogos.com/uploads/spotify-logo-png/file-spotify-logo-png-4.png"
                alt="alt placeholder" class="w-8 h-8 mx-auto mb-5 "> --}}
                {{-- <h1 class="p-6 text-center">Logo</h1> --}}
              <span class="cursor-pointer px-2 py-1 hover:bg-gray-200 hover:text-gray-700 rounded block mb-5">
                <i class="w-8 fas fa-stream p-2 bg-gray-200 rounded-full">
                </i>
                <span class="mx-2">categories</span>
              </span>
              <span class="cursor-pointer px-2 py-1 hover:bg-gray-200 hover:text-gray-700 rounded block mb-5">
                <i class="w-8 fas fa-search p-2 bg-gray-200 rounded-full">
                </i>
                <span class="mx-2">search</span>
              </span>
              <span class="cursor-pointer px-2 py-1 hover:bg-gray-200 hover:text-gray-700 rounded block mb-5">
                <span class="w-8 mb-5 relative">
                  <i class="w-8 fas fa-user p-2 bg-gray-200 rounded-full">
                  </i>
                  <span
                    class="absolute right-0 top-0 -mt-2 -mr-1 text-xs bg-yellow-500 text-black font-medium px-2 rounded-full">3</span>
                </span>
                <span class="mx-2">sign ups</span>
              </span>
              <span class="cursor-pointer px-2 py-1 hover:bg-gray-200 hover:text-gray-700 rounded block mb-5">
                <i class="w-8 fas fa-th p-2 bg-gray-200 rounded-full">
                </i>
                <span class="mx-2">menu</span>
              </span>
              <span class="cursor-pointer px-2 py-1 hover:bg-gray-200 hover:text-gray-700 rounded block mb-5">
                <i class="w-8 fas fa-calendar-alt p-2 bg-gray-200 rounded-full">
                </i>
                <span class="mx-2">calendar</span>
              </span>
            </div>
          </div>
        {{-- end navbar --}}
        {{-- card category song start --}}
        <div class="flex items-center justify-center ml-40 mt-20  flex-wrap ">
            <div class="grid grid-cols-1 gap-6  overflow-y-scroll h-[450px] scrollbar-hide pt-10 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4">
                <!-- 1 card -->
                <div class="relative bg-white py-6 px-6 rounded-3xl w-40 h-40 my-4 shadow-xl">
                    <div class=" text-white flex items-center absolute rounded-full py-4 px-4 shadow-xl bg-pink-500 left-4 -top-6">
                        <!-- svg  -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-beamed" viewBox="0 0 16 16"> <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/> <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/> <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/> </svg>
                    </div>
                    <div class="mt-8">
                        <p class="text-xl font-semibold my-2"> Development</p>
                        <div class="flex space-x-2 text-gray-400 text-sm">
                            <!-- svg  -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-beamed" viewBox="0 0 16 16"> 
                                <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/> 
                                <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/> 
                                <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/> 
                            </svg>
                             <p>Marketing </p> 
                        </div>
                        <div class="flex space-x-2 text-gray-400 text-sm my-3">
                            <!-- svg  -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-beamed" viewBox="0 0 16 16"> 
                                <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/> 
                                <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/> 
                                <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/> 
                            </svg>
                             <p>1 Weeks Left</p> 
                        </div>
                    </div>
                </div>
        
                <!-- 2 card -->
                <div class="relative bg-white py-6 px-6 rounded-3xl w-40 h-40 my-4 shadow-xl">
                    <div class=" text-white flex items-center absolute rounded-full py-4 px-4 shadow-xl bg-green-500 left-4 -top-6">
                        <!-- svg  -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-beamed" viewBox="0 0 16 16"> 
                            <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/> 
                            <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/> 
                            <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/> 
                        </svg>
                    </div>
                    <div class="mt-8">
                        <p class="text-xl font-semibold my-2">Web Design</p>
                        <div class="flex space-x-2 text-gray-400 text-sm">
                            <!-- svg  -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-beamed" viewBox="0 0 16 16"> 
                                <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/> 
                                <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/> 
                                <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/> 
                            </svg>
                             <p>Core UI Team</p> 
                        </div>
                        <div class="flex space-x-2 text-gray-400 text-sm my-3">
                            <!-- svg  -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-beamed" viewBox="0 0 16 16"> 
                                <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/> 
                                <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/> 
                                <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/> 
                            </svg>
                             <p>3 Weeks Left</p> 
                        </div>
                    </div>
                </div>
                <!-- 2 card -->
                <div class="relative bg-white py-6 px-6 rounded-3xl w-40 h-40 my-4 shadow-xl">
                    <div class=" text-white flex items-center absolute rounded-full py-4 px-4 shadow-xl bg-green-500 left-4 -top-6">
                        <!-- svg  -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-beamed" viewBox="0 0 16 16"> 
                            <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/> 
                            <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/> 
                            <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/> 
                        </svg>
                    </div>
                    <div class="mt-8">
                        <p class="text-xl font-semibold my-2">Web Design</p>
                        <div class="flex space-x-2 text-gray-400 text-sm">
                            <!-- svg  -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-beamed" viewBox="0 0 16 16"> 
                                <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/> 
                                <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/> 
                                <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/> 
                            </svg>
                             <p>Core UI Team</p> 
                        </div>
                        <div class="flex space-x-2 text-gray-400 text-sm my-3">
                            <!-- svg  -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-beamed" viewBox="0 0 16 16"> 
                                <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/> 
                                <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/> 
                                <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/> 
                            </svg>
                             <p>3 Weeks Left</p> 
                        </div>
                    </div>
                </div>
                <!-- 2 card -->
                <div class="relative bg-white py-6 px-6 rounded-3xl w-40 h-40 my-4 shadow-xl">
                    <div class=" text-white flex items-center absolute rounded-full py-4 px-4 shadow-xl bg-green-500 left-4 -top-6">
                        <!-- svg  -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-beamed" viewBox="0 0 16 16"> 
                            <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/> 
                            <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/> 
                            <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/> 
                        </svg>
                    </div>
                    <div class="mt-8">
                        <p class="text-xl font-semibold my-2">Web Design</p>
                        <div class="flex space-x-2 text-gray-400 text-sm">
                            <!-- svg  -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-beamed" viewBox="0 0 16 16"> 
                                <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/> 
                                <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/> 
                                <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/> 
                            </svg>
                             <p>Core UI Team</p> 
                        </div>
                        <div class="flex space-x-2 text-gray-400 text-sm my-3">
                            <!-- svg  -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-beamed" viewBox="0 0 16 16"> 
                                <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/> 
                                <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/> 
                                <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/> 
                            </svg>
                             <p>3 Weeks Left</p> 
                        </div>
                    </div>
                </div>
                <!-- 2 card -->
                <div class="relative bg-white py-6 px-6 rounded-3xl w-40 h-40 my-4 shadow-xl">
                    <div class=" text-white flex items-center absolute rounded-full py-4 px-4 shadow-xl bg-green-500 left-4 -top-6">
                        <!-- svg  -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-beamed" viewBox="0 0 16 16"> 
                            <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/> 
                            <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/> 
                            <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/> 
                        </svg>
                    </div>
                    <div class="mt-8">
                        <p class="text-xl font-semibold my-2">Web Design</p>
                        <div class="flex space-x-2 text-gray-400 text-sm">
                            <!-- svg  -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-beamed" viewBox="0 0 16 16"> 
                                <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/> 
                                <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/> 
                                <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/> 
                            </svg>
                             <p>Core UI Team</p> 
                        </div>
                        <div class="flex space-x-2 text-gray-400 text-sm my-3">
                            <!-- svg  -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-beamed" viewBox="0 0 16 16"> 
                                <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/> 
                                <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/> 
                                <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/> 
                            </svg>
                             <p>3 Weeks Left</p> 
                        </div>
                    </div>
                </div>
                <!-- 2 card -->
                <div class="relative bg-white py-6 px-6 rounded-3xl w-40 h-40 my-4 shadow-xl">
                    <div class=" text-white flex items-center absolute rounded-full py-4 px-4 shadow-xl bg-green-500 left-4 -top-6">
                        <!-- svg  -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-beamed" viewBox="0 0 16 16"> 
                            <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/> 
                            <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/> 
                            <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/> 
                        </svg>
                    </div>
                    <div class="mt-8">
                        <p class="text-xl font-semibold my-2">Web Design</p>
                        <div class="flex space-x-2 text-gray-400 text-sm">
                            <!-- svg  -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-beamed" viewBox="0 0 16 16"> 
                                <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/> 
                                <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/> 
                                <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/> 
                            </svg>
                             <p>Core UI Team</p> 
                        </div>
                        <div class="flex space-x-2 text-gray-400 text-sm my-3">
                            <!-- svg  -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-beamed" viewBox="0 0 16 16"> 
                                <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/> 
                                <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/> 
                                <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/> 
                            </svg>
                             <p>3 Weeks Left</p> 
                        </div>
                    </div>
                </div>
                <!-- 2 card -->
                <div class="relative bg-white py-6 px-6 rounded-3xl w-40 h-40 my-4 shadow-xl">
                    <div class=" text-white flex items-center absolute rounded-full py-4 px-4 shadow-xl bg-green-500 left-4 -top-6">
                        <!-- svg  -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-beamed" viewBox="0 0 16 16"> 
                            <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/> 
                            <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/> 
                            <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/> 
                        </svg>
                    </div>
                    <div class="mt-8">
                        <p class="text-xl font-semibold my-2">Web Design</p>
                        <div class="flex space-x-2 text-gray-400 text-sm">
                            <!-- svg  -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-beamed" viewBox="0 0 16 16"> 
                                <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/> 
                                <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/> 
                                <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/> 
                            </svg>
                             <p>Core UI Team</p> 
                        </div>
                        <div class="flex space-x-2 text-gray-400 text-sm my-3">
                            <!-- svg  -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-beamed" viewBox="0 0 16 16"> 
                                <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/> 
                                <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/> 
                                <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/> 
                            </svg>
                             <p>3 Weeks Left</p> 
                        </div>
                    </div>
                </div>
        
                <!-- 3 card -->
                <div class="relative bg-white py-6 px-6 rounded-3xl w-40 h-40 my-4 shadow-xl">
                    <div class=" text-white flex items-center absolute rounded-full py-4 px-4 shadow-xl bg-blue-500 left-4 -top-6">
                        <!-- svg  -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-beamed" viewBox="0 0 16 16"> 
                            <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/> 
                            <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/> 
                            <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/> 
                        </svg>
                    </div>
                    <div class="mt-8">
                        <p class="text-xl font-semibold my-2">Page</p>
                        <div class="flex space-x-2 text-gray-400 text-sm">
                            <!-- svg  -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-beamed" viewBox="0 0 16 16"> 
                                <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/> 
                                <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/> 
                                <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/> 
                            </svg>
                             <p>Marketing</p> 
                        </div>
                        <div class="flex space-x-2 text-gray-400 text-sm my-3">
                            <!-- svg  -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-beamed" viewBox="0 0 16 16"> 
                                <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/> 
                                <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/> 
                                <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/> 
                            </svg>
                             <p>2 Days Left</p> 
                        </div>
                    </div>
                </div>
        
                 <!-- 4 card -->
                <div class="relative bg-white py-6 px-6 rounded-3xl w-40 h-40 my-4 shadow-xl">
                    <div class=" text-white flex items-center absolute rounded-full py-4 px-4 shadow-xl bg-yellow-500 left-4 -top-6">
                        <!-- svg  -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-beamed" viewBox="0 0 16 16"> 
                            <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/> 
                            <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/> 
                            <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/> 
                        </svg>
                    </div>
                    <div class="mt-8">
                        <p class="text-xl font-semibold my-2">Business</p>
                        <div class="flex space-x-2 text-gray-400 text-sm">
                            <!-- svg  -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-beamed" viewBox="0 0 16 16"> 
                                <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/> 
                                <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/> 
                                <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/> 
                            </svg>
                             <p>Team</p> 
                        </div>
                        <div class="flex space-x-2 text-gray-400 text-sm my-3">
                            <!-- svg  -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-beamed" viewBox="0 0 16 16"> 
                                <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/> 
                                <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/> 
                                <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/> 
                            </svg>
                             <p>1 Month Left</p> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        {{-- card category song end --}}


        {{-- footer start --}}
        <footer class="bg-gray-700 col-span-6 p-4 grid grid-cols-3 gap-6 fixed z-20 left-0 bottom-0 w-full">
            <div class="flex items-center">
                <div class="overflow-hidden rounded-xl mr-4">
                    <img class="h-14 w-14 flex-shrink-0" src="https://ucarecdn.com/05f649bf-b70b-4cf8-90f7-2588ce404a08/" alt="" />
                </div>
                <div class="mr-4">
                    <div class="text-sm text-white text-line-clamp-1 font-semibold">
                        Heaven
                    </div>
                    <div class="text-xs text-white text-line-clamp-1">
                        <span>Ludwig van Beethoven</span>
                    </div>
                </div>
                <div class="flex items-center">
                    <button class="text-white p-2">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                            <path
                                d="M10 3.22l-.61-.6a5.5 5.5 0 0 0-7.78 7.77L10 18.78l8.39-8.4a5.5 5.5 0 0 0-7.78-7.77l-.61.61z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div>
                <div class="flex items-center justify-center mb-3">
                    <button class="w-5 h-5 text-white mr-6">
                        <svg class="fill-current w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path
                                d="M6.59 12.83L4.4 15c-.58.58-1.59 1-2.4 1H0v-2h2c.29 0 .8-.2 1-.41l2.17-2.18 1.42 1.42zM16 4V1l4 4-4 4V6h-2c-.29 0-.8.2-1 .41l-2.17 2.18L9.4 7.17 11.6 5c.58-.58 1.59-1 2.41-1h2zm0 10v-3l4 4-4 4v-3h-2c-.82 0-1.83-.42-2.41-1l-8.6-8.59C2.8 6.21 2.3 6 2 6H0V4h2c.82 0 1.83.42 2.41 1l8.6 8.59c.2.2.7.41.99.41h2z" />
                        </svg>
                    </button>
                    <button class="w-5 h-5 text-white mr-6">
                        <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M4 5h3v10H4V5zm12 0v10l-9-5 9-5z" />
                        </svg>
                    </button>
                    <button class="w-8 h-8 border border-black rounded-full flex text-black mr-6">
                        <svg class="fill-current text-white h-5 w-5 m-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M5 4h3v12H5V4zm7 0h3v12h-3V4z" />
                        </svg>
                    </button>
                    <button class="w-5 h-5 text-white mr-6">
                        <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M13 5h3v10h-3V5zM4 5l9 5-9 5V5z" />
                        </svg>
                    </button>
                    <button class="w-5 h-5 text-white">
                        <svg class="fill-current w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path
                                d="M10 3v2a5 5 0 0 0-3.54 8.54l-1.41 1.41A7 7 0 0 1 10 3zm4.95 2.05A7 7 0 0 1 10 17v-2a5 5 0 0 0 3.54-8.54l1.41-1.41zM10 20l-4-4 4-4v8zm0-12V0l4 4-4 4z" />
                        </svg>
                    </button>
                </div>
                <div class="flex items-center">
                    <span class="text-xs text-white font-light">4:18</span>
                    <div class="overflow-hidden relative flex-1 mx-2 rounded">
                        <div class="border-b-4 border-gray-400 rounded"></div>
                        <div
                            class="absolute inset-x-0 top-0 -translate-x-48 border-b-4 border-black rounded transform hover:border-green-200">
                        </div>
                    </div>
                    <span class="text-xs text-white font-light">5:13</span>
                </div>
            </div>
        </footer>
        {{-- footer end --}}
















        {{-- <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

    
    </body>
</html>
