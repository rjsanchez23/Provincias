<?php

namespace app\Controller;


use src\Component\Controller\Controller;
use src\Component\Response\Response;


class HomeController extends Controller
{

    public function init()
    {

        /* if($cacheResult = $this->cacheGet(static::class, "init")){
             return $cacheResult;
         }*/


        $provinceRepository = $this->container->get("ProvinceRepository");
        $provinces = $provinceRepository->findAll();


        $topTenProvinces = $this->sortTopTenProvinces($provinces);
        $response = new Response($this->container->get('Twig')->render('home.twig', "provinces",
            array(
                "all" => $provinces,
                "topTen" => $topTenProvinces
            )
        ));

        /* $this->memcache->set($this->generateCacheKey(static::class, "init"),$response,300);*/
        return $response;
    }

    private function sortTopTenProvinces($provinces)
    {
        usort($provinces, function ($a, $b) {

            return ($a["visitas"] > $b["visitas"]) ? 1 : -1;
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
        if (empty($provinces)) {
            $provinces[0]["provincia"] = "No se corresponde con ninguna provincia";
        }
        $provinces[0]["cPostal"] = $codigoPostal;

        return new Response($this->container->get('Twig')->render('calculadoraProvincia.twig', 'provincia', $provinces[0]));

    }

    public function municipios($provincia, $page = 1)
    {

        $provincia = urldecode(str_replace("-", "/", $provincia));

        $townRepository = $this->container->get("TownRepository");
        $municipios = $townRepository->findByProvince($provincia, ($page-1)*10, 10);
        $paginas = $townRepository->findByProvince($provincia);
        $pagination = ceil(count($paginas) / 10);

        return new Response($this->container->get('Twig')->render('municipios.twig', 'result',
            array(
                'municipios' => $municipios,
                'pagination' => $pagination,
                'provincia'  => $provincia,
                'page'       => $page
            )
        ));

    }


}