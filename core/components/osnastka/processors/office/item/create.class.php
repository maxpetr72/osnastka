<?php

class OsnastkaOfficeItemCreateProcessor extends modObjectCreateProcessor
{
    public $objectType = 'OsnastkaItem';
    public $classKey = 'OsnastkaItem';
    public $languageTopics = array('Osnastka');
    //public $permission = 'create';


    /**
     * @return bool
     */
    public function beforeSet()
    {
        $name = trim($this->getProperty('name'));
        if (empty($name)) {
            $this->modx->error->addField('name', $this->modx->lexicon('Osnastka_item_err_name'));
        } elseif ($this->modx->getCount($this->classKey, array('name' => $name))) {
            $this->modx->error->addField('name', $this->modx->lexicon('Osnastka_item_err_ae'));
        }

        return parent::beforeSet();
    }

}

return 'OsnastkaOfficeItemCreateProcessor';