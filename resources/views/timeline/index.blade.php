<x-layouts.app title="Моя лента новостей">
    <x-slot name="content">
        <x-title-header title="Моя лента новостей" />
        <div class="container">
            @foreach ($publications as $publication)
            @include('components.cards.timeline-preview', ['item' => $publication])
            @endforeach
            @if (count($publications) < 1)
                нет новостей...
            @endif
            <div class="d-flex justify-content-center">{{ $publications->links() }} </div>
        </div>
    </x-slot>
</x-layouts.app>
