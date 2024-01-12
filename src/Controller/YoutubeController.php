<?php

namespace App\Controller;

use App\Entity\Youtube;
use App\Repository\YoutubeRepository;
use Core\Controller\Controller;
use Core\Http\Response;

class YoutubeController extends Controller
{
    public function index()
    {
        $youtubeRepo = new YoutubeRepository();
        $youtubes = $youtubeRepo->findAll();

        return $this->render("youtube/index", [
            "youtubes" => $youtubes,
            "pageTitle" => "Les Youtubeurs"
        ]);
    }

    public function show():Response
    {

        if (isset($_GET['id']) && ctype_digit($_GET['id'])){
            $id = $_GET['id'];
        }else{
            return $this->redirect();
        }

        $youtubeRepo = new YoutubeRepository();
        $youtube = $youtubeRepo->find($id);


        return $this->render("youtube/show", [
            "youtube" => $youtube,
            "pageTitle" => "Les Youtubeurs"
        ]);
    }


    public function delete():Response
    {

        if (isset($_GET['id']) && ctype_digit($_GET['id'])){
            $id = $_GET['id'];
        }else{
            return $this->redirect();
        }

        $youtubeRepo = new YoutubeRepository();
        $youtube = $youtubeRepo->delete($id);

        return $this->redirect("?type=youtube&action=index");
    }

    public function create():Response{

        if (isset($_POST["name"]) && $_POST["description"] && $_POST["follower"]){

            $youtube = new Youtube();
            $youtube->setName($_POST["name"]);
            $youtube->setDescription($_POST["description"]);
            $youtube->setFollower($_POST["follower"]);

            $youtubeRepo = new YoutubeRepository();
            $youtubeRepo->save($youtube);
            return $this->redirect("?type=youtube&action=index");
        }


        return $this->render("youtube/create",[
            "pageTitle"=>"Ajouter Youtubeur"
        ]);
    }

}
