<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ env('APP_NAME', "SIOPM-OFF") }}</title>

    @vite([ 'resources/js/app.js'])

    @hasSection('css')
        @yield('css')
    @endif
</head>
<body>
<div class="layout has-sidebar fixed-sidebar fixed-header">
    @include("theme.menu")
    <div id="overlay" class="overlay"></div>
    <div class="layout">
        <main class="content">
            <div>

                <a id="btn-toggle" href="#" class="sidebar-toggler break-point-sm">
                    <i class="ri-menu-line ri-xl"></i>
                </a>

                @yield('content')

                <footer class="footer">
                    <small style="margin-bottom: 20px; display: inline-block">
                        "VAMOS TODOS JUNTOS. NINGUÉM FICA PARA TRÁS."
                        <span style="color: red; font-size: 18px"></span> -
                        <a target="_blank" href="https://ruscher.com.br"> PMESP </a>
                    </small>
                    <br/>
                    <div class="social-links">
                        <a href="https://github.com/ruscher" target="_blank">
                            <i class="ri-github-fill ri-xl"></i>
                        </a>
                        <a href="https://twitter.com/ruscher" target="_blank">
                            <i class="ri-twitter-fill ri-xl"></i>
                        </a>
                        <a href="https://codepen.io/ruscher" target="_blank">
                            <i class="ri-codepen-fill ri-xl"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/ruscher/" target="_blank">
                            <i class="ri-linkedin-box-fill ri-xl"></i>
                        </a>
                    </div>
                </footer>
        </main>
        <div class="overlay"></div>
    </div>
</div>
<!-- partial -->

<script src="{{ asset('menu.js') }}"></script>
@hasSection('script')
    @yield('script')
@endif
@stack('js')


</body>
</html>
