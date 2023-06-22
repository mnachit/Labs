<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\FormeGalenique;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api')]
class FormeGaleniqueController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/FormeGalenique/product', name: 'app_FormeGalenique_product', methods: ["GET"])]
    public function index(): JsonResponse
    {

        $FormeGaleniques = $this->getDoctrine()->getRepository(FormeGalenique::class)->findAll();

        $data = [];

        foreach ($FormeGaleniques as $FormeGalenique) {
            $data = [
                'id' => $FormeGalenique->getId(),
                'name' => $FormeGalenique->getName(),
            ];
        }

        return $this->json($data);
    }

    #[Route('/FormeGalenique/product/store', name: 'store_FormeGalenique_product', methods: ["POST"])]
    public function store(Request $request): JsonResponse
    {
        $FormeGalenique = new FormeGalenique();

        $FormeGalenique->setName($request->request->get('name'));

        $this->em->persist($FormeGalenique);
        $this->em->flush();
        return new JsonResponse(['message' => 'Data stored successfully']);
    }

    #[Route('/FormeGalenique/product/{id}', name: 'show_FormeGalenique_product',  methods: 'GET')]
    public function show($id): JsonResponse
    {
        $FormeGalenique = $this->getDoctrine()->getRepository(FormeGalenique::class)->find($id);

        if (!$FormeGalenique) {
            return $this->json(['message' => "ID doesn't exist"]);
        }

        $data = [
            'id' => $FormeGalenique->getId(),
            'name' => $FormeGalenique->getName(),
        ];

        return $this->json($data);
    }

    #[Route('/FormeGalenique/product/edit/{id}', name: 'update_FormeGalenique_product',  methods: 'POST')]
    public function update($id, Request $request): JsonResponse
    {
        $entityManager = $this->getDoctrine()->getManager();
        $FormeGalenique = $entityManager->getRepository(FormeGalenique::class)->find($id);

        if (!$FormeGalenique) {
            return $this->json(['message' => "ID doesn't exist"]);
        }

        $name = $request->request->get('Name');

        $FormeGalenique->setName($name);

        $entityManager->flush();

        return $this->json(['message' => "Updated successfully"]);
    }

    #[Route('/FormeGalenique/product/destroy/{id}', name: 'destroy_FormeGalenique_product',  methods: 'DELETE')]
    public function destroy($id): JsonResponse
    {
        $entityManager = $this->getDoctrine()->getManager();
        $FormeGalenique = $entityManager->getRepository(FormeGalenique::class)->find($id);

        if (!$FormeGalenique) {
            return $this->json(['message' => "ID doesn't exist"]);
        }

        $entityManager->remove($FormeGalenique);
        $entityManager->flush();

        return $this->json(['message' => "destroy successfully"]);
    }
}
