<?php

    namespace IdnoPlugins\MyPlugin {

        use Idno\Common\Entity;

        class Hello extends Entity {

            function getTitle()
            {
                if (!empty($this->greeting)) {
                    return $this->greeting;
                }
                return 'Howdy!';
            }

            function getDescription() {
                return $this->getTitle();
            }

            /**
             * Status objects have type 'note'
             * @return 'note'
             */
            function getActivityStreamsObjectType() {
                return 'note';
            }

            function saveDataFromInput() {

                if (empty($this->_id)) {
                    $new = true;
                } else {
                    $new = false;
                }

                $currentPage = \Idno\Core\site()->currentPage();
                if ($greeting = $currentPage->getInput('greeting')) {

                    $this->greeting = $greeting;

                }

                $this->setAccess('PUBLIC');

                if ($this->save()) {

                    if ($new) {
                        $this->addToFeed();
                    }

                }

                return true;

            }

        }

    }