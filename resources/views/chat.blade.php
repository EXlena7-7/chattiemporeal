<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

    <title>Sala Chat</title>


    <style>
        .list-group{
            overflow-y: scroll;
            height: 200px;
        }
    </style>
</head>
<body>

    <div class="px-4 sm:px0">
        <h3 class="text-lg text-gray-900">Chat Global</h3>
        <p class="text-sm text-gray-600">¡Bienvenido Administrador!</p>
    </div>


    <div class="container">
        <div id="app" class="row" >
            <div class="offset-4 col-4 offset-sm-1 col-sm-10">
                <li class="list-group-item active" aria-current="true">Sala de Chat
                <span class="badge badge-pill badge-danger"> @{{ numberOfUsers }}</span></li>


                <div class="badge badge-pill badge-primary"> @{{ typing }}</div>


                <ul class="list-group" v-chat-scroll>

                <example-component
                v-for="value, index in chat.message"
                :key=value.index
                :color=chat.color[index]
                :user=chat.user[index]
                :time=chat.time[index]
                >
                @{{ value }} </example-component>

                </ul>
            <input type="text" class="form-control" placeholder="Escribe tu Mensaje..." v-model='message' v-on:keyup.enter='send'>
            </div>

        </div>
    </div>

    <script src="{{ asset('js/app.js')}}"></script>

</body>
</html>

