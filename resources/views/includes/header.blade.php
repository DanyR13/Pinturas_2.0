<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <h2><title>@yield('title')</title><h2>
</head>
<style>
 p{
color: #AFA5D5;
font-size: 60%;
}
h1{
    color: #29233E;
    text-align: center;
}
h3{
    color: #212125;
    text-align: center;
}
a{
  color: #29233E;
  font-style: italic;
  font-size: 150%;
}
img{
    display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;   
  width: 250px;
  height: 250px;
}
div{
    color:#322D48;
    font-size: 150%;
}
main{
    color:#AFA5D5;
    width: 1000px;
    margin: 10px auto;
}
nav{
    color:#AFA5D5;
    width: 1000px;
    margin: 10px auto;
    font-size: 40%;
}
footer{
    text-align: center;
}
#menu ul{
    list-style: none;
}
#menu ul li{
    position: relative;
    display: inline-block;
}
#menu ul li a{
    text-decoration: none;
    display: block;
    padding: 15px 20px;
   
}
#menu li a:hover{
    transition: all .3s;
    color: #2D2A2D;
}
#submenu{
    position: absolute;
    background: #0E0E0E;
    font-size: 50%;
    font-family: 'Open sans';
    padding: -3000%;
    width: 80%;
    text-align: center;
    visibility: hidden;
    opacity: 0;
    transition: opacity 1.5s;
   
    

}
#submenu ul li a{
    display: block;
    color: #fff;
    width: 60%;
    padding: 5px 1px;
    text-decoration: none;


}
#menu li:hover #submenu{
    visibility: visible;
    opacity: 1;
}
*{
    margin:0;
    padding: 0;
    box-sizing: border-box;
}

.galeria{
    font-family: 'open sans';
}

.galeria h1{
    text-align: center;
    margin:20px 0 15px 0;
    font-weight: 300;
}

.linea{
    border-top: 5px solid #AFA5D5;
    margin-bottom: 40px;
}

.contenedor-imagenes{
    display:flex;
    width: 85%;
    margin: auto;
    justify-content: space-around;
    flex-wrap: wrap;
    border-radius:3px;
}

.contenedor-imagenes .imagen{
    width: 32%;
    position: relative;
    height:250px;
    margin-bottom:5px;
    box-shadow: 0px 0px 3px 0px rgba(0, 0, 0, .75)
}
.imagen img{
    width: 100%;
    height:100%;
    object-fit: cover;
}

.overlay{
    position: absolute;
    bottom: 0;
    left: 0;
    background:rgba(0, 118, 192, 0.781) ;
    width: 100%;
    height: 0;
    overflow: hidden;
    transition: .5s ease;
}

.overlay h2{
    color: #fff;
    font-weight: 300;
    font-size:30px;
    position: absolute;
    top: 50%;
    left:50%;
    text-align: center;
    transform: translate(-50%, -50%);
}

.imagen:hover .overlay{
    height:100%;
    cursor: pointer;
}

@media screen and (max-width:1000px){
    .contenedor-imagenes{
        width: 95%;
    }
}

@media screen and (max-width:700px){
    .contenedor-imagenes{
        width: 90%;
    }
    .contenedor-imagenes .imagen{
        width: 48%;
    }
}

@media screen and (max-width:450px){
    h1{
        font-size:22px;
    }
    .contenedor-imagenes{
        width: 98%;
    }
    .contenedor-imagenes .imagen{
        width: 80%;
    }
}
</style>
<body style="background-color: #060528">
    <div style="background-color: #804A75">
            @section('header')
            
    </div>
    
