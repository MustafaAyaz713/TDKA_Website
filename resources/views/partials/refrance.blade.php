<section class="client_section layout_padding" id="refrance" style="background-color: #f5f5f7;">
    <div class="container">
        <div class="row" data-scroll-index="4">
            <div class="col-md-12">
                <div class="sectioner-header text-center black">
                    <h2>
                        <br />
                        <br />
                        Projelerimiz
                    </h2>
                    <span class="line"></span>
                    <p>TDKA Studios ile iş ortaklarımızın memnuniyeti en büyük önceliğimizdir. Yenilikçi çözümlerimizle
                        büyümelerine destek oluyoruz.</p>
                </div>
                <div id="carouselExampleControls" class="section-content" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="detail-box">
                                <h4>Task Monitor</h4>
                                <p><br /></p>
                                <p>
                                    <strong class="custom-color">
                                        TDKA Studios sayesinde oyun geliştirme süreçlerimiz hız kazandı. <br />
                                        Profesyonel destek ve yenilikçi yaklaşımları için teşekkürler.
                                    </strong>
                                </p>
                                <img src="{{ asset('images/task_monitora.png') }}" alt="" />
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="detail-box">
                                <h4>GreedyCars</h4>
                                <p><br /></p>
                                <p>
                                    <strong class="custom-color">
                                        Yapay zeka çözümleriyle iş süreçlerimizi optimize ettik. <br />
                                        TDKA Studios'un çözüm odaklı yaklaşımı harika!
                                    </strong>
                                </p>
                                <img src="{{ asset('images/car_anaekrana.png') }}" alt="" />
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="detail-box">
                                <h4>Campus</h4>
                                <p><br /></p>
                                <p>
                                    <strong class="custom-color">
                                        Her kurum için iç ağ sosyal medaya platformu. <br />
                                    </strong>
                                </p>
                                <img src="{{ asset('images/car_anaekrana.png') }}" alt="" />
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="logos">
    <div class="logos-slide">
        <img src="{{ asset('images/logo1.png') }}" width="100" height="70" />
        <img src="{{ asset('images/logo2.png') }}" width="140" height="110" />
        <img src="{{ asset('images/logo3.png') }}" alt="Client 1 Logo" width="100" height="90" />
    </div>
</div>
<script>
    for (var i = 0; i < 10; i++) {
        var copy = document.querySelector(".logos-slide").cloneNode(true);
        document.querySelector(".logos").appendChild(copy);
    }
</script>
<p>
    <br />
    <span class="line"></span><br />
</p>
