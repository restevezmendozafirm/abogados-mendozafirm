<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Denuncia el Acoso Laboral! Confidencial y Seguro - Mendoza Law Firm</title>
    <meta name='robots' content='max-image-preview:large, noindex, noarchive' />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="https://mendozafirm.com/wp-content/uploads/2022/12/cropped-the-mendoza-law-firm-cropped-logo-512-32x32.png" sizes="32x32" />
    <link rel="icon" href="https://mendozafirm.com/wp-content/uploads/2022/12/cropped-the-mendoza-law-firm-cropped-logo-512-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="https://mendozafirm.com/wp-content/uploads/2022/12/cropped-the-mendoza-law-firm-cropped-logo-512-180x180.png" />
    <meta name="msapplication-TileImage" content="https://mendozafirm.com/wp-content/uploads/2022/12/cropped-the-mendoza-law-firm-cropped-logo-512-270x270.png" />

    <meta name="robots" content="noindex, nofollow">
    <meta name="description" content="Denuncia el acoso laboral de manera segura y confidencial con The Mendoza Law Firm. Tu bienestar es nuestra prioridad."/>
    <meta property="og:title" content="¡Denuncia el Acoso Laboral! Confidencial y Seguro - Mendoza Law Firm" />
    <meta property="og:description" content="Denuncia el acoso laboral de manera segura y confidencial con The Mendoza Law Firm. Tu bienestar es nuestra prioridad."/>
    <meta property="og:image" content="https://betasite.mendozafirm.com/images/op_denuncia_laboral.webp" />
    <meta name="twitter:title" content="¡Denuncia el Acoso Laboral! Confidencial y Seguro - Mendoza Law Firm" />
    <meta name="twitter:description" content="Denuncia el acoso laboral de manera segura y confidencial con The Mendoza Law Firm. Tu bienestar es nuestra prioridad." />
    <meta name="twitter:image" content="https://betasite.mendozafirm.com/images/op_denuncia_laboral.webp" />

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
    <style>
         html {
            scroll-behavior: smooth;
        }
    </style>
     <style>
        #popup-success {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: black;
            color: white;
            border-radius: 5px;
            z-index: 1000;
        }

        #popup-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            if ({{ session('success') ? 'true' : 'false' }}) {
                document.getElementById('popup-overlay').style.display = 'block';
                document.getElementById('popup-success').style.display = 'block';

                setTimeout(function() {
                    document.getElementById('popup-overlay').style.display = 'none';
                    document.getElementById('popup-success').style.display = 'none';
                }, 3000); // Ocultar el popup después de 3 segundos
            }
        });
    </script>
    <div id="popup-overlay"></div>
    <div id="popup-success" class="p-20 text-center b2-red">
        <p class="text-3xl font-bold">Su denuncia ha sido enviada. En breve te contactaremos.</p>
    </div>
    @if (session('success'))
        <div style="hidden">
            {{-- {{ session('success') }} --}}
        </div>
    @endif
    <nav class="bg-black h-28 absolute w-full">
        <div class="mx-auto max-w-screen-2xl px-2 sm:px-6 xs:pt-2 lg:px-8 h-full bb-2-white">
            <div class="relative md:flex xs:block items-center justify-between h-full">
                <div class="inset-y-0 left-0 xl:flex xs:block items-center">
                    <div class="xl:flex xs:block flex-shrink-0 items-center">
                        <a href="/administrador/dashboard"><img class="h-16 xs:mt-4 md:mt-0 w-auto xs:mx-auto" src="/images/logo-mendoza.webp" alt="logo mendoza"></a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="banner-denuncia">
        <div class="max-w-screen-2xl mx-auto">
            <div class="w-50 lg:pb-16 xs:pb-8 xl:pt-48 lg:pt-44 xs:pt-32 xs:px-4 md:px-4">
                <p class="2xl:text-7xl xs:text-2xl font-bold xs:text-center 2xl:text-left text-white">¡Denuncia el</p>
                <p class="font-bold 2xl:text-8xl xs:text-2xl tc-red xs:text-center 2xl:text-left">Acoso Laboral!</p>
                <p class="2xl:text-2xl xl:text-lg xs:text-base text-white 2xl:mt-16 xs:mt-4 lg:text-center 2xl:text-left">
                    En <span class="font-semibold tgreen-youtube">The Mendoza Law Firm</span> creemos que el  lugar de <span class="font-semibold">trabajo</span>, todos merecemos <span class="font-semibold italic">respeto y dignidad.</span>
                </p>
                <p class="2xl:text-2xl xl:text-lg xs:text-base text-white 2xl:mt-8 xs:mt-4 2xl:mb-8 xs:mb-4 lg:text-center 2xl:text-left">
                    Aprovecha esta <span class="font-semibold">plataforma segura y confidencial</span> para <span class="font-semibold tc-red">denunciar</span> cualquier situación de <span class="font-semibold">acoso laboral</span> que estés viviendo en la oficina.  En The Mendoza Law Firm, tu bienestar y seguridad son nuestra prioridad.
                </p>
                <div class="w-full text-center">
                    <a class="text-white link-menu 2xl:text-4xl xs:text-xl border-solid-4 font-bold py-2 px-8 rounded-full inline-block" href="#form-denuncia">SOLICITA AYUDA</a>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-green">
        <div class="max-w-screen-2xl mx-auto py-14">
            <div class="w-3-5 align-top inline-block text-center xs:px-2 xl:mx-0">
                <p class="font-bold 2xl:mt-28 xs:mt-4 italic lg:text-6xl xs:text-2xl text-white">¡Denuncia ahora y recibe el apoyo que necesitas!</p>
                <p class="lg:text-4xl xs:text-lg font-medium text-white 2xl:mt-52 lg:mt-16 md:mt-4 xs:mt-8">Rellena el formulario y comparte tu experiencia. Estamos aquí para ayudarte.</p>
            </div>
            <div class="w-2-5 align-top inline-block">
                <div class="bg-black lg:mx-8 xs:mx-6 lg:py-14 md:py-8 xs:py-8 lg:px-24 md:px-12 xs:px-8 rounded-3xl xs:mt-4 md:mt-2 lg:mt-12 2xl:mt-0">
                    <div id="form-denuncia">
                        <input class="tgreen-youtube block w-full xs:text-base md:text-xl font-medium required" type="text" data-nombre="Nombre" name="nombre" placeholder="Nombre *" required>
                        <input class="tgreen-youtube mt-4 block w-full xs:text-base md:text-xl font-medium required" type="text" data-nombre="Teléfono" name="telefono" placeholder="Teléfono *" required>
                        <input class="tgreen-youtube mt-4 block w-full xs:text-base md:text-xl font-medium required" type="email" data-nombre="Correo" name="correo" placeholder="Correo electrónico *" required>
                        <select class="tgreen-youtube mt-4 block w-full xs:text-base md:text-xl font-medium required" data-nombre="CategorÍa" name="categoria" id="" required>
                            <option value="">Categoría de la queja *</option>
                            <option value="Comentarios inapropiados">Comentarios inapropiados</option>
                            <option value="Amenazados o intimidación">Amenazados o intimidación</option>
                            <option value="Discriminación">Discriminación</option>
                            <option value="Otro">Otro</option>
                        </select>
                        <select class="tgreen-youtube mt-4 block w-full xs:text-base md:text-xl font-medium required" data-nombre="Reportado" name="reportado" id="" required>
                            <option value="">¿Has reportado esto anteriormente? *</option>
                            <option value="Sí">Sí</option>
                            <option value="No">No</option>
                        </select>
                        <div class="relative mt-4">
                            <label class="tgreen-youtube top-2-5 left-120 absolute xs:text-base md:text-xl font-medium" for="img-evidencia"><span class="xs:hidden md:inline-block">Imagen de</span> Evidencia</label>
                            <input class="text-white block w-full xs:text-base md:text-xl font-medium bg-white" id="img-evidencia" type="file" name="img_evidencia" placeholder="Imagen de Evidencia" onchange="handleFileChange(event, 'foto_nombre')" accept="image/*">
                            <div class="renderfoto_nombre"></div>
                            <input type="hidden" name="foto_nombre" id="foto_nombre" data-nombre="Imagen">
                        </div>
                        <textarea class="tgreen-youtube mt-4 block w-full xs:text-base md:text-xl font-medium required" data-nombre="Descripción" name="descripcion" placeholder="Descripción Detallada *" id="descripcion" cols="10" rows="4" required></textarea>
                        <div class="w-full text-center">
                            <a class="xs:text-base md:text-xl font-bold py-2 px-4 bred-youtube text-white inline-block mx-auto mt-8 cursor-pointer" id="submit-form">ENVIAR</a>
                        </div>
                        {{-- <input type="submit" class="xs:text-base md:text-xl font-bold py-2 px-4 bred-youtube text-white block mx-auto mt-8 cursor-pointer" value="ENVIAR"> --}}
                    </div>
                </div>
            </div>
        </div>
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
    <script>
        $('#submit-form').click(function(event) {
            var datos = {};
            var campoVacioEncontrado = false;
            $('#form-denuncia input, #form-denuncia select, #form-denuncia textarea').each(function() {
                if (!campoVacioEncontrado) {
                    var data = $(this).data('nombre');
                    var nombreInput = $(this).attr('name');
                    var valorInput = $(this).val();
                    $(this).removeClass('error-input');
                if (valorInput.trim() === '' && $(this).hasClass('required')) {
                        campoVacioEncontrado = true;
                        alert(`El campo ${data} está vacío. Por favor, ingresa un valor.`);
                        $(this).addClass('error-input');
                        $('html, body').animate({
                            scrollTop: $(this).offset().top - 50
                        }, 500);
                    }

                    datos[nombreInput] = valorInput;
                }
            });

            if(campoVacioEncontrado == false) {
            // Enviar formulario por AJAX
                $.ajax({
                    url: '{{ route("denuncia.create") }}',
                    type: 'POST',
                    data: datos,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        // Mostrar popup de éxito
                        document.getElementById('popup-overlay').style.display = 'block';
                        document.getElementById('popup-success').style.display = 'block';

                        // Ocultar el popup después de 3 segundos
                        setTimeout(function() {
                            document.getElementById('popup-overlay').style.display = 'none';
                            document.getElementById('popup-success').style.display = 'none';
                        }, 3000);

                        // Limpiar el formulario
                        form.reset();
                    },
                    error: function(error) {
                        console.error('Error al enviar el formulario:', error);
                        alert('Hubo un error al enviar el formulario. Por favor, inténtelo de nuevo.');
                    }
                });
            }
        });
    </script>

    <script>
        function handleFileChange(e, fieldName) {
            const file = e.target.files[0];
            if (file) {
                const formData = new FormData();
                formData.append('file', file);
                $.ajax({
                    url: '/api/upload',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(responseData) {
                        const uploadedFileName = responseData.fileName;
                        $('#' + fieldName).val(uploadedFileName);
                        renderFile(fieldName, responseData.fileName);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error al subir el archivo');
                    }
                });
            }
        }
        function renderFile(fieldName, fileName) {
            const renderContainer = $('.render' + fieldName);
            renderContainer.empty();
            if (fileName) {
                const extension = fileName.split('.').pop().toLowerCase();
                if (['jpg', 'jpeg', 'png'].includes(extension)) {
                    renderContainer.append(
                        $('<div>').append(
                            $('<img>', {
                                src: `/images/files/${fileName}`,
                                alt: `Archivo de ${fieldName}`,
                                style: 'max-width: 100%; max-height: 150px; margin-top: 10px;',
                                class: 'file-render'
                            })
                        )
                    );
                }
            }
        }
    </script>
</body>
</html>
