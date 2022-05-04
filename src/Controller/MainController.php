<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\BlogRepository;

class MainController extends AbstractController
{
    private $blogRepository;
    public function __construct(BlogRepository $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }

    #[Route('/', name: 'app_main')]
    public function index(): Response
    {
        $blogs = $this->blogRepository->findAll();
        //dd($blogs);
        return $this->render('main/index.html.twig', [
            'blogs' => $blogs,
        ]);
    }
}
