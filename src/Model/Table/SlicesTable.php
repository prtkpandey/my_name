<?php
namespace App\Model\Table;
use Cake\ORM\Table;

class SlicesTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);
        $this->setTable('slices');
        $this->setPrimaryKey('id');
    }
}



?>