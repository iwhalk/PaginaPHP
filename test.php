<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion</title>
</head>
<body>
<?php

    class ConectDB{
        private $conn;
        public function __construct()
        {
            $host = "DESKTOP-4JP92V9";
            $dbName = "PhpDB";
            $userName = "PHPUser";
            $password = "simple";
            $port = 1433;

            try
            {
                $this->conn = new PDO("sqlsrv:Server=$host,$port;Database=$dbName",$userName,$password);
                echo '<script>console.log("Conexion exitosa"); </script>';             
            }
            catch(PDOException $exp)
            {
                echo '<script>console.log("Fallo la conexion"); </script>';
                
            }            
        }
        public function GetQuery($queryString = "", $valores = array()){

            if($queryString != "" && strlen($queryString) > 0){
                try{
                    $query = $this->conn->prepare($queryString);
                    $query->execute($valores);                 
                    if(intval($query->errorCode()) == 0)
                        return $query->fetchAll(PDO::FETCH_ASSOC);
                    else
                        return intval($query->errorCode());
                } catch(Exception $ex){
                    return $ex->getMessage();
                }
            }
            else
                return 0;
        }

        public function ExecQuery($queryString = "", $valores = array()){

            if($queryString != "" && strlen($queryString) > 0){
                try{

                    $this->conn->beginTransaction();
                    $query = $this->conn->prepare($queryString);
                    $query->execute($valores);          

                    if(intval($query->errorCode()) == 0){

                        $this->conn->commit();
                        return $query->rowCount();
                    }
                    else{

                        $this->conn->rollBack();
                        //return intval($query->errorCode());
                        return -1;
                    }
                } catch(Exception $ex){

                    $this->conn->rollBack();
                    return $ex->getMessage();
                }
            }
            else
                return 0;
        }
    }   

?>
</body>
</html>