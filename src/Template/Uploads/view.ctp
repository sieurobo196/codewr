$id = $upload['Upload']['id'];
echo '<img src="'.$this->Html->url(array('controller' => 'uploads','action' => 'download',$id)).'"/>'; 