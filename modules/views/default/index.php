<div class="admin-default-index">
    <h1><?= $this->context->action->uniqueId ?></h1>
    <p>
       ZAZAZA This is the view content for action "<?= $this->context->action->id ?>".
        The action belongs to the controller "<?= get_class($this->context) ?>"
        in the "<?= $this->context->module->id ?>" module.
    </p>
    <p>
       <?php echo date('H:i:s'); ?><br>
        <code><?= __FILE__ ?></code>
    </p>
</div>
