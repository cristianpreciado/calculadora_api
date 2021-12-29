<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\Calculate;

/**
 * Class OperationController
 * @package App\Controller
 *
 * @Route(path="/")
 */

class OperationController extends AbstractController
{
    /**
     * @Route("{operation}/{operatorA}/{operatorB}", name="calculate", methods={"GET"})
     */
    public function calculate($operation,$operatorA,$operatorB): Response
    {
        $calculate = new Calculate($operation);
        $data = [
            'result' => $calculate->calculate($operatorA,$operatorB),
        ];
        return new JsonResponse($data, Response::HTTP_OK);
    }
}