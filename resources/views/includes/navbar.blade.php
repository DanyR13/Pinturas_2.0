<nav style="background-color: #804A75">
        @section('navbar')
            <div id="menu">
            <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Pintores</a>
            <div id="submenu">
                <ul>
            <li><a href="{{action('PruebasController@picasso')}}">Pablo Picasso</a>
            <li><a href="{{action('PruebasController@van')}}">Vincent van Gogh</a>
            <li><a href="{{action('PruebasController@vinci')}}">Leonardo da Vinci</a>
            <li><a href="{{action('PruebasController@rembr')}}">Rembrandt</a><br>
            <li><a href="{{action('PruebasController@kahlo')}}">Frida Kahlo</a>
                </ul>
            </div>
            </li>
            </ul>
            </div>
        @show

    </nav>
