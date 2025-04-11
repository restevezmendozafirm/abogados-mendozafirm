@php
    $show = "support";
@endphp
@extends('layouts.main-backend-user')

@section('content')
        <div class="back-support">
            <div class="back-home bg-center py-20 md:pt-32 md:pb-20 md:px-8 items-center relative justify-center flex flex-col" style="background-image: url(/images/videos/bg-support.webp) !important; background-position: bottom">
                <div class="max-w-screen-2xl mx-auto w-full">
                    <div class="max-w-3xl px-4 md:px-0">
                        <p class="xl:text-6xl xs:text-4xl z-50 text-white font-bold md:mb-10 mb-4 md:mt-0 mt-20">SUPPORT</p>
                        <p class="2xl:text-3xl xl:text-2xl lg:text-xl md:text-lg text-base z-50 text-justify text-white">We are here to help you with anything you need. Do you have any questions? Our team is available to assist you at all times. Here you will find several ways to contact us.</p>
                    </div>
                </div>
            </div>
            <div class="mt-12 mb-12 relative mt--15" id="class">
                <div class="max-w-screen-2xl lg:grid flex flex-col 2xl:grid-cols-3 xl:grid-cols-4 lg:grid-cols-5 gap-8 xl:gap-12 mx-auto md:px-16 px-4 lg:px-4 2xl:px-0">
                    <div class="bg-white col-start-2 2xl:col-span-1 xl:col-span-2 lg:col-span-3 text-center md:py-16 xs:py-4 br-8">
                        <a href="mailto:roberto.es@gmail.com">
                            <img class="mx-auto md:w-44 w-28" src="/images/videos/icono-correo-soporte.png" alt="icono de soporte">
                            <p class="font-bold md:text-4xl xs:text-lg md:mt-12 mt-4 mb-4 tgreen-youtube">EMAIL</p>
                            <a class="md:text-3xl text-base font-medium text-gris" href="mailto:roberto.es@gmail.com">roberto.es@gmail.com</a>
                        </a>
                    </div>
                    <div class="bg-white col-start-2 2xl:col-span-1 xl:col-span-2 lg:col-span-3 text-center md:py-16 xs:py-4 br-8">
                        <a href="tel:+2068148556">
                            <img class="mx-auto md:w-44 w-28" src="/images/videos/icono-tel.png" alt="icono de teléfono">
                            <p class="font-bold md:text-4xl xs:text-lg md:mt-12 mt-4 mb-4 tgreen-youtube">TELEPHONE</p>
                            <a class="md:text-3xl text-base font-medium text-gris" href="tel:+2068148556">(206) 814-8556
                                <br>Ext. 1278
                            </a>
                        </a>
                    </div>
                    <div class="bg-white col-start-2 2xl:col-span-1 xl:col-span-2 lg:col-span-3 text-center md:py-16 xs:py-4 br-8">
                        <img class="mx-auto md:w-44 w-28" src="/images/videos/icono-social-media.png" alt="icono de soporte">
                        <p class="font-bold md:text-4xl xs:text-lg md:mt-12 mt-4 mb-8 tgreen-youtube">SOCIAL MEDIA</p>
                        <div class="flex justify-evenly">
                            <a target="_blank" href="https://www.facebook.com/abogadamariamendoza"><img class="md:w-24 md:h-24 h-12 w-12" src="/images/videos/icono-facebook.png" alt="icono facebook"></a>
                            <a target="_blank" href="https://www.instagram.com/abogadamariamendoza/"><img class="md:w-24 md:h-24 h-12 w-12" src="/images/videos/icono-intagram.png" alt="icono instagram"></a>
                            <a target="_blank" href="https://www.tiktok.com/@abogadamaria"><img class="md:w-24 md:h-24 h-12 w-12" src="/images/videos/icono-tiktok.png" alt="icono tiktok"></a>
                            <a target="_blank" href="https://www.youtube.com/@abogadamariamendoza"><img class="md:w-24 md:h-24 h-12 w-12" src="/images/videos/icono-youtube.png" alt="icono youtube"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-screen-2xl block gap-8 xl:gap-12 mx-auto md:px-16 px-4 lg:px-4 2xl:px-0">
                <p class="md:text-2xl xs:text-sm md:mb-8 xs:mb-4 text-white font-semibold text-justify">Este contenido de capacitación está protegido por derechos de autor. Se requiere el cumplimiento estricto de las leyes de propiedad intelectual, incluida la prohibición expresa de divulgar cualquier información relacionada con este material. Su reproducción o distribución no autorizada constituye una violación de dichos derechos y puede dar lugar a acciones legales.</p>
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