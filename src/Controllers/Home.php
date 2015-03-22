<?php
/**
 * Created by PhpStorm.
 * User: Marc
 * Date: 11/03/2015
 * Time: 20:44
 */

namespace Controllers;
use Mpwarfwk\Component\Request\Request;
use Mpwarfwk\Component\Response\HttpResponse;
use Mpwarfwk\Component\Response\JsonResponse;
use Mpwarfwk\Component\Templating\SmartyTemplate;
use Mpwarfwk\Component\Templating\TwigTemplate;
use Mpwarfwk\Controller\Controller;

class Home extends Controller {

    public function __construct(){
    }

    public function login(Request $request){
        $result = null;
        if($request->post->getParameter()) {
            $this->db = $this->get("Databases")->getDB(); // servicio
            $username = $request->post->getString("username");
            $password = $request->post->getString("password");
            $query = "SELECT username, password FROM Users WHERE username=? AND password=?";
            $result = $this->db->query($query, array("username" => $username, "password" => $password));
            if($result){ $result = 1;}
            else {$result = 2;}
        }
        $root  = $request->server->getString("DOCUMENT_ROOT");
        $twigView = new TwigTemplate($root.'/../src/Templates');
        $variables = array("post" => $request->post->getParameter(),"result" => $result);
        $response = new HttpResponse($twigView->render('login.twig',$variables ));
        return $response->send();
    }

    public function Register(Request $request){
        $result = null;
        if($request->post->getParameter()){
            $this->db = $this->get("Databases")->getDB();
            $username = $request->post->getString("username");
            $password = $request->post->getString("password");
            $query = "SELECT username, password FROM Users WHERE username=?";
            $result = $this->db->query($query, array("username" => $username));
            if($result){ $result = 2;}
            else {
                $this->db->persist("Users", array("username" => $username, "password" => $password));
                $result = 1;
            }
        }
        $root  = $request->server->getString("DOCUMENT_ROOT");
        $twigView = new TwigTemplate($root.'/../src/Templates');
        $variables = array("post" => $request->post->getParameter(),"result" => $result);
        $response = new HttpResponse($twigView->render('register.twig',$variables));
        return $response->send();
    }

    public function Smarty(Request $request){
        $root  = $request->server->getString("DOCUMENT_ROOT");
        $variables = $request->server->getString("SCRIPT_URL");
        $variables = explode("/",$variables);
        $name ="";
        if(isset($variables[2]))$name = $variables[2];
        $smartyView = new SmartyTemplate($root.'/../src/Templates');
        //$smartyView->assignVars(array("name" => "Marc")); // Las variables se pueden asignar en esta función o directamente en la funcion render.
        $response = new HttpResponse($smartyView->render('example.tlp', array("name" => $name)));
        return $response->send();
    }
} 