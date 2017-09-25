@extends('layouts.main')

@section('title')
    Admin Dashboard
@endsection

@section('body')
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="/admin/">
                    Transfer Rules
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" class="link"><i class="fa fa-dashboard"></i> {{ Auth::user()->name }}</a></li>
                    <li><a href="#" class="link"><i class="fa fa-database"></i> NGN 00.00 Balance </a></li>
                    <li><a href="admin/dashboard" class="link"><i class="fa fa-cog"></i> Dashboard</a></li>
                    <li><a href="admin/setting" class="link"><i class="fa fa-dashboard"></i> Setting</a></li>
                    <li><a href="admin/add-user" class="link"><i class="fa fa-edit"></i> Create New Client</a></li>
                    <li><a href="admin/logout" class="link"><i class="fa fa-sign-out"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Transfer Payment System </h1>
            </div>

            <div class="col-md-12">
                <table class="table">
                    <tr>
                       <th>S/N</th>
                       <th>Name</th> 
                       <th>Email</th>
                       <th>Transaction History</th> 
                       <th>Action</th> 
                       <th>More</th>  
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Ekpoto Liberty</td>
                        <td>ekpoto.liberty@gmail.com</td>
                        <td>view</td>
                        <td>delete</td>
                        <td>bock</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
