<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Admin Dashboard</title>
    @include('includes.links')
</head>

<body>

    <div class="main-wrapper">
        @include('includes.header')
        {{-- @include('includes.sidebar') --}}

        <div class="page-wrapper">
            <div class="content container-fluid">
                @yield('content')
            </div>

            {{-- <footer>
                <p>Copyright © 2025 Travel the world.</p>
            </footer> --}}
        </div>
    </div>

    @include('includes.scripts')
</body>

</html>
