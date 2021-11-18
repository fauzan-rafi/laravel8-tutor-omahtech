<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Asset -->
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">

    <title>Post</title>
</head>
<body>

    <div id="name" class="container">
      @include('layouts.navigation')

      <main class="py-4">

        @yield('content')

      </main>

    </div>


    <!-- JS Asset -->
    <script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>