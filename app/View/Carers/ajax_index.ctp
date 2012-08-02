	<h2><?php echo __('Carers');?></h2>
	<?php
	echo $this->Form->Create('Carers');
	echo $this->Form->input($this->data['formprefix'], array('label'=>'Choose carer', 'options'=>$carers, 'type'=>'select', 'value'=>array_search($carers[1], $carers)));
	echo $this->Form->End();
	

