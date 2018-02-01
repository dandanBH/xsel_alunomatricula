<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <br><br>
    <legend>

        <div class="row breadcrumb" >

            <div class="col-md-10">
                <b>Matricula de Alunos</b>
            </div>
        </div>
    </legend>
   
    <div class="contents">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="35%">Entidade</th>
                            <th width="35%">Atividade</th>
                            <th width="20%">Nucleo</th>
                            <th width="10%">N°Turmas</th>
                            <th width="10%">Inicio</th>
                            <th width="10%">Fim</th>
                            
                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($aluno->result() as $al) {
                            ?>
                            <tr>
                                <td><?=$al->entidade?></td>
                                <td><?php echo $al->atividade ?></td>
                                <td><?=$al->nucleo?></td>
                                <td><center><?php echo $al->totalturmas ?></center></td>
                                <td><?php echo $this->funcoes->dataBrasil($al->dtInicio) ?></td>
                                <td><?php echo $this->funcoes->dataBrasil($al->dtFim) ?></td>
                                <td><a href="<?=base_url('Aluno/lista/'.$al->idaplicatividade)?>" class="btn btn-primary btn-sm">Matricular Aluno</a></td>
                                
                                <td><a href="<?=base_url('Times/excluir/')?>" class="btn btn-danger btn-sm" onclick="return confirm('Deseja Excluir a Atividade?')">Excluir Aplicação</a></td>                              
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        
    </div>
</div>


