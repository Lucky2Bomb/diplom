<x-layouts.admin-panel header="Список всех публикаций" subtitle="здесь можно увидеть все публикации пользователей.">
    <x-slot name="content">
        <div class="p-5">
            <div class="row">
                <div class="col-md">
                    @include('components.tables.table-publications', [
                        'rows'                  => $publications->items(),
                        'destroyRouteName'      => 'admin-panel.publications.destroy',
                        'publicationsRouteName' => 'publications.show'])
                    <div class="d-flex justify-content-center">{{ $publications->links() }} </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-layouts.admin-panel>
