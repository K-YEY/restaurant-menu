@props(['PAGE_TITLE' => 'Title'])

<head>
    <meta charset="UTF-8">
    <title>{{ $PAGE_TITLE }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            darkMode: 'class',
        }
    </script>

</head>
