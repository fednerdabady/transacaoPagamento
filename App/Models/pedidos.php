<?php
    namespace App\Models;
    class pedidos
    {
        private static $table = 'pedidos_pagamentos';
        public function select( int $id_pedido)
        {
            $con = new \PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER,DBPASSWORD);

            $query = 'SELECT c.descricao, * FROM pedidos_pagamentos a,    pedidos b, pedido_situacao c
            WHERE a.id_pedido = :id_pedido
             and b.id_situacao = c.id
             and a.id_pedido=b.id' ;
            $stm = $con->prepare($query);
            $stm->bindValue(':id_pedido', $id_pedido);
            $stm->execute();

            if($stm->rowCount() > 0){
                return $stm->fetch(\PDO::FETCH_ASSOC);
            }else{
                throw new \Exception("Nenhum pedidos incontrado !!");

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
?>
    