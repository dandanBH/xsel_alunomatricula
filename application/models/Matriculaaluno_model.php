
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Matriculaaluno_model extends CI_Model {

    //date_format(dtInicio,'%d/%m/%Y') as dtInicio
    function getMatricula() {
        $nivel = $this->session->nivel;
        $arrayCoord = $this->session->subprojeto;
        
        $idcoord = $arrayCoord[0]['id'];
        
        $this->db->select("en.nome entidade, pjn.nome atividade,en.identidade,ap.dtInicio,ap.dtFim,ap.id idaplicatividade, nu.nome nucleo,count(tm.id) totalturmas");
        $this->db->from('aplicatividade ap', TRUE);
        $this->db->join('entidade en', 'en.identidade = ap.identidade');
        $this->db->join('projetoentidadenucleo pjn ', 'pjn.idProjetoEntidadeNucleo = ap.idatividade');
          $this->db->join('subprojeto sp ', 'sp.idsubprojeto = pjn.idsubprojeto');
      
        $this->db->join('turma tm', 'tm.idaplicaatividade = ap.id');

        $this->db->join('nucleo nu', ' nu.idnucleo = ap.idnucleo');
        $this->db->where("pjn.status", "A");
           if ($nivel=="sp"){
            $this->db->where('sp.idcoordenador',$idcoord);
        }
        $this->db->group_by('en.identidade');
        return $this->db->get();
    }

    function getMatriculasel($id) {
//        $this->db->select("sp.idsubprojeto, sp.nome subprojeto, md.nome modalidade,md.idmodalidade,ps.nome coordenador, pl.id idcood,
//        sp.status,(CASE sp.status WHEN 'A' THEN 'ATIVO' WHEN 'I' THEN 'INATIVO' end) as statusDesc,
//        sp.jemg,(CASE sp.jemg WHEN 'S' THEN 'SIM' WHEN 'N' THEN 'NAO' end) as jemgDesc,
//        sp.permitirAtividade,(CASE sp.permitirAtividade WHEN 'S' THEN 'SIM' WHEN 'N' THEN 'NAO' end) as permitirAtividadeDesc,
//        sp.cbr,(CASE sp.cbr WHEN 'S' THEN 'SIM' WHEN 'N' THEN 'NAO' end) as cbrDesc,
//       
//        pj.nome projeto, pj.id idprojeto,sp.dataCad,sp.resumo,sp.resulEsp,sp.numPes,sp.datafim,sp.premiacao,sp.vlrinscricao,
//        sp.dataini,sp.idetapa,et.nome etapa");
        $this->db->select("ap.id,ap.identidade,en.nome entidade,ap.idatividade,pjn.nome atividade,ap.idnucleo,ap.dtInicio,ap.dtFim,ap.Obs,ap.turmatime,en.nome entidade,nu.nome nucleo,nu.idnucleo,pjn.nome atividade,ap.turmatime,(CASE ap.turmatime WHEN 'T' THEN 'Turma' WHEN 'I' THEN 'Time' WHEN 'U' THEN 'Jogador Unico' end) as turmatimeDesc, ap.status,(CASE ap.status WHEN 'A' THEN 'ATIVO' WHEN 'I' THEN 'INATIVO' end) as statusDesc,sp.nome subprojeto");
        $this->db->from('aplicatividade as ap', TRUE);
        $this->db->join('entidade en', 'en.identidade = ap.identidade');
        $this->db->join('projetoentidadenucleo pjn ', 'pjn.idProjetoEntidadeNucleo = ap.idatividade');
        $this->db->join('subprojeto sp', 'sp.idsubprojeto = pjn.idsubprojeto');
        $this->db->join('nucleo nu', ' nu.idnucleo = ap.idnucleo');

        $this->db->where('ap.id', $id);
        $this->db->order_by('ap.id', 'DESC');

        return $this->db->get('');
    }

    function cadastro($dados) {
        $this->db->insert("aplicatividade", $dados);
    }

    function altera($id, $dados) {

        $this->db->where('id', $id);
        $this->db->update('aplicatividade', $dados);


        //$this->db->update('entidade', $dados, 'identidade=', $id);
    }

    function excluirEntidade($id) {
        $this->db->where('identidade', $id, FALSE);


        return $this->db->delete('entidade');
    }

}
