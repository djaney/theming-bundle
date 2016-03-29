
# Installation

    In composer.json

    "require": {
        "djaney/theming-bundle": "dev-master"
    },
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/djaney/theming-bundle"
        }
    ]

# Usage
## Register the service

Second argument is the name of the base theme

    services:
        theme:
            class: Djaney\ThemingBundle\ThemeSelector\ThemeSelectorService
            arguments: [ "@twig" , DjaneyThemingBundle ]

## Use in Controller

    second argument is the theme name. Set as NULL to use base theme.

    return $this->get('theme')->template('Default/index.html.twig', 'ChildThemeBundle', $data);
