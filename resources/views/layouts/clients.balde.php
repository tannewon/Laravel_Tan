<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trang web cua toi </title>
</head>
<body>
    <header>
        Header
    </header>
    <main>
        <aside>
            @include('clients.block.sidebar')
        </aside>
           
        <div class="content">
            @yield('content')
        </div>
    </main>
    @include('clients.blocks.footer')
    <script src="{{asset('assets/clients/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/clients/js/custom.js')}}"></script>
    @yield('js')
    @stack('script')
    <footer>
        <h1>FOOTER</h1>
    </footer>

</body>
</html>