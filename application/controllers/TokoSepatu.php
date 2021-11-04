<?php 
class TokoSepatu extends CI_Controller
{ 
    public function index()
    { 
        $this->load->view('v_input'); 
    } 
    public function cetak()
    { 
        $this->form_validation->set_rules(
            'nama', 'Nama Pembeli','required |min_lenght[3]',
            ['required'=> 'Nama Harus Diisi','min_lenght'=> 'Terlalu Pendek']);
        $this->form_validation->set_rules(
            'no','No.Hp','required |min_lenght[12]',
            ['required'=> 'No.Hp Harus Diisi','min_lenght'=> ' No.Hp Terlalu Pendek']);
        $this->form_validation->set_rules(
            'merk', 'Merk Sepatu','required |min_lenght[7]',
            ['required'=> 'Merk Harus Diisi','min_lenght'=> 'Merk Harus Sesuai']);
        $this->form_validation->set_rules(
            'size', 'Size Sepatu','required |min_lenght[3]',
            ['required'=> 'Ukuran Harus Diisi','min_lenght'=> 'Ukuran Harus Sesuai']);
        
        if($this->form_validation->run() != true){
            $this->load->view('v_input');
        } else{
            $data = [
                'nama'=>$this->input->post('Nama'),
                'no'=>$this->input->post('No'),
                'merk'=>$this->input->post('Merk'),
                'size'=>$this->input->post('Size'),
                'harga'=>$this->input->post('Harga')
            ];

            if ($this ->input->post('Merk')== "Nike"){
                $data['harga'] = 375000;
            } elseif ($this ->input->post('Merk')== "Adidas"){
                $data['harga'] = 300000;
            } elseif ($this ->input->post('Merk')== "Kickers"){
                $data['harga'] = 250000;
            } elseif ($this ->input->post('Merk')== "Eiger"){  
                $data['harga'] = 275000;
            } elseif ($this ->input->post('Merk')== "Bucherri"){
                $data['harga'] = 400000;
            }
            $this->load->view('v_output', $data);
        }
    } 
}