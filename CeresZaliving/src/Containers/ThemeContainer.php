<?php

namespace CeresZaliving\Containers;

use Plenty\Plugin\Templates\Twig;

class ThemeContainer {
    # public function call(Twig $twig):string {
    public function call(Twig $twig) {
        return $twig->render('CeresZaliving::content.Theme');
    }
}