<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" class="light">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title>{{ config('app.name', 'Shipcizer') }}</title>
  <link rel="icon" type="image/png" href="{{asset('dashboard/assets/images/logo/favicon.svg')}}">
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('dashboard/assets/css/rt-plugins.css')}}">
  <link rel="stylesheet" href="{{asset('dashboard/assets/css/app.css')}}">

  <!-- Start : theme-store js -->
  <script src="{{asset('dashboard/assets/js/store.js')}}" sync></script>
  <!-- End : theme-store js -->
</head>

<body class=" font-inter dashcode-app" id="body_class">
    <main class="app-wrapper">
        <livewire:layout.admin.sidebar />
        <div class="flex flex-col justify-between min-h-screen">
            <div>
                <livewire:layout.admin.header />
                {{ $slot }}
            </div>
            <livewire:layout.admin.footer />
        </div>
    </main>
    <!-- scripts -->

<script src="{{asset('dashboard/assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('dashboard/assets/js/rt-plugins.js')}}"></script>
<script src="{{asset('dashboard/assets/js/app.js')}}"></script>
</body>

</html>