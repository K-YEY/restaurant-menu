<x-admin.layout.app>
    <x-slot name="slot">
        @if (Request::routeIs('admin.index'))
        Hello ADmin
        @endif
    @include('admin.ui.auth')

    </x-slot>
</x-admin.layout.app>
