<x-layouts.app title="Поиск людей">
    <x-slot name="content">
        <x-title-header title="Поиск людей" />
        <div class="container">
            <form method="get" action="{{ route('people-search.search') }}">
                <div class="form-row pt-2">
                    <div class="form-group col-md-10">
                        <input type="text" minlength="2" required class="form-control" name="search"
                            placeholder="Поиск людей...">
                    </div>
                    <div class="form-group col-md-2">
                        <button type="submit" class="btn btn-primary btn-block">Поиск</button>
                    </div>
                </div>
            </form>
            @include('components.users.users-list', ['users' => $users])
            <div class="d-flex justify-content-center">{{ $users->links() }} </div>
        </div>
    </x-slot>
</x-layouts.app>
