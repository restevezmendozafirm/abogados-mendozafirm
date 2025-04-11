@php
    $show = "home";
@endphp
@extends('layouts.main-backend-user')

@section('content')
        <div class="bg-dashboard">
            <div class="back-home bg-center py-20 md:pt-40 md:pb-20 md:px-8 items-center relative justify-center flex flex-col" style="background-image: url(/images/banner-dashboard.webp) !important; background-position: bottom">
                <div class="max-w-screen-2xl mx-auto w-full">
                    <div class="max-w-3xl px-4 md:px-0">
                        <p class="xl:text-6xl xs:text-4xl z-50 text-white font-bold md:mb-10 mb-4 md:mt-0 mt-20">MasterClass by MGM</p>
                        <p class="2xl:text-3xl xl:text-2xl lg:text-xl text-base z-50 text-justify text-white">Learn from experts about advanced legal strategies. Each class is designed to help you confidently and effectively address complex immigration issues.</p>
                        <div class="text-center">
                            <a href="#class" class="2xl:text-4xl bg-red-hover xl:text-2xl lg:text-xl text-lg font-bold inline-block text-white rounded-full bgreen-youtube md:py-3 py-2 md:mt-12 xs:mt-4 md:px-8 xs:px-4">START CLASSES</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-12 xl:mb-40 lg:mb-20 mb-12" id="class">
                <div class="max-w-screen-2xl lg:grid block xl:grid-cols-3 lg:grid-cols-2 gap-8 xl:gap-12 mx-auto px-16 lg:px-4 2xl:px-0">
                    @foreach ( $capacitaciones as $capacitacion )
                        <div class="col-span-1 mt-16">
                            <a href="/abogados/administrador/dashboard/{{$capacitacion->url}}">
                                <img class="w-full mx-auto md:mb-8 mb-4 br-8" src="/images/videos/{{$capacitacion->image}}" alt="{{$capacitacion->nombre}}">
                                <p class="font-bold tgreen-youtube md:text-2xl xs:text-base text-center lg:h-24">{{$capacitacion->nombre}}</p>
                                <p class="text-center md:text-xl xs:text-sm md:mb-8 xs:mb-4 lg:h-24 xl:h-28 font-bold lg:font-normal">{{$capacitacion->description}}</p>
                            </a>
                            <div class="text-center">
                                <a class="bgreen-youtube inline-block py-2 px-10 rounded-full text-white bg-red-hover md:text-2xl text-lg" target="_blank" href="/abogados/administrador/dashboard/{{$capacitacion->url}}">Watch Class</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="max-w-screen-2xl block gap-8 xl:gap-12 mx-auto px-16 lg:px-4 2xl:px-0">
                <p class="md:text-2xl xs:text-sm md:mb-8 xs:mb-4 font-semibold text-justify">Este contenido de capacitación está protegido por derechos de autor. Se requiere el cumplimiento estricto de las leyes de propiedad intelectual, incluida la prohibición expresa de divulgar cualquier información relacionada con este material. Su reproducción o distribución no autorizada constituye una violación de dichos derechos y puede dar lugar a acciones legales.</p>
            </div>
            <div class="md:px-8 lg:px-24 px-4 py-12 text-white br-3-3-0-0 bg-black ">
                <div class="2xl:max-w-screen-2xl xl:max-w-screen-xl lg:max-w-screen-lg mx-auto">
                    <p class='md:text-xl xs:text-sm text-white mb-4'>© 2024 The Mendoza Law Firm.</p>
                    <div class="lg:flex xs:block mb-5"><a class="md:text-base text-xs font-semibold hover:scale-105 ease-in-out duration-300" target="_blank" href="https://mendozafirm.com/en/terms-and-conditions/">Terms & Conditions</a><span class="tgreen md:text-base text-xs font-semibold mx-4 ">|</span><a class="md:text-base text-xs font-semibold hover:scale-105 ease-in-out duration-300" href="https://mendozafirm.com/en/privacy-policy/" target="_blank">Privacy Policy</a><span class="tgreen md:text-base text-xs font-semibold mx-4">|</span><a class="md:text-base text-xs font-semibold hover:scale-105 ease-in-out duration-300" target="_blank" href="https://mendozafirm.com/en/sitemap/">Sitemap</a></div>
                    <p class='font-light text-justify md:text-sm text-xs text-white'>*Each case is unique and requires consultation. The listed options include some possible legal processes and do not cover all the steps of each process. Pre-qualification does not necessarily mean approval. The information on this website is shared for informational purposes and should not be considered legal advice.</p>
                </div>
            </div>
        </div>
        <script>
            // Desactivar clic derecho
            document.addEventListener('contextmenu', function(e) {
                e.preventDefault();
            });


            // Detectar tecla de impresión (Print Screen)
            document.addEventListener('keydown', function(e) {
                if (e.key === 'F12') {
                    alert('No tiene permisos para esta opción.');
                    e.preventDefault();
                }
            });
        </script>      
    </body>
</html>
@endsection