<?php $themes = array('Default', 'Django', 'Eclipse', 'Emacs', 'FadeToGrey', 'MDUltra', 'Midnight', 'RDark'); ?>
<?php echo $this->Html->useTag('fieldsetstart', __d('highlighter', 'Highlighter Theme')); ?>
    <?php echo $this->Form->select('Module.settings.theme', Set::combine($themes, '{n}', '{n}'), array('empty' => false)); ?>
<?php echo $this->Html->useTag('fieldsetend'); ?>