@extends('layouts.app_test')

@section('main-info')
    <div class="wrapper">
        @include('parts.header')
        <main class="main">
            <section class="gallery">
                <div class="container">
                    <div class="gallery__inner">
                        <div class="gallery-title">GALLERY</div>
                        <div class="gallery-button upper">
                            <button class="category-gallery gallery-btn active" id="1">
                                1
                            </button>
                            <button class="category-gallery gallery-btn" id="2">2</button>
                            <button class="category-gallery gallery-btn" id="3">3</button>
                        </div>
                        <div class="gallery-items all-gallery 1">
                            <div class="gallery-img">
                                <img src="./images/gallery1.png" alt="" />
                                <span>Наша кухня з середини</span>
                            </div>
                            <div class="gallery-img">
                                <img src="./images/gallery2.png" alt="" />
                                <span>Фото страв нашого ресторана</span>
                            </div>
                            <div class="gallery-img">
                                <img src="./images/gallery3.png" alt="" />
                                <span>Фото страв нашого ресторана</span>
                            </div>
                            <div class="gallery-img">
                                <img src="./images/gallery4.png" alt="" />
                                <span>Фото страв нашого ресторана</span>
                            </div>
                            <div class="gallery-img">
                                <img src="./images/gallery5.png" alt="" />
                                <span>Фото страв нашого ресторана</span>
                            </div>
                            <div class="gallery-img">
                                <img src="./images/gallery6.png" alt="" />
                                <span>Фото страв нашого ресторана</span>
                            </div>
                            <div class="gallery-img">
                                <img src="./images/gallery7.png" alt="" />
                                <span>Фото страв нашого ресторана</span>
                            </div>
                            <div class="gallery-img">
                                <img src="./images/gallery8.png" alt="" />
                                <span>Фото страв нашого ресторана</span>
                            </div>
                            <div class="gallery-img">
                                <img src="./images/gallery9.png" alt="" />
                                <span>Фото страв нашого ресторана</span>
                            </div>
                            <div class="gallery-img">
                                <img src="./images/gallery10.png" alt="" />
                                <span>Фото страв нашого ресторана</span>
                            </div>
                        </div>
                        <div class="gallery-items all-gallery 2">
                            <div class="gallery-img">
                                <img src="./images/gallery4.png" alt="" />
                                <span>Фото страв нашого ресторана</span>
                            </div>
                            <div class="gallery-img">
                                <img src="./images/gallery5.png" alt="" />
                                <span>Фото страв нашого ресторана</span>
                            </div>
                            <div class="gallery-img">
                                <img src="./images/gallery6.png" alt="" />
                            </div>
                            <div class="gallery-img">
                                <img src="./images/gallery7.png" alt="" />
                                <span>Фото страв нашого ресторана</span>
                            </div>
                            <div class="gallery-img">
                                <img src="./images/gallery1.png" alt="" />
                                <span>Фото страв нашого ресторана</span>
                            </div>
                            <div class="gallery-img">
                                <img src="./images/gallery2.png" alt="" />
                                <span>Фото страв нашого ресторана</span>
                            </div>
                            <div class="gallery-img">
                                <img src="./images/gallery3.png" alt="" />
                                <span>Фото страв нашого ресторана</span>
                            </div>
                            <div class="gallery-img">
                                <img src="./images/gallery8.png" alt="" />
                                <span>Фото страв нашого ресторана</span>
                            </div>
                            <div class="gallery-img">
                                <img src="./images/gallery9.png" alt="" />
                                <span>Фото страв нашого ресторана</span>
                            </div>
                            <div class="gallery-img">
                                <img src="./images/gallery10.png" alt="" />
                                <span>Фото страв нашого ресторана</span>
                            </div>
                        </div>
                        <div class="gallery-items all-gallery 3">
                            <div class="gallery-img">
                                <img src="./images/gallery6.png" alt="" />
                                <span>Фото страв нашого ресторана</span>
                            </div>
                            <div class="gallery-img">
                                <img src="./images/gallery7.png" alt="" />
                                <span>Фото страв нашого ресторана</span>
                            </div>
                            <div class="gallery-img">
                                <img src="./images/gallery8.png" alt="" />
                                <span>Фото страв нашого ресторана</span>
                            </div>
                            <div class="gallery-img">
                                <img src="./images/gallery9.png" alt="" />
                                <span>Фото страв нашого ресторана</span>
                            </div>
                            <div class="gallery-img">
                                <img src="./images/gallery1.png" alt="" />
                                <span>Фото страв нашого ресторана</span>
                            </div>
                            <div class="gallery-img">
                                <img src="./images/gallery2.png" alt="" />
                                <span>Фото страв нашого ресторана</span>
                            </div>
                            <div class="gallery-img">
                                <img src="./images/gallery3.png" alt="" />
                                <span>Фото страв нашого ресторана</span>
                            </div>
                            <div class="gallery-img">
                                <img src="./images/gallery4.png" alt="" />
                                <span>Фото страв нашого ресторана</span>
                            </div>
                            <div class="gallery-img">
                                <img src="./images/gallery5.png" alt="" />
                                <span>Фото страв нашого ресторана</span>
                            </div>
                            <div class="gallery-img">
                                <img src="./images/gallery10.png" alt="" />
                                <span>Фото страв нашого ресторана</span>
                            </div>
                        </div>
                        <div class="gallery-button">
                            <button class="category-gallery gallery-btn" id="1">1</button>
                            <button class="category-gallery gallery-btn" id="2">2</button>
                            <button class="category-gallery gallery-btn" id="3">3</button>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="footer">
            <div class="container">
                <div class="footer__inner">
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
