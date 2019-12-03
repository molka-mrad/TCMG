<?php
class Database
{   
    private static $instance=NULL;

    public static function Connexion(){
        if(!isset(self::$instance)){
            try{
                $servername="localhost";
                $username="root";
                $password="";
                $dbname="tcmg";
                self::$instance = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                } catch (Exception $e) {
                    die('Erreur: '.$e->getMessage());
                }
            }
            return self::$instance;
        }
    } 
    ?>