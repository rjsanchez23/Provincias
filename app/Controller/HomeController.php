<?php

namespace app\Controller;


use src\Component\Controller\Controller;
use src\Component\Library\Redis;
use src\Component\Response\Response;


class HomeController extends Controller
{

    public function init()
    {

        $this->memcache->delete($this->generateCacheKey(static::class,"init"));
        $cacheResult = $this->cacheGet(static::class, "init");
         if($cacheResult){
             return $cacheResult;
         }



        $provinceRepository = $this->container->get("ProvinceRepository");
        $provinces = $provinceRepository->findAll();



        $topTenProvinces = $this->TopProvinces($provinces, 10);
        $response = new Response($this->container->get('Twig')->render('home.twig', "provinces",
            array(
                "all" => $provinces,
                "topTen" => $topTenProvinces
            )
        ));

        $this->memcache->set($this->generateCacheKey(static::class, "init"),$response,15);
        return $response;
    }

    private function TopProvinces($provinces, $number)
    {

        $redis = (new Redis())->client();

        $topProvinces = $redis->zrevrange("topTen", 0, $number-1);
        foreach ($provinces as $currentProvince) {

            if (false !== ($key = array_search($currentProvince["provincia"], $topProvinces))) {

                $topProvinces[$key] = $currentProvince;
            }
        }
        return $topProvinces;

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
        $redis = (new Redis())->client();
        $provincia = urldecode(str_replace("-", "/", $provincia));
        $redis->zincrby("topTen", 1, $provincia);
        $this->memcache->delete($this->generateCacheKey("url","/"));
        $cacheResult = $this->cacheGet(static::class, "municipios".$provincia.$page);
        if($cacheResult){

            return $cacheResult;
        }
        $townRepository = $this->container->get("TownRepository");
        $municipios = $townRepository->findByProvince($provincia, ($page-1)*10, 10);
        $paginas = $townRepository->findByProvince($provincia);
        $pagination = ceil(count($paginas) / 10);


        $response = new Response($this->container->get('Twig')->render('municipios.twig', 'result',
            array(
                'municipios' => $municipios,
                'pagination' => $pagination,
                'provincia'  => $provincia,
                'page'       => $page
            )
        ));
        $this->memcache->set($this->generateCacheKey(static::class, "municipios".$provincia.$page),$response,840);
        return $response;

    }


}