<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Curso</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css" />
  </head>
  <body>
    <div class="container">

       @extends('layout')

       @section('content')
        <div class="row">
            <div class="col-md-6">
              <h4>{{ $curso }}</h4>
            </div>
        </div>
       @endsection
    </div>

    <script type="text/javascript" src="/js/app.js">
  </body>
</html>
