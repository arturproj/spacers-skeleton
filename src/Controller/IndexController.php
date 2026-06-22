<?php

namespace App\Controller;

use Spacers\Framework\Constant\Attribute\Route;
use Spacers\Framework\Controller\AbstractController;
use Spacers\Framework\Request\Request;
use Spacers\Framework\Response\Response;

class IndexController extends AbstractController
{
    #[Route("/", "index", "GET")]
    public function indexAction(): Response
    {
        return $this->render("index/index.tpl.php");
    }

    #[Route("/test")]
    public function testAction(Request $request): Response
    {
        return $this->json(array("status" => true));
    }

    #[Route("/test/:id")]
    public function postAction(string $id, Request $request): Response
    {
        return $this->json(array("status" => true, "id" => $id));
    }

    #[Route("/test/:id/post/:post")]
    public function postIdAction(string $id, string $post, Request $request): Response
    {
        return $this->json(array("status" => true, "id" => $id, "post" => $post));
    }

}