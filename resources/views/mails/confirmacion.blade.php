<div style="background-image: url('https://cluby.azurewebsites.net/cluby/degardado%20bg.svg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
@component('mail::message')
# Introduction
##Hola!
###Gracias por registrarte en **Cluby**. Tómese un segundo para confirmar su dirección de correo electrónico, haciendo clic en el siguiente enlace:

@component('mail::button', ['url' => ''])
Verificar Dirección de Correo Electrónico
@endcomponent
>Aquí hay algunas cosas geniales que puedes hacer en Cluby
>
>- Vea los horarios de las actividades cerca de usted,
búsqueda por fecha, edad o interés.
>- Regístrese en línea en minutos.
>- Guarde la información de su hijo e Inscríbase para futuras sessiones con más facilidad.
>- Comparta el horario de su hiko con amigos a través de su calendario en linea.
>- Escriba comentarios para ayudar a otros padres de tu área.
Gracias,<br>
{{ config('app.name') }}
@endcomponent
</div>

