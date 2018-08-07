<!DOCTYPE html>
<html>
    <head>
      <style>
      body {
          font-family: 'Varela Round', sans-serif;
          font-size: 16px;
          background-color: #141414 !important;
          margin: 0;
          padding: 0;
          width: 100%;
      }

      .is-seco {
          margin-right: 10px !important;
      }

      .table thead th {
          color: #cdcdcd;
      }

      .topnav{
        width: 100%;
        display: table;
        text-align: center;
        clear: both;
        margin: 0 auto;
        list-style: none;
      }

      .topnav li{
        display: inline-block;
        float: none;
        padding: 0px 5px 5px 5px;
      }

      .topnav li:first-child{
        padding-left: 0px;
      }

      .topnav a {
        font-weight: bold;
        border-radius: 5px;
        text-decoration: none;
        font-size: 16px;
        color: #a15bf1;
        background-color: #333;
        transition: 0.3s;
        border: 1px solid white;
        width: 100px;
      }

      .topnav a:hover {
          color: #fff;
          background-color: #a15bf1;
      }

      #main {
          transition: margin-left .5s;
          padding: 20px;
      }

      .headerTitle{
        margin: 0 auto;
        margin-left: 22%;
      }

      .headerTitle h2{
        font-family: Papyrus, fantasy;
        font-size: 3.8vw;
        color: #a15bf1;
        font-weight: bold;
        float: left;
        padding: 15px;
      }

      .headerTitle #ShuShinLotusTop1{
        float: left;
        width: 13%;
        padding: 15px;
      }

      .headerTitle #ShuShinLotusTop2{
        float: left;
        width: 13%;
        padding: 15px;
      }

      .lowerBanner{
        display: inline-block;
        margin: 0 auto;
        width: 100%;
        background-color: #141414;
        border-top: 1px solid #272727;
        padding-top: 5px;
        padding-left: 15px;
      }

      .lowerBanner #VjjfLogoLow{
        float: right;
        padding-right: 40px;
        height: 60px;
        background-color: #141414;
      }

      .lowerBanner #SportVlLogoLow{
        float: right;
        padding-right: 40px;
        height: 60px;
      }

      .pageContent{
        background-color: #141414;
        margin-left: 15px;
        margin-right: 15px;
        color: white;
        /*margin-left: -18.5px;
        margin-right: -18.5px;*/
      }

      .pageContent h1{
        font-size: 40px;
        text-decoration: underline;
      }
      </style>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ShuShin Ju Jutsu</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.css">
        <link rel="stylesheet" href="/css/beacon.css">
    </head>
    <body>
        @include('static.header')
       <main id="main">
           @yield('content')
        </main>
        @include('static.lowerbanner')
        <script src="/js/metatype.js"></script>
    </body>
</html>
