
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aluno_model extends CI_Model {

    //date_format(dtInicio,'%d/%m/%Y') as dtInicio
    //function getAgendajogo($idatividade,$idnucleo) {
 function getAluno($idaplicaatividade) {
    
        $this->db->select("al.idaluno,ps.nome aluno,td.nome turma,tm.horaInicio,tm.horaFim,(select ps.nome from profissionais_login pl inner join pessoa ps on ps.id = pl.idpessoa where pl.id = tm.instrutor_id ) as professor");
        $this->db->from('aluno al', TRUE);
        $this->db->join('pessoa ps', 'ps.id = al.idpessoa');
        $this->db->join('aplicatividade ap ', 'ap.id = al.idaplic');
        $this->db->join('entidade en', ' en.identidade = ap.identidade');
        
        $this->db->join('turma tm', 'tm.id = al.idturma');
        $this->db->join('turmadesc td', 'td.id = tm.idturma');
        $this->db->where('ap.id', $idaplicaatividade);
        $this->db->order_by('idaluno','DESC');
     
        
       //aj.idnucleo = ? and aj.idatividade = ?      
        return $this->db->get();
    }

    function getAgendajogosel($id) {
//        $this->db->select("sp.idsubprojeto, sp.nome subprojeto, md.nome modalidade,md.idmodalidade,ps.nome coordenador, pl.id idcood,
//        sp.status,(CASE sp.status WHEN 'A' THEN 'ATIVO' WHEN 'I' THEN 'INATIVO' end) as statusDesc,
//        sp.jemg,(CASE sp.jemg WHEN 'S' THEN 'SIM' WHEN 'N' THEN 'NAO' end) as jemgDesc,
//        sp.permitirAtividade,(CASE sp.permitirAtividade WHEN 'S' THEN 'SIM' WHEN 'N' THEN 'NAO' end) as permitirAtividadeDesc,
//        sp.cbr,(CASE sp.cbr WHEN 'S' THEN 'SIM' WHEN 'N' THEN 'NAO' end) as cbrDesc,
//       
//        pj.nome projeto, pj.id idprojeto,sp.dataCad,sp.resumo,sp.resulEsp,sp.numPes,sp.datafim,sp.premiacao,sp.vlrinscricao,
//        sp.dataini,sp.idetapa,et.nome etapa");
        $this->db->select("ap.id,ap.identidade,en.nome entidade,ap.idatividade,pjn.nome atividade,ap.idnucleo,ap.dtInicio,ap.dtFim,ap.Obs,en.nome entidade,nu.nome nucleo,nu.idnucleo,pjn.nome atividade, ap.status,(CASE ap.status WHEN 'A' THEN 'ATIVO' WHEN 'I' THEN 'INATIVO' end) as statusDesc,sp.nome subprojeto");
        $this->db->from('aplicatividade as ap', TRUE);
        $this->db->join('entidade en', 'en.identidade = ap.identidade');
        $this->db->join('projetoentidadenucleo pjn ', 'pjn.idProjetoEntidadeNucleo = ap.idatividade');
        $this->db->join('subprojeto sp', 'sp.idsubprojeto = pjn.idsubprojeto');
        $this->db->join('nucleo nu', ' nu.idnucleo = ap.idnucleo');
       
        $this->db->where('ap.id', $id);
        $this->db->order_by('ap.id', 'DESC');
        
        return $this->db->get('');
    }

  function getTimeaplicado($idAtividade,$idNucleo){
      $this->db->select("td.nome time, at.idtime");
      $this->db->from("atividadetime at",TRUE);
      $this->db->join('timedesc td','td.id = at.idtime');
      $this->db->where('at.idatividade',$idAtividade);
      $this->db->where('at.idnucleo',$idNucleo);
      $this->db->order_by('td.nome');
      return $this->db->get('');
  }  
    
    
    
    function cadastro($dados) {
          $this->db->insert("aluno", $dados);
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
