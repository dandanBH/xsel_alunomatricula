<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <br><br>
    <legend>

        <div class="row" >

            <div class="col-md-12">
                <div class="col-md-9">

                    <h3><b>Lista de Alunos</b></h3>
                </div> 
                <div class="col-md-3">
                    <a class="btn btn-primary" href='<?= base_url("Matriculaaluno") ?>'>Voltar</a>

                    <a class="btn btn-primary" href='<?= base_url('Aluno/cadastro/'.$atividade->id) ?>'>Matricular Aluno</a>

                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-9">
                 <h4><b>Subprojeto:</b><?= $atividade->subprojeto ?></h4>

                        <h4><b>Atividade:</b><?= $atividade->atividade ?></h4>
                        <h4><b>Nucleo:</b><?= $atividade->nucleo ?>  </h4>
                        <h4><b>Entidade:</b><?= $atividade->entidade ?></h4> 
                        <h4><b>Modalidade:</b><?= $atividade->modalidade ?></h4>
                   
                </div>
            </div>
        </div>
    
    </legend>

    <div class="contents">
     	<table class="table table-striped">
                <thead>
                    <tr>
                        <th width="30%">Aluno</th>
                        <th width="10%">Turma</th>
                        <th title="30%">Professor</th>
                        <th title="">Hora Inicio</th>
                        <th width="10%">Hora Fim</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($aluno->result() as $al) {
                        ?>
                        <tr>
                            <td><?= $al->aluno ?></td>
                            <td><?php echo $al->turma ?></td>
                              <td><?= $al->professor ?></td>
                            <td><?= $al->horaInicio ?></td>
                            <td><?php echo $al->horaFim ?></td>
                            <td><a href="<?= base_url('Aluno/ver/' . $al->idaluno) ?>" class="btn btn-primary btn-sm" target="_blank" >Visualizar</a></td>
                            <td><a href="<?= base_url('Aluno/alterar/' . $al->idaluno) ?>" class="btn btn-info btn-sm ">Alterar Aluno</a></td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
</div>
