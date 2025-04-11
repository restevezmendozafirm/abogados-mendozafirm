@extends('layouts.main-backend')
@section('content')
    @section('SEO')
    <title>{{ trans('seo.notfound.title') }}</title>
    <meta name="robots" content="noindex, nofollow">
    <meta name="description" content="{{ trans('seo.notfound.description') }}"/>
    <meta property="og:title" content="Acceso Denegado" />
    <meta property="og:description" content="No tiene permiso para acceder a esta plataforma. Por favor, contacte al administrador para más información."/>
    <meta property="og:image" content="https://mendozafirm.com/build/assets/back-404-0cefd219.webp" />
    <meta name="twitter:title" content="Acceso Denegado" />
    <meta name="twitter:description" content="No tiene permiso para acceder a esta plataforma. Por favor, contacte al administrador para más información." />
    <meta name="twitter:image" content="https://mendozafirm.com/build/assets/back-404-0cefd219.webp" />
    @endsection
    <div class="not-found" id="accessnot">
    </div>
    <div class="bg-black">
        <div>
            <div class="2xl:mx-24 xl:mx-4 lg:mx-4 md:pt-6 xs:pt-4 text-white xs:mx-2">
                <p class='md:text-xl xs:text-sm text-grey mb-4'>© 2024 The Mendoza Law Firm.</p>
                <p class='font-semibold text-sm'>Descargo de responsabilidad:</p>
                <p class='font-light text-sm pb-4'>Cada caso es único y requiere consulta. Las opciones listadas incluyen algunos posibles procesos legales y no cubren todos los pasos de cada proceso. Pre-calificar no necesariamente significa obtener aprobación. Los datos en este sitio web son compartidos con propósitos informativos y no deben ser considerados consejo legal.</p>
            </div>
        </div>
    </div>
@endsection
    