<?php
/**
 * Created by PhpStorm.
 * User: Developpeur
 * Date: 31/10/17
 * Time: 18:25
 */

class Test {


    public function __construct()
    {

        echo 'distant1';
        parent::__construct('utilisateur');
       
        echo 'distant3';
		echo 'distant3';
      


    }

	public function __construct2()
    {
        parent::__construct('utilisateur');
        echo 'distant2';
    }


    public function index()
    {

        $paramsview = array('view' => sprintf('frontend/index'), 'title' => sprintf(' sunuTonte Plateforme e-Tontine ') );
        $this->view($paramsview);
    }



    function test1(){
        echo "malick1" ;
    }

    function test2(){
        echo "malick10" ;
    }

    function test3(){
        echo "malick3" ;
        echo "malick3" ;





}