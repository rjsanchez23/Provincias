<?php

namespace app\Controller;


use src\Component\Controller\Controller;
use src\Component\Response\JsonResponse;
use src\Component\Response\Response;
use src\Language\Language;


class HomeController extends Controller
{

    public function init()
    {
        $provinceRepository = $this->container->get("ProvinceRepository");
        $provinces = $provinceRepository->findAll();

        $topTenProvinces = $this->sortTopTenProvinces($provinces);

        return new Response($this->container->get('Twig')->render('home.twig', "provinces",
            array(
                "all" => $provinces,
                "topTen" => $topTenProvinces
            )
        ));
    }

    private function sortTopTenProvinces($provinces){
        usort($provinces,  function($a,$b){

            return ( $a["visitas"] > $b["visitas"] ) ? 1 : -1;
        });

        return array_slice(array_reverse($provinces), 0, 10);

    }


    public function calculadoraProvincia()
    {


        return new Response($this->container->get('Twig')->render('calculadoraProvincia.twig'));

    }

    public function buscarCodigoPostal($codigoPostal)
    {

        $provinceRepository = $this->container->get("ProvinceRepository");
        $provinces = $provinceRepository->findByPostalCode($codigoPostal);
        if(empty($provinces)){
            $provinces[0]["provincia"] = "No se corresponde con ninguna provincia";
        }
        $provinces[0]["cPostal"] = $codigoPostal;
        return new Response($this->container->get('Twig')->render('calculadoraProvincia.twig', 'provincia', $provinces[0]));

    }
        
}