@extends('layouts.master')
@section('title', $title)
@section('header')
{{$header}}
@stop
@section('navbar')
    @parent      
@stop
@section('content')
<h1>Rembrandt</h1>
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bd/Rembrandt_van_Rijn_-_Self-Portrait_-_Google_Art_Project.jpg/1200px-Rembrandt_van_Rijn_-_Self-Portrait_-_Google_Art_Project.jpg" width="250" height="250">
<h3>Biografia:</h3>
<p>El artista más importante de Holanda nació en 1606 en Leida y era hijo de un acaudalado molinero. A la edad de dieciocho años, Rembrandt Harmenszoon van Rijn se trasladó a Ámsterdam para trabajar para Pieter Lastman, un pintor conocido de la época. Seis meses después abrió su propio estudio en Leida.</p>
<p>Ningún otro artista fue capaz de jugar con la luz y la sombra como lo hacía Rembrandt. Enseguida se hizo popular como pintor y decidió regresar a la próspera ciudad de Ámsterdam en 1631. Al cabo de tres años se casó con Saskia van Uylenborch.</p>

<div class="galeria">
        <h1>Pinturas</h1>
        <div class="linea"></div>
        <div class="contenedor-imagenes">
            <div class="imagen">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3a/La_ronda_de_noche%2C_por_Rembrandt_van_Rijn.jpg/310px-La_ronda_de_noche%2C_por_Rembrandt_van_Rijn.jpg" alt="">
                <div class="overlay">
                    <h2>La ronda de noche</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Rembrandt_-_The_Anatomy_Lesson_of_Dr_Nicolaes_Tulp.jpg/1200px-Rembrandt_-_The_Anatomy_Lesson_of_Dr_Nicolaes_Tulp.jpg" alt="">
                <div class="overlay">
                    <h2>Lección de anatomía del Dr. Nicolaes Tulp</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="https://i.pinimg.com/originals/70/c3/43/70c343d09b9bd40bdcced549fdf99e33.jpg" alt="">
                <div class="overlay">
                    <h2>El retorno del hijo pródigo</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="https://www.ecured.cu/images/thumb/3/38/La_novia_judia.jpg/250px-La_novia_judia.jpg" alt="">
                <div class="overlay">
                    <h2>La novia judía</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="https://sooluciona.com/wp-content/uploads/2020/08/Qui%C3%A9n-fue-el-pintor-de-La-tormenta-en-el-mar-de-Galilea.jpg" alt="">
                <div class="overlay">
                    <h2>La tormenta en el mar de Galilea</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="https://charlarte.com/wp-content/uploads/2019/07/rwmbrandt-1-1024x692.jpg" alt="">
                <div class="overlay">
                    <h2>Los síndicos de los pañeros</h2>
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