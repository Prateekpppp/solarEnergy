<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')

    @yield('head')

</head>

<body>
   
   @include('includes.preloader')

   @include('includes.backtotop')

   @include('includes.mouseCursor')

   @include('includes.offCanvas')

   @include('includes.navbar')

      <div id="smooth-wrapper">
         <div id="smooth-content">

            @yield('body')

            @include('includes.footer')
         </div>
      </div>



   @include('includes.app_toast')
    
    <script src="{{ asset('/')}}js/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('/')}}js/viewport.jquery.js"></script>
    <script src="{{ asset('/')}}js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/')}}js/gsap.min.js"></script>
    <script src="{{ asset('/')}}js/ScrollTrigger.min.js"></script>
    <script src="{{ asset('/')}}js/ScrollSmoother.min.js"></script>
    <script src="{{ asset('/')}}js/ScrollToPlugin.min.js"></script>
    <script src="{{ asset('/')}}js/SplitText.min.js"></script>
    <script src="{{ asset('/')}}js/TextPlugin.js"></script>
    <script src="{{ asset('/')}}js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('/')}}js/jquery.waypoints.min.js"></script>
    <script src="{{ asset('/')}}js/jquery.counterup.min.js"></script>
    <script src="{{ asset('/')}}js/swiper-bundle.min.js"></script>
    <script src="{{ asset('/')}}js/jquery.meanmenu.min.js"></script>
    <script src="{{ asset('/')}}js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('/')}}js/wow.min.js"></script>
    <script src="{{ asset('/')}}js/main.js"></script>

    @include('includes.ajaxCalls')
    @include('includes.script')
    @yield('js')
</body>

</html>
