 <?php
 class UsersModel extends Eloquent {
 	protected $table = 'users';
 	public $timestamps = false;
 	protected $fillable=array('user_name','user_email','user_phone','user_national_id','user_pass','is_confirm','user_role','is_active'); 
 	
 	public function getAllRank(){

 		$result =  DB::table('ranks')->select('id','rank_name')->where('is_active',1)->get();
 		return $result;
 	}


 	
 }
?>