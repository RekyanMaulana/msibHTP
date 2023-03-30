<?php
class Pegawai{
    protected $nip;
    public $nama;
    private $jabatan;
    private $agama;
    private $status;
    static $jml = 0;
    const PT = 'PT. HTP Indonesia';

    public function __construct($nip, $nama, $jabatan, $agama, $status){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
        self::$jml++;
    }
    public function setGajiPokok($jabatan){
        $this->jabatan = $jabatan;
        switch($jabatan){
            case 'Manager': $gapok = 15000000; break;
            case 'Asisten Manager': $gapok = 10000000; break;
            case 'Kepala Bagian': $gapok = 7000000; break;
            case 'Staff': $gapok = 4000000; break;
            default: $gapok;
        }
        return $gapok;
    }
    public function cetak(){
        echo 'NIP : '.$this->nip;
        echo '<br> Nama Pegawai : '.$this->nama;
        echo '<br> Jabatan : '.$this->jabatan;
        echo '<br> Agama : '.$this->agama;
        echo '<br> Status : '.$this->status;
        echo '<br> gaji Pokok : '.number_format($this->setGajiPokok($this->jabatan),0,',','.');
        echo '<hr>';
    }
}
?>