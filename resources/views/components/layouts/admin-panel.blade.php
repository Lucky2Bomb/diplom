<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$title ?? "Панель управления"}}</title>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body style="height: calc(100vh - 38px)">
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <span class="navbar-brand col-md-3 col-lg-2 mr-0 px-3">Панель управления</span>
    </nav>
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div id="sidebarMenu" class="col-md-2 bg-dark text-white fixed sidebar-sticky">
                <div class="sidebar-sticky pt-3">
                    @role('ADMIN|USERS-MANAGEMENT')
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-white">
                        <span>Управление пользователями</span>

                    </h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <x-bi-person width="24" height="24" />
                                пользователи
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <x-bi-person width="24" height="24" />
                                роли
                            </a>
                        </li>
                    </ul>
                    @endrole

                    @role('ADMIN|GROUPS')
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-white">
                        <span>Управление группами</span>

                    </h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('group.create') }}">
                                <x-bi-person-plus width="24" height="24" />
                                создать группу
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('admin-panel.user-and-group.index') }}">
                                <x-bi-people-fill width="24" height="24" />
                                пользователи и группы
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('group.create') }}">
                                <x-bi-building width="24" height="24" />
                                университеты
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('group.create') }}">
                                <x-bi-book width="24" height="24" />
                                факультеты
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('group.create') }}">
                                <x-bi-person-lines-fill width="24" height="24" />
                                специальности
                            </a>
                        </li>

                    </ul>
                    @endrole

                    @role('ADMIN|PUBLICATIONS|NEWS')
                    <h6
                        class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-white">
                        <span>Управление публикациями</span>

                    </h6>
                    <ul class="nav flex-column mb-2">
                        @role('ADMIN|PUBLICATIONS|NEWS')
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-file-text">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                                Создать новость...
                            </a>
                        </li>
                        @endrole
                        @role('ADMIN|PUBLICATIONS')
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-file-text">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                                Жалобы
                            </a>
                        </li>
                        @endrole
                    </ul>
                    @endrole
                </div>
            </div>
            <div class="col-md-10 scrollit">
                {{$content}}
            </div>
        </div>
    </div>
</body>

</html>
