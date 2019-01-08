<!DOCTYPE html>
<html>
 <head>
    <link property="resetsheet" href="{{ URL::asset('css/resetsheet.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">
    <meta charset="UTF-8">
    <title>The Tasty Recipes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 </head>

     <body class="body">
         
         
             <header class="mainheader">
                 
             <img src="{{ URL::asset('img/logo.gif') }}""img/logo.gif" alt="toplogo">
        		 
        	 <?php
        	 	 if (isset($_SESSION['name'])){
        			 echo '<p class="login-status">{{ Auth::user()->name }}</p>';
        		 }	 
        		 else {
        			 echo'<p class="login-status">You are logged out!</p>';
        		 }
        	 ?>
             
           
             <nav>
                 <ul>
                     <li><a href="/">Home</a></li>
                     <li><a href="/recipes">Recipes</a></li>
                     <li><a href="/calendar">Calender</a></li>
                     <li><a href="/about">About</a></li>
                     <li>
                            @if (Route::has('login'))
                                <div class="login">
                                    @auth
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            @else
                                        <a href="{{ route('login') }}">Login</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}">Register</a>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                     </li>
                 </ul>
             </nav>
             
         </header>


            @yield('content')

    </body>
</html> 