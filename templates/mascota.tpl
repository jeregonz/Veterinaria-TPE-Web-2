<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veterinaria - Mascota {$mascota->nombre}</title>
</head>
<body>
    <p>nombre de la mascota: {$mascota->nombre}</p>
    <p>tipo de la mascota: {$mascota->tipo}</p>
    <p>raza de la mascota: {$mascota->raza}</p>
    <p>dueño de la mascota: 
        <a href="{$BASE_URL}cliente/{$mascota->id_cliente}">{$mascota->nombre_cliente}
    </p>
    

</body>