@component('mail::message')
Dear {{$user->name}},<br><br>


Muchas gracias por tu interes en el simposio <b>DMAE</b><br>

Podras encontrar informacion del curso en nuestro sitio:

<?php echo 'http:http://127.0.0.1:8001/'?>


<p>We look forward to providing the professional services and assistance you need.<br>

Sincerely, <br>
<b> The {{ config('app.name')}} Team</b><br>
<a href="http://clarifee.rivka.mx/">http://clarifee.rivka.mx/</a></li></p>
@endcomponent