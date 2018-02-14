   <!doctype html>
   <html lang="en">
   <head>
       <title> Listado  de Usuarios - Curso </title>
   </head>
   <body>
        <h1>{{$title}}</h1>
        <hr>
        @if(!empty($list_users))
            <ul>
                @foreach ($list_users as $user)
                    <li> {{$user}} </li>
                @endforeach
            </ul>
        @else
            <p>No hay usuarios registrados</p>
        @endif
   </body>
   </html>
