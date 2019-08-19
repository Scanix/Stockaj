@guest
    <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
    </li>
@else
    <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
        <a class="nav-link" href="/">{{ __('Locations') }}</a>
    </li>
    @if(Auth::user()->admin)
        <li class="nav-item {{ (request()->is('register')) ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Add user') }}</a>
        </li>
        <li class="nav-item {{ (request()->is('persons')) ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('persons.index') }}">{{ __('Persons') }}</a>
        </li>
        <li class="nav-item {{ (request()->is('tools')) ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('tools.index') }}">{{ __('Tools') }}</a>
        </li>
        <li class="nav-item {{ (request()->is('reports')) ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('reports') }}">{{ __('Reports') }}</a>
        </li>
    @endif
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </li>
@endguest