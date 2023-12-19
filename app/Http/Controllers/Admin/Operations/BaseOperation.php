<?php

namespace App\Http\Controllers\Admin\Operations;

trait BaseOperation
{
    
    /**
     * Get Current CRUD id
     * @return 
     */
    public function getId(){
        $id = $this->crud->getCurrentEntryId();
        if( $id ){
            return $id;
        }
        return;
    }

    protected function denyAccessIfNoPermission() {
        $user = backpack_user();
        $permission = $this->crud->entity_name.'.'.$this->crud->getCurrentOperation();
        if (! $user->can($permission)) {
            $this->crud->denyAccess($this->crud->getCurrentOperation());
        }
    }

}
