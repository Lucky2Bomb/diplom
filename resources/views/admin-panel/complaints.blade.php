<x-layouts.admin-panel header="Жалобы" subtitle="не рассмотренные жалобы">
    <x-slot name="content">
        <div class="p-5">
            <div class="row">
                <div class="col-md">
                    @include('components.tables.table-complaints', [
                    'rows' => $complaints,
                    'publicationsRouteName' => 'publications.show'
                    ])
                    <div class="d-flex justify-content-center">{{ $complaints->links() }} </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-layouts.admin-panel>
