<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <br><br>   
    <legend>

        <div class="row breadcrumb" >
            <div class="col-md-10">
                <b>Alterar Aluno Matriculado</b>
            </div>
            <div class="col-md-2">
                <a class="btn btn-primary" href="<?= base_url() ?>Aluno">Voltar</a>
            </div>
        </div>

    </legend>
    <div class="row">
        <?php
        if (isset($mensagem)) {
            ?>
            <div class="col-md-4">
                <div class="alert alert-success text-center">
                    Atividade Aplicada Alterada Com Sucesso!
                </div>
            </div>
        <?php }
        ?>
    </div>
    <div class="container">
        <form  method="POST" action="<?= site_url('Aplicaratividade/altera/') ?>"> 
              <input type="hidden" value="" name="idaplicaatividade">
            
            <ul class="nav nav-tabs nav-pills">
                <li class="active"><a href="#home" data-toggle="tab">Cadastro Inicial</a></li>
                <li><a href="#questionario" data-toggle="tab">Questionário</a></li>
            </ul>
            <div class="tab-content">


                <div class="tab-pane active" id="home">
                    <div class="row"><br></div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="aluno">Aluno</label>
                                <select id="aluno" class="form-control" name="aluno">
                                    <option value="">---</option>
                                    <?php foreach ($participante->result() as $part => $pr) {
                                        ?>
                                        <option value="<?php echo $pr->id ?>"><?php echo $pr->nome ?></option>   

                                    <?php } ?>
                                </select>
                             </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="turma">Turma</label>
                                <select id="turma" class="form-control" name="turma">
                                    <option value="">---</option>
                                     <?php foreach ($turma->result() as $turm => $tm) {
                                        ?>
                                        <option value="<?php  echo $tm->turma ?>"> <?php  echo $tm->nome.' / '.$tm->turnodesc.' / '.$tm->horaInicio.' até '.$tm->horaFim ?></option>   

                                    <?php  } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="tipo">Tipo</label>
                                <select id="turma" class="form-control" name="tipo">
                                    <option value="">---</option>
                                    <option value="C">Cidadão</option>
                                    <option value="E">Estudante</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="escolaridade">Escoridade</label>
                                <select id="escolaridade" class="form-control" name="escolaridade">
                                    <option value="">---</option>
                                    <option value="fi">Ensino Funtamental Incompleto</option>
                                    <option value="fc">Ensino Funtamental Completo</option>
                                    <option value="mi">Ensino Medio incompleto</option>
                                    <option value="mc">Ensino Medio Completo</option>
                                    <option value="si">Ensino Superior Incompleto</option>
                                    <option value="sc">Ensino Superior Completo</option>
                                    <option value="ei">Especialização Incompleto</option>
                                    <option value="ec">Especialização Completo</option>
                                    <option value="s_instr">Sem Instrução</option>
                                    <option value="nd">Não Declarado</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="entidade">Escola</label>
                                <select id="entidade" class="form-control" name="entidade">
                                    <option value="">---</option>
                                    <option value="0">Não Estuda Atualmente</option>
                                    <?php foreach ($entidade->result() as $entid => $en) {
                                        ?>
                                        <option value="<?php echo $en->identidade ?>"><?php echo $en->entidade ?></option>   

                                    <?php } ?>
                                </select>
                             </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="observacao">Observações:</label>
                                <textarea class="form-control" rows="5" id="observacao" name="observacao"></textarea>
                            </div>
                        </div>

                    </div>
                  

                </div>


                <div class="tab-pane" id="questionario">
                    <div class="container">
                        <div class="row">
                            <br>
                            <div class="col-md-3">
                                <fieldset class="">
                                    <legend class="legclass">Tamanho Uniforme</legend>
                                    INFANTIL <label class="radio-inline"><input type="radio" name="tamuni" value="8">8</label><label class="radio-inline"><input type="radio" name="tamuni" value="10">10</label><label class="radio-inline"><input type="radio" name="tamuni" value="12">12</label><label class="radio-inline"><input type="radio" name="tamuni" value="14">14</label><br>
                                    JUVENIL&nbsp; <label class="radio-inline"><input type="radio" name="tamuni" value="JP">P</label><label class="radio-inline"><input type="radio" name="tamuni" value="JM">M</label>&nbsp;<label class="radio-inline"><input type="radio" name="tamuni" value="JG">G</label><label class="radio-inline">&nbsp;&nbsp;<input type="radio" name="tamuni" value="JGG">GG</label><br>
                                    ADULTO&nbsp;  <label class="radio-inline"><input type="radio" name="tamuni" value="AP">P</label><label class="radio-inline"><input type="radio" name="tamuni" value="AM">M</label>&nbsp;<label class="radio-inline"><input type="radio" name="tamuni" value="AG">G</label><label class="radio-inline">&nbsp;&nbsp;<input type="radio" name="tamuni" value="AGG">GG</label><br>
                                </fieldset>
                            </div>

                            <div class="col-md-5">
                                <fieldset class="">
                                    <legend class="legclass">Porque pretende ingressar no projeto?</legend>
                                    <label class="radio-inline"><input type="radio" class="radiofield" name="motivoingresso">Melhorar a saúde</label>
                                    <label class="radio-inline"><input type="radio" name="motivoingresso">Ganhar Uniforme</label><br>
                                    <label class="radio-inline"><input type="radio" name="motivoingresso">Fazer amizade</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label class="radio-inline"><input type="radio" name="motivoingresso">Torna-se Atleta</label>

                                    <label class="radio-inline"><input type="radio" name="motivoingresso">Ocupar o tempo livre</label><br><br>
                                    <label class="">Outro:&nbsp;<input type="text" name="motivoingressodesc"></label>

                                </fieldset>
                            </div>

                        </div>

                        <br>
                        <div class="row">
                            <div class="col-md-2">
                                <label for="nome">Calçado</label>
                                <input type="text" class="form-control" id="tamcalcado" name="tamcalcado" required="" placeholder="Tam Calçado">
                            </div>
                            <div class="col-md-3">
                                <fieldset class="">
                                    <legend class="legclass">Gosta de Praticar Esportes?</legend>
                                    <label class="radio-inline"><input type="radio" class="radiofield" name="gesporte" value="S">Sim</label>
                                    <label class="radio-inline"><input type="radio" class="radiofield" name="gesporte" value="N">Não</label>

                                </fieldset>
                            </div>
                            <div class="col-md-5">
                                <fieldset class="">
                                    <legend class="legclass">Como se desloca para o projeto?</legend>
                                    <label class="radio-inline"><input type="radio" class="radiofield" name="tipotransp" value="A">Andando</label>
                                    <label class="radio-inline"><input type="radio" name="tipotransp" value="B">Bicicleta</label>
                                    <label class="radio-inline"><input type="radio" name="tipotransp" value="C">Carro</label>
                                    <label class="radio-inline"><input type="radio" name="tipotransp" value="M">Moto</label>
                                    <label class="radio-inline"><input type="radio" name="tipotransp" value="O">Onibus</label>
                                    <br>
                                    <label class="">Outro:&nbsp;<input type="text" name="tipotranspdesc"></label>

                                </fieldset>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                              <div class="col-md-4">
                                <fieldset class="">
                                    <legend class="legclass">Ja partipou de algum projeto esportivo?</legend>
                                    <label class="radio-inline"><input type="radio" class="radiofield" name="participproj" value="S">Sim</label>
                                    <label class="radio-inline"><input type="radio" class="radiofield" name="participproj" value="N">Não</label>
                                    <label class="">Se sim, Qual(is):&nbsp;<input type="text" name="participprojdesc"></label>

                                </fieldset>
                            </div>
                            <div class="col-md-5">
                                <fieldset class="">
                                    <legend class="legclass">Como soube do projeto?</legend>
                                    &nbsp;&nbsp;<label class="radio-inline"><input type="radio" class="radiofield" name="soubproj" value="BN">Banner/cartaz/faixa</label>
                                    <label class="radio-inline"><input type="radio" name="soubproj" value="BB">Boca a boca</label>
                                    <label class="radio-inline"><input type="radio" name="soubproj" value="AM">Associação de Moradores</label>
                                    <label class="radio-inline"><input type="radio" name="soubproj" value="AS">Agente de Saúde</label>
                                    <label class="radio-inline"><input type="radio" name="soubproj" value="FA">Família/Amigos</label>
                                    <br>
                                    <label class="">Outro:&nbsp;<input type="text" name="soubprojdesc"></label>

                                </fieldset>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <fieldset class="">
                                    <legend class="legclass">Possui filhos ou está grávida?</legend>
                                    <label class="radio-inline"><input type="radio" class="radiofield" name="pfilho" value="S">Sim</label>
                                    <label class="radio-inline"><input type="radio" class="radiofield" name="pfilho" value="N">Não</label>
                                    <label class="">Se sim, Quantos?:&nbsp;<input type="text" name="qtofilho" size="3"></label>

                                </fieldset>
                            </div>
                            <div class="col-md-3">
                                <fieldset class="">
                                    <legend class="legclass">Possui dependentes financeiros?</legend>
                                    <label class="radio-inline"><input type="radio" class="radiofield" name="pdepfin" value="S">Sim</label>
                                    <label class="radio-inline"><input type="radio" class="radiofield" name="pdepfin" value="N">Não</label>
                                    <label class="">Se sim, Quantos?:&nbsp;<input type="text" name="pdepqto" size="3"></label>

                                </fieldset>
                            </div>
                            <div class="col-md-4">
                                <fieldset class="">
                                    <legend class="legclass">Pai vivo?</legend>
                                    <label class="radio-inline"><input type="radio" class="radiofield" name="pvivo" value="S">Sim</label>
                                    <label class="radio-inline"><input type="radio" class="radiofield" name="pvivo" value="N">Não</label>
                                    <label class="">Profissão:&nbsp;<input type="text" name="pprofissao" size="15"></label>
                                    <label class="">Escolaridade?:&nbsp;<input type="text" name="pescolaridade" size="15"></label>

                                </fieldset>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <fieldset class="">
                                    <legend class="legclass">Mãe viva?</legend>
                                    <label class="radio-inline"><input type="radio" class="radiofield" name="mviva" value="S">Sim</label>
                                    <label class="radio-inline"><input type="radio" class="radiofield" name="mviva" value="N">Não</label>
                                    <label class="">Profissão:&nbsp;<input type="text" name="mprof" size="15"></label>
                                    <label class="">Escolaridade?:&nbsp;<input type="text" name="mesco" size="15"></label>

                                </fieldset>
                            </div>

                            <div class="col-md-4">
                                <fieldset class="">
                                    <legend class="legclass">Irmãos?</legend>
                                    <label class="radio-inline"><input type="radio" class="radiofield" name="irmao" value="S">Sim</label>
                                    <label class="radio-inline"><input type="radio" class="radiofield" name="irmao" value="N">Não</label>
                                    <label class="">&nbsp;Quantos?:&nbsp;<input type="text" name="qtoirmao" size="4"></label><br>
                                    <b>No Projeto?&nbsp;</b><label class="radio-inline"><input type="radio" class="radiofield" name="irmaoproj" value="S">Sim</label>
                                    <label class="radio-inline"><input type="radio" class="radiofield" name="irmaoproj" value="N">Não</label>
                                    <label class="">&nbsp;Quantos?:&nbsp;<input type="text" name="qtoirmaoproj" size="4"></label><br>

                                </fieldset>
                            </div>
                           <div class="col-md-2">
                                <label for="nome">Quantas pessoas residem na sua casa?</label>
                                <input type="text" size="3" class="form-control" id="qtonumcasa" name="qtonumcasa" placeholder="Nº Moradores">
                           </div>
                      
                        </div>
                        <br>
                        <div class="row">
                             <div class="col-md-3">
                                <label for="nome">Faz quantas refeições no dia?</label>
                                <input type="text" size="3" class="form-control" id="numref" name="numref"  placeholder="Nº Refeições">
                             </div>
                            <div class="col-md-3">
                                <fieldset class="">
                                    <legend class="legclass">Participa de outro projeto social: ?</legend>
                                    <label class="radio-inline"><input type="radio" class="radiofield" name="poutroproj" value="S">Sim</label>
                                    <label class="radio-inline"><input type="radio" class="radiofield" name="poutroproj" value="N">Não</label>
                                 </fieldset>
                            </div>
                             <div class="col-md-5">
                                <fieldset class="">
                                    <legend class="legclass">Qual sua renda familiar?</legend>
                                    &nbsp;&nbsp;<label class="radio-inline"><input type="radio" class="radiofield" name="rendafa" value="1">até R$ 945,00</label>
                                    <label class="radio-inline"><input type="radio" name="rendafa" value="2">de R$ 945,00 a R$ 1200,00</label>
                                    <label class="radio-inline"><input type="radio" name="rendafa" value="3">de R$ 1200,00 a R$ 1800,00</label>
                                    <label class="radio-inline"><input type="radio" name="rendafa" value="4">de R$ 1800,00 a R$ 2200,00</label>
                                    <label class="radio-inline"><input type="radio" name="rendafa" value="5">Mais de R$ 2200,00</label>
                                
                                </fieldset>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                             <div class="col-md-6">
                                <fieldset class="">
                                    <legend class="legclass">Recebe algum auxílio do Governo?</legend>
                                    <label class="radio-inline"><input type="radio" class="radiofield" name="auxGov" value="S">Sim</label>
                                   <label class="radio-inline"><input type="radio" class="radiofield" name="auxGov" value="N">Não</label>
                                   <br>                                  
                                   <br><b>Qual?&nbsp;</b><br><label class="radio-inline"><input type="radio" name="auxGovdesc" value="AS">Aluguel Social</label>
                                    <label class="radio-inline"><input type="radio" name="auxGovdesc" value="BF">Bolsa Familia</label>
                                    <label class="radio-inline"><input type="radio" name="auxGovdesc" value="BA">Bolsa Atleta</label>
                                    <br><br />
                                    <label class="">Outro:&nbsp;<input type="text" name="auxGovdescoutros"></label>
 
                                </fieldset>
                            </div>
                            
                            </div>
                        <br>
                        <br>
                        <div class="row">
                            <h4>INFORMAÇÕES SOBRE A SAÚDE DO PARTICIPANTE</h4>
                             <div class="col-md-3">
                                <fieldset class="">
                                    <legend class="legclass">Entregou atestado médico?</legend>
                                    <label class="radio-inline"><input type="radio" class="radiofield" name="atestadomed" value="S">Sim</label>
                                    <label class="radio-inline"><input type="radio" class="radiofield" name="atestadomed" value="N">Não</label>
                               
                                </fieldset>
                            </div>
                            <div class="col-md-1">
                                <label for="nome">Peso(kg)</label>
                                <input type="text" class="form-control" id="peso" name="peso" required="required">
                            </div>
                             <div class="col-md-1">
                                <label for="nome">Altura(cm)</label>
                                <input type="text" class="form-control" id="altura" name="altura" required="required">
                            </div>
                             <div class="col-md-5">
                                <fieldset class="">
                                    <legend class="legclass">Tipo sanguíneo:</legend>
                                    &nbsp;&nbsp;<label class="radio-inline"><input type="radio" class="radiofield" name="tiposang" value="A">A+</label>
                                    <label class="radio-inline"><input type="radio" name="tiposang" value="B">B+</label>
                                    <label class="radio-inline"><input type="radio" name="tiposang" value="AB">AB+</label>
                                    <label class="radio-inline"><input type="radio" name="tiposang" value="AO">O+</label>
                                    <label class="radio-inline"><input type="radio" name="tiposang" value="A-">A-</label>
                                    <label class="radio-inline"><input type="radio" name="tiposang" value="B-">B-</label>
                                    <label class="radio-inline"><input type="radio" name="tiposang" value="AB-">AB-</label>
                                    <label class="radio-inline"><input type="radio" name="tiposang" value="O-">O-</label>
                                
                                </fieldset>
                            </div>
                            </div>
                        <br>
                        <div class="row">
                             <div class="col-md-3">
                                <fieldset class="">
                                    <legend class="legclass">Tem alergia a algum tipo de medicamento?</legend>
                                    <label class="radio-inline"><input type="radio" class="radiofield" name="alergmed" value="S">Sim</label>
                                    <label class="radio-inline"><input type="radio" class="radiofield" name="alergmed" value="N">Não</label>
                                    <br>
                                    <label class="">Qual?:&nbsp;<input type="text" name="alergmeddesc" size="10"></label>

                                </fieldset>
                            </div>
                            <div class="col-md-3">
                                <fieldset class="">
                                    <legend class="legclass">Utiliza algum medicamento de uso contínuo?</legend>
                                    <label class="radio-inline"><input type="radio" class="radiofield" name="contmed" value="S">Sim</label>
                                    <label class="radio-inline"><input type="radio" class="radiofield" name="contmed" value="N">Não</label>
                                    <label class="">Qual?:&nbsp;<input type="text" name="contmeddesc" size="3"></label>

                                </fieldset>
                            </div>
                            <div class="col-md-3">
                                <fieldset class="">
                                    <legend class="legclass">Possui alguma restrição à prática de atividade física? </legend>
                                    <label class="radio-inline"><input type="radio" class="radiofield" name="restatividade" value="S">Sim</label>
                                    <label class="radio-inline"><input type="radio" class="radiofield" name="restatividade" value="N">Não</label>
                                    <label class="">Identifique?&nbsp;<input type="text" name="restatividadedesc" size="3"></label>

                                </fieldset>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                             <div class="col-md-3">
                                <fieldset class="">
                                    <legend class="legclass">É fumante?</legend>
                                    <label class="radio-inline"><input type="radio" class="radiofield" name="fumante" value="S">Sim</label>
                                    <label class="radio-inline"><input type="radio" class="radiofield" name="fumante" value="N">Não</label>
                               
                                </fieldset>
                            </div>
                             <div class="col-md-3">
                                <fieldset class="">
                                    <legend class="legclass">Já praticou alguma atividade física?</legend>
                                    <label class="radio-inline"><input type="radio" class="radiofield" name="praticativfisica" value="S">Sim</label>
                                    <label class="radio-inline"><input type="radio" class="radiofield" name="praticativfisica" value="N">Não</label>
                                    <label class="">Qual?&nbsp;<input type="text" name="praticativfisicadesc" size="3"></label>

                                </fieldset>
                            </div>
                            <div class="col-md-3">
                                <fieldset class="">
                                    <legend class="legclass">Tem histórico familiar de problemas cardíacos?</legend>
                                    <label class="radio-inline"><input type="radio" class="radiofield" name="histfamcard" value="S">Sim</label>
                                    <label class="radio-inline"><input type="radio" class="radiofield" name="histfamcard" value="N">Não</label>
                               
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-md-10">
                                <fieldset class="">
                                    <legend class="legclass">Possui problemas de saúde?</legend>
                                    <label class="checkbox-inline"><input type="checkbox" class="radiofield" name="pprobsaude" value="1">Dores articulares</label>
                                    <label class="checkbox-inline"><input type="checkbox" name="pprobsaude" value="2">Diabete</label>
                                    <label class="checkbox-inline"><input type="checkbox" name="pprobsaude" value="3">Hipertensão</label>
                                    <label class="checkbox-inline"><input type="checkbox" name="pprobsaude" value="4">Doença respiratória</label>
                                    
                                     <label class="checkbox-inline"><input type="checkbox" name="pprobsaude" value="5">Osteoporose</label>
                                    
                                    <label class="checkbox-inline"><input type="checkbox" name="pprobsaude" value="6">Doença cardiovascular</label><br><br>
                                 <label class="">Qual(is)?&nbsp;<input type="text" name="descsaude" size="10"></label>

                                </fieldset>
                            </div>
                             </div>
                        <br><br>
                         <button type="submit" class="btn btn-info" title="Matricular Aluno">Matricular</button>
                        
                        </div>
                        
                        </div>
                    </div>

                </div>
            </div>
            
            <button type="submit" class="btn btn-info" title="Alterar Atividade">Alterar</button>
    
        </form>

    </div>

</div>