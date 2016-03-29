Creates a simple theming using a Child Theme and a Base Theme.

If the template name exists in the child, the child bundle template is used.

Else, The base theme will be used.

The Child Theme can be dynamically passed in the in the service call.

    src
    |-BaseThemeBundle/Resources/views/**.html.twig
    |-ChildThemeBundle/Resources/views/**.html.twig

A Theme is simply a bundle with views.

# Installation

    In composer.json

    "require": {
        "djaney/theming-bundle": "dev-master"
    }

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
