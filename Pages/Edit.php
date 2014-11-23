<?php

    namespace IdnoPlugins\MyPlugin\Pages {

        use Idno\Common\Page;

        class Edit extends Page {

            function getContent() {

                // Are we loading an entity?
                if (!empty($this->arguments)) {
                    $object = \IdnoPlugins\MyPlugin\Hello::getByID($this->arguments[0]);
                } else {
                    $object = new \IdnoPlugins\MyPlugin\Hello();
                }

                $t = \Idno\Core\site()->template();
                $t->body = $t->__(['object' => $object])->draw('hello/edit');
                $t->title = 'Save a greeting';
                $t->drawPage();

            }

            function postContent() {

                $this->createGatekeeper();

                $new = false;
                if (!empty($this->arguments)) {
                    $object = \IdnoPlugins\MyPlugin\Hello::getByID($this->arguments[0]);
                }
                if (empty($object)) {
                    $object = new \IdnoPlugins\MyPlugin\Hello();
                }

                if ($object->saveDataFromInput($this)) {
                    $this->forward($object->getURL());
                }

            }

        }

    }