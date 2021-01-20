@include('layout.head')
  <body>
    @include('Partials.header')
    <main>
      @yield('content')
    </main>
    @include('Partials.footer')
  </body>
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="/js/app.js"></script>
</html>