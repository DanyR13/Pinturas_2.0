@extends('layouts.master')
@section('title', $title)
@section('header')
{{$header}}
@stop
@section('navbar')
    @parent      
@stop
@section('content')
<h1>Vincent van Gogh</h1>
<img src="https://www.biografiasyvidas.com/biografia/g/fotos/gogh_autorretrato_1890_1.jpg" border="1" alt="Este es el ejemplo de un texto alternativo" width="250" height="250">
<h3>Biografia:</h3>
<p>Vincent van Gogh, por quien el color era el símbolo principal de expresión, nació el 30 de marzo de 1853 en Groot-Zundert de Holanda. El hijo de un pastor, criado en una atmósfera religiosa y refinada, Vincent era muy emocional y no tenía confianza en sí mismo. Entre 1860 y 1880, cuando decidió finalmente ser artista, Van Gogh había tenido dos amores inadecuados y infelices y había trabajado sin éxito como empleado en una librería, vendedor de arte, y predicador en Le Borinage (una región aburrida de minera en Bélgica), donde fue despedido por “exceso de celo.”<br>

<div class="galeria">
        <h1>Pinturas</h1>
        <div class="linea"></div>
        <div class="contenedor-imagenes">
            <div class="imagen">
                <img src="https://www.salirconarte.com/wp-content/uploads/2017/06/orig_64571.jpg" alt="">
                <div class="overlay">
                    <h2>La noche estrellada</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="https://static.t13.cl/images/original/2020/01/1579528729-autorretrato-van-gogh.jpg" alt="">
                <div class="overlay">
                    <h2>Autorretrato</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/b1/Van-willem-vincent-gogh-die-kartoffelesser-03850.jpg" alt="">
                <div class="overlay">
                    <h2>Los comedores de patatas</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/21/Vincent_Willem_van_Gogh_-_Cafe_Terrace_at_Night_%28Yorck%29.jpg" alt="">
                <div class="overlay">
                    <h2>Terraza de café por la noche</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="https://historia-arte.com/_/eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpbSI6WyJcL2FydHdvcmtcL2ltYWdlRmlsZVwvdmluY2VudC12YW4tZ29naC1jYXNhLWFtYXJpbGxhLmpwZyIsInJlc2l6ZSw4MDAiXX0.v02inq4ytRwtF5NKmhluNFf2gopnBKVOJruOa1rU8zE.jpg" alt="">
                <div class="overlay">
                    <h2>La Casa Amarilla</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="https://3minutosdearte.com/wp-content/uploads/2018/10/Van-Gogh-Trigal-con-cuervos-1890-mini.jpg" alt="">
                <div class="overlay">
                    <h2>Trigal con cuervos</h2>
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