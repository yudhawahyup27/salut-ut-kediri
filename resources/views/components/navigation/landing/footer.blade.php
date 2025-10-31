  <footer id="footer" class="footer position-relative dark-background">

      <div class="container footer-top">
          <div class="row gy-4">
              <div class="col-lg-5 col-md-6 footer-about">
                  <a href="index.html" class="logo d-flex align-items-center">
                      <span class="sitename">SALUT UT Kota Kediri</span>
                  </a>
                  <div class="footer-contact pt-3">
                      <p>{{ $global->alamat }}</p>
                      <p class="mt-3"><strong>Whatsapp:</strong> <span>{{ $global->whatsapp }}</span></p>
                      <p><strong>Email:</strong> <span>{{ $global->email }}</span></p>
                  </div>

              </div>

              <div class="col-lg-4 col-md-3 footer-links">
                  <h4>Social Media</h4>
                  <div class="social-links d-flex mt-4">
                      <a
                          href="https://wa.me/{{ $global->whatsapp }}?text={{ urlencode($global->text_wa) }}">
                          <i class="bi bi-whatsapp"></i>
                      </a>
                      <a href="https:instagram.com/{{ $global->instagram }}"><i class="bi bi-instagram"></i></a>
                  </div>
              </div>
              <div class="col-lg-3 col-md-3 footer-links">
                  <h4>Useful Links</h4>
                  <ul>
                      <li><a href="#">Home</a></li>
                      <li><a href="#">About us</a></li>
                      <li><a href="#">Services</a></li>
                      <li><a href="#">Terms of service</a></li>
                      <li><a href="#">Privacy policy</a></li>
                  </ul>
              </div>
          </div>
      </div>

      <div class="container copyright text-center mt-4">
          <p>© <span>Copyright</span> <strong class="px-1 sitename">UT Kediri</strong> <span>All Rights Reserved</span>
          </p>
          <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you've purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
              {{-- Designed by <a href="https://www.pondoktech.com">BootstrapMade</a> --}}
          </div>
      </div>

  </footer>
