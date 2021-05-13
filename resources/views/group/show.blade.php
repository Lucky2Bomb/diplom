<x-layouts.app title="{{$group->name}}">
    <x-slot name="content">
        <x-title-header title="{{$group->name}}" />
        <div class="container">
            <h2>{{$group->name}}</h2>
            <ul>
            @foreach ($group->users as $user)
                <li>{{$user->login}}</li>
            @endforeach
            </ul>

        </div>
    </x-slot>
</x-layouts.app>
