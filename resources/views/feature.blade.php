<!DOCTYPE html>
<html class="bg-gray-200 antialiased font-sans">
<head>
    <title>Wants</title>
    <link rel="stylesheet" href="/css/tailwind-ui.min.css">
</head>
<body>
<nav class="bg-gray-800">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
                <div class="flex-shrink-0 flex items-center">
                    <svg class="w-auto h-6 text-green-400 fill-current" viewBox="0 0 20 20">
                        <path
                            d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM6.7 9.29L9 11.6l4.3-4.3 1.4 1.42L9 14.4l-3.7-3.7 1.4-1.42z"/>
                    </svg>
                    <span class="ml-2 text-white font-bold text-xl">Wants</span>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline">
                        <a href="/"
                           class="px-3 py-2 rounded-md text-sm font-medium text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700">Features</a>
                        <a href="#"
                           class="ml-4 px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Categories</a>
                        <a href="#"
                           class="ml-4 px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Settings</a>
                    </div>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">
                    <button
                        class="p-1 border-2 border-transparent text-gray-400 rounded-full hover:text-white focus:outline-none focus:text-white focus:bg-gray-700"
                        aria-label="Notifications">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                        </svg>
                    </button>
                    <button
                        class="ml-3 max-w-xs flex items-center text-sm rounded-full text-white focus:outline-none focus:shadow-solid"
                        id="user-menu" aria-label="User menu" aria-haspopup="true" x-bind:aria-expanded="open">
                        <img class="h-8 w-8 rounded-full" src="/img/chandan.jpg" alt="Chandan Ojha"/>
                    </button>
                </div>
            </div>
            <div class="-mr-2 flex md:hidden">
                <button
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white"
                    x-bind:aria-label="open ? 'Close main menu' : 'Main menu'" x-bind:aria-expanded="open">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>
<header class="bg-white shadow">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
        <h2 class="py-6 text-3xl font-bold leading-tight text-gray-900">
            {{ $feature->title }}
        </h2>
        <div class="flex items-center">
            @if ($feature->status === 'Requested')
                <span class="bg-orange-400 rounded-full flex items-center justify-between px-6 py-2">
          <div class="flex items-center">
            <svg class="text-white fill-current w-4 h-4" viewBox="0 0 20 20"><path
                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
            <div class="ml-2 text-white text-sm font-medium">Requested</div>
          </div>
        </span>
            @elseif ($feature->status === 'Planned')
                <span class="bg-blue-500 rounded-full flex items-center justify-between px-6 py-2">
          <div class="flex items-center">
            <svg class="text-white fill-current w-4 h-4" viewBox="0 0 20 20"><path
                    d="M6 2l2-2h4l2 2h4v2H2V2h4zM3 6h14l-1 14H4L3 6zm5 2v10h1V8H8zm3 0v10h1V8h-1z"/></svg>
            <div class="ml-2 text-white text-sm font-medium">Planned</div>
          </div>
        </span>
            @elseif ($feature->status === 'Completed')
                <span class="bg-green-400 rounded-full flex items-center justify-between px-6 py-2">
          <div class="flex items-center">
            <svg class="text-white fill-current w-4 h-4" viewBox="0 0 20 20"><path
                    d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
            <div class="ml-2 text-white text-sm font-medium">Completed</div>
          </div>
        </span>
            @endif
        </div>
    </div>
</header>

<main class="max-w-6xl mx-auto py-12 sm:px-6 lg:px-8">
    @foreach ($feature->comments as $comment)
        <div
            class="px-10 py-8 bg-white shadow overflow-hidden sm:rounded-lg flex {{ $loop->first ? 'mb-8' : 'mb-4 max-w-4xl mx-auto' }}"
            id="comment-{{ $comment->id }}">
            <div class="whitespace-no-wrap pr-8 border-r">
                @if ($comment->user->photo)
                    <div class="w-12 h-12 rounded-full overflow-hidden bg-red-400">
                        <img class="object-cover w-full h-full" src="/img/users/{{ $comment->user->photo }}"/>
                    </div>
                @endif
                <div class="mt-2 text-sm leading-5 text-gray-900">
                    {{ $comment->user->name }}
                </div>
                <div class="text-xs leading-5 text-gray-500">
                    {{ $comment->created_at->format('M j, Y \a\t g:i a') }}
                </div>
                @if ($comment->isAuthor())
                    <div class="flex items-center text-yellow-400">
                        <svg class="fill-current w-3 h-3" viewBox="0 0 20 20">
                            <path
                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                        </svg>
                        <div class="ml-1 text-xs font-medium">Author</div>
                    </div>
                @endif
            </div>
            <div class="px-8 flex-1 flex items-center">
                {{ $comment->comment }}
            </div>
        </div>
    @endforeach
</main>
</body>
</html>
