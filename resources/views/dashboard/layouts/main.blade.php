<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="/assets/logo.png" type="image/icon">
    
    <!-- Fonts and Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
    
    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="/css/dashboard.css">
	<link rel="stylesheet" href="/richtexteditor/rte_theme_default.css">
</head>
<body>
	<!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script type="text/javascript" src="/richtexteditor/rte.js"></script>
	<script type="text/javascript" src='/richtexteditor/plugins/all_plugins.js'></script>
    <section class="main">
        <div class="container-fluid">
            <div class="row">
                @include('sweetalert::alert')
                <div class="col-lg-2 col-md-1 col-sm-1 col-1 p-0">
                    <!-- Sidebar -->
                    @include('dashboard.partials.sidebar')
                </div>
                <div class="col-lg-10 col-md-11 col-sm-11 col-12 ps-2 pe-0">
                    <!-- Navbar -->
                    @include('dashboard.partials.navbar')
                    <!-- Content -->
                    <div class="content p-4">
                        @yield('container')
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Styles for DataTables -->
    <style>
        .dataTables_wrapper select,
        .dataTables_wrapper .dataTables_filter input {
            color: #4a5568;
            padding: .5rem 1rem;
            line-height: 1.25;
            border: 1px solid #D9DADE;
            border-radius: .25rem;
            background-color: #F5F6FB;
        }
        .dataTables_wrapper .dataTables_filter input:focus {
            outline: none;
        }
        table.dataTable.hover tbody tr:hover,
        table.dataTable.display tbody tr:hover {
            background-color: #ebf4ff;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            font-weight: 700;
            border-radius: .25rem;
            border: 1px solid transparent;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button.current,
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            color: #fff !important;
            background: #2243B6 !important;
            border: 1px solid transparent;
            box-shadow: 0 1px 3px rgba(0, 0, 0, .1), 0 1px 2px rgba(0, 0, 0, .06);
        }
        table.dataTable.no-footer {
            border-bottom: 1px solid #e2e8f0;
            margin: 0.75em 0;
        }
        table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
        table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
            background-color: #2243B6 !important;
        }
    </style>

    <!-- Sidebar Toggle Script -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggleSidebarBtn = document.getElementById('toggleSidebarBtn');
            const sidebar = document.querySelector('.sidebar');

            toggleSidebarBtn.addEventListener('click', function() {
                sidebar.classList.toggle('show');
            });

            document.addEventListener('click', function(event) {
                if (!sidebar.contains(event.target) && !toggleSidebarBtn.contains(event.target)) {
                    sidebar.classList.remove('show');
                }
            });
        });
    </script>
</body>
</html>
