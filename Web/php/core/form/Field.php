<?php

namespace app\core\form;

use app\core\Model;

class Field
{
    public Model $model;
    public string  $attribute;


    public function __construct(Model $model, string $attribute)
    {
        $this->model = $model;
        $this->attribute = $attribute;
    }
  public function __toString(): string
  {
      if(strcmp($this->attribute,'username')==0) {
          return sprintf('
         <input type="text" placeholder="Username" name="%s" required >
            ', $this->attribute);
      } else if(strcmp($this->attribute,'email')==0){
          return sprintf('
         <input type="email" placeholder="Email" name="%s" required >
            ', $this->attribute);
      }else if(strcmp($this->attribute,'pass')==0){
          return sprintf('
         <input type="password" placeholder="Password" name="%s" required >
            ', $this->attribute);
      }else if(strcmp($this->attribute,'confirmPass')==0){
          return sprintf('
         <input type="password" placeholder="Confirm Password" name="%s" required >
            ', $this->attribute);
      }
      return sprintf('
         <input type="text" name="%s" required >
            ', $this->attribute);
  }
}