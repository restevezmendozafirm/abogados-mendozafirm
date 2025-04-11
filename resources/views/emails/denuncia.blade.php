<!DOCTYPE html>
<html>
<head>
    <title>Nueva Denuncia Recibida</title>
</head>
<body>
    <h1>Nueva Denuncia Recibida</h1>
    <p><strong>Nombre:</strong> {{ $denuncia['nombre'] }}</p>
    <p><strong>Teléfono:</strong> {{ $denuncia['telefono'] }}</p>
    <p><strong>Correo:</strong> {{ $denuncia['correo'] }}</p>
    <p><strong>Categoría:</strong> {{ $denuncia['categoria'] }}</p>
    <p><strong>Reportado:</strong> {{ $denuncia['reportado'] }}</p>
    <p><strong>Descripción:</strong> {{ $denuncia['descripcion'] }}</p>
    @if($denuncia['img_evidencia'])
        <p><strong>Imagen de Evidencia:</strong> <a href="https://betasite.mendozafirm.com/images/files/{{ $denuncia['img_evidencia'] }}">Ver Imagen</a></p>
    @endif
</body>
</html>
