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
    @section('name')
    <p>Min side 3</p>
    @section
</body>
</html>