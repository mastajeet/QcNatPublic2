<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\niveau;
use App\raison;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function index(){
        return view('pages.home',$this->getPagesItem())->with('raison',$this->getRaison());
    }

    public function formation(){
        return view('pages.formation',$this->getPagesItem());
    }

    public function contenu($slug){
        return view('pages.contenu',$this->getPagesItem())->with('niveau',new niveau($slug));
    }

    public function junior(){
        return "Junior Page";
    }


    private function getMenu(){

        $ImageList = array('accueil','cours','inscrire','liens','moniteur');
        $ImageArray = array();
        foreach($ImageList as $v){
                $ImageArray[$v] = $v."_r.png";
        }

    return($ImageArray);
    }

    private function getLogo(){
        $Logo = "<h1 id=\"logo\" class=\"fl notext\"><a href=\"#\">Quebec Natation</a></h1>";
        return($Logo);
    }

    private function getRaison(){
        return raison::find(rand(1,4));
            }

    private function getPagesItem(){
        return ['menu'=>$this->getMenu(),'logo'=>$this->getLogo()];
    }
}
