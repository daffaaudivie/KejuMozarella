<!-- app.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UK MUSTARIKA JAYA | @yield('title')</title>

    
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
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
    width: 100%; /* Full width */
    margin: 0; /* Corrected colon to semicolon */
}

.navbar-dark {
    background-color: #FFFFFF; /* Adjust color if needed */
}

#embase-header {
    display: flex;
    align-items: center;
    justify-content: center; /* Align items to the left */
    width: 100%;
    padding: 20px; /* Adjust padding as needed */
    color: white; /* Text color */
    text-align: center;
}

#embase-header .navbar-brand {
    margin-right: 20px; /* Adjust spacing between items if needed */
    color: #343a40;
}

/* Making text responsive and smaller */
#embase-header .navbar-brand-menu-1,
#embase-header .navbar-brand-menu-2,
#embase-header .navbar-brand-menu-3,
#embase-header .navbar-brand-menu-4,
#embase-header .navbar-brand-menu-5 {
    margin: 0 10px; /* Adjust spacing between items if needed */
    color: #343a40;
    font-family: 'Sofia', sans-serif;
    font-size: 1rem; /* Set base size */
    text-transform: uppercase;
    font-weight: 700;
}

/* Responsive text size adjustment */
@media (max-width: 768px) {
    #embase-header .navbar-brand-menu-1,
    #embase-header .navbar-brand-menu-2,
    #embase-header .navbar-brand-menu-3,
    #embase-header .navbar-brand-menu-4,
    #embase-header .navbar-brand-menu-5 {
        font-size: 0.9rem; /* Smaller size for smaller screens */

    }
}

@media (max-width: 480px) {
    #embase-header .navbar-brand-menu-1,
    #embase-header .navbar-brand-menu-2,
    #embase-header .navbar-brand-menu-3,
    #embase-header .navbar-brand-menu-4,
    #embase-header .navbar-brand-menu-5 {
        font-size: 0.8rem; /* Even smaller size for very small screens */
    }
}


.content {
    padding: 5.0rem;
    margin-left: 200px;
    margin-right: 10px;
}


    
</style>

</head>

<body>

    @include('layout.Pengguna.header')

    @yield('content')

    @include('layout.Pengguna.footer')

    
       
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
