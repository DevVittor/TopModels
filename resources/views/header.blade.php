<header class="header">
    <div class="container-header">
        <div class="flex items-center gap-3">
            <a href="/"><h1 class="uppercase text-4xl font-bold text-rosa"><i class="bi bi-balloon-heart pr-2"></i>A<b class="text-yellow-300">br</b>ime</h1></a>
        </div>
        <div class="">
            <nav>
                <ul class="flex items-center justify-center flex-wrap gap-3 text-white font-medium text-base">
                    <li><a href="/">Início</a></li>
                    <li><a href="/acompanhantes">Acompanhantes</a></li>
                    <li><a href="/planos">Planos</a></li>
                </ul>
            </nav>
        </div>
        <div class="flex items-center flex-row gap-5">
            @auth
            <div class="flex items-center gap-5">
                    <a class="pt-2 pb-2 pr-5 pl-5  rounded-sm bg-yellow-300 shadow-card text-white text-base font-semibold" href="/painel">Painel</a>
                    <a class="pt-2 pb-2 pr-5 pl-5  rounded-sm bg-azul shadow-card text-white text-base font-semibold" href="/events/create">Criar Perfil</a>
                <form action="/logout" method="post">
                    @csrf
                    <a onclick="event.preventDefault();this.closest('form').submit();"
                    class="bg-red-600 rounded-sm pr-5 pl-5 pt-2 pb-2 text-white font-semibold text-base" href="/logout">Encerrar Sessão</a>
                </form>
            </div>
            @endauth
            @guest
            <div class="flex items-center gap-5">
                <a class="bg-red-600 rounded-sm pr-5 pl-5 pt-2 pb-2 text-white font-semibold text-base" href="/register">Criar Conta</a>
                <a class="bg-blue-500 rounded-sm pr-5 pl-5 pt-2 pb-2 text-white font-semibold text-base" href="/login">Entrar</a>
            </div>
            @endguest
        </div>
    </div>
</header>