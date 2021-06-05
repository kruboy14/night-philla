@extends('layouts.app_test')

@section('main-info')
    <div class="wrapper">
        @include('parts.header')
        <footer class="footer" style="margin-top: 0;">
            <div class="container">
                <div class="footer__inner">
                    <div class="footer-title contacts">CONTACTS</div>
                    <div class="footer-socials">
                        <a class="footer-link footer-link-inst" href="#">
                            <img src="./images/insta.svg" alt="" />
                        </a>
                        <a class="footer-link footer-link-fb" href="#">
                            <img src="./images/facebook.svg" alt="" />
                        </a>
                    </div>
                    <div class="footer-contact">
                        <span class="footer-address">вул. Сирна, 42</span>
                        <span class="footer-phone">+(380)-12-34-158</span>
                    </div>
                    <div class="footer-map" style="margin-top: 20px;">
                        <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.446766130522!2d30.52349830851836!3d50.45140472077821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce505b8be8cd%3A0x6fbde9b021ab61dd!2sHotel%20Khreschatyk%20Kyiv!5e0!3m2!1sen!2sua!4v1620304139085!5m2!1sen!2sua"
                                width="1260"
                                height="450"
                                style="border: 0"
                                allowfullscreen=""
                                loading="lazy"
                        ></iframe>
                    </div>


                    <div class="footer-copyright" style="margin-bottom: 0;">NIGHT PHILADELPHIA</div>
                </div>
            </div>
        </footer>
    </div>
@endsection