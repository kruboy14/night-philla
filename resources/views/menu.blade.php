@extends('layouts.app_test')

@section('main-info')
<div class="wrapper">
    @include('parts.header')
    <main class="main">
        <section class="menu">
            <div class="container">
                <div class="menu__inner">
                    <div class="menu-title">MENU</div>
                    <div class="menu-btns">
                        <button class="category-title menu-button active" id="sushi">
                            СУШІ
                        </button>
                        <button class="category-title menu-button" id="roll">
                            РОЛИ
                        </button>
                        <button class="category-title menu-button" id="soup">
                            СУПИ
                        </button>
                        <button class="category-title menu-button" id="beverage">
                            БАО
                        </button>
                    </div>
                    <div class="menu__list" id="menu-list">
                        <div class="menu__items all roll">
                            <div class="menu-item">
                                <div class="menu-item-img">
                                    <img src="./images/sushi1.png" alt="" />
                                </div>
                                <div class="menu-item-content">
                                    <div class="menu-item-title">Нічна Філадельфія</div>
                                    <div class="menu-item-text">
                                        лосось, огірок, тобіко, сир філадельфія
                                    </div>
                                    <div class="menu-item-price">80грн / 100грам</div>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="menu-item-img">
                                    <img src="./images/sushi2.png" alt="" />
                                </div>
                                <div class="menu-item-content">
                                    <div class="menu-item-title">Філадельфія</div>
                                    <div class="menu-item-text">
                                        лосось, червона ікра, сир філадельфія, рукола, авокадо
                                    </div>
                                    <div class="menu-item-price">130грн / 100грам</div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <div class="menu-item-img">
                                    <img src="./images/sushi3.png" alt="" />
                                </div>
                                <div class="menu-item-content">
                                    <div class="menu-item-title">Футо ролл</div>
                                    <div class="menu-item-text">
                                        японський омлет, креветка, тунець, лосось, авокадо
                                    </div>
                                    <div class="menu-item-price">110грн / 100грам</div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <div class="menu-item-img">
                                    <img src="./images/sushi4.png" alt="" />
                                </div>
                                <div class="menu-item-content">
                                    <div class="menu-item-title">Аляска ролл</div>
                                    <div class="menu-item-text">
                                        лосось, авокадо, японський омлет, тобіко
                                    </div>
                                    <div class="menu-item-price">90грн / 100грам</div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <div class="menu-item-img">
                                    <img src="./images/sushi4.png" alt="" />
                                </div>
                                <div class="menu-item-content">
                                    <div class="menu-item-title">Динаміт ролл</div>
                                    <div class="menu-item-text">
                                        тунець, соус кімчі, огірок, тобіко, кунжут
                                    </div>
                                    <div class="menu-item-price">120грн / 100грам</div>
                                </div>
                            </div>
                        </div>
                        <div class="menu__items all sushi">
                           
                            <div class="menu-item">
                                <div class="menu-item-img">
                                    <img src="https://navisushi.od.ua/uploads/s/r/1/5/r15xfnl74wwc/img/full_A6JMuIL2.jpg" alt="" />
                                </div>
                                <div class="menu-item-content">
                                    <div class="menu-item-title">СУШІ З ЛОСОСЕМ
                                    </div>
                                    <div class="menu-item-text">
                                        33 грам
                                    </div>
                                    <div class="menu-item-price">50 грн.</div>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="menu-item-img">
                                    <img src="http://navisushi.od.ua/uploads/s/r/1/5/r15xfnl74wwc/img/full_PjJcBIFs.jpg" alt="" />
                                </div>
                                <div class="menu-item-content">
                                    <div class="menu-item-title">СУШІ З ТУНЦЕМ
                                    </div>
                                    <div class="menu-item-text">
                                        33 грам
                                    </div>
                                    <div class="menu-item-price">55 грн.</div>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="menu-item-img">
                                    <img src="http://navisushi.od.ua/uploads/s/r/1/5/r15xfnl74wwc/img/full_TVGwQ61L.jpg" alt="" />
                                </div>
                                <div class="menu-item-content">
                                    <div class="menu-item-title">СУШІ З КРЕВЕТКОЮ
                                    </div>
                                    <div class="menu-item-text">
                                        33 грам
                                    </div>
                                    <div class="menu-item-price">45 грн.</div>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="menu-item-img">
                                    <img src="http://navisushi.od.ua/uploads/s/r/1/5/r15xfnl74wwc/img/full_2FwQIrQU.jpg" alt="" />
                                </div>
                                <div class="menu-item-content">
                                    <div class="menu-item-title">ТАМАГО
                                    </div>
                                    <div class="menu-item-text">
                                        33 грам
                                    </div>
                                    <div class="menu-item-price">45 грн.</div>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="menu-item-img">
                                    <img src="http://navisushi.od.ua/uploads/s/r/1/5/r15xfnl74wwc/img/full_OKjszNx6.jpg" alt="" />
                                </div>
                                <div class="menu-item-content">
                                    <div class="menu-item-title">СУШІ З ВУГРОМ

                                    </div>
                                    <div class="menu-item-text">
                                        33 грам
                                    </div>
                                    <div class="menu-item-price">70 грн.</div>
                                </div>
                            </div>
                        </div>
                        <div class="menu__items all soup">
                            <div class="menu-item">
                                <div class="menu-item-img">
                                    <img src="http://navisushi.od.ua/uploads/s/r/1/5/r15xfnl74wwc/img/YIJTfzGr.jpg" alt="" />
                                </div>
                                <div class="menu-item-content">
                                    <div class="menu-item-title">РАМЕН З ТЕЛЯТИНОЮ</div>
                                    <div class="menu-item-text">
                                    телятина на грилі, яєчна локшина, томаго, сир тофу, шиїтаке, кунжут, кінза
                                    </div>
                                    <div class="menu-item-price">210 грн.</div>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="menu-item-img">
                                    <img src="http://navisushi.od.ua/uploads/s/r/1/5/r15xfnl74wwc/img/full_MKbZc2xk.jpg" alt="" />
                                </div>
                                <div class="menu-item-content">
                                    <div class="menu-item-title">СУП ФО</div>
                                    <div class="menu-item-text">
                                    рисова локшина, філе телятини, кінза, зелена цибуля, паростки сої, м’ята, лайм, гостра приправа (масло чилі)
                                    </div>
                                    <div class="menu-item-price">210 грн.</div>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="menu-item-img">
                                    <img src="http://navisushi.od.ua/uploads/s/r/1/5/r15xfnl74wwc/img/full_zbE2c6SU.jpg" alt="" />
                                </div>
                                <div class="menu-item-content">
                                    <div class="menu-item-title">УДОН З МОРЕПРОДУКТАМИ</div>
                                    <div class="menu-item-text">
                                    локшина удон, гриби шиїтаке, лосось, кальмар, гребінець, креветка, цибуля
                                    </div>
                                    <div class="menu-item-price"> 245 грн.</div>
                                </div>
                            </div>
                        </div>
                        <div class="menu__items all beverage">
                            <div class="menu-item">
                                <div class="menu-item-img">
                                    <img src="http://navisushi.od.ua/uploads/s/r/1/5/r15xfnl74wwc/img/full_CskcZHt0.jpg" alt="" />
                                </div>
                                <div class="menu-item-content">
                                    <div class="menu-item-title">БАО З КРЕВЕТКОЮ</div>
                                    <div class="menu-item-text">
                                    креветка, маринований гарбуз, авокадо, рукола, спайсі соус, соус цезар
                                    </div>
                                    <div class="menu-item-price">140 грн.</div>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="menu-item-img">
                                    <img src="http://navisushi.od.ua/uploads/s/r/1/5/r15xfnl74wwc/img/full_8l5dPKuW.jpg" alt="" />
                                </div>
                                <div class="menu-item-content">
                                    <div class="menu-item-title">БАО З ЛОСОСЕМ</div>
                                    <div class="menu-item-text">
                                    лосось, тобіко, авокадо, рукола, соус шисо, соус цезарь
                                    </div>
                                    <div class="menu-item-price">145 грн.</div>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="menu-item-img">
                                    <img src="http://navisushi.od.ua/uploads/s/r/1/5/r15xfnl74wwc/img/full_9DZBCVDF.jpg" alt="" />
                                </div>
                                <div class="menu-item-content">
                                    <div class="menu-item-title">БАО З ТУНЦЕМ</div>
                                    <div class="menu-item-text">
                                    тунець, сир філадельфія, паростки сої, перець чилі, огірок
                                    </div>
                                    <div class="menu-item-price">190 грн.</div>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="menu-item-img">
                                    <img src="http://navisushi.od.ua/uploads/s/r/1/5/r15xfnl74wwc/img/full_9XgoJ0kV.jpg" alt="" />
                                </div>
                                <div class="menu-item-content">
                                    <div class="menu-item-title">БАО З КРАБОМ</div>
                                    <div class="menu-item-text">
                                    камчатський краб, червона ікра, рукола, сир філадельфія, соус цезар
                                    </div>
                                    <div class="menu-item-price">315 грн.</div>
                                </div>
                            </div>
                        </div>
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
</footer>
</div>
@endsection