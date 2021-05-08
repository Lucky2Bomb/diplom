<x-layouts.app title="Мой профиль">
    <x-slot name="content">
        <x-title-header title="Мой профиль" />
        <div class="container">
            {{-- {{dd($profile)}} --}}
            <ul>
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
            </ul>
        </div>
    </x-slot>
</x-layouts.app>
