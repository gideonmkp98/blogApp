<?php

namespace App\Controller;

use App\Entity\Blog;
use App\Repository\BlogRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PublicController extends AbstractController
{
    /**
     * @Route("/", name="public")
     */
    public function index(BlogRepository $blogRepository)
    {

        return $this->render('public/index.html.twig', [
            'blogs' => $blogRepository->findAll(),
        ]);
    }
}
