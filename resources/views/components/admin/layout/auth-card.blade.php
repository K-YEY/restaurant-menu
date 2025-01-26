<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
        <div class="px-6 py-4">
            <div class="flex justify-center mx-auto">
                <img class="w-auto h-16 sm:h-16" src="{{asset('admin/img/logo.png')}}" alt="Logo">
            </div>

            <h3 class="mt-3 text-xl font-medium text-center text-gray-600 dark:text-gray-200">{{ $title }}</h3>

            <p class="mt-1 text-center text-gray-500 dark:text-gray-400">{{ $description }}</p>

            <form action="{{ $action }}" method="POST">
                @csrf
                @if ($showEmail)
                    <div class="w-full mt-4">
                        <input
                            class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300"
                            type="email" name="email" placeholder="البريد الالكتروني" aria-label="Email Address" />
                    </div>
                @endif

                @if ($showPassword)
                    <div class="w-full mt-4">
                        <input
                            class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300"
                            type="password" name="password" placeholder="كلمة المرور" aria-label="Password" />
                    </div>
                @endif

                <div class="flex items-center justify-between mt-4">
                    @if ($linkText ?? false)
                        <a href="{{ $linkHref }}"
                            class="text-sm text-gray-600 dark:text-gray-200 hover:text-gray-500">
                            {{ $linkText }}
                        </a>
                    @endif

                    <button type="submit"
                        class="px-6 py-2 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50 ">
                        {{ $buttonText }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
