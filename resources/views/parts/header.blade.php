<div class="fakeheader"></div>
<header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__content">
                <a class="header-logo" href="/">
                    <img src="/images/header__logo.svg" alt=""
                    /></a>
                <a class="header-title" href="{{ route('index') }}">NIGHT PHILADELPHIA</a>
            </div>
            <div class="header__burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav class="menu">
                <ul class="menu__list">
                    <li class="menu__list-item">
                        <a class="menu__list-link" href="{{ route('menu') }}">МЕНЮ</a>
                    </li>
                    <li class="menu__list-item">
                        <a class="menu__list-link" href="{{ route('chat') }}">ВІДГУКИ</a>
                    </li>
                    <li class="menu__list-item">
                        <a class="menu__list-link" href="{{ route('contacts') }}">КОНТАКТИ</a>
                    </li>
                    <li class="menu__list-item">
                        <a class="menu__list-link" href="{{ route('gallery') }}">ГАЛЕРЕЯ</a>
                    </li>
                </ul>
            </nav>
            <nav>+(380)-12-34-158 <br> м. Львів, вул. Сирна, 42</nav>
        </div>
    </div>
</header>