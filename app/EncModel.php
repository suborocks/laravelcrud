<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EncModel extends Model
{
   protected $table ="enc_models";
   protected $fillable =['name'];
   
	public function encap($t)
	{
		return EncModel::create($t);
	}

   public function encedit($t)
   {
      return EncModel::where('id',$t)->get()->first();
      
   }

   public function encapupdate($t,$id)
   {

      return EncModel::where('id',$id)->update($t);
   }
}
