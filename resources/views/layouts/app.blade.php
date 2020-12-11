<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    <link
      rel="icon"
      href="/images/logo.svg"
      sizes="32x32"
    />

    {{-- Style --}}
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')

  </head>

  <body>
    {{-- Navbar --}}
    @include('includes.navbar')

    {{-- Page Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('includes.footer')

   {{-- Script --}}
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')

  </body>
</html>
