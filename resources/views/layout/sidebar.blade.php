<!-- app.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMBASE | @yield('title')</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- Custom CSS -->
    <style>
        body {
            padding-top: 56px; /* Adjust based on your top bar height */
            background-color: #e9ecef;
        }

        .navbar {
            background-color: #3C3D37; 
        }

        #embase-header {
            padding: 3px; /* Adjust padding as needed */
            color: white; /* Text color */
            text-align: center;
        }

        .sidebar {
            height: 100vh;
            background-color: #ffffff; /* White background color for the sidebar */
            color: grey;
            width: 210px;
            position: fixed;
            top: 56px;
            left: 0;
            bottom: 0;
            overflow-y: auto;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1); /* Adding shadow on the right side */
        }

        .sidebar-header {
            background-color: #ffffff; /* Green background color for the top of the sidebar */
            padding: 15px;
            color: grey;
        }

        .sidebar a {
            color: grey;
        }

        .content {
            padding: 5.0rem;
            margin-left: 210px;
        }
    </style>

    @yield('custom-styles') <!-- In case you need page-specific styles -->
</head>

<body>
    <!-- Top Bar -->
    <nav class="navbar navbar-dark fixed-top">
        <div id="embase-header">
            <a class="navbar-brand" href="#">DASHBOARD ADMIN MOZARELLA</a>
        </div>
    </nav>

    <div class="d-flex">
        <nav class="sidebar">
            <div class="sidebar-header">
                Menu 
            </div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/dashboard_admin') }}">
                        <i class="fas fa-home"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/landingpage') }}">
                        <i class="fas fa-globe"></i> Landing Page
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/tentang_admin') }}">
                        <i class="fas fa-info-circle"></i> Tentang Kami
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/produk') }}">
                        <i class="fas fa-box"></i> Data Produk
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/menu') }}">
                        <i class="fas fa-utensils"></i> Kreasi Menu <!-- Ubah menjadi ikon sendok/garpu -->
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pesan">
                        <i class="fas fa-envelope"></i> Data Pesan Masuk
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <div class="content">
            @yield('content')
        </div>
    </div>

    <!-- Bootstrap JavaScript and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    @yield('scripts') <!-- Ensures that scripts added in other views are executed -->
</body>

</html>
