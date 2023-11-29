<?php

namespace App\Controller;

use App\Core\Controller;
use App\Core\Role;
use App\Model\AnneeScolaire;
use App\Model\Projet;
use App\Model\User;
use DateTime;

class ProjetController extends Controller
{
    //liste des projets
    public function index()
    {
        $projets = Projet::findAll();
        $this->render('projet/index.html.php', $data = [
            "projets" => $projets
        ]);
    }

    //vue du formulaire d'ajout
    public function create()
    {
        $this->render('projet/create.html.php');
    }

    //creation d'un projet 
    public function store()
    {
        $_POST['code'] = 'PRJ_' . uniqid();
        $_POST['date_debut'] = date($_POST['date_debut']);
        $_POST['date_fin'] = date($_POST['date_fin']);
        $projet = $this->instance(Projet::class, $_POST);
        $projet->insert();
        $this->redirectToRoute('');
    }

    //vue du formulaire de modification
    public function edit()
    {
        $id = explode('=', $this->request->query()[0]);
        $id = intval($id[1]);
        $projet = Projet::findById($id);
        $projet = json_decode(json_encode($projet), true);
        $this->render('projet/edit.html.php', [
            'projet' => $projet
        ]);
    }

    //modification

    public function update()
    {
        $id = intval($this->request->request()['id']);
        $projet = $this->instance(Projet::class, $this->request->request());
        $projet->update($id);
        $this->redirectToRoute('');
    }

    //delete 

    public function delete()
    {
        $id = explode('=', $this->request->query()[0]);
        $id = intval($id[1]);
        Projet::delete($id);
        $this->redirectToRoute('');
    }
}
