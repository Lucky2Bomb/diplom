<x-layouts.app
    title="{{$another ? $profile->name . ' ' . $profile->surname . ' ' . $profile->patronymic : 'Мой профиль'}}">
    <x-slot name="content">
        <x-title-header
            title="{{$another ? $profile->name . ' ' . $profile->surname . ' ' . $profile->patronymic : 'Мой профиль'}}" />
        <div class="container">
            <style>
                .profile_background_image {
                    max-width: 100%;
                    width: 100%;
                    height: 250px;
                    object-fit: cover;
                }

                .profile_card {
                    position: relative;
                    top: -45px;
                    border-radius: 0;
                }

                .profile_avatar {
                    max-width: 100%;
                    width: 150px;
                    height: 150px;
                    object-fit: cover;
                }
            </style>

            <div class="row">
                <img class="profile_background_image"
                    src='{{$profile->avatar ? "/background_image/{$profile->header_background_image}" : "/no-image.jpg"}}' alt="" srcset="">
            </div>
            <div class="row">
                <div class="col">
                    <div class="card text-center profile_card">
                        <div class="card-body pt-4 pl-5 pr-5">
                            <img src='{{$profile->avatar ? "/avatar/{$profile->avatar}" : "/no-image.jpg"}}'
                                class="profile_avatar " alt="">
                            <h5 class="card-title"><strong>{{$profile->surname}} {{$profile->name}}
                                    {{$profile->patronymic}} </strong></h5>
                            <h6 class="text-black-50">{{$profile->position_name}}</h6>
                            @if ($profile->group_id)
                            <a href="{{route('group.show', $profile->group_id)}}">{{$profile->group->name}}</a>
                            @endif
                            {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">

                    <ul class="nav nav-tabs pt-2" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                aria-controls="profile" aria-selected="false">@if(!$another)мой@endif блог </a>
                        </li>
                        @auth
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="about-tab" data-toggle="tab" href="#about" role="tab"
                                aria-controls="about" aria-selected="true">@if(!$another) обо мне @else о пользователе
                                @endif</a>
                        </li>
                        @endauth
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="profile" role="tabpanel"
                            aria-labelledby="profile-tab">
                            @if(!$another)
                            <div class="text-center p-4">
                                <a class="btn btn-primary" href="{{ route('publications.create')}}">новый пост</a>
                            </div>
                            @endif

                            @if(!$publications->total())
                            <div class="text-center p-4">
                                Нет ни одной записи...
                            </div>
                            @endif

                            @foreach ($publications as $publication)
                            @include('components.cards.preview-publications', ['item' => $publication])
                            @endforeach
                            {{-- <div class="card">
                                <div class="card-text text-center ">
                                    нет ни одного поста...
                                </div>
                            </div> --}}

                            <div class="d-flex justify-content-center">{{ $publications->links() }} </div>
                        </div>

                        @if(!$another)
                        <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                            home
                        </div>
                        @endif
                        @auth
                        <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                            <ul>
                                <li><b>идентификатор: </b>{{$profile->id}}</li>
                                <li><b>отчество: </b>{{$profile->patronymic}}</li>
                                <li><b>фамилия: </b>{{$profile->name}}</li>
                                <li><b>имя: </b>{{$profile->surname}}</li>
                                <li><b>логин: </b>{{$profile->login}}</li>
                                <li><b>vk: </b>{{$profile->vk}}</li>
                                <li><b>ok: </b>{{$profile->ok}}</li>
                                <li><b>facebook: </b>{{$profile->facebook}}</li>
                                <li><b>telegram: </b>{{$profile->telegram}}</li>
                                <li><b>номер телефона: </b>{{$profile->phone_number}}</li>
                                <li><b>должность: </b>{{$profile->position_name}}</li>
                                <li><b>группа: </b>@if ($profile->group_id) <a
                                        href="{{route('group.show', $profile->group_id)}}">{{$profile->group->name}}</a>@endif
                                </li>
                                <li><b>дата регистрации: </b>{{$profile->created_at}}</li>
                                <li><b>роли:</b> @foreach ($profile->getRoleNames() as $role)
                                    <span>{{$role . ', '}} </span>
                                @endforeach </li>
                            </ul>
                        </div>
                        @endauth
                    </div>
                </div>
            </div>

            {{-- <ul>
                <li><b>id: </b>{{$profile->id}}</li>
            <li><b>name: </b>{{$profile->name}}</li>
            <li><b>surname: </b>{{$profile->surname}}</li>
            <li><b>patronymic: </b>{{$profile->patronymic}}</li>
            <li><b>slug: </b>{{$profile->slug}}</li>
            <li><b>login: </b>{{$profile->login}}</li>
            <li><b>email: </b>{{$profile->email}}</li>
            <li><b>email_verified_at: </b>{{$profile->email_verified_at}}</li>
            <li><b>password: </b>{{$profile->password}}</li>
            <li><b>avatar: </b>{{$profile->avatar}}</li>
            <li><b>header_background_image: </b>{{$profile->header_background_image}}</li>
            <li><b>vk: </b>{{$profile->vk}}</li>
            <li><b>ok: </b>{{$profile->ok}}</li>
            <li><b>facebook: </b>{{$profile->facebook}}</li>
            <li><b>telegram: </b>{{$profile->telegram}}</li>
            <li><b>phone_number: </b>{{$profile->phone_number}}</li>
            <li><b>position_name: </b>{{$profile->position_name}}</li>
            <li><b>group_id: </b>{{$profile->group_id}}</li>
            <li><b>remember_token: </b>{{$profile->remember_token}}</li>
            <li><b>created_at: </b>{{$profile->created_at}}</li>
            <li><b>updated_at: </b>{{$profile->updated_at}}</li>
            <li><b>deleted_at: </b>{{$profile->deleted_at}}</li>
            </ul> --}}
        </div>
    </x-slot>
</x-layouts.app>
