<?php

    namespace IdnoPlugins\MyPlugin {

        use Idno\Common\Plugin;

        class Main extends Plugin {

            function registerPages()
            {

                \Idno\Core\site()->addPageHandler('helloworld/?', 'IdnoPlugins\MyPlugin\Pages\HelloWorld', true);
                \Idno\Core\site()->addPageHandler('/hello/edit/?', '\IdnoPlugins\MyPlugin\Pages\Edit');
                \Idno\Core\site()->addPageHandler('/hello/edit/([A-Za-z0-9]+)/?', '\IdnoPlugins\MyPlugin\Pages\Edit');
                \Idno\Core\site()->addPageHandler('/hello/delete/([A-Za-z0-9]+)/?', '\IdnoPlugins\MyPlugin\Pages\Delete');

                \Idno\Core\site()->template()->extendTemplate('content/end', 'hello/end');

            }

        }

    }