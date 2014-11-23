<?=$this->draw('entity/edit/header');?>

<form action="<?= $vars['object']->getURL() ?>" method="post">

    <div class="row">

        <div class="span8 offset2 edit-pane">

            <p>Enter your greeting:</p>
            <p>
                <input type="text" name="greeting" value="<?=htmlspecialchars($vars['object']->greeting)?>" placeholder="Enter a greeting here">
            </p>
            <?php if (empty($vars['object']->_id)) echo $this->drawSyndication('note'); ?>
            <p class="button-bar">
                <?= \Idno\Core\site()->actions()->signForm('/hello/edit') ?>
                <?= $this->draw('content/access'); ?>
                <input type="button" class="btn btn-cancel" value="Cancel" onclick="hideContentCreateForm();"/>
                <input type="submit" class="btn btn-primary" value="Publish"/>
            </p>

        </div>

    </div>

</form>

<?=$this->draw('entity/edit/footer');?>