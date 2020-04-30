<?php
/*
 * STATIC: una propiedad o un metodo estático actua igual que un metodo normal
 * o un atributo normal, simplemente que para llamarlo yo no necesito instanciarlo
 * para llamarlo, no necesito crear un objeto, de fomra que es una manera mas práctica
 * para llamar dichos metodos o atributos de manera mas sencilla.
 * */
class Configuracion {

    public static $color;
    public static $newsletter;
    public static $entorno;

    /**
     * @return mixed
     */
    public static function getColor()
    {
        return self::$color;//Con :: accedo a propiedades estaticas, no con $this->
    }

    /**
     * @param mixed $color
     */
    public static function setColor($color): void
    {
        self::$color = $color;
    }

    public static function getNewsletter()
    {
        return self::$newsletter;//Esto es equivalente a hacer un $this-> pero la diferencia es que accedemos a datos estáticos
    }

    public static function setNewsletter($newsletter): void
    {
        self::$newsletter = $newsletter;
    }

    public static function getEntorno()
    {
        return self::$entorno;
    }

    public static function setEntorno($entorno): void
    {
        self::$entorno = $entorno;
    }



}