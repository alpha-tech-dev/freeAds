<li class="nav-item dropdown bg-success" style="-webkit-border-radius: 50px;-moz-border-radius: 50px;border-radius: 50px;">
    <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark font-weight-bolder" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        <i class="fi-cnsuxl-user-circle-solid mr-2 text-white" style="font-size: 1.2em;"></i>{{ Auth::user()->name }}
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        @role('admin')
        <a class="dropdown-item" href="{{ route('admin.index') }}">Admin panel</a>
        <a class="dropdown-item" href="{{ route('profile.index', Auth::user()->name) }}">My profile</a>
        @endrole
        @role('client')
        <a class="dropdown-item" href="{{ route('profile.index', Auth::user()->name) }}">My profile</a>
        @endrole
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
           document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        @auth
        @endauth
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</li>
<li class="nav-item dropdown">
</li>



