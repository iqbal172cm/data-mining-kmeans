<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>@yield('title', 'Admin')</title>

            @include('front.layouts.partial.meta')

            @yield('style')
        </head>
        <body>
            <div class="wrap">
                {{-- header --}}
                @include('front.layouts.partial.header')

                @yield('contents')

                {{-- footer --}}
                @include('front.layouts.partial.footer')

            </div>

            {{-- Java Script Libraries --}}
            @include('front.layouts.partial.script')

            {{-- @yield('registerscript') --}}
        </body>
    </html>