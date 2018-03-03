@include('header')
    <div class="row mt-3">
        <div class="col-8">
            <h1>{{$title}}</h1>
            @if(!empty($list_users))
                <ul>
                    @foreach ($list_users as $user)
                        <li> {{$user}} </li>
                    @endforeach
                </ul>
            @else
                <p>No hay usuarios registrados</p>
            @endif
        </div>
        <div class="col-4">
            @include('sidebar')
        </div>
    </div>
@include('footer')
