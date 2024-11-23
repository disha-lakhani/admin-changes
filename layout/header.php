<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin-Panel</title>

    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- font css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="shortcut icon" href="assets/images/favicon.png" />



    <style>
        body{
            font-family: "Playfair Display", serif !important;
        }
        .back-color1 {
            background-color: #43bee5;
        }

        .signin {
            background-color: #286b81;
            color: white;
            font-family: "Playfair Display", serif !important;
        }

        .card .card-description {
            color: #286b81;
            margin-bottom: 1.5rem;
            font-family: "Playfair Display", serif !important;
        }

        .sidebar .nav .nav-item .nav-link i.menu-icon {
            font-size: 1.125rem;
            line-height: 1;
            margin-right: 20px;
            font-size: 20px;
        }

        .form-control,
        .typeahead,
        .tt-query,
        .tt-hint,
        .select2-container--default .select2-selection--single .select2-search__field,
        .select2-container--default .select2-selection--single,
        .form-select {
            border: 1px solid #286b81;
            font-family: "Playfair Display", serif !important;
            background-color: #ffffff;
        }

        select.form-select {
            padding: 0.4375rem 0.75rem;
            border: 0;
            outline: 1px solid #286b81;
            color: #c9c8c8;
        }

        .back-color2 {
            background-color: #ed4984;
        }

        .back-color3 {
            background-color: #326e3c;
        }

        .house {
            background-color: #286b81;
        }

        .card-title {
            font-family: sans-serif;
        }

        .table thead {
            background-color: #d1e7fd;
            color: black;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #e9ecef;
        }

        .table-striped tbody tr:hover {
            background-color: aliceblue;
        }

        .bg-success {
            --bs-bg-opacity: 1;
            background-color: rgb(45 207 27) !important;
        }

        .badge-danger {
            border: 1px solid #fe7c96;
            color: #ffffff;
            background: #f33259;
        }

        .sidebar .nav .nav-item .nav-link .menu-title {
            color: white;
            display: inline-block;
            font-size: 0.875rem;
            line-height: 1;
            vertical-align: middle;
            white-space: normal;
        }

        .sidebar .nav.sub-menu .nav-item .nav-link {
            color: white;
            padding: 0.75rem 2rem 0.75rem 2rem;
            position: relative;
            font-size: 0.8125rem;
            line-height: 1;
            height: auto;
            border-top: 0;
        }

        .sidebar .nav.sub-menu .nav-item .nav-link:hover {

            color: #b66dff;
        }

        .container {
            /* margin-bottom: 2%; */
            font-family: "Playfair Display", serif !important;
        }

        #form-header {

            text-align: center;

        }


        .brand-logo {
            /* margin-top: 2%; */
            margin: 2% auto;
            width: 200px;

        }

        #form-tagline {
            background: #ebf5f8;
            border-top-left-radius: 0.5rem;
            border-bottom-left-radius: 0.5rem;
            color: black;
            margin-top: 2%;
            padding: 4%;
            text-align: left;

        }

        #form-tagline .fa {
            margin-bottom: 15%;
        }

        #form-tagline h2 {
            margin-bottom: 15%;
        }

        #form-content {
            background: #ebf5f8;
            border-top-right-radius: 0.5rem;
            border-bottom-right-radius: 0.5rem;
            margin: 2% auto;
            padding: 3%;
        }

        .form-group {
            margin-top: 5%;
        }

        .contact {
            padding: 4%;
            height: 400px;
        }

        .control-label {
            font-size: 16px;
            font-weight: 600;
        }

        div .submit-button {
            margin-top: 3%;
            text-align: right;
        }

        button#submit {
            white-space: normal;
            width: auto;
            background: #286b81;
            color: #ffffff;
            font-weight: 600;
            width: 25%;
        }

        .input-group-text {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: .375rem .75rem;
            margin-bottom: 0;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: white;
            text-align: center;
            white-space: nowrap;
            background-color: #286b81;
            border: 1px solid #286b81;
            border-radius: .25rem;
        }

        #title {
            font-size: 25px;
        }

        #description {
            font-size: 15px;
        }
    </style>

</head>

<body>
    <div class="container-scroller">
        <?php
        include 'navbar.php';
        ?>

        <div class="container-fluid page-body-wrapper">

            <?php
            include 'sidebar.php';

            ?>

            <div class="main-panel">