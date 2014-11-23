<?php

    namespace IdnoPlugins\MyPlugin {

        class ContentType extends \Idno\Common\ContentType {

            public $title = 'Greeting';
            public $category_title = 'Greetings';
            public $entity_class = 'IdnoPlugins\\MyPlugin\\Hello';
            public $indieWebContentType = array('note');

        }

    }