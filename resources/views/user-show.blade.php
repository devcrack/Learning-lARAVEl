@include('header')
<div
@if(!empty($user_name))
    <h2>Detalle de Usuario:</h2>
    <p>Usuario:{{$user_name}} id = {{$user_id}}</p>
@else
    <h1>Usuario inexistente</h1>
@endif