<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Matriculaaluno extends MY_ControllerLogado {

    public function index() {
        $this->load->model('Matriculaaluno_model', 'matriculaalunoM');

        $dados['aluno'] = $this->matriculaalunoM->getMatricula();
        $this->load->view('includes/header');
        $this->load->view('includes/menu');
        $this->load->view('listamatriculaaluno', $dados);
        $this->load->view('includes/footer');
    }

    public function cadastro() {
        $this->load->model('Entidade_model', 'EntidadeM');
        $this->load->model('Atividade_model', 'AtividadeM');     
        $this->load->model('nucleo_model', 'nucleoM');
       
      
        $dados['atividade'] = $this->AtividadeM->getAtividade(); //
        $dados['entidade'] = $this->EntidadeM->getEntidadeevento(); //
        $dados['nucleo'] = $this->nucleoM->getNucleo(); 
         
        $this->load->view('includes/header');
        $this->load->view('includes/menu');
        $this->load->view('adicionar/aplicaratividade',$dados);
        $this->load->view('includes/footer');
    }
    
     public function alterar($id,$confirma = NULL) {
        $this->load->model('Aplicaatividade_model', 'aplicaatividadeM');
        $this->load->model('Entidade_model', 'EntidadeM');
        $this->load->model('Atividade_model', 'AtividadeM');     
        $this->load->model('nucleo_model', 'nucleoM');
        
        $dados['atividade'] = $this->AtividadeM->getAtividade(); //
        $dados['entidade'] = $this->EntidadeM->getEntidadeevento(); //
        $dados['nucleo'] = $this->nucleoM->getNucleo();  
        $dados['aplicatividade'] = $this->aplicaatividadeM->getAplicatividadesel($id)->row(); //retorna a unica linha selecionada
      
       
        
        if (!empty($confirma)){
            $dados['mensagem'] = TRUE;
        }
        
  
        $this->load->view('includes/header');
        $this->load->view('includes/menu');
        $this->load->view('alterar/aplicaratividade', $dados);
        $this->load->view('includes/footer');
    }

    //operações

    public function inserir() {
        $this->load->model('Aplicaatividade_model', 'AplicaatividadeM');
       
        $atividade = $this->input->post('atividade');
        $entidade = $this->input->post('entidade');
        $nucleo = $this->input->post('nucleo');
        $tp = $this->input->post('tp');
        $dtInicio = $this->input->post('dtInicio');
        $dtFim = $this->input->post('dtFim');
       
        $descricao = $this->input->post('descricao');
       
        $dataAtual = date('Y-m-d');
        
        $this->AplicaatividadeM->cadastro(['identidade' => $entidade,'idatividade' => $atividade,'idnucleo'=>$nucleo,'dtInicio'=>$dtInicio,
            'dtCad' => $dataAtual,'dtFim'=>$dtFim,'Obs' => $descricao,'turmatime'=>$tp]);
        
          redirect('Aplicaratividade/index');
    }

      public function altera($id) {
          $this->load->model('Aplicaatividade_model', 'AplicaatividadeM');
        
        $atividade = $this->input->post('atividade');
        $entidade = $this->input->post('entidade');
        $nucleo = $this->input->post('nucleo');
        $status = $this->input->post('status');
        $tp = $this->input->post('tp');
        $dtInicio = $this->input->post('dtInicio');
        $dtFim = $this->input->post('dtFim');
       
        $descricao = $this->input->post('descricao');
       
   


        $this->AplicaatividadeM->altera($id,['identidade' => $entidade,'idatividade' => $atividade,'idnucleo'=>$nucleo,'dtInicio'=>$dtInicio,
            'status' => $status,'dtFim'=>$dtFim,'Obs' => $descricao,'turmatime'=>$tp]);
       
        
        redirect('Aplicaratividade/alterar/'.$id.'/1');
    }
    
  

}
