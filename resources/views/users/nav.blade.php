<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <!-- Логотип и кнопка «Гамбургер» -->
    <a class="navbar-brand" href="/">Блог</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbar-blog" aria-controls="navbar-blog"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Основная часть меню (может содержать ссылки, формы и прочее) -->
    <div class="collapse navbar-collapse" id="navbar-blog">
        <!-- Этот блок расположен слева -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Блог</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Теги</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Контакты</a>
            </li>
        </ul>
        <!-- Этот блок расположен посередине -->
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search"
                   placeholder="Поиск по блогу" aria-label="Search">
            <button class="btn btn-outline-info my-2 my-sm-0"
                    type="submit">Искать</button>
        </form>
        <!-- Этот блок расположен справа -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.index') }}">{{ auth()->user()->name }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Выйти</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </div>
</nav>
<!-- End Navbar -->
