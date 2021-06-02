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
                    src='{{$profile->header_background_image ? "/background_image/{$profile->header_background_image}" : "/no-image.jpg"}}'
                    alt="" srcset="">
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
                            @auth
                            @if ($another)
                            @if (!isset($subscribe))
                            <form action="{{ route('profile.subscribe', ['id'=>$profile->id]) }}" method="get">
                                <button type="submit" class="btn btn-primary mt-2 w-100">подписаться</button>
                            </form>
                            @else
                            <form action="{{ route('profile.unsubscribe', ['id'=>$profile->id]) }}" method="get">
                                <button type="submit" class="btn btn-light mt-2 w-100">отписаться</button>
                            </form>
                            @endif
                            @endif
                            <div class="d-flex justify-content-around">
                                <span>подписчики: </span>
                                <span>{{$count_subscribers}} </span>
                            </div>
                            @endauth
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
                        @if(!$another)
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="notifications-tab" data-toggle="tab" href="#notifications"
                                role="tab" aria-controls="notifications" aria-selected="true">уведомления
                                @if($count_new_notifications > 0)<span
                                    class="badge badge-primary badge-pill">{{$count_new_notifications}}</span>@endif</a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="subscriptions-tab" data-toggle="tab" href="#subscriptions"
                                role="tab" aria-controls="subscriptions" aria-selected="true">подписки</a>
                        </li>
                        @endif
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
                        @if(!$another)
                        <div class="tab-pane fade" id="notifications" role="tabpanel"
                            aria-labelledby="notifications-tab">
                            @foreach ($notifications as $notification)
                            <div class="p-2">
                                На ваш комментарий ответили в посте
                                <b>#{{$notification->publication()->first()->id}}</b> <a
                                    href="{{ route('publications.show', ['id'=>$notification->publication()->first()->id]) }}">перейти</a>
                            </div>
                            <hr class="m-0 mb-2">
                            @endforeach
                            @if($count_new_notifications > 0)
                            <form action="{{ route('profile.notifications-check')}}" method="get">
                                <button type="submit" class="btn btn-primary">отметить всё прочитанным</button>
                            </form>
                            @else
                            <div class="text-center p-3">У вас нет новых уведомлений...</div>
                            @endif
                        </div>

                        <div class="tab-pane fade" id="subscriptions" role="tabpanel"
                            aria-labelledby="subscriptions-tab">
                            @foreach ($subscriptions as $subscription)
                            <div class="mt-1 d-flex justify-content-between">
                                <span>{{$subscription->user()->get()->first()->name . ' ' . $subscription->user()->get()->first()->surname}}
                                    <b>{{' [' . $subscription->user()->get()->first()->position_name . ']'}}</b>
                                </span>
                                <a class="btn btn-primary btn-sm"
                                    href="{{ route('profile.show', ['id'=>$subscription->user()->get()->first()->id]) }}">перейти
                                </a>
                            </div>
                            <hr class="mt-1">
                            @endforeach
                            @if (count($subscriptions) < 1) <div class="text-center p-3">Вы ещё ни на кого не
                                подписались</div>
                        @endif
                    </div>
                    @endif
                    @endauth
                </div>
            </div>
        </div>
    </x-slot>
</x-layouts.app>
