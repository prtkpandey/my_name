
<?= $this->Form->create($slice)?>

<fieldset>
<legend><?=__('Contact Us') ?></legend>
<?= $this->Form->control ("name", ['label'=> 'Name']); ?>

<?= $this->Form->control('email', ['label'> 'Email']); ?>
<?= $this->Form->control('phone', ['label'> 'Phone']); ?>
<?= $this->Form->control('message', ['label'> 'Message']); ?>



</fieldset >

<?= $this->Form->button(__('Submit'))?>
<?= $this->Form->end()?>