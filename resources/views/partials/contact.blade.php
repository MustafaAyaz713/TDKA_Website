<section class="has-bg-img">
    <img src="{{ asset('images/manzara.jpg') }}" alt="Arka Plan Resmi" />
    <div class="overlay"></div>
    <div class="text">
        <h1 class="display-4"><strong> Sizin İçin Buradayız </strong></h1>
    </div>
</section>
<section class="contact section-padding" data-scroll-index="6" id="iletisim">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sectioner-header text-center">
                    <h3>Bizimle İletişime Geçin</h3>
                    <span class="line"></span>
                    <p>
                        Her konuda size yardımcı olabilmek adına, ürün ve hizmetlerimizle ilgili öneri ve taleplerinizi değerlendirmek için buradayız. Tüm çözüm kanallarımızla sizlere en kısa sürede yanıt verebilmek amacıyla bize
                        dilediğiniz yöntemle ulaşabilir, tüm sorularınıza hızlıca çözüm bulabilirsiniz
                    </p>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <form id="contact_form" method="post" action="{{ route('newcontroller.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <input type="text" id="your_name" class="form-input w-100" name="nameSurname" placeholder="Adınız ve Soyadınız" required />
                                    </div>
                                    <div class="col">
                                        <input type="email" id="email" class="form-input w-100" name="email" placeholder="E-Mail Adresiniz" required />
                                    </div>
                                </div>
                                <input type="text" id="subject" class="form-input w-100" name="title" placeholder="Konuyu Giriniz" />
                                <textarea class="form-input w-100" id="message" placeholder="Mesajınızı bırakınız, en kısa sürede geri dönüş yapacağız." name="message"></textarea>
                                <button id="submitBtn" class="btn-grad w-100 text-uppercase" name="button">Gönderㅤ<i class="fa-regular fa-paper-plane"></i></button>
                            </form>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="col-md-6">
                                <div class="map_container" style="width: 330px;">
                                    <div class="map" style="border: 2px solid#6C757D; border-radius: 10px; overflow: hidden;">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3009.6403137595967!2d28.785919476425985!3d41.03312451789411!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa438a39f52db%3A0xa4eb20ddc406fa96!2s%C4%B0stanbul%20Sabahattin%20Zaim%20%C3%9Cniversitesi!5e0!3m2!1str!2str!4v1735421261529!5m2!1str!2str"
                                            width="330"
                                            height="300"
                                            style="border: 0;"
                                            allowfullscreen=""
                                            loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"
                                        ></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
