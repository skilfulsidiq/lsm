
@include('layouts.templates.head')
<body class="">

<div class="wrapper">
    <section class="login-content">
         <div class="container h-100">
            <div class="row align-items-center justify-content-center h-100">
               <div class="col-md-5">
                  <div class="card p-3">
                     <div class="card-body">
                        <div class="auth-logo"> LSM
                           {{-- <img src="https://templates.iqonic.design/datum/html/assets/images/logo.png" class="img-fluid rounded-normal darkmode-logo d-none" alt="logo">
                           <img src="https://templates.iqonic.design/datum/html/assets/images/logo-dark.png" class="img-fluid rounded-normal light-logo" alt="logo"> --}}
                        </div>
                        @yield('content')
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>
         @include('layouts.templates.script')
     @livewireScripts
</body>
</html>
