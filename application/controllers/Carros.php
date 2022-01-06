<?php
defined('BASEPATH') OR exit('Ação não permitida');

class Carros extends CI_Controller{

    public function __construct(){
        parent::__construct();
    
        if (!$this->ion_auth->logged_in()){
            $this->session->set_flashdata('info', 'Sua sessão expirou!');
          redirect('login');
        }       
    }

    public function index(){
        $data = array(
            'titulo'=> 'Carros cadastrados',
            'styles' => array(
                'vendor/datatables/dataTables.bootstrap4.min.css',   
               ),
               
               'scripts' => array(
                   'vendor/datatables/jquery.dataTables.min.js',
                   'vendor/datatables/dataTables.bootstrap4.min.js',
                   'vendor/datatables/app.js',
               ),
               'carros'=> $this->Core_model->get_all('carros'),
        );
       
        $this->load->view('layout/header', $data);
        $this->load->view('carros/index');
        $this->load->view('layout/footer');
    }

    public function add(){

        $this->form_validation->set_rules('carro_placa', '', 'trim|required|max_length[8]|is_unique[carros.carro_placa]');
        $this->form_validation->set_rules('carro_nome', '', 'trim|required|max_length[20]');
        $this->form_validation->set_rules('carro_modelo', '', 'trim|required|max_length[20]');
        $this->form_validation->set_rules('carro_ano', '', 'required');
        $this->form_validation->set_rules('carro_cor', '', 'trim|required|max_length[20]');
        $this->form_validation->set_rules('carro_portas', '', 'trim|required|max_length[1]');
        $this->form_validation->set_rules('carro_acessorio', '', 'trim|required|max_length[20]');
        $this->form_validation->set_rules('carro_status', '', 'trim|required|max_length[20]');
        $this->form_validation->set_rules('carro_tanque', '', 'trim|max_length[20]');
        $this->form_validation->set_rules('carro_vl_aluguel', '', 'trim|max_length[10]');
        $this->form_validation->set_rules('carro_km', '', 'trim|max_length[10]');
        $this->form_validation->set_rules('carro_ativo', '', 'required');        
        
        if ($this->form_validation->run()){

            $data = elements(
                array(
                    'carro_placa',
                    'carro_nome',                        
                    'carro_modelo',
                    'carro_ano',
                    'carro_cor',
                    'carro_portas',
                    'carro_acessorio',
                    'carro_status',
                    'carro_tanque',
                    'carro_vl_aluguel',
                    'carro_km',
                    'carro_ativo',

                ), $this->input->post()
            );
            $data = html_escape($data);
            $this->Core_model->insert ('carros', $data);
           
           redirect('carros');

        }else{
            $data = array(
                'titulo'=> 'Cadastrar carro',  
                'scripts'=> array(
                    'vendor/mask/jquery.mask.min.js',
                    'vendor/mask/app.js'    
                ),
                
            );
         //   echo'<pre>';
           // print_r($data['cliente']);
            //exit();
           
            $this->load->view('layout/header', $data);
            $this->load->view('carros/add');
            $this->load->view('layout/footer');
        }
    }

    public function edit($carro_id){

        if (!$carro_id || !$this->Core_model->get_by_id('carros', array('carro_id'=> $carro_id))){
         $this->session->set_flashdata('error', 'Carro não encontrado'); 
         redirect('carros');
        }else{
            $this->form_validation->set_rules('carro_placa', '', 'trim|required|max_length[8]');
            $this->form_validation->set_rules('carro_nome', '', 'trim|required|max_length[20]');
            $this->form_validation->set_rules('carro_modelo', '', 'trim|required|max_length[20]');
            $this->form_validation->set_rules('carro_ano', '', 'required');
            $this->form_validation->set_rules('carro_cor', '', 'trim|required|max_length[20]');
            $this->form_validation->set_rules('carro_portas', '', 'trim|required|max_length[1]');
            $this->form_validation->set_rules('carro_acessorio', '', 'trim|required|max_length[20]');
            $this->form_validation->set_rules('carro_status', '', 'trim|required|max_length[20]');
            $this->form_validation->set_rules('carro_tanque', '', 'trim|max_length[20]');
            $this->form_validation->set_rules('carro_vl_aluguel', '', 'trim|max_length[10]');
            $this->form_validation->set_rules('carro_km', '', 'trim|max_length[10]');
            $this->form_validation->set_rules('carro_ativo', '', 'required');     
            
            if ($this->form_validation->run()){

            
                $data = elements(
                    array(
                        'carro_placa',
                        'carro_nome',                        
                        'carro_modelo',
                        'carro_ano',
                        'carro_cor',
                        'carro_portas',
                        'carro_acessorio',
                        'carro_status',
                        'carro_tanque',
                        'carro_vl_aluguel',
                        'carro_km',
                        'carro_ativo',

                    ), $this->input->post()
                );
                $data = html_escape($data);
                $this->Core_model->update('carros', $data, array('carro_id' => $carro_id));
               
               redirect('carros');

            }else{
                $data = array(
                    'titulo'=> 'Atualizar carro',  
                    'scripts'=> array(
                        'vendor/mask/jquery.mask.min.js',
                        'vendor/mask/app.js'
                    ),
                    'carro'=>$this->Core_model->get_by_id('carros', array('carro_id'=> $carro_id)),
                );
             //   echo'<pre>';
               // print_r($data['cliente']);
                //exit();
               
                $this->load->view('layout/header', $data);
                $this->load->view('carros/edit');
                $this->load->view('layout/footer');
            }
        }
    }

    public function del($carro_id = null){       
       if(!$carro_id || !$this->Core_model->get_by_id('carros', array('carro_id' => $carro_id))) {
           $this->session->set_flashdata('error', 'Carro não encontrado');
           redirect('carros');
       }else{
           $this->Core_model->delete('carros', array('carro_id' => $carro_id) );
           redirect('carros');
       }
    }

}