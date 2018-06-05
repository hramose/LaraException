<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Exo|Press+Start+2P" rel="stylesheet">
<style media="screen">
    body{
        background-color: #F3F3F3;
        overflow: hidden;
    }
    div{
        padding: .5%;
        width: 100%;
    }
    h1{
        font-size: 600%;
    }
    h1, h3{
        font-family: 'Press Start 2P', cursive;
        text-align: center;

    }
    h2{
        font-size: 300%;
        text-align: center;
        color: #c0392b;
    }
    p{
        font-family: 'Exo', sans-serif;
        text-align: justify;
    }
    .con{
        width: 100%;
        height:100vh;
        display: flex;
        align-items: center;
        vertical-align: middle;
    }
    img{
        display: block;
        margin: auto;
    }
    .boton{
        background-color: #2980b9;
        padding: 1%;
        border-radius: 20px;
        width: 30%;
        color:#fff;
        border: none;
        display: block;
        margin: auto;
        box-shadow: 1px 2px 3px rgba(0,0,0,.5);
    }
    .credit{
        text-align: center;
        color: rgba(0, 0, 0, 0.1);
        position: absolute;
        bottom: 1px;
    }
    .cen{
        display: flex;
        justify-content: center;
    }
</style>
<div class="row con">
    <div class="col-md-4">
        <img alt="Responsive image" src="data:image/gif;base64,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"/>
    </div>
    <div class="col-md-8">
        <h1>Error <strong>{{$debugCode}}</strong></h1>

        <h2><strong>{{$error}}</strong></h2>
        <div class="container cen">
            <p><i>{{$details}}</i></p>
        </div>
        <a href="{{$routeBack}}"><button type="button" name="button" class="boton">Volver</button></a>
    </div>
    <p class="credit"><i>Desarrollado por FuriosoJack, Diseñado por codwelt.com</i></p>    </div>

</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
