<h1>Edit Import</h1>
<?php
    echo $this->Form->create($import);
    echo $this->Form->control('title');
    echo $this->Form->control('body', ['rows' => '3']);
    echo $this->Form->button(__('Save Import'));
    echo $this->Form->end();
