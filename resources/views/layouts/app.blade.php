<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>


    <link rel="stylesheet" href="css/stylelmts.css">
    <link rel="stylesheet" href="css/app.css">
    <link href="{{ asset('css/field-animation.css') }}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>




    <style type="text/css">
        .panel-default > .panel-heading {
            color: #fff;
            background-color: #1B2E4F;
            border-color: #d3e0e9;
        }
        /* Select2 Selects CSS - Start */
        .select2-container--bootstrap .select2-selection--single .select2-selection__placeholder  {
            color: #555;
        }
        .select2-container--bootstrap .select2-results__option {
            color: #555;
            background-color: #fff;
        }
        .select2-container--bootstrap .select2-results__option--highlighted[aria-selected] {
            color: #fff;
            background-color: #bbb;
        }
        .select2-container--bootstrap .select2-selection--single {
            height: 36px;
            padding: 6px 18px;
            margin-left: 0px;
        }
        /* Select2 Selects CSS - End */
        #termo {
          width: 100%;
          font-size: 16px;
          padding: 12px 20px 12px 40px;
          border: 1px solid #ddd;
          margin-bottom: 12px;
        }
        .navbar-default .navbar-nav > .dropdown > a:focus, .navbar-default .navbar-nav > .dropdown > a:hover {
            color: #fff;
            background-color: #1B2E4F;
        }
        .navbar-default .navbar-nav > .open > a:focus, .navbar-default .navbar-nav > .open > a:hover {
            color: #000;
            background-color: #fff;
        }
        .navbar-default .navbar-nav > a, .navbar-default .navbar-nav > li > a {
            color: #fff;
        }
        .navbar-default .navbar-nav > li > a:hover, {
            color: #fff;
            background-color: #fff;
        }
        .dropdown-menu > li > a:hover {
            background-color: #cccccc;
        }
        .navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-text {
            color: #000;
            background-color: #fff;
        }
        #footer-brasil {
           background: none repeat scroll 0% 0% #1B2E4F;
           min-width: 100%;
           position: absolute;
           bottom: 0;
           width: 100%;
           display: none;
        }
        #page-container {
          position: relative;
          min-height: 100vh;
        }
        #content-wrap {
          padding-bottom: 2.5rem;    /* Footer height */
        }
        @media (max-width: 1024px) {
          #barra-logos{display: none;}
          .btn-toggle{display: block;}
        }
        @media only screen and (max-width: 1024px) {
        	/* Force table to not be like tables anymore */
        	#tabela table,
        	#tabela thead,
        	#tabela tbody,
          #tabela tfoot,
        	#tabela th,
        	#tabela td,
        	#tabela tr {
        		display: block;
        	}
        	/* Hide table headers (but not display: none;, for accessibility) */
        	#tabela thead tr {
        		position: absolute;
        		top: -9999px;
        		left: -9999px;
        	}
        	#tabela tr { border: 1px solid #ccc; }
        	#tabela td {
        		/* Behave  like a "row" */
        		border: none;
        		border-bottom: 1px solid #eee;
        		position: relative;
        		padding-left: 50%;
        		white-space: normal;
        		text-align:left;
        	}
        	#tabela td:before {
        		/* Now like a table header */
        		position: absolute;
        		/* Top/left values mimic padding */
        		top: 6px;
        		left: 6px;
        		width: 45%;
        		padding-right: 10px;
        		white-space: nowrap;
        		text-align:left;
        		font-weight: bold;
        	}
        	/*
        	Label the data
        	*/
        	#tabela td:before { content: attr(data-title); }
        }
        .dropbtn {
          background-color: #3097D1;
          color: white;
          padding: 16px;
          font-size: 16px;
          border: none;
          cursor: pointer;
        }
        .dropbtndisabled {
          background-color: #8eb4cb;;
          color: white;
          padding: 16px;
          font-size: 16px;
          border: none;
          cursor: pointer;
        }
        /* The container <div> - needed to position the dropdown content */
        .dropdown {
          position: relative;
          display: inline-block;
        }
        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #8eb4cb;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }
        /* Links inside the dropdown */
        .dropdown-content a {
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
        }
        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {background-color: #f1f1f1}
        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
          display: block;
        }
        /* Change the background color of the dropdown button when the dropdown content is shown */
        .dropdown:hover .dropbtn {
          background-color: #3097D1;
        }

        .separador-lmts{     /*       Separador de navbar */
          color: white;
          font-weight: bold;
          font-size: 20;
          margin-top: 6px;
        }

        /* Botão com cor padrão do lmts */

        .btn-primary-lmts{
          background-color: #1B2E4F;
          border-color: #d3e0e9;
          color: white;
        }
        .btn-primary-lmts:disabled{
          background-color: #1B2E4F;
          border-color: #d3e0e9;
          color: white;
        }
        .btn-primary-lmts:hover{
          background-color: #2c4e8a;
          border-color: #d3e0e9;
          color: white;
        }

        /* badge lmts */

        .badge-lmts{
          padding: 5px;
          color: white;
          font-size: 13px;
          background-color: #67748B;
          margin-left: 5px;
          margin-top: 5px;

        }
    </style>
</head>
<body>

  <div id="page-container">
   <div id="content-wrap">
      <div id="barra-brasil" style="background:#7F7F7F; height: 20px; padding:0 0 0 10px;display:block;">
        <ul id="menu-barra-temp" style="list-style:none;">
            <li style="display:inline; float:left;padding-right:10px; margin-right:10px; border-right:1px solid #EDEDED">
                <a href="http://brasil.gov.br" style="font-family:sans,sans-serif; text-decoration:none; color:white;">Portal do Governo Brasileiro</a>
            </li>
            <li>
            <a style="font-family:sans,sans-serif; text-decoration:none; color:white;" href="http://epwg.governoeletronico.gov.br/barra/atualize.html">Atualize sua Barra de Governo</a>
            </li>
        </ul>
      </div>

      <!-- Barra de Logos -->
      <div id="barra-logos" lass-"container" style="background:#FFFFFF; margin-top: 1px; height: 150px; padding: 10px 0 10px 0">
        <ul id="logos" style="list-style:none;">
            <li style="margin-right:140px; margin-left:110px; border-right:1px ;height: 120px">
                <a href="{{ route('login') }}"><img src="{{asset('images/logo.png')}}" style = "margin-left: 8px; margin-top:5px " height="120px" align = "left" ></a>

                <a target="_blank" href="http://lmts.uag.ufrpe.br/"><img src="{{asset('images/lmts.jpg')}}" style = "margin-left: 8px; margin-top:30px " height="70"  align = "right" ></a>

                <img src="{{asset('images/separador.png')}}" style = "margin-left: 15px; margin-top: 30px" height="70" align = "right" >
                <a target="_blank" href="http://ww3.uag.ufrpe.br/"><img src="{{asset('images/uag.png')}}" style = "margin-left: 10px; margin-top: 30px" height="70" width="50" align = "right" ></a>

                <img src="{{asset('images/separador.png')}}" style = "margin-left: 15px; margin-top: 30px" height="70" align = "right" >
                <a target="_blank" href="http://www.ufrpe.br/"><img src="{{asset('images/ufrpe.png')}}" style = "margin-left: 15px; margin-right: -10px; margin-top: 30px " height="70" width="50" align = "right"></a>
            </li>
        </ul>
      </div>
      <!-- barra de menu -->

      @if(Auth::check())

        <nav class="navbar navbar-expand-lg" style="background-color: #1B2E4F; border-color: #d3e0e9; box-shadow: 0 0 6px rgba(0,0,0,0.5);" role="navigation">
          <a class="navbar-brand" href="{{ route('login') }}" style="color: white; font-weight: bold;">
            <img src="{{asset('images/logoBranco.png')}}" height="30" class="d-inline-block align-top" alt="">

          </a>
            <div class="collapse navbar-collapse" >
              <ul class="navbar-nav mr-auto">


                <li class="nav-item active">
                  <a class="nav-link" href="{{route('login')}}"
                    onclick="event.preventDefault();
                                  document.getElementById('login').submit();" style="color:white">
                                  {{ __('Inicio') }}
                  </a>
                </li>


                <li class="nav-item active">
                  <a class="nav-link" href="{{route('login')}}"
                    onclick="event.preventDefault();
                                  document.getElementById('login').submit();"style="color:white">
                                  {{ __('Aluno') }}
                  </a>
                </li>

                <li class="nav-item active">

                  <a class="nav-link" href="{{route('login')}}"
                    onclick="event.preventDefault();
                                  document.getElementById('login').submit();"style="color:white">
                                  {{ __('Ajuda') }}
                  </a>

                </li>

                <li class="nav-item active">

                  <a class="nav-link" href="{{route('login')}}"
                    onclick="event.preventDefault();
                                  document.getElementById('login').submit();"style="color:white">
                                  {{ __('Sair') }}
                  </a>
                </li>



              </ul>

            </div>

            <div class="nav navbar-nav navbar-right" >
              <ul class="nav navbar-nav">
                  @if(Auth::check())
                  @endif
              </ul>
              <ul class="nav navbar-nav navbar-right">
                  @if(Auth::check())
                    <li> <!--  logout   -->
                        <a class="nav-link"  href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();"style="color:white">
                           {{ __('Sair') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endif
              </ul>
            </div>
          </nav>
      @endif
      @php($url = str_replace(URL::to('/'),'',URL::current()))

  

      <br>
      @yield('conteudo')

    </div>
  </div>

</body>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script defer="defer" src="//barra.brasil.gov.br/barra.js" type="text/javascript"></script>
</html>
