<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Ville;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api')]
class VilleController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/Ville', name: 'app_Ville', methods: ["GET"])]
    public function index(): JsonResponse
    {

        $Villes = $this->getDoctrine()->getRepository(Ville::class)->findAll();

        $data = [];

        foreach ($Villes as $Ville) {
            $data = [
                'id' => $Ville->getId(),
                'name' => $Ville->getName(),
            ];
        }

        return $this->json($data);
    }

    #[Route('/Ville/store', name: 'store_Ville', methods: ["POST"])]
    public function store(Request $request): JsonResponse
    {
        $Ville = new Ville();

        $Ville->setName($request->request->get('name'));

        $this->em->persist($Ville);
        $this->em->flush();
        return new JsonResponse(['message' => 'Data stored successfully']);
    }

    #[Route('/Ville/{id}', name: 'show_Ville',  methods: 'GET')]
    public function show($id): JsonResponse
    {
        $Ville = $this->getDoctrine()->getRepository(Ville::class)->find($id);

        if (!$Ville) {
            return $this->json(['message' => "ID doesn't exist"]);
        }

        $data = [
            'id' => $Ville->getId(),
            'name' => $Ville->getName(),
        ];

        return $this->json($data);
    }

    #[Route('/Ville/edit/{id}', name: 'update_Ville',  methods: 'POST')]
    public function update($id, Request $request): JsonResponse
    {
        $entityManager = $this->getDoctrine()->getManager();
        $Ville = $entityManager->getRepository(Ville::class)->find($id);

        if (!$Ville) {
            return $this->json(['message' => "ID doesn't exist"]);
        }

        $name = $request->request->get('Name');

        $Ville->setName($name);

        $entityManager->flush();

        return $this->json(['message' => "Updated successfully"]);
    }

    #[Route('/Ville/destroy/{id}', name: 'destroy_Ville',  methods: 'DELETE')]
    public function destroy($id): JsonResponse
    {
        $entityManager = $this->getDoctrine()->getManager();
        $Ville = $entityManager->getRepository(Ville::class)->find($id);

        if (!$Ville) {
            return $this->json(['message' => "ID doesn't exist"]);
        }

        $entityManager->remove($Ville);
        $entityManager->flush();

        return $this->json(['message' => "destroy successfully"]);
    }
}
