  <nav class="navbar" role="navigation" aria-label="main navigation">
      @include('components.navbar_brand')

      <div id="navbarBasicExample" class="navbar-menu">
          <div class="navbar-start">
              <a class="navbar-item">
                  Home
              </a>

              <a class="navbar-item">
                  Sertifikat
              </a>

              <div class="navbar-item has-dropdown is-hoverable">
                  <a class="navbar-link">
                      More
                  </a>

                  <div class="navbar-dropdown">
                      <a class="navbar-item">
                          About
                      </a>
                      <a class="navbar-item" href="/instansi">
                          Instansi
                      </a>
                      <a class="navbar-item" href="/acara">
                          Acara
                      </a>
                      <hr class="navbar-divider">
                      <a class="navbar-item">
                          Report an issue
                      </a>
                  </div>
              </div>
          </div>

          <!-- <div class="navbar-end">
              <div class="navbar-item">
                  <div class="buttons">
                      <a class="button is-info" href="">
                          <strong>Sign Up</strong>
                      </a>
                      <a class="button is-light" href="/login">
                          Log Out
                      </a>
                  </div>
              </div>
          </div> -->

          <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
      </div>
  </nav>
