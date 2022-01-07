<?php
defined('BASEPATH') OR exit('Ação não permitida');

class Fatura_Prime extends CI_Controller{

    public function __construct(){
        parent::__construct();
    
        if (!$this->ion_auth->logged_in()){
            $this->session->set_flashdata('info', 'Sua sessão expirou!');
          redirect('login');
        }       
    }

    public function index(){
        $data = array(
            'titulo'=> 'faturas_prime cadastrados',
            'styles' => array(
                'vendor/datatables/dataTables.bootstrap4.min.css',   
               ),
               
               'scripts' => array(
                   'vendor/datatables/jquery.dataTables.min.js',
                   'vendor/datatables/dataTables.bootstrap4.min.js',
                   'vendor/datatables/app.js',
               ),
               'faturas_prime'=> $this->Core_model->get_all('faturas_prime'),
        );
       
        $this->load->view('layout/header', $data);
        $this->load->view('faturas_prime/index');
        $this->load->view('layout/footer');
    }

    public function add(){

        $this->form_validation->set_rules('fatura_prime_placa', '', 'trim|required|max_length[8]|is_unique[faturas_prime.fatura_prime_placa]');
        $this->form_validation->set_rules('fatura_prime_nome', '', 'trim|required|max_length[20]');
        $this->form_validation->set_rules('fatura_prime_modelo', '', 'trim|required|max_length[20]');
        $this->form_validation->set_rules('fatura_prime_ano', '', 'required');
        $this->form_validation->set_rules('fatura_prime_cor', '', 'trim|required|max_length[20]');
        $this->form_validation->set_rules('fatura_prime_portas', '', 'trim|required|max_length[1]');
        $this->form_validation->set_rules('fatura_prime_acessorio', '', 'trim|required|max_length[20]');
        $this->form_validation->set_rules('fatura_prime_status', '', 'trim|required|max_length[20]');
        $this->form_validation->set_rules('fatura_prime_tanque', '', 'trim|max_length[20]');
        $this->form_validation->set_rules('fatura_prime_vl_aluguel', '', 'trim|max_length[10]');
        $this->form_validation->set_rules('fatura_prime_km', '', 'trim|max_length[10]');
        $this->form_validation->set_rules('fatura_prime_ativo', '', 'required');        
        
        if ($this->form_validation->run()){

            $data = elements(
                array(
                    'fatura_prime_placa',
                    'fatura_prime_nome',                        
                    'fatura_prime_modelo',
                    'fatura_prime_ano',
                    'fatura_prime_cor',
                    'fatura_prime_portas',
                    'fatura_prime_acessorio',
                    'fatura_prime_status',
                    'fatura_prime_tanque',
                    'fatura_prime_vl_aluguel',
                    'fatura_prime_km',
                    'fatura_prime_ativo',

                ), $this->input->post()
            );
            $data = html_escape($data);
            $this->Core_model->insert ('faturas_prime', $data);
           
           redirect('faturas_prime');

        }else{
            $data = array(
                'titulo'=> 'Cadastrar fatura_prime',  
                'scripts'=> array(
                    'vendor/mask/jquery.mask.min.js',
                    'vendor/mask/app.js'    
                ),
                
            );
         //   echo'<pre>';
           // print_r($data['cliente']);
            //exit();
           
            $this->load->view('layout/header', $data);
            $this->load->view('faturas_prime/add');
            $this->load->view('layout/footer');
        }
    }

    public function edit($fatura_prime_id){

        if (!$fatura_prime_id || !$this->Core_model->get_by_id('faturas_prime', array('fatura_prime_id'=> $fatura_prime_id))){
         $this->session->set_flashdata('error', 'fatura_prime não encontrado'); 
         redirect('faturas_prime');
        }else{
            $this->form_validation->set_rules('fatura_prime_placa', '', 'trim|required|max_length[8]');
            $this->form_validation->set_rules('fatura_prime_nome', '', 'trim|required|max_length[20]');
            $this->form_validation->set_rules('fatura_prime_modelo', '', 'trim|required|max_length[20]');
            $this->form_validation->set_rules('fatura_prime_ano', '', 'required');
            $this->form_validation->set_rules('fatura_prime_cor', '', 'trim|required|max_length[20]');
            $this->form_validation->set_rules('fatura_prime_portas', '', 'trim|required|max_length[1]');
            $this->form_validation->set_rules('fatura_prime_acessorio', '', 'trim|required|max_length[20]');
            $this->form_validation->set_rules('fatura_prime_status', '', 'trim|required|max_length[20]');
            $this->form_validation->set_rules('fatura_prime_tanque', '', 'trim|max_length[20]');
            $this->form_validation->set_rules('fatura_prime_vl_aluguel', '', 'trim|max_length[10]');
            $this->form_validation->set_rules('fatura_prime_km', '', 'trim|max_length[10]');
            $this->form_validation->set_rules('fatura_prime_ativo', '', 'required');     
            
            if ($this->form_validation->run()){

            
                $data = elements(
                    array(
                        'fatura_prime_placa',
                        'fatura_prime_nome',                        
                        'fatura_prime_modelo',
                        'fatura_prime_ano',
                        'fatura_prime_cor',
                        'fatura_prime_portas',
                        'fatura_prime_acessorio',
                        'fatura_prime_status',
                        'fatura_prime_tanque',
                        'fatura_prime_vl_aluguel',
                        'fatura_prime_km',
                        'fatura_prime_ativo',

                    ), $this->input->post()
                );
                $data = html_escape($data);
                $this->Core_model->update('faturas_prime', $data, array('fatura_prime_id' => $fatura_prime_id));
               
               redirect('faturas_prime');

            }else{
                $data = array(
                    'titulo'=> 'Atualizar fatura_prime',  
                    'scripts'=> array(
                        'vendor/mask/jquery.mask.min.js',
                        'vendor/mask/app.js'
                    ),
                    'fatura_prime'=>$this->Core_model->get_by_id('faturas_prime', array('fatura_prime_id'=> $fatura_prime_id)),
                );
             //   echo'<pre>';
               // print_r($data['cliente']);
                //exit();
               
                $this->load->view('layout/header', $data);
                $this->load->view('faturas_prime/edit');
                $this->load->view('layout/footer');
            }
        }
    }

    public function del($fatura_prime_id = null){       
       if(!$fatura_prime_id || !$this->Core_model->get_by_id('faturas_prime', array('fatura_prime_id' => $fatura_prime_id))) {
           $this->session->set_flashdata('error', 'fatura_prime não encontrado');
           redirect('faturas_prime');
       }else{
           $this->Core_model->delete('faturas_prime', array('fatura_prime_id' => $fatura_prime_id) );
           redirect('faturas_prime');
       }
    }

}