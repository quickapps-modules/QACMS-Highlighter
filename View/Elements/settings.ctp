<?php $themes = array('Default', 'Django', 'Eclipse', 'Emacs', 'FadeToGrey', 'MDUltra', 'Midnight', 'RDark'); ?>
<?php echo $this->Form->create('Module'); ?>
    <?php echo $this->Form->input('name', array('type' => 'hidden')); ?>

    <?php echo $this->Html->useTag('fieldsetstart', __d('highlighter', 'Highlighter Theme')); ?>
        <?php echo $this->Form->select('Module.settings.theme', Set::combine($themes, '{n}', '{n}'), array('empty' => false)); ?>
    <?php echo $this->Html->useTag('fieldsetend'); ?>

    <?php echo $this->Form->submit(__d('highlighter', 'Save All')); ?>
<?php echo $this->Form->end(); ?>