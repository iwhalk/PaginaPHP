<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GetCatalogo</title>
</head>

<body>
    <?php

    require_once('test.php');
    Class ObtenerCatalogo{

        public $Id;

        function __construct($Id)
        {
            $this->Id =$Id;
        }

        public function GetCatalogo(){
            
            if ($this->Id == 0){
                $query_usuario="select * from Catalogo";
                $parametros = array();     
            }
            else{
                $query_usuario="select * from Catalogo where IdCatalogo = :id";
                $parametros = array("id"=>$this->Id);
            }
            
            $queryMaker = new ConectDB();
            
            try{
                
                $data = $queryMaker->GetQuery($query_usuario, $parametros);
                if (is_integer($data))            
                throw new Exception("error en la consulta");
                if(!isset($data) && empty($data) && $data == 0){
                    echo "No hay registros en el catalogo";
                    exit();
                }
                return $data;
            }
            catch(Exception $ex){
                echo $ex->getMessage();
                return 0;
            }
        }
        
    }
    ?>

</body>
</html>