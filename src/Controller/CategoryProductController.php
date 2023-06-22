<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\CategoryProduct;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api')]
class CategoryProductController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/category/product', name: 'app_category_product', methods: ["GET"])]
    public function index(): JsonResponse
    {

        $categorys = $this->getDoctrine()->getRepository(CategoryProduct::class)->findAll();

        $data = [];

        foreach ($categorys as $category) {
            $data = [
                'id' => $category->getId(),
                'name' => $category->getName(),
            ];
        }

        return $this->json($data);
    }

    #[Route('/category/product/store', name: 'store_category_product', methods: ["POST"])]
    public function store(Request $request): JsonResponse
    {
        $category = new CategoryProduct();

        $category->setName($request->request->get('name'));

        $this->em->persist($category);
        $this->em->flush();
        return new JsonResponse(['message' => 'Data stored successfully']);
    }

    #[Route('/category/product/{id}', name: 'show_category_product',  methods: 'GET')]
    public function show($id): JsonResponse
    {
        $category = $this->getDoctrine()->getRepository(CategoryProduct::class)->find($id);

        if (!$category) {
            return $this->json(['message' => "ID doesn't exist"]);
        }

        $data = [
            'id' => $category->getId(),
            'name' => $category->getName(),
        ];

        return $this->json($data);
    }

    #[Route('/category/product/edit/{id}', name: 'update_category_product',  methods: 'POST')]
    public function update($id, Request $request): JsonResponse
    {
        $entityManager = $this->getDoctrine()->getManager();
        $category = $entityManager->getRepository(CategoryProduct::class)->find($id);

        if (!$category) {
            return $this->json(['message' => "ID doesn't exist"]);
        }

        $name = $request->request->get('Name');

        $category->setName($name);

        $entityManager->flush();

        return $this->json(['message' => "Updated successfully"]);
    }

    #[Route('/category/product/destroy/{id}', name: 'destroy_category_product',  methods: 'DELETE')]
    public function destroy($id): JsonResponse
    {
        $entityManager = $this->getDoctrine()->getManager();
        $category = $entityManager->getRepository(CategoryProduct::class)->find($id);

        if (!$category) {
            return $this->json(['message' => "ID doesn't exist"]);
        }

        $entityManager->remove($category);
        $entityManager->flush();

        return $this->json(['message' => "destroy successfully"]);
    }
}
