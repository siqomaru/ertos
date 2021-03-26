<?php

class database
{
        public $host = "localhost";
        public $username = "root";
        public $pw = "";
        public $db = "consultan";
        public $koneksi ="";

        function __construct()
        {
                $this->koneksi = mysqli_connect($this->host, $this->username, $this->pw, $this->db);
                if (mysqli_connect_errno()) {
                        echo "Terputus" . mysqli_connect_error();
                }
        }

        function readbooking()
        {
                $hasil = array();
                $data = mysqli_query($this->koneksi,"SELECT * FROM booking order by idbook asc");
                while ($row = mysqli_fetch_array($data)) {
                        $hasil[] = $row;
                }
                return $hasil;
        }

        function addbooking($nama, $telp, $pesan, $page)
        {
                mysqli_query($this->koneksi, "INSERT INTO booking VALUES ('', '$nama', '$telp', now(), '$pesan', '$page')");
                return true;
                
        }
        function cekdate($page)
        {
               
                $cekdate = mysqli_query($this->koneksi, "SELECT booking.`idunique` FROM booking WHERE booking.`idunique` ='$page' ");
                if (mysqli_num_rows($cekdate) > 0) {
                        return false;
                }
                return true;
                
        }
        
        function delbooking($idbook)
        {
                mysqli_query($this->koneksi, "DELETE FROM booking Where idbook ='$idbook' ");
                header("location:approve.php?pesan=hapus");
        }
}
?>