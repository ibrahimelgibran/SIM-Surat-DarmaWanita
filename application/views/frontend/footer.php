
      <!-- Footer -->
<footer class="footer bg-dark text-white py-5">
  <div class="container">
    <div class="row align-items-center">
      <!-- Copyright -->
      <div class="col-lg-4 text-center text-lg-left mb-3 mb-lg-0">
        <p class="mb-0">Copyright © Darma Wanita <?= date('Y') ?></p>
      </div>

      <!-- Social Media Links -->
      <div class="col-lg-4 text-center mb-3 mb-lg-0">
        <a class="btn btn-outline-light btn-social mx-2" href="#!" aria-label="YouTube">
          <i class="fab fa-youtube"></i>
        </a>
        <a class="btn btn-outline-light btn-social mx-2" href="#!" aria-label="Facebook">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a class="btn btn-outline-light btn-social mx-2" href="#!" aria-label="Instagram">
          <i class="fab fa-instagram"></i>
        </a>
      </div>

      <!-- Navigation Links -->
      <div class="col-lg-4 text-center text-lg-right">
        <a class="text-white text-decoration-none mx-3" href="#!">Contact</a>
        <a class="text-white text-decoration-none mx-3" href="#!">Other</a>
      </div>
    </div>
  </div>
</footer>


        <!-- Struktur -->
        
        <!-- Struktur Kelurahan -->
        <div class="portfolio-modal modal fade" id="skelurahan" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="<?= base_url()?>assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Gallery</h2>
                                    <p class="item-intro text-muted">|</p>
                                    <img class="img-fluid d-block mx-auto" src="<?= base_url('/assets/galery/'); echo $profil[0]['s_kelurahan']?>" alt="struktur-kelurahan" />
                                    <!-- <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                    </ul> -->
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Tutup
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Struktur lpm -->
        <div class="portfolio-modal modal fade" id="slpm" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="<?= base_url()?>assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Gallery</h2>
                                    <p class="item-intro text-muted">|</p>
                                    <img class="img-fluid d-block mx-auto" src="<?= base_url('/assets/galery/'); echo $profil[0]['s_lpm']?>" alt="struktur-lpm" />
                                    <!-- <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                    </ul> -->
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Tutup
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Struktur linmas -->
        <div class="portfolio-modal modal fade" id="slinmas" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="<?= base_url()?>assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Gallery</h2>
                                    <p class="item-intro text-muted">|</p>
                                    <img class="img-fluid d-block mx-auto" src="<?= base_url('/assets/galery/'); echo $profil[0]['s_linmas']?>" alt="struktur-linmas" />
                                    <!-- <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                    </ul> -->
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Tutup
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Struktur pemuda -->
        <div class="portfolio-modal modal fade" id="spemuda" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="<?= base_url()?>assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Gallery</h2>
                                    <p class="item-intro text-muted">|</p>
                                    <img class="img-fluid d-block mx-auto" src="<?= base_url('/assets/galery/'); echo $profil[0]['s_pemuda']?>" alt="struktur-pemuda" />
                                    <!-- <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                    </ul> -->
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Tutup
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Struktur rtrw -->
        <div class="portfolio-modal modal fade" id="rtrw" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="<?= base_url()?>assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Gallery</h2>
                                    <p class="item-intro text-muted">|</p>
                                    <img class="img-fluid d-block mx-auto" src="<?= base_url('/assets/galery/'); echo $profil[0]['k_rtrw']?>" alt="struktur-rtrw" />
                                    <!-- <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                    </ul> -->
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Tutup
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="<?= base_url()?>assets/mail/jqBootstrapValidation.js"></script>
        <script src="<?= base_url()?>assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="<?= base_url()?>assets/js/scripts.js"></script>
        <script src="<?= base_url();?>assets/jquery-ui-1.12.1/jquery-ui.js"></script>
    </body>
</html>
