<?php namespace Djaney\ThemingBundle\ThemeSelector;
use Symfony\Component\HttpFoundation\Response;
class ThemeSelectorService{
    protected $twig;
    protected $baseTheme;
    public function __construct($twig, $baseTheme){
        $this->twig = $twig;
        $this->baseTheme = $baseTheme;
    }


    /**
     * generates a view based on the theme selected
     * @param  string $template  [description]
     * @param  string $themeName [description]
     * @return string            [description]
     */
    public function template($template, $themeName = null, $data= []){
        if($themeName==null){
            $themeName = $this->baseTheme;
        }
        $html = $this->twig->render($themeName.'::'.$template, $data);
        $response = new Response($html);
        return $response;
    }
}
