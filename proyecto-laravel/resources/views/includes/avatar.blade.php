@if(Auth::user()->image)
    <!-- Otra forma de acceder url('/user/avatar/'.Auth::user()->image) -->
    <div class="container-avatar">
        <img src="{{ route('user.avatar', ['filename' => Auth::user()->image]) }}" class="avatar">
    </div>
    <!-- Es mas practica esta manera porque si modifico la ruta, no afecta esto, es mas practico -->
@endif
