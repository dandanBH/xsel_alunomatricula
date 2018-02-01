
<div class="nav-side-menu">
    <div class="brand">Brand Logo</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

    <div class="menu-list">
        
        <ul id="menu-content" class="menu-content collapse out">
            <li>
                <a href="<?= base_url("Painel") ?>">
                    <i class="glyphicon glyphicon-home"></i> Home </a>
            </li>

            <li  data-toggle="collapse" data-target="#cadastro" class="collapsed active">
                <a href="#"><i class="fa fa-file-text-o" ></i> Cadastro <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="cadastro" >
               
                 <!--<li><a href="<?= base_url("Jogador") ?>">Jogador Único</a></li>-->
                <!--<li class=""><a href="<?= base_url("Patrocinadores") ?>">Patrocinadores</a></li>-->
                <li class=""><a href="<?= base_url("Participante") ?>">Participante</a></li>
                <li class=""><a href="<?= base_url("Profissionaisusuario") ?>">Profissionais</a></li>
                <li class=""><a href="<?= base_url("Profissionais") ?>">Profissionais s/ Usuario</a></li>
                <li><a href="<?= base_url("Turmasdesc") ?>">Turmas</a></li>
               



                <!--<li><a href="#" class="glyphicon glyphicon-shopping-cart"> Buttons</a></li>-->


            </ul>


            <li data-toggle="collapse" data-target="#service" class="collapsed">
                <a href="#"><i class="fa fa-globe fa-lg"></i> Montagem <span class="arrow"></span></a>
            </li>  
            <ul class="sub-menu collapse" id="service">
                <!--<li class=""> <a href="<?= base_url("Atividade") ?>"> Atividade</a></li>-->
                <!--<li><a href="<?= base_url("Times") ?>" title="Aplicar atividade em times e competidores">Atividades Times</a></li>-->
<!--                <li> <a href="<?= base_url("Aplicaratividade") ?>">Aplicar Atividades Escolares</a></li>-->
                <!--<li> <a href="<?= base_url("Menuatividadesjogos") ?>">Jogos</a></li>-->
                <!--<li> <a href="<?= base_url("Menuatividadesprovas") ?>">Provas</a></li>-->
                <li class=""><a href="<?= base_url("Inscrieventos") ?>">Inscrição Eventos</a></li>

                <!--<li>Matricula</li>-->
                <li>Premiação</li>
                <!--<li><a href="<?= base_url("jogador") ?>">Jogador Único</a></li>-->
                <li><a href="<?= base_url("Turmas") ?>">Turmas</a></li>

            </ul>


            <li data-toggle="collapse" data-target="#matricula" class="collapsed">
                <a href="#"><i class="fa fa-soccer-ball-o"></i> Matriculas <span class="arrow"></span></a>
            </li>  
            <ul class="sub-menu collapse" id="matricula">
                <li class=""> <a href="<?= base_url("Matriculaaluno") ?>">Alunos</a></li>
                <li><a href="<?= base_url("Matriculaatleta") ?>">Atletas</a></li>
                <!--<li><a href="<?= base_url("Matriculajogadores") ?>">Jogadores</a></li>-->
<!--                 <li> <a href="<?= base_url("AplicaratividadeTime") ?>">Agendar Jogo</a></li>
                -->

            </ul>

<!--            <li data-toggle="collapse" data-target="#recursos" class="collapsed">
                <a href="#"><i class="fa fa-credit-card"></i> Recursos <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="recursos">
                <li><a href="<?= base_url("Aplicarrec") ?>">Aplicar</a></li>
                <li>Patrocinar</li>
            </ul>-->


            <li data-toggle="collapse" data-target="#resultado" class="collapsed">
                <a href="#"><i class="fa fa-bar-chart"></i> Resultado <span class="arrow"></span></a>
            </li>  
            <ul class="sub-menu collapse" id="resultado">
                <li class=""> <a href="<?= base_url("Resultadojogo") ?>">Jogos</a></li>
                <li> <a href="<?= base_url("Aplicaratividade") ?>">Provas</a></li>
<!--                 <li> <a href="<?= base_url("AplicaratividadeTime") ?>">Agendar Jogo</a></li>
                -->

            </ul>




<!--            <li data-toggle="collapse" data-target="#financeiro" class="collapsed">
                <a href="#"><i class="fa fa-cc-visa"></i> Financeiro <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="financeiro">
                <li>Pagamentos</li>
                <li>Recebimentos</li>
            </ul>-->

            <li data-toggle="collapse" data-target="#instrutor" class="collapsed">
                <a href="#"><i class="fa fa-graduation-cap"></i> Instrutor <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="instrutor">
                <li><a href="<?= base_url("Frequencia") ?>">Lançar Frequencia</a></li>

            </ul>

            <li>
                <a href="#" title="Visualizar seu perfil">
                    <i class="fa fa-user fa-lg"></i> Perfil
                </a>
            </li>

<!--            <li>
                <a href="<?= base_url("Usuario") ?>"> <i class="fa fa-users fa-lg"></i> Usuario</a>
            </li>-->

            <li data-toggle="collapse" data-target="#relatorio" class="collapsed">
                <a href="#"><i class="fa fa-file-pdf-o"></i> Relatórios <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="relatorio">
                <li>Projetos</li>
                <li>Profissionais Atividade</li>
                <!--<li class=""><a href="#">Recursos Aplicados</a></li>-->
                <!--<li>Patrocinios</li>-->
                <!--<li>Resultados de Jogos</li>-->
                <li>Times / Turmas</li>
            </ul>

            <?php  if (empty($this->session->nivel)){?>
            <li data-toggle="collapse" data-target="#tabelas" class="collapsed">
                <a href="#"><i class="fa fa-align-justify"></i> Tabelas <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="tabelas">
                <li class=""><a href="<?= base_url("Etapa") ?>">Etapa</a></li>
                <li class=""><a href="<?= base_url("Natureza") ?>">Natureza</a></li>
                <li class=""><a href="<?= base_url("TipoEntidade") ?>">Tipo Entidade</a></li>
                <li class=""><a href="<?= base_url("Modalidade") ?>">Modalidade</a></li>
                <li class=""><a href="<?= base_url("Modalidadeesp") ?>">Modalidade Especialidade</a></li>
                <li class=""><a href="<?= base_url("Modulo") ?>">Modulo</a></li>

                <li class=""><a href="<?= base_url("Funcoes") ?>">Funções</a></li>
            </ul>
            <?php }?>
        </ul>
    </div>
</div>