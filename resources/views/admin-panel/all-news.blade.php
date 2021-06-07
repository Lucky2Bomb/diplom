<x-layouts.admin-panel header="Список новостей" subtitle="здесь можно увидеть все новости университета.">
    <x-slot name="content">
        <div class="p-5">
            <div class="row">
                <div class="col-md">
                    @include('components.tables.table-publications', [
                        'rows'                  => $news->items(),
                        'destroyRouteName'      => 'admin-panel.news.destroy',
                        'publicationsRouteName' => 'news.show'])
                    <div class="d-flex justify-content-center">{{ $news->links() }} </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-layouts.admin-panel>
