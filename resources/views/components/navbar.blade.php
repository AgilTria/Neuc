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
                      <a class="navbar-item">
                          Instansi
                      </a>
                      <a class="navbar-item">
                          Acara
                      </a>
                      <hr class="navbar-divider">
                      <a class="navbar-item">
                          Report an issue
                      </a>
                  </div>
              </div>
          </div>

          <div class="navbar-end">
              <div class="navbar-item">
                  <div class="buttons">
                      <a class="button is-info" href="">
                          <strong>Sign Up</strong>
                      </a>
                      <a class="button is-light" href="/login">
                          Log in
                      </a>
                  </div>
              </div>
          </div>
      </div>
  </nav>
