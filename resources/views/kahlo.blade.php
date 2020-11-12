@extends('layouts.master')
@section('title', $title)
@section('header')
{{$header}}
@stop
@section('navbar')
    @parent      
@stop
@section('content')
<h1>Frida Kahlo</h1>
<img src="https://jotabl.com/wp-content/uploads/la-historia-de-frida-kahlo.jpg" width="250" height="250">
<h3>Biografia:</h3>
<p>Nació en 1907 y murió en 1954 en Coyoacán, Ciudad de México. Su nombre completo era Magdalena Carmen Frida Kahlo Calderón.

Estudió en el Colegio Alemán y en la Escuela Nacional Preparatoria de la Ciudad de México. En 1925, sufrió un trágico accidente cuyas consecuencias padeció hasta su muerte. Durante una larga convalecencia, empezó a pintar su rostro copiándolo de un espejo montado en el dosel de la cama.  Primero, fue realista y retrató a familiares y amigos, también gustó de pintar flores.  Pero después, a causa de la intensidad de sus sentimientos y de un cuerpo destrozado, pintó más y más su propia imagen combinada con expresiones oníricas, en ocasiones brutales. Incluso, parte de su obra se ha asociado a tendencias surrealistas por su carácter introspectivo.  En 1929, contrajo nupcias con Diego Rivera de quien se divorció en 1940 para volverse a casar con él un año después.  Fue maestra de pintura en la Escuela de Artes Plásticas y miembro del seminario de Cultura Mexicana. En 1938, montó su primera exposición individual en la Julien Levy Gallery de Nueva York.  Trabajos de ella fueron incluidos en la Exposición "Mexique" de 1939, que se presentó en la Galería Renou et Colle de París, así como en otras muestras colectivas que a lo largo de su vida se presentaron en México. Participó en la Exposición Internacional del Surrealismo organizada en 1940 en la Galería de Arte Moderno en la ciudad de México.  Instituciones tan importantes como el Museo de Arte Moderno de Nueva York y el Centro Georges Pompidou de París alojan algunas de sus obras.</p>

<div class="galeria">
        <h1>Pinturas</h1>
        <div class="linea"></div>
        <div class="contenedor-imagenes">
            <div class="imagen">
                <img src="https://lh3.googleusercontent.com/ba3teJ_lK0gYqAFlTaRC7RjDslE1jnK3r6pb2FXD3BJP3ozBiwkolTBwKLrXXjx1ew=s1200" alt="">
                <div class="overlay">
                    <h2>Las dos Fridas</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="https://www.malagaldia.es/wp-content/uploads/2019/01/Margarita-Carmen-Frida-Kahlo-Calder%C3%B3n-fue-una-pintora-mexicana-nacida-en-1907.jpg" alt="">
                <div class="overlay">
                    <h2>Autorretrato con collar de espinas y colibrí</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="https://cdn1.matadornetwork.com/blogs/2/2015/03/henry-ford-hospital.jpg" alt="">
                <div class="overlay">
                    <h2>Hospital Henry Ford</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="https://fridakahlo247.files.wordpress.com/2014/04/viva-la-vida-watermelons.jpg?w=1100" alt="">
                <div class="overlay">
                    <h2>Naturaleza muerta: viva la vida</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="https://4.bp.blogspot.com/-wZ5JP4flktg/WnYu8HmhpYI/AAAAAAAADrY/NktooiNiPQ08NRcvQN7_AsG2UQ5deWDAgCLcBGAs/s1600/Sin%2Besperanza%2B-%2Bcopia%2B%25282%2529.jpg" alt="">
                <div class="overlay">
                    <h2>Sin Esperanza</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="https://upload.wikimedia.org/wikipedia/en/thumb/9/92/The_Wounded_Deer_1946.jpg/300px-The_Wounded_Deer_1946.jpg" alt="">
                <div class="overlay">
                    <h2>The Wounded Deer</h2>
                </div>
            </div>
            </div>
            <!-- <div class="imagen">
                <img src="img/1 (2).jpg" alt="">
            </div> -->
        </div>
    </div>
    @stop 
@section('footer')
    Derechos reservados @parent
    @stop   