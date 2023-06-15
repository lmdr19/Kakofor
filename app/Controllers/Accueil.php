<?php

namespace App\Controllers;

// Données transférées à la vue demandée...
$data ['title']=ucfirst($page);

// Afficher la vue avec en-tete et pied-de-page
return view('templates/header',$data);


use CodeIgniter\Exceptions\PageNotFoundException;
class Accueil extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
        public function view($page='home')
        {
            if (! is_file(APPPATH . 'Views/' . $page . '.php')){
                //Pas de page pour ce qui est demandé
                throw new PageNotFoundException($page);
            }

        $data ['title']=ucfirst($page);
        

        return view('templates/header',$data)
        .view($page)
        .view('templates/footer');

    }
    
}

