@include('layouts.templates.head')
<body class="">
    <div id="app">
         <div id="loading">
          <div id="loading-center">
          </div>
    </div>
        <div class="wrapper">
            @include('layouts.templates.sidebar')
            @include('layouts.templates.header')
        </div>

        <div class="content-page">
            <div class="container-fluid">
                 @yield('content')
            </div>
        </div>

         @include('layouts.templates.footer')
    </div>
    @include('layouts.templates.script')
     @livewireScripts
</body>
</html>
