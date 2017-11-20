{{-- _nav.blade.php --}}
			<div id="header">

				{{-- BRANDING --}}
				<div id="branding">
					<h1>Sabre</h1>
				</div>

				{{-- NAVIGATION --}}
				<div id="main-navigation">

					<!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                    	
                    	<li><a href="/">Home</a></li>
						<li><a href="{{ route('blog.index') }}">Blog</a></li>
						<li><a href="/contact">Contact</a></li>

                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                            </li>
                            <li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                                 <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                            </li>
                        @endguest
                    </ul>
				</div>
				
			</div>