<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LSM</title>


      <!-- Favicon -->
      <link rel="shortcut icon" href="https://templates.iqonic.design/datum/html/assets/images/favicon.ico" />

      <link rel="stylesheet" href="{{asset('asset/css/one.css')}}">
      <link rel="stylesheet" href="{{asset('asset/css/plugin.css')}}">
         @livewireStyles

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
