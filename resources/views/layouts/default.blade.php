<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    {{-- style --}}
    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
</head>

<body>
   {{-- sidebar --}}
   @include('includes.sidebar')
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
      {{-- navbar --}}
        @include('includes.navbar')
        <div class="content">
         {{-- content --}}
         @yield('content')
        </div>
        <div class="clearfix"></div>
    </div>
   

    {{-- Scripts --}}
    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
</body>
</html>
