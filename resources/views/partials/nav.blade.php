<div class="navigation">
    <div class="logo_content">
        <div class="logo">
            <img src="{{ asset('img/Escudo.png') }}" width="30" height="30" alt="Logo">
            <div class="logo_name">Deogracias Cardona</div>
        </div>
        <i class="fas fa-bars" id="btn_menu"></i>
    </div>
        @include('admin.partials.links');
    <div class="profile_content">
        <div class="profile">
            <div class="profile_details">
                @if (auth()->user())
                    <img src="{{ asset('img/user.png') }}" alt="Foto Usuario">
                @else
                    <img src="{{ asset('img/user.png') }}" alt="Foto Usuario">
                @endif
                <div class="name_job">
                    <div class="name">{{ auth()->user()->infoUsuario->nombre_1 }} {{ auth()->user()->infoUsuario->apellido_1 }}</div>
                    <div class="job">{{ auth()->user()->roles->nombre }}</div>
                </div>
            </div>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <a href="#" onclick="this.closest('form').submit()"><i class="fas fa-sign-out-alt" id="log_out"></i></a>
            </form>
        </div>
    </div>
</div>
