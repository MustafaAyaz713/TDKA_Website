<section class="info_section layout_padding2">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="info_detail">
                    <div style="text-align: center;">
                        <h4 style="color: #ffffff; font-size: 24px; margin-bottom: 20px;"></h4>
                        <img src="{{ asset('images/tdka_logo.png') }}"
                            style="height: 150px; width: 150px; border-radius: 50%;" />
                    </div>
                    <div style="text-align: center; margin-top: 20px;">

                        <a href="https://www.instagram.com/aitchkays/" style="margin-right: 10px;">
                            <img src="{{ asset('images/instagram.png') }}" alt="Instagram Icon" height="25"
                                style="border-radius:999px" />
                        </a>
                        <a href="https://www.youtube.com/@dualcoreprocessor185" style="margin-right: 10px;">
                            <img src="{{ asset('images/youtube.png') }}" alt="YouTube Icon"
                                style="color: #ff0000; font-size: 12px; height: 25px; border-radius:999px; " />
                        </a>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="info_contact">
                    <h4>
                        <br />
                        <br />
                        Bize Ulaşın
                    </h4>
                    <div class="contact_link_box">
                        <a href="">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>
                                İstanbul Zaim Üniversity
                            </span>
                        </a>
                        <a href="">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>
                                444 97 98
                            </span>
                        </a>
                        <a href="">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>
                                info@tdkastudios.com
                            </span>
                        </a>
                    </div>
                </div>
                <style>
                    .info_social {
                        text-align: center;
                    }
                </style>
            </div>
            <div class="col-md-3">
                <!--
                <div class="info_link_box">
                    <h4>
                        <br />
                        <br />
                        Site Haritası
                    </h4>
                    <div class="info_links">
                        <a class="active" href="#anasayfa">
                            <img src="{{ asset('images/nav-bullet.png') }}" alt="" />
                            Anasayfa
                        </a>
                        <a class="" href="#services">
                            <img src="{{ asset('images/nav-bullet.png') }}" alt="" />
                            Hizmetlerimiz
                        </a>
                        <a class="" href="#projects">
                            <img src="{{ asset('images/nav-bullet.png') }}" alt="" />
                            Projelerimiz
                        </a>
                        <a class="" href="#contact">
                            <img src="{{ asset('images/nav-bullet.png') }}" alt="" />
                            İletişim
                        </a>
                    </div>
                </div>
                -->
            </div>
            <div class="col-md-3 mb-0">
                <h4>
                    <br />
                    <br />
                    Haberdar Olun <br />
                </h4>
                <form action="{{ route('subcontroller.store') }}" method="post">
                    @csrf
                    <input type="email" placeholder="E-Mail Adresiniz" name="email" required />
                    <button type="submit">
                        Bültene Katıl
                    </button>
                    <br />
                    <br />
                    <span style="color: #b9c1c9;">Bilgileriniz güvende.</span>
                </form>
            </div>
        </div>
        <footer class="footer_section">
            <div class="container">
                <p>
                    Telif Hakkı © 2024 TDKA Studios. Tüm hakları saklıdır.
                </p>
            </div>
        </footer>
    </div>
</section>
