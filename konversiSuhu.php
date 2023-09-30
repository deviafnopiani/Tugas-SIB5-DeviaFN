<?php
class KonversiSuhu{
    private $satuanSuhuAwal;
    private $besaranSuhu;
    private $satuanSuhuTujuan;

    public function __construct($satuanSuhuAwal, $besaranSuhu, $satuanSuhuTujuan){
        $this->satuanSuhuAwal = $satuanSuhuAwal;
        $this->besaranSuhu = $besaranSuhu;
        $this->satuanSuhuTujuan = $satuanSuhuTujuan;
    }
    public function konversi(){
        $hasil = 0;
        switch($this->satuanSuhuAwal){
            case 'Celcius':
                if($this->satuanSuhuTujuan == 'Farenheit'){
                    $hasil = ($this->besaranSuhu * 9/5) +32;
                }
                else if($this->satuanSuhuTujuan == 'Rheamur'){
                    $hasil = $this->besaranSuhu * 4/5;
                }else{
                    $hasil = $this->besaranSuhu;
                }break;
            case 'Farenheit':
                if($this->satuanSuhuTujuan == 'Celcius'){
                    $hasil = ($this->besaranSuhu - 32) * 5/9;
                }
                else if($this->satuanSuhuTujuan == 'Rheamur'){
                    $hasil = ($this->besaranSuhu - 32) * 4/9;
                }else{
                    $hasil = $this->besaranSuhu;
                }break;
            case 'Rheamur':
                if($this->satuanSuhuTujuan == 'Celcius'){
                    $hasil = $this->besaranSuhu * 5/4;
                }
                else if($this->satuanSuhuTujuan == 'Farenheit'){
                    $hasil = ($this->besaranSuhu * 9/4) + 32;
                }else{
                    $hasil = $this->besaranSuhu;
                }break;
        }
        return $hasil;
    }            
    public function cetak(){
        echo '<h2 align="center"> Konversi Suhu </h2>';
        echo '<table border="1" width="100%">';
        echo '<tr><th> Satuan Suhu Awal</th>
        <th> Besaran Suhu</th>
        <th> Satuan Suhu Tujuan </th>
        <th> Hasil Konversi </th></tr>';
        echo '<tr><td>' .$this->satuanSuhuAwal . '</td>';
        echo '<td>' .$this->besaranSuhu . '</td>';
        echo '<td>' .$this->satuanSuhuTujuan . '</td>';
        echo '<td>' .$this->konversi() . '</td></tr>';
        echo '</table>';
    }
    }


?>