<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/prova", name="home")
     */
    public function index(ProductRepository $productRepository)
    {
	$products = $productRepository->findAllByPrice();
	die("test");
        return $this->render('home/index.html.twig', [
	    'name' => 'PUG Sondrio',
            'products' => $products,
        ]);
    }
}
