<?php

namespace App\Controller;

use App\Models\Company;
use Slim\Exception\HttpNotFoundException;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class CompanyController extends DefaultController
{
    public function index(ServerRequestInterface $request, ResponseInterface $response, $args): ResponseInterface
    {
        $companyModel = new Company();
        $company = $companyModel->find($args['id']);
        if ($company === null) {
            throw new HttpNotFoundException($request);
        }

        return $this->twig->render(
            $response, 'company/index.twig', [
            'company' => $company,
            ]
        );
    }
}
