<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\niveau;
use App\raison;
use App\truc;


use Illuminate\Http\Request;

class PagesController extends Controller {

	public function index(){
        return view('pages.home',$this->getPagesItem())->with('raison',$this->getRaison());
    }

    public function formation(){
        return view('pages.formation',$this->getPagesItem());
    }


    public function junior(){
        return view('pages.tworows',$this->getPagesItem())->with('cours',$this->getJuniorNiveaux());
    }

    public function prescolaire(){
        return view('pages.tworows',$this->getPagesItem())->with('cours',$this->getPrescolaireNiveaux());
    }

    public function adulte(){
        return view('pages.adulte',$this->getPagesItem());
    }

    public function cours(){
        return view('pages.cours',$this->getPagesItem());
    }

    public function procedure(){
        return view('pages.procedure',$this->getPagesItem());
    }


    public function raisons()
    {
        return view('pages.raisons',$this->getPagesItem())->with('raisons',raison::get());
    }



    public function contenu($slug){
        return view('pages.contenu',$this->getPagesItem())->with('niveau',new niveau($slug));
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
        $Logo = "<h1 id=\"logo\" class=\"fl notext\"><a href=\"/\">Quebec Natation</a></h1>";
        return($Logo);
    }

    private function getRaison(){
        return raison::find(rand(1,4));
            }

    private function getPagesItem(){
        return ['menu'=>$this->getMenu(),'logo'=>$this->getLogo(),'truc'=>$this->getTruc(new truc)];
    }

    private function getPrescolaireNiveaux(){
        //clairement pas clean
        return ([new niveau('etoile'),new niveau('canard'),new niveau('tortue'),new niveau('loutre'),new niveau('salamandre'),new niveau('poisson'),new niveau('crocodile'),new niveau('baleine')]);
    }

    private function getJuniorNiveaux(){
        //clairement pas clean
        return ([new niveau('j1'),new niveau('j2'),new niveau('j3'),new niveau('j4'),new niveau('j5'),new niveau('j6'),new niveau('j7'),new niveau('j8'),new niveau('j9'),new niveau('j10')]);
    }

    private function getAdulteNiveaux(){
        //clairement pas clean
        return ([new niveau('d1'),new niveau('d2'),new niveau('d3')]);
    }


    private function getTruc(truc $truc){

        return $truc->orderBy('id','desc')->first();
    }
}
