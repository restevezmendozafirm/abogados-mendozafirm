<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training | The Mendoza Law Firm</title>
    <meta name='robots' content='max-image-preview:large, noindex, noarchive' />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="https://mendozafirm.com/wp-content/uploads/2022/12/cropped-the-mendoza-law-firm-cropped-logo-512-32x32.png" sizes="32x32" />
    <link rel="icon" href="https://mendozafirm.com/wp-content/uploads/2022/12/cropped-the-mendoza-law-firm-cropped-logo-512-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="https://mendozafirm.com/wp-content/uploads/2022/12/cropped-the-mendoza-law-firm-cropped-logo-512-180x180.png" />
    <meta name="msapplication-TileImage" content="https://mendozafirm.com/wp-content/uploads/2022/12/cropped-the-mendoza-law-firm-cropped-logo-512-270x270.png" />    
    
    <meta property="og:locale" content="en_US" />
    <meta property="og:title" content="Training | The Mendoza Law Firm" />
    <meta property="og:description" content="The Mendoza Law Firm, training."/>
    <meta property="og:url" content="https://betasite.mendozafirm.com/abogados/" />
    <meta property="og:image" content="https://betasite.mendozafirm.com/images/videos/og-university.webp" />
    <meta name="twitter:title" content="Training | The Mendoza Law Firm" />
    <meta name="twitter:description" content="The Mendoza Law Firm, training." />
    <meta name="twitter:image" content="https://betasite.mendozafirm.com/images/videos/og-university.webp" />
    <meta property="og:type" content="website" />


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    @vite('resources/css/carruseltestimonio.css')
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @viteReactRefresh
</head>
<body>
    <script>
         document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
        });
    </script>
    <nav class="w-full z-50 absolute h-28">
        <div class="mx-auto max-w-screen-2xl xs:pt-2 h-full">
            <div class="relative md:flex xs:block items-center justify-between h-full">
                <div class="inset-y-0 left-0 xl:flex xs:block items-center">
                    <div class="xl:flex xs:block flex-shrink-0 items-center">
                        <a href="/abogados/administrador/dashboard"><img class="h-16 w-auto xs:mx-auto md:ml-8 xl:ml-4" src="/images/logo.png" alt="logo mendoza"></a>
                    </div>
                </div>
                <div class="md:flex xs:block flex-1 items-center md:justify-end xs:justify-center sm:items-stretch md:mt-0 mt-4">
                    <div class="sm:ml-6 sm:block">
                        <div class="flex space-x-4 xs:justify-center">
                            <a href="/abogados/administrador/dashboard#class" class="rounded-md text-white xs:ml-0 px-6 py-2 font-bold xl:text-3xl lg:text-xl md:text-lg xs:text-lg {{ $show == 'home' ? 'active-menu' : '' }}"  aria-current="page">HOME</a>
                            <a href="/abogados/administrador/support" class="rounded-md text-white xs:ml-0 px-6 py-2 font-bold xl:text-3xl lg:text-xl md:text-lg xs:text-lg {{ $show == 'support' ? 'active-menu' : '' }}" aria-current="page">SUPPORT</a>
                            {{-- <p class="rounded-md xs:ml-0 xl:px-3 xs:px-1 py-2 xl:text-3xl lg:text-xl md:text-lg xs:text-lg text-white"> | </p> --}}
                            {{-- <a href="/abogados/administrador/perfil" class="rounded-md xs:ml-0 px-6 py-2 font-bold xl:text-3xl lg:text-xl md:text-lg xs:text-lg text-white">PERFIL</a> --}}
                            {{-- <p class="rounded-md xs:ml-0 xl:px-3 xs:px-1 py-2 xl:text-3xl lg:text-xl md:text-lg xs:text-lg text-white"> | </p> --}}
                            <form class="xs:ml-0" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="rounded-md xs:ml-0 px-6 py-2 font-bold xl:text-3xl lg:text-xl md:text-lg xs:text-lg text-white">EXIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>