<?php
class DB {
    private $dbhost     = "localhost";
    private $dbusername = "root";
    private $dbpassword = "";
    private $dbname = "php_curd";
    private $galleryTbl = "gallery";
    private $imgTbl     = "gallery_image";


    public function __construct()
    {
        if (!isset($this->db)) {
            // connect to the database
            $conn = new mysqli($this->dbhost, $this->dbusername, $this->dbpassword, $this->dbname);
            if ($conn->connect_errno) {
                die("Failed to connect with mysql". $conn->connect_errno);
            }else{
                $this->db = $conn;
            }
        }
    }
    public function getRows($conditions = array()){ 
        $sql = 'SELECT '; 
        $sql .= '*, (SELECT file_name FROM '.$this->imgTbl.' WHERE gallery_id = '.$this->galleryTbl.'.id ORDER BY id DESC LIMIT 1) as default_image'; 
        $sql .= ' FROM '.$this->galleryTbl; 
        if(array_key_exists("where",$conditions)){ 
            $sql .= ' WHERE '; 
            $i = 0; 
            foreach($conditions['where'] as $key => $value){ 
                $pre = ($i > 0)?' AND ':''; 
                $sql .= $pre.$key." = '".$value."'"; 
                $i++; 
            } 
        } 
         
        if(array_key_exists("order_by",$conditions)){ 
            $sql .= ' ORDER BY '.$conditions['order_by'];  
        }else{ 
            $sql .= ' ORDER BY id DESC ';  
        } 
         
        if(array_key_exists("start",$conditions) && array_key_exists("limit",$conditions)){ 
            $sql .= ' LIMIT '.$conditions['start'].','.$conditions['limit'];  
        }elseif(!array_key_exists("start",$conditions) && array_key_exists("limit",$conditions)){ 
            $sql .= ' LIMIT '.$conditions['limit'];  
        } 
         
        $result = $this->db->query($sql); 
         
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){ 
            switch($conditions['return_type']){ 
                case 'count': 
                    $data = $result->num_rows; 
                    break; 
                case 'single': 
                    $data = $result->fetch_assoc(); 
                     
                    if(!empty($data)){ 
                        $sql = 'SELECT * FROM '.$this->imgTbl.' WHERE gallery_id = '.$data['id']; 
                        $result = $this->db->query($sql); 
                        $imgData = array(); 
                        if($result->num_rows > 0){ 
                            while($row = $result->fetch_assoc()){ 
                                $imgData[] = $row; 
                            } 
                        } 
                        $data['images'] = $imgData; 
                    } 
                    break; 
                default: 
                    $data = ''; 
            } 
        }else{ 
            if($result->num_rows > 0){ 
                while($row = $result->fetch_assoc()){ 
                    $data[] = $row; 
                } 
            } 
        } 
        return !empty($data)?$data:false; 
    } 
}