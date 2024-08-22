<!-- app.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UK MUSTARIKA JAYA | @yield('title')</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- Font Google CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Sofia+Sans:ital,wght@0,1..1000;1,1..1000&display=swap" rel="stylesheet">


    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 80px; /* Adjust based on your top bar height */
        background-color: #e9ecef;
    }

    .navbar-dark {
            background-color:#FFFFFF; /* Adjust color if needed */
        }

        #embase-header {
            display: flex;
            align-items: center;
            justify-content: flex-start; /* Align items to the left */
            width: 100%;
        }

        #embase-header .navbar-brand {
            margin-right: 20px; /* Adjust spacing between items if needed */
            color: #343a40 
            
        }

        #embase-header .navbar-brand-menu-1 {
            margin-left: 1050px;
            margin-right: 20px; /* Adjust spacing between items if needed */
            color:  #343a40 ;
            font-family: 'Sofia', sans-serif;
            font-size: 18px;
            text-transform: uppercase;
            font-weight: 700;
            
        }

        #embase-header .navbar-brand-menu-2 {
            margin-right: 20px; /* Adjust spacing between items if needed */
            color:  #343a40 ;
            font-family: 'Sofia-pro', sans-serif;
            text-transform: uppercase;
            font-size: 18px;
            font-weight: 700;
            
        }

        #embase-header .navbar-brand-menu-3 {
            margin-right: 20px; /* Adjust spacing between items if needed */
            color:  #343a40 ;
            font-family: 'Sofia-pro', sans-serif;
            text-transform: uppercase;  
            font-size: 18px;
            font-weight: 700;
        }

        #embase-header .navbar-brand-menu-4 {
            margin-right: 20px; /* Adjust spacing between items if needed */
            color:  #343a40 ;
            font-family: 'Sofia-pro', sans-serif !important;
            font-size: 18px;
            text-transform: uppercase;
            font-weight: 700;
        }

        #embase-header .navbar-brand-menu-5 {
            margin-right: 20px; /* Adjust spacing between items if needed */
            color:  #343a40 ;
            font-family: 'Roboto', sans-serif;
            font-size: 18px;
            text-transform: uppercase;
            font-weight: 700;
        }




    #embase-header {
        padding: 20px; /* Adjust padding as needed */
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
        <a class="navbar-brand" href="#">UK MUSTARIKA JAYA</a>
        <a class="navbar-brand-menu-1" href="#">Beranda</a>
        <a class="navbar-brand-menu-2" href="#kisah-kami">Tentang Kami</a>
        <a class="navbar-brand-menu-3" href="#">Produk</a>
        <a class="navbar-brand-menu-4" href="#">Kreasi Olahan</a>
        <a class="navbar-brand-menu-5" href="#">Pembelian</a>
    </div>
</nav>


    <!-- <div class="d-flex">
        <nav class="sidebar">
            <div class="sidebar-header">
                Menu 
            </div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard">
                        <i class="fas fa-home"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/alternatif">
                        <i class="fas fa-users"></i> Data Alternatif
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/kriteria">
                        <i class="fas fa-building"></i> Data Kriteria
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/nilai">
                        <i class="fas fa-address-card"></i> Data Penilaian
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/hasil">
                        <i class="fas fa-address-card"></i> Data Perankingan
                    </a>
                

</ul>
        </nav>


        <div class="content">
            @yield('content')
        </div>
    </div> -->

    <!-- Bootstrap JavaScript and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
