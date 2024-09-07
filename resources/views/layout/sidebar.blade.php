<!-- app.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMBASE | @yield('title')</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.tiny.cloud/1/u7bdq12p91l1m4t7oqos07q1xuiaroyxb30qw5ntv5ctmq8u/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">


    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 56px; /* Adjust based on your top bar height */
        background-color: #e9ecef;
    }

    .navbar {
        background-color: #9ACE8B; /* Light green background color for the entire top bar */
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
        right: 10;
        top: 56px;
        left: 0;
        bottom: 100;
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
        margin-left: 200px;
        margin-right: 10; /* Set the right margin to 0 */
    }
</style>

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

                    <a class="nav-link" href="{{ url('/landing_page') }}">

                    <i class="fas fa-home"></i> Landing Page 
                    </a>
                </li>
                <li class="nav-item">

                    <a class="nav-link" href="{{ url('/produk') }}">

                        <i class="fas fa-building"></i> Data Produk
                    </a>
                </li>
                <li class="nav-item">

                    <a class="nav-link" href="{{ url('/menu') }}">

                        <i class="fas fa-address-card"></i> Kreasi Menu
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/hasil">
                        <i class="fas fa-address-card"></i> Data Perankingan
                    </a>
                
                <!-- Add more links as needed -->
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
</body>

</html>
