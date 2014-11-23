<?php

    namespace IdnoPlugins\MyPlugin {

        use Idno\Common\Plugin;

        class Main extends Plugin {

            function registerPages()
            {

                \Idno\Core\site()->addPageHandler('helloworld/?', 'IdnoPlugins\MyPlugin\Pages\HelloWorld', true);

            }

        }

    }