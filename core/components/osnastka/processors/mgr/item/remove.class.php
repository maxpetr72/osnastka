<?php

class OsnastkaItemRemoveProcessor extends modObjectProcessor
{
    public $objectType = 'OsnastkaItem';
    public $classKey = 'OsnastkaItem';
    public $languageTopics = array('osnastka');
    //public $permission = 'remove';


    /**
     * @return array|string
     */
    public function process()
    {
        if (!$this->checkPermissions()) {
            return $this->failure($this->modx->lexicon('access_denied'));
        }

        $ids = $this->modx->fromJSON($this->getProperty('ids'));
        if (empty($ids)) {
            return $this->failure($this->modx->lexicon('osnastka_item_err_ns'));
        }

        foreach ($ids as $id) {
            /** @var OsnastkaItem $object */
            if (!$object = $this->modx->getObject($this->classKey, $id)) {
                return $this->failure($this->modx->lexicon('osnastka_item_err_nf'));
            }

            $object->remove();
        }

        return $this->success();
    }

}

return 'OsnastkaItemRemoveProcessor';