<aside id="sidebar" class="sidebar break-point-sm has-bg-image">
    <a id="btn-collapse" class="sidebar-collapser" style="text-decoration: none;"><i
            class="ri-arrow-left-s-line"></i></a>
{{--    <div class="image-wrapper">--}}
{{--        <img src="assets/images/sidebar-bg.jpg" alt="sidebar background"/>--}}
{{--    </div>--}}

    <div class="sidebar-layout">
        <div class="sidebar-header">
            <div class="pro-sidebar-logo">
                <div><img src="https://raw.githubusercontent.com/coltpfa/COPOM/main/MENU/PMESP.svg"
                          style="width:130px; margin-left: 70px; margin-top: 20px;"></div>
                <h5>SIOPM OFFLINE</h5>
            </div>
        </div>
        <div class="sidebar-content">
            <nav class="menu open-current-submenu">
                <ul>
                    <li class="menu-header"><span> MENU </span></li>
                    <li class="menu-item sub-menu">
                        <a href="#" style="text-decoration: none;">
                    <span class="menu-icon">
                      <i><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path
                                  fill="currentcolor"
                                  d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z"/></svg></i>
                    </span>
                            <span class="menu-title">Atendente</span>
                            <span class="menu-suffix">
                      <span class="badge badge-pill badge-primary"> 📞 </span>
                    </span>
                        </a>
                        <div class="sub-menu-list">
                            <ul>
                                <li class="menu-item">
                                    <a href="{{route('ocorrencia')}}" style="text-decoration: none;">
                                        <span class="menu-title">Cadastro de Ocorrência </span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" style="text-decoration: none;" id="ramais-link">
                                        <span class="menu-title">Ramais</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" style="text-decoration: none;">
                                        <span class="menu-title">Pesquisar Ocorrência</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="menu-item sub-menu">
                        <a href="#" style="text-decoration: none;">
                    <span class="menu-icon">
                      <i><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path
                                  fill="currentcolor"
                                  d="M256 48C141.1 48 48 141.1 48 256v40c0 13.3-10.7 24-24 24s-24-10.7-24-24V256C0 114.6 114.6 0 256 0S512 114.6 512 256V400.1c0 48.6-39.4 88-88.1 88L313.6 488c-8.3 14.3-23.8 24-41.6 24H240c-26.5 0-48-21.5-48-48s21.5-48 48-48h32c17.8 0 33.3 9.7 41.6 24l110.4 .1c22.1 0 40-17.9 40-40V256c0-114.9-93.1-208-208-208zM144 208h16c17.7 0 32 14.3 32 32V352c0 17.7-14.3 32-32 32H144c-35.3 0-64-28.7-64-64V272c0-35.3 28.7-64 64-64zm224 0c35.3 0 64 28.7 64 64v48c0 35.3-28.7 64-64 64H352c-17.7 0-32-14.3-32-32V240c0-17.7 14.3-32 32-32h16z"/></svg></i>
                    </span>
                            <span class="menu-title">Despachador</span>
                            <span class="menu-suffix">
                  <span class="badge badge-pill badge-primary"> 🚨 </span>
                    </span>
                        </a>
                        <div class="sub-menu-list">
                            <ul>
                                <li class="menu-item">
                                    <a href="/despachador" style="text-decoration: none;">
                                        <span class="menu-title">Cabine Batalhão</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" style="text-decoration: none;">
                                        <span class="menu-title">Planilha de Carater Geral</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" style="text-decoration: none;">
                                        <span class="menu-title">Planilha Personalizada</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="/despachador" style="text-decoration: none;">
                                        <span class="menu-title">Gerar Ocorrência</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="/despachador" style="text-decoration: none;">
                                        <span class="menu-title">Pesquisar Ocorrências</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="menu-item sub-menu">
                        <a href="#" style="text-decoration: none;">
                    <span class="menu-icon">
                      <i><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path
                                  fill="currentcolor"
                                  d="M38.3 241.3L15.1 200.6c-9.2-16.2-8.4-36.5 4.5-50C61.4 106.8 144.7 48 256 48s194.6 58.8 236.4 102.6c12.9 13.5 13.7 33.8 4.5 50l-23.1 40.7c-7.5 13.2-23.3 19.3-37.8 14.6l-81.1-26.6c-13.1-4.3-22-16.6-22-30.4V144c-49.6-18.1-104-18.1-153.6 0v54.8c0 13.8-8.9 26.1-22 30.4L76.1 255.8c-14.5 4.7-30.3-1.4-37.8-14.6zM32 336c0-8.8 7.2-16 16-16H80c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H48c-8.8 0-16-7.2-16-16V336zm0 96c0-8.8 7.2-16 16-16H80c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H48c-8.8 0-16-7.2-16-16V432zM144 320h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H144c-8.8 0-16-7.2-16-16V336c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H240c-8.8 0-16-7.2-16-16V336zm112-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H336c-8.8 0-16-7.2-16-16V336c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H432c-8.8 0-16-7.2-16-16V336zm16 80h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H432c-8.8 0-16-7.2-16-16V432c0-8.8 7.2-16 16-16zM128 432c0-8.8 7.2-16 16-16H368c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H144c-8.8 0-16-7.2-16-16V432z"/></svg></i>
                    </span>
                            <span class="menu-title">Supervisão</span>
                            <span class="menu-suffix">
                      <span class="badge badge-pill badge-primary"> 📞 </span>
                    </span>
                        </a>
                        <div class="sub-menu-list">
                            <ul>

                                <li class="menu-item sub-menu">
                                    <a href="#" style="text-decoration: none;">
                                        <span class="menu-title">Supervisão 190</span>
                                    </a>
                                    <div class="sub-menu-list">
                                        <ul>
                                            <li class="menu-item">
                                                <a href="#" style="text-decoration: none;">
                                                    <span class="menu-title">Verificar Ocorrências</span>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#" style="text-decoration: none;">
                                                    <span class="menu-title">Estatisticas</span>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#" style="text-decoration: none;">
                                                    <span class="menu-title">Ocorrências CAD</span>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#" style="text-decoration: none;">
                                                    <span class="menu-title">Usuários Logados</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item sub-menu">
                                    <a href="#" style="text-decoration: none;">
                                        <span class="menu-title">Supervisão CPA</span>
                                    </a>
                                    <div class="sub-menu-list">
                                        <ul>
                                            <li class="menu-item">
                                                <a href="#" style="text-decoration: none;">
                                                    <span class="menu-title">Supervisionar CPA</span>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#" style="text-decoration: none;">
                                                    <span class="menu-title">Unir CPA</span>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#" style="text-decoration: none;">
                                                    <span class="menu-title">Supervisão BPM/M</span>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#" style="text-decoration: none;">
                                                    <span class="menu-title">Unir BPM/M</span>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#" style="text-decoration: none;">
                                                    <span class="menu-title">Estatisticas CPA</span>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#" style="text-decoration: none;">
                                                    <span class="menu-title">Usuários Logados</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>



                    <li class="menu-item sub-menu">
                        <a href="#" style="text-decoration: none;">
                    <span class="menu-icon">
<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path fill="currentcolor" d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z"/></svg>
                    </span>
                            <span class="menu-title">Técnica</span>
                            <span class="menu-suffix">
                  <span class="badge badge-pill badge-primary"> ⚙️ </span>
                    </span>
                        </a>
                        <div class="sub-menu-list">
                            <ul>
                                <li class="menu-item">
                                    <a href="/usuarios" style="text-decoration: none;">
                                        <span class="menu-title">Lista de Usuarios</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="/usuarios/cadastro" style="text-decoration: none;">
                                        <span class="menu-title">Criar Usuario</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" style="text-decoration: none;">
                                        <span class="menu-title">Usuarios deletados</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item sub-menu">
                        <a href="#" style="text-decoration: none;">
                    <span class="menu-icon">
                      <i><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path fill="currentcolor" d="M264.5 5.2c14.9-6.9 32.1-6.9 47 0l218.6 101c8.5 3.9 13.9 12.4 13.9 21.8s-5.4 17.9-13.9 21.8l-218.6 101c-14.9 6.9-32.1 6.9-47 0L45.9 149.8C37.4 145.8 32 137.3 32 128s5.4-17.9 13.9-21.8L264.5 5.2zM476.9 209.6l53.2 24.6c8.5 3.9 13.9 12.4 13.9 21.8s-5.4 17.9-13.9 21.8l-218.6 101c-14.9 6.9-32.1 6.9-47 0L45.9 277.8C37.4 273.8 32 265.3 32 256s5.4-17.9 13.9-21.8l53.2-24.6 152 70.2c23.4 10.8 50.4 10.8 73.8 0l152-70.2zm-152 198.2l152-70.2 53.2 24.6c8.5 3.9 13.9 12.4 13.9 21.8s-5.4 17.9-13.9 21.8l-218.6 101c-14.9 6.9-32.1 6.9-47 0L45.9 405.8C37.4 401.8 32 393.3 32 384s5.4-17.9 13.9-21.8l53.2-24.6 152 70.2c23.4 10.8 50.4 10.8 73.8 0z"/></svg></i>
                    </span>
                            <span class="menu-title">STQ</span>
                            <span class="menu-suffix">
                  <span class="badge badge-pill badge-primary"> 📊 </span>
                    </span>
                        </a>
                        <div class="sub-menu-list">
                            <ul>



                                <li class="menu-item sub-menu">
                                    <a href="#" style="text-decoration: none;">
                                        <span class="menu-title">Gerenciar Despacho</span>
                                    </a>
                                    <div class="sub-menu-list">
                                        <ul>
                                            <li class="menu-item">
                                                <a href="#">
                                                    <span class="menu-title">Cidades</span>
                                                </a>
                                            </li>

                                            <li class="menu-item">
                                                <a href="#">
                                                    <span class="menu-title">BPM/M</span>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#">
                                                    <span class="menu-title">Ramais</span>
                                                </a>
                                            </li>


                                        </ul>
                                    </div>
                                </li>

                                <li class="menu-item sub-menu">
                                    <a href="#" style="text-decoration: none;">
                                        <span class="menu-title">Gerenciar Natureza</span>
                                    </a>
                                    <div class="sub-menu-list">
                                        <ul>

                                            <li class="menu-item">
                                                <a href="{{route('stq.index')}}" style="text-decoration: none;">
                                                    <span class="menu-title">Listar Natureza</span>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('stq.create')}}" style="text-decoration: none;">
                                                    <span class="menu-title">Adicionar Natureza</span>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#" style="text-decoration: none;">
                                                    <span class="menu-title">Editar Natureza</span>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#" style="text-decoration: none;">
                                                    <span class="menu-title">Excluir Natureza</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>



                                <li class="menu-item sub-menu">
                                    <a href="#" style="text-decoration: none;">
                                        <span class="menu-title">Gerenciar Instruções</span>
                                    </a>
                                    <div class="sub-menu-list">
                                        <ul>

                                            <li class="menu-item">
                                                <a href="#" >
                                                    <span class="menu-title">Instruções Sistema</span>
                                                </a>
                                            </li>


                                            <li class="menu-item">
                                                <a href="#" style="text-decoration: none;">
                                                    <span class="menu-title">Instruções Cadastro</span>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#" >
                                                    <span class="menu-title">Ordem de Serviço</span>
                                                </a>
                                            </li>

                                            <li class="menu-item">
                                                <a href="#" >
                                                    <span class="menu-title">Instruções ICC</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>




                            </ul>
                        </div>
                    </li>



                    <li class="menu-item sub-menu">
                        <a href="#" style="text-decoration: none;">
                    <span class="menu-icon">
<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path fill="currentcolor" d="M160 0c-23.7 0-44.4 12.9-55.4 32H48C21.5 32 0 53.5 0 80V400c0 26.5 21.5 48 48 48H192V176c0-44.2 35.8-80 80-80h48V80c0-26.5-21.5-48-48-48H215.4C204.4 12.9 183.7 0 160 0zM272 128c-26.5 0-48 21.5-48 48V448v16c0 26.5 21.5 48 48 48H464c26.5 0 48-21.5 48-48V243.9c0-12.7-5.1-24.9-14.1-33.9l-67.9-67.9c-9-9-21.2-14.1-33.9-14.1H320 272zM160 40a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/></svg>
                    </span>
                            <span class="menu-title">Certidões</span>
                            <span class="menu-suffix">
                  <span class="badge badge-pill badge-primary"> 📋 </span>
                    </span>
                        </a>

                        <div class="sub-menu-list">
                            <ul>
                                <li class="menu-item">
                                    <a href="#" style="text-decoration: none;">
                                        <span class="menu-title">Verificar Ocorrências</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" style="text-decoration: none;">
                                        <span class="menu-title">Deletar Ocorrências</span>
                                    </a>
                                </li>

                            </ul>

                        </div>




                    <li class="menu-item sub-menu">
                        <a href="#" style="text-decoration: none;">
                    <span class="menu-icon">
                      <i><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path
                                  fill="currentcolor"
                                  d="M0 24C0 10.7 10.7 0 24 0H616c13.3 0 24 10.7 24 24s-10.7 24-24 24H24C10.7 48 0 37.3 0 24zM0 488c0-13.3 10.7-24 24-24H616c13.3 0 24 10.7 24 24s-10.7 24-24 24H24c-13.3 0-24-10.7-24-24zM83.2 160a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zM32 320c0-35.3 28.7-64 64-64h96c12.2 0 23.7 3.4 33.4 9.4c-37.2 15.1-65.6 47.2-75.8 86.6H64c-17.7 0-32-14.3-32-32zm461.6 32c-10.3-40.1-39.6-72.6-77.7-87.4c9.4-5.5 20.4-8.6 32.1-8.6h96c35.3 0 64 28.7 64 64c0 17.7-14.3 32-32 32H493.6zM391.2 290.4c32.1 7.4 58.1 30.9 68.9 61.6c3.5 10 5.5 20.8 5.5 32c0 17.7-14.3 32-32 32h-224c-17.7 0-32-14.3-32-32c0-11.2 1.9-22 5.5-32c10.5-29.7 35.3-52.8 66.1-60.9c7.8-2.1 16-3.1 24.5-3.1h96c7.4 0 14.7 .8 21.6 2.4zm44-130.4a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zM321.6 96a80 80 0 1 1 0 160 80 80 0 1 1 0-160z"/></svg></i>
                    </span>
                            <span class="menu-title">Chefia</span>
                            <span class="menu-suffix">
                  <span class="badge badge-pill badge-primary"> ⚡️ </span>
                    </span>
                        </a>
                        <div class="sub-menu-list">
                            <ul>
                                <li class="menu-item">
                                    <a href="#" style="text-decoration: none;">
                                        <span class="menu-title">Estatisticas Ocorrencias</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" style="text-decoration: none;">
                                        <span class="menu-title">Selecionar BPM/M</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" style="text-decoration: none;">
                                        <span class="menu-title">Usuários Logados</span>
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </li>


                    <li class="menu-header" style="padding-top: 20px"><span> EXTRA </span></li>

                    <li class="menu-item sub-menu">
                        <a href="#" style="text-decoration: none;">
                    <span class="menu-icon">
                      <i><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path
                                  fill="currentcolor"
                                  d="M408 120c0 54.6-73.1 151.9-105.2 192c-7.7 9.6-22 9.6-29.6 0C241.1 271.9 168 174.6 168 120C168 53.7 221.7 0 288 0s120 53.7 120 120zm8 80.4c3.5-6.9 6.7-13.8 9.6-20.6c.5-1.2 1-2.5 1.5-3.7l116-46.4C558.9 123.4 576 135 576 152V422.8c0 9.8-6 18.6-15.1 22.3L416 503V200.4zM137.6 138.3c2.4 14.1 7.2 28.3 12.8 41.5c2.9 6.8 6.1 13.7 9.6 20.6V451.8L32.9 502.7C17.1 509 0 497.4 0 480.4V209.6c0-9.8 6-18.6 15.1-22.3l122.6-49zM327.8 332c13.9-17.4 35.7-45.7 56.2-77V504.3L192 449.4V255c20.5 31.3 42.3 59.6 56.2 77c20.5 25.6 59.1 25.6 79.6 0zM288 152a40 40 0 1 0 0-80 40 40 0 1 0 0 80z"/></svg></i>
                    </span>
                            <span class="menu-title">Mapas</span>
                            <span class="menu-suffix">
                  <span class="badge badge-pill badge-primary"> 🌎 </span>
                    </span>
                        </a>
                        <div class="sub-menu-list">
                            <ul>
                                <li class="menu-item">
                                    <a href="#" style="text-decoration: none;"
                                       target="_blank">
                                        <span class="menu-title">Mapa Copom 2023</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="https://www.google.com/maps/" style="text-decoration: none;"
                                       target="_blank">
                                        <span class="menu-title">Google Maps</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" style="text-decoration: none;">
                                        <span class="menu-title">Open street map</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-item sub-menu">
                        <a href="#" style="text-decoration: none;">
                    <span class="menu-icon">
                     <i class="ri-paint-brush-fill"></i>
                    </span>
                            <span class="menu-title">Tema</span>
                            <span class="menu-suffix">
                  <span class="badge badge-pill badge-primary"> 🌓 </span>
                    </span>
                        </a>
                        <div class="sub-menu-list">
                            <ul>
                                <li class="menu-item">
                                    <a href="#" style="text-decoration: none;" onclick="setTheme('dark')">
                                        <span class="menu-title">Dark</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" style="text-decoration: none;" onclick="setTheme('light')">
                                        <span class="menu-title">Light</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="menu-item sub-menu">
                        <a href="#" style="text-decoration: none;">
                    <span class="menu-icon">
                      <i><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path
                                  fill="currentcolor"
                                  d="M160 64c0-35.3 28.7-64 64-64H576c35.3 0 64 28.7 64 64V352c0 35.3-28.7 64-64 64H336.8c-11.8-25.5-29.9-47.5-52.4-64H384V320c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32v32h64V64L224 64v49.1C205.2 102.2 183.3 96 160 96V64zm0 64a96 96 0 1 1 0 192 96 96 0 1 1 0-192zM133.3 352h53.3C260.3 352 320 411.7 320 485.3c0 14.7-11.9 26.7-26.7 26.7H26.7C11.9 512 0 500.1 0 485.3C0 411.7 59.7 352 133.3 352z"/></svg></i>
                    </span>
                            <span class="menu-title">Instruções</span>
                            <span class="menu-suffix">
                      <span class="badge secondary"> 💻 </span>
                                        </span>
                        </a>
                        <div class="sub-menu-list">
                            <ul>

                                <li class="menu-item sub-menu">
                                    <a href="#" style="text-decoration: none;">
                                        <span class="menu-title">Instruções Gerais</span>
                                    </a>
                                    <div class="sub-menu-list">
                                        <ul>
                                            <li class="menu-item">
                                                <a href="#" style="text-decoration: none;">
                                                    <span class="menu-title">Sistema</span>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#" style="text-decoration: none;">
                                                    <span class="menu-title">cadastro Ocorrências</span>
                                                </a>
                                            </li>


                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item sub-menu">
                                    <a href="#" style="text-decoration: none;">
                                        <span class="menu-title">Instruções Especificas</span>
                                    </a>
                                    <div class="sub-menu-list">
                                        <ul>
                                            <li class="menu-item">
                                                <a href="#" style="text-decoration: none;">
                                                    <span class="menu-title">Instruções Sistema</span>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#" style="text-decoration: none;">
                                                    <span class="menu-title">Ordem de Serviço</span>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#" style="text-decoration: none;">
                                                    <span class="menu-title">Instruções ICC</span>
                                                </a>
                                            </li>


                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-header" style="padding-top: 20px"><span> CONFIGURAÇÕES</span></li>
                    <li class="menu-item sub-menu">
                        <a href="#" style="text-decoration: none;">
                    <span class="menu-icon">
                      <i><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path
                                  fill="currentcolor"
                                  d="M0 416c0 17.7 14.3 32 32 32l54.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48L480 448c17.7 0 32-14.3 32-32s-14.3-32-32-32l-246.7 0c-12.3-28.3-40.5-48-73.3-48s-61 19.7-73.3 48L32 384c-17.7 0-32 14.3-32 32zm128 0a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM320 256a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm32-80c-32.8 0-61 19.7-73.3 48L32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l246.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48l54.7 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-54.7 0c-12.3-28.3-40.5-48-73.3-48zM192 128a32 32 0 1 1 0-64 32 32 0 1 1 0 64zm73.3-64C253 35.7 224.8 16 192 16s-61 19.7-73.3 48L32 64C14.3 64 0 78.3 0 96s14.3 32 32 32l86.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48L480 128c17.7 0 32-14.3 32-32s-14.3-32-32-32L265.3 64z"/></svg></i>
                    </span>
                            <span class="menu-title">Configurações</span>
                            <span class="menu-suffix">
                  <span class="badge badge-pill badge-primary"> ⚙️ </span>
                    </span>
                        </a>
                        <div class="sub-menu-list">
                            <ul>
                                <li class="menu-item">
                                    <a href="#" style="text-decoration: none;">
                                        <span class="menu-title">Alterar Senha</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" style="text-decoration: none;">
                                        <span class="menu-title">Perfil do Usuário</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="menu-item">
                        <a href="{{route('auth.logout')}}" style="text-decoration: none;">
               <span class="menu-icon">
               <i><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path
                           fill="currentcolor"
                           d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V256c0 17.7 14.3 32 32 32s32-14.3 32-32V32zM143.5 120.6c13.6-11.3 15.4-31.5 4.1-45.1s-31.5-15.4-45.1-4.1C49.7 115.4 16 181.8 16 256c0 132.5 107.5 240 240 240s240-107.5 240-240c0-74.2-33.8-140.6-86.6-184.6c-13.6-11.3-33.8-9.4-45.1 4.1s-9.4 33.8 4.1 45.1c38.9 32.3 63.5 81 63.5 135.4c0 97.2-78.8 176-176 176s-176-78.8-176-176c0-54.4 24.7-103.1 63.5-135.4z"/></svg></i>
              </span>
                            <span class="menu-title">Sair da Conta</span>
                        </a>
                    </li>


                    </li>

                    <div class="sidebar-footer">
                        <div class="footer-box">
                            <div>
                                <img
                                    class="react-logo"
                                    src="https://raw.githubusercontent.com/ColtSeals/caratergeral/main/20230608_141758.png"
                                    alt="react"
                                />
                            </div>
                            <div style="padding: 0 10px">
                <span style="display: block; margin-bottom: 10px"
                >Centro de Operações da Polícia Militar do Estado de São Paulo
                </span>
                                <div style="margin-bottom: 15px">
                                    <img
                                        alt="preview badge"
                                        src="https://raw.githubusercontent.com/coltpfa/COPOM/main/MENU/COPOM.png"
                                        style="width: 70px;"
                                    />
                                </div>
                                <div>
                                    <a href="https://github.com/azouaoui-med/react-pro-sidebar" target="_blank">Salvando
                                        Vidas!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
            </nav>
        </div>
    </div>
</aside>
