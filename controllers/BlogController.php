<?php

class BlogController extends AbstractController
{
    public function home(): void
    {
        $postManager = new PostManager;
        $posts = $postManager->findAll();
        $this->render("home.html.twig", ["posts" => $posts]);
    }
}
