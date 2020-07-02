<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

/**
 * Class MiFiltroExtension
 * @package App\Twig
 *
 * Clase para crear extensiones personalizadas de Twig,
 * Hay que registrar esto en la carpeta de servicios de Symfony que esta en
 * Config/services.yaml
 */
class MiFiltroExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            // If your filter generates SAFE HTML, you should add a third
            // parameter: ['is_safe' => ['html']]
            // Reference: https://twig.symfony.com/doc/2.x/advanced.html#automatic-escaping
            new TwigFilter('multiplicar_filtro', [$this, 'multiplicar']),
        ];
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('multiplicarFunction', [$this, 'multiplicar']),
        ];
    }

    public function multiplicar($numero)
    {
        $tabla = "<h1>Tabla del $numero</h1>";

        for ($i = 0; $i < 12; $i++){
            $tabla .= "$numero X $i = ".($numero * $i) . "<br>";
        }

        return $tabla;
    }
}
