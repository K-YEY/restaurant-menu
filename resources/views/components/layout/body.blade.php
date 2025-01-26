<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <!-- Head Section -->
    <x-layout.head :PAGE_TITLE="'Hello'" />
</head>

<body>
    <!-- Preloader Section -->
    <div id="preloader" class="preloader">
        <div class="loader"></div>
    </div>

    @if (!Request::routeIs('thanks'))
        <!-- Sidebar Section -->
        <x-layout.sidebar />

        <!-- Header Section -->
        <x-layout.header />
    @endif

    <!-- Main Content Section -->
    <main>
        {{ $slot }}
    </main>

    @if (!Request::routeIs('thanks'))
        <!-- Footer Section -->
        <x-layout.footer />
    @endif

    <!-- Scripts Section -->
    <x-layout.script-js />
</body>

</html>
