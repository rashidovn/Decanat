<h2>Новая специальность</h2>

<? 
echo $this->Form->create('Speciality', 
  array(
    'action' => 'save'
  )
);

echo $this->Form->input('Speciality.name', array('label' => 'Название:'));
echo $this->Form->input('Speciality.code', array('label' => 'Код специальности:'));
echo $this->Form->input('Speciality.duration', array('label' => 'Срок обучения:'));
echo $this->Form->input('Speciality.faculty_id', array('type' => 'hidden', 'value' => '1'));

echo '<input type="reset" value="Очистить">' ;
echo '<input type="submit" value="Добавить специальность">';
?>