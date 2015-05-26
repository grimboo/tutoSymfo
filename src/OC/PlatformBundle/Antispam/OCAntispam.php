<?php
/**
 * Created by PhpStorm.
 * User: JJérémy
 * Date: 22/05/2015
 * Time: 00:02
 */

namespace OC\PlatformBundle\Antispam;

class OCAntispam
{
    private $mailer;
    private $locale;
    private $minLength;

    
    public function __construct(\Swift_Mailer $mailer, $locale, $minLength)
    {
        $this->mailer   =$mailer;
        $this->locale   = $locale;
        $this->minLength = (int) $minLength;
    }
    /**
     * Vérifie si le texte est un spam ou non
     *
     * @param string $text
     * @return bool
     */
    public function isSpam($text)
    {
        return strlen($text) < $this->minLength;
    }
}