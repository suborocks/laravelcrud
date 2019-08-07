<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel CRUD Application</title>
    <link rel="stylesheet" type="text/css" href="{{URL('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL('css/style.css')}}">
    <script type="text/javascript" src="{{URL('js/jquery-3.3.1.js')}}"></script>
    <script type="text/javascript" src="{{URL('js/bootstrap.js')}}"></script>
    <style>
        .image {
            border-radius: 50%;
            height: 50px;
            width: 50px;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Laravel CRUD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{URL('/')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL('/create')}}">Create</a>
                </li>

            </ul>

        </div>
    </nav>