@extends('layouts.app_test')

@section('main-info')
        <div class="wrapper">
            @include('parts.header')
            <main class="main">
                <section class="top">
                    <div class="container">
                        <div class="top__inner">
                            <div class="top-title">
                                Нічна Філадельфія - місце концентрації найсмачніших суші міста
                                Пирятин
                            </div>
                             <a class="top-button" href="{{ route('menu') }}" style="text-align:center;width:400px;display:flex; margin:60px auto;justify-content: center;">МЕНЮ</a>
                    
                        </div>
                    </div>
                </section>
                <section class="photos">
                    <div class="container">
                        <div class="photos__inner">
                            <div class="photos-title">Світлини інтер’єру</div>
                            <div class="photos-content">
                                <a data-fancybox="gallery" href="./images/mainPhotos_1.png"
                                ><img src="./images/mainPhotos_1.png"
                                    /></a>
                                <a data-fancybox="gallery" href="./images/mainPhotos_2.png"
                                ><img src="./images/mainPhotos_2.png"
                                    /></a>
                                <a data-fancybox="gallery" href="./images/mainPhotos_3.png"
                                ><img src="./images/mainPhotos_3.png"
                                    /></a>
                            </div>
                            <div class="photos-togallery">
                                <a class="photos-link" href="{{ route('gallery') }}">До галереї</a>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
            <footer class="footer">
                <div class="container">
                    <div class="footer__inner">
                        <div class="footer-title">Де нас знайти</div>
                        <div class="footer-map">
                            <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.446766130522!2d30.52349830851836!3d50.45140472077821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce505b8be8cd%3A0x6fbde9b021ab61dd!2sHotel%20Khreschatyk%20Kyiv!5e0!3m2!1sen!2sua!4v1620304139085!5m2!1sen!2sua"
                                    width="800"
                                    height="480"
                                    style="border: 0"
                                    allowfullscreen=""
                                    loading="lazy">
                            </iframe>
                        </div>
                        <div class="footer-contact">
                            <span class="footer-address">вул. Сирна, 42</span>
                            <a class="footer-link" href="{{ route('contacts') }}"> Контакти </a>
                        </div>
                        <div class="footer-socials">
                            <a class="footer-link footer-link-inst" href="#">
                                <img src="./images/insta.svg" alt="" />
                            </a>
                            <a class="footer-link footer-link-fb" href="#">
                                <img src="./images/facebook.svg" alt="" />
                            </a>
                        </div>
                        <div class="footer-copyright">NIGHT PHILADELPHIA</div>
                    </div>
                </div>
            </footer>
        </div>
@endsection
