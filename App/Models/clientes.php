<?php
        namespace App\Models;

Class clientes{
            private static $table = 'clientes';
            public static function select(int $id)
            {
                $con = new \PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER,DBPASSWORD);

                $query = 'SELECT * FROM '.self::$table.' WHERE id = :id' ;
                $stm = $con->prepare($query);
                $stm->bindValue(':id', $id);
                $stm->execute();

                if($stm->rowCount() > 0){
                    return $stm->fetch(\PDO::FETCH_ASSOC);
                }else{
                    throw new \Exception("Nenhum clientes incontrado !!");

                }
            }

            public static function selectAll()
            {
                $con = new \PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER,DBPASSWORD);

                $query = 'SELECT * FROM '.self::$table ;
                $stm = $con->prepare($query);
                $stm->execute();

                if($stm->rowCount() > 0){
                    return $stm->fetchAll(\PDO::FETCH_ASSOC);
                }else{
                    throw new \Exception("Nenhum clientes incontrado !!");

                }
            }

            

        }