<?php
/**
 * Created by PhpStorm.
 * User: mastajeet
 * Date: 15-05-25
 * Time: 21:15
 */

namespace App;


class niveau {

    public $image;
    public $oneliner;
    public $contenu;
    public $categorie;

    public function __construct($id){
        $this->image = $id;
        $this->oneliner =file('content/oneliner'.$id.'.inc');
        $this->contenu =  file('content/content'.$id.'.inc');
        $this->categorie = $this->getCategorie($id);


    }

    private function getCategorie($id){
        
        switch($id){
            CASE 'j1' :
            CASE 'j2' :
            CASE 'j3' :
            CASE 'j4' :
            CASE 'j5' :
            CASE 'j6' :
            CASE 'j7' :
            CASE 'j8' :
            CASE 'j9' :
            CASE 'j10':

                return 'junior';


            
        }
        return 'other';
    }
}