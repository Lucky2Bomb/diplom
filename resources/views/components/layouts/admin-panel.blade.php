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
                    <h6
                        class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-white">
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
                                <x-bi-person-bounding-box width="24" height="24" />
                                роли
                            </a>
                        </li>
                    </ul>
                    @endrole

                    @role('ADMIN|GROUPS')
                    <h6
                        class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-white">
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
                            <a class="nav-link active" href="{{route('admin-panel.university.index') }}">
                                <x-bi-building width="24" height="24" />
                                университеты
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('admin-panel.faculty.index') }}">
                                <x-bi-book width="24" height="24" />
                                факультеты
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('admin-panel.specialty.index') }}">
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
                            <a class="nav-link" href="{{ route('news.create') }}">
                                <x-bi-file-earmark-text width="24" height="24" />
                                Опубликовать новость...
                            </a>
                        </li>
                        @endrole
                        @role('ADMIN|PUBLICATIONS')
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <x-bi-flag width="24" height="24"/>
                                Жалобы
                            </a>
                        </li>
                        @endrole
                    </ul>
                    @endrole
                </div>
            </div>
            <div class="col-md-10 scrollit">
                <div class="p-5">
                    @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert"">
                        {{ session('status') }}

                        <button type=" button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                    <h1>{{$header}}</h1>
                    <h4>{{$subtitle}}</h4>
                    {{$content}}
                </div>
            </div>
        </div>
    </div>
</body>

</html>
