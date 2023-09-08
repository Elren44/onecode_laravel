<header class="py-3 border-bottom">

    <div class="container">
        <div class="d-flex justify-content-between">
            <div>

                <ul class="list-unstyled d-flex gap-3">
                    <li>
                        <a href="{{ route('home') }}">{{ config('app.name') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('blog') }}">
                            Блог
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                <ul class="list-unstyled d-flex gap-3">
                    <li>
                        <a href="{{ route('register') }}">
                            Регистрация
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}">
                            Вход
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
