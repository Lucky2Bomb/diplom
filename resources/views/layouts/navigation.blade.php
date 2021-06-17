<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ffffff;">
    {{-- <a class="navbar-brand" href="#">Блог платформа студенческого сообщества Бирского филиала БашГУ</a> --}}
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('news')}}">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('people-search.index')}}">Поиск людей</a>
                </li>

                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('group')}}">Группы</a>
                </li>
                @endauth

                @auth
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('timeline.index')}}">Моя лента</a>
                </li>
                @endauth
            </ul>

            <ul class="navbar-nav ml-auto">
                @guest
                @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Войти</a>
                </li>
                @endif

                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Регистрация</a>
                </li>
                @endif
                {{-- <span class="badge badge-primary badge-pill">2</span> --}}

                @else
                <span class="dropdown my-2 my-lg-0">
                    {{-- <li class="nav-item  "> --}}
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->login }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('profile')}}">{{ __('Профиль') }}</a>
                        <a class="dropdown-item" href="{{route('profile.edit')}}">{{ __('Настройки') }}</a>
                        @role('ADMIN|NEWS|GROUPS|USERS-MANAGEMENT|PUBLICATIONS')
                        <a class="dropdown-item" href="{{route('admin-panel')}}">{{ __('Панель управления') }}</a>
                        @endrole
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Выйти') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </span>
                @endguest
            </ul>
        </div>
    </div>
</nav>
