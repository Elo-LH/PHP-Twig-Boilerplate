<?php

class BlogController extends AbstractController
{
    public function home(): void
    {
        $postManager = new PostManager;
        $categoryManager = new CategoryManager;
        $categories = $categoryManager->findAll();
        $posts = $postManager->findAll();
        $this->render("home.html.twig", ["posts" => $posts, "categories" => $categories]);
    }
}
