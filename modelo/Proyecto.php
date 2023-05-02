<?php
class Proyecto extends Conectar
{

            public function proyecto()
            {
                   
   
                $conectar= parent::conexion();
                parent::set_names();
                $sql="SELECT *FROM proyectos";
                $sql=$conectar->prepare($sql);
                $sql->execute();
                return $resultado=$sql->fetchAll();
                    print_r($resultado);
                                           
              }     

      




}