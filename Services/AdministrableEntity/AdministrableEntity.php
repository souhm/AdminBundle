<?php
namespace Fredb\AdminBundle\Services\AdministrableEntity;

/**
 *
 * @author fredericbourbigot
 */
interface AdministrableEntity {
   
    public function getId();
    public function getTag();
    public function getCreationDate();
    public function setCreationDate();
    public function getNameIdentifier($lang);
    
}

?>
