<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Aluno extends MY_ControllerLogado {

    public function lista($idaplicaatividade) {
        $this->load->model('Aluno_model', 'alunoM');
        $this->load->model('Aplicaatividade_model', 'AplicaatividadeM');
        $dados['aluno'] = $this->alunoM->getAluno($idaplicaatividade);
        $dados['atividade'] = $this->AplicaatividadeM->getAplicatividadesel($idaplicaatividade)->row(); //retorna a unica linha selecionada
        $this->load->view('includes/header');
        $this->load->view('includes/menu');
        $this->load->view('listaaluno', $dados);
        $this->load->view('includes/footer');
    }

    public function cadastro($idAplicatividade) {
        //echo $idAplicatividade;



        $dados['aplicatividade'] = $idAplicatividade;
        $this->load->model('Aluno_model', 'alunoM');
        $this->load->model('Aplicaatividade_model', 'AplicaatividadeM');
        $this->load->model('participante_model', 'participanteM');
        $this->load->model('Entidade_model', 'entidadeM');
        $this->load->model('Turmas_model', 'turmasM');
        $dados['turma'] = $this->turmasM->getTurmamatricula($idAplicatividade);
        $dados['participante'] = $this->participanteM->getParticipante();
        $dados['entidade'] = $this->entidadeM->getEscola();
        $dados['entidadesel'] = $this->AplicaatividadeM->getEntidadeAplic($idAplicatividade);
        $this->load->view('includes/header');
        $this->load->view('includes/menu');
        $this->load->view('adicionar/aluno', $dados);
        $this->load->view('includes/footer');
    }

    public function cadasto() {
        $this->load->model('subprojeto_model', 'subprojetoM');
        $dados['subprojeto'] = $this->subprojetoM->getSubprojetoatividade(); //
        $this->load->view('includes/header');
        $this->load->view('includes/menu');
        $this->load->view('adicionar/atividade', $dados);
        $this->load->view('includes/footer');
    }

    public function alterar($id, $confirma = NULL) {
        $this->load->model('Aluno_model', 'alunoM');
        $this->load->model('Aplicaatividade_model', 'AplicaatividadeM');
        $this->load->model('participante_model', 'participanteM');
        $this->load->model('Entidade_model', 'entidadeM');
        $this->load->model('Turmas_model', 'turmasM');
        
        $dados['turma'] = $this->turmasM->getTurmamatricula($idAplicatividade);
        $dados['participante'] = $this->participanteM->getParticipante();
        $dados['entidade'] = $this->entidadeM->getEscola();
        $dados['entidadesel'] = $this->AplicaatividadeM->getEntidadeAplic($idAplicatividade); //retorna a unica linha selecionada



        if (!empty($confirma)) {
            $dados['mensagem'] = TRUE;
        }

        $this->load->view('includes/header');
        $this->load->view('includes/menu');
        $this->load->view('alterar/aluno', $dados);
        $this->load->view('includes/footer');
    }

    //operações

    public function inserir() {

        $this->load->model('Aluno_model', 'alunoM');
        $idaplicaatividade = $this->input->post('idaplicaatividade');
        $aluno = $this->input->post('aluno');
        $turma = $this->input->post('turma');
        $tipo = $this->input->post('tipo');
        $escolaridade = $this->input->post('escolaridade');
        $entidade = $this->input->post('entidade');
        $observacao = $this->input->post('observacao');
        $tamuni = $this->input->post('tamuni');
        $motivoingresso = $this->input->post('motivoingresso');
        $motivoingressodesc = $this->input->post('motivoingressodesc');
        $tamcalcado = $this->input->post('tamcalcado');
        $gesporte = $this->input->post('gesporte');
        $tipotransp = $this->input->post('tipotransp');
        $tipotranspdesc = $this->input->post('tipotranspdesc');
        $participproj = $this->input->post('participproj');
        $participprojdesc = $this->input->post('participprojdesc');
        $soubproj = $this->input->post('soubproj');
        $soubprojdesc = $this->input->post('soubprojdesc');
        $pfilho = $this->input->post('pfilho');
        $qtofilho = $this->input->post('qtofilho');
        $pdepfin = $this->input->post('pdepfin');
        $pdepqto = $this->input->post('pdepqto');
        $pvivo = $this->input->post('pvivo');
        $pprofissao = $this->input->post('pprofissao');
        $pescolaridade = $this->input->post('pescolaridade');
        $mviva = $this->input->post('mviva');
        $mprof = $this->input->post('mprof');
        $mesco = $this->input->post('mesco');
        $irmao = $this->input->post('irmao');
        $qtoirmao = $this->input->post('qtoirmao');
        $irmaoproj = $this->input->post('irmaoproj');
        $qtoirmaoproj = $this->input->post('qtoirmaoproj');
        $qtonumcasa = $this->input->post('qtonumcasa');
        $numref = $this->input->post('numref');
        $poutroproj = $this->input->post('poutroproj');
        $rendafa = $this->input->post('rendafa');
        $auxGov = $this->input->post('auxGov');
        $auxGovdesc = $this->input->post('auxGovdesc');
        $auxGovdescoutros = $this->input->post('auxGovdescoutros');
        $atestadomed = $this->input->post('atestadomed');
        $peso = $this->input->post('peso');
        $altura = $this->input->post('altura');
        $tiposang = $this->input->post('tiposang');
        $alergmed = $this->input->post('alergmed');
        $alergmeddesc = $this->input->post('alergmeddesc');
        $contmed = $this->input->post('contmed');
        $contmeddesc = $this->input->post('contmeddesc');
        $restatividade = $this->input->post('restatividade');
        $restatividadedesc = $this->input->post('restatividadedesc');
        $fumante = $this->input->post('fumante');
        $praticativfisica = $this->input->post('praticativfisica');
        $praticativfisicadesc = $this->input->post('praticativfisicadesc');
        $histfamcard = $this->input->post('histfamcard');
        $pprobsaude = $this->input->post('pprobsaude');
        $descsaude = $this->input->post('descsaude');


        $dataAtual = date('Y-m-d');

        $this->alunoM->cadastro(['idaplic' => $idaplicaatividade, 'escolaridade' => $escolaridade,
            'idturma' => $turma, 'identidade' => $entidade,
            'idpessoa' => $aluno, 'tipo' => $tipo,
            'descricao' => $observacao, 'datacad' => $dataAtual,
            'motivoIngresso' => $motivoingresso, 'motivoingressodesc' => $motivoingressodesc, 'tamUniforme' => $tamuni,
            'tamCalcado' => $tamcalcado, 'gostaEsporte' => $gesporte,
            'tipoTransporte' => $tipotransp, 'tipoTransportedesc' => $tipotranspdesc, 'participouProj' => $participproj,
            'descProjparticipado' => $participprojdesc, 'soubeprojeto' => $soubproj,
            'soubeprojetodesc' => $soubprojdesc, 'pfilhogravida' => $pfilho,
            'qtofilho' => $qtofilho, 'pdepfinan' => $pdepfin,
            'qtodep' => $pdepqto, 'pvivo' => $pvivo,
            'pprofissao' => $pprofissao, 'pEscolaridade' => $pescolaridade,
            'mviva' => $mviva, 'mprofissao' => $mprof,
            'mescolaridade' => $mesco, 'irmao' => $irmao,
            'qtoIrmao' => $qtoirmao, 'irmaoproj' => $irmaoproj,
            'qtoirmaoproj' => $qtoirmaoproj, 'qtonumcada' => $qtonumcasa,
            'nrefdia' => $numref, 'poutroprojeto' => $poutroproj,
            'rendafa' => $rendafa, 'auxGov' => $auxGov,
            'auxGovdesc' => $auxGovdesc, 'auxGovdescoutros' => $auxGovdescoutros, 'atestadomed' => $atestadomed,
            'peso' => $peso, 'altura' => $altura,
            'tiposang' => $tiposang, 'alegMed' => $alergmed,
            'alegMeddesc' => $alergmeddesc, 'contMed' => $contmed,
            'contMeddesc' => $contmeddesc, 'restAtividade' => $restatividade,
            'restAtividadedesc' => $restatividadedesc, 'fumante' => $fumante,
            'praticativfisicadesc' => $praticativfisica, 'praticativfisica' => $praticativfisicadesc,
            'histfamcard' => $histfamcard, 'pprobsaude' => $pprobsaude, 'descsaude' => $descsaude]);

        redirect('Aluno/lista/' . $idaplicaatividade);
    }

    public function altera($id) {
        $this->load->model('atividade_model', 'atividadeM');

        $atividade = $this->input->post('nome');
        $subprojeto = $this->input->post('subprojeto');
        $npes = $this->input->post('npes');
        $naipe = $this->input->post('naipe');

        $descricao = $this->input->post('descricao');
$this->atividadeM->altera($id, ['nome' => $atividade, 'idsubprojeto' => $subprojeto, 'numPess' => $npes, 'tipo' => $naipe,
            'descricao' => $descricao]);


        redirect('Atividade/alterar/' . $id . '/1');
    }

   
}
