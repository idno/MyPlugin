<?php

    namespace IdnoPlugins\MyPlugin\Pages {

        use Idno\Common\Page;

        class HelloWorld extends Page {

            function getContent()
            {

                $t = \Idno\Core\site()->template();
                $t->body = $t->draw('helloworld');
                $t->title = 'Hello world';
                $t->drawPage();

            }

        }

    }