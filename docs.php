<?php
/*
 * Date: 2012/09/21
 * Time: 12:35 PM
 */


//test_array($user);
function perm(){
	$args = func_get_args();
	$user = F3::get("user");
	$permission = $user['permissions'];

	foreach($args as $arg){
		if (isset($permission[$arg])){
			$permission = $permission[$arg];
		} else {
			$permission = 0;
			break;
		}
	}

	return ($permission == '1') ? 1 : 0;
}
$docs['ab']=array(
	"form"=>array(
		"title"=>"Form",
		"help"=>array(
				"add"=>array(
					"heading"    => "Adding booking",
					"description"=> "Help on how to add a booking",
					"file"=> "ab#form-add.html",
					"tutorial"=>"",
					"faq"=>"",
					"p"=>perm('form','new')
				),
				"edit"=>array(
					"heading"    => "Editing a booking",
					"description"=> "Tutorial on how to add a booking",
					"file"=> "ab#form-edit.html",
					"tutorial"=> "",
					"faq"     => "",
					"p"=> perm('form', 'edit')
				),
				"delete"=>array(
					"heading"    => "Deleting a booking",
					"description"=> "Tutorial on how to add a booking",
					"file"=> "ab#form-delete.html",
					"tutorial"=> "",
					"faq"     => "",
					"p"=> perm('form', 'delete')
				)
		)

	),
	"bookings"=>array(
		"title"=>"Bookings",
		"help"=>array(
				"settings"=>array(
					"heading"    => "Change settings",
					"description"=> "Help on how to add a booking",
					"file"=> "ab#form-add.html",
					"tutorial"=>"",
					"faq"=>"",
					"p"=> 1
				),
				"highlight"=>array(
					"heading"    => "highlight different records",
					"description"=> "Tutorial on how to add a booking",
					"file"=> "ab#form-edit.html",
					"tutorial"=> "",
					"p"=> 0
				),
				"filter"=>array(
					"heading"    => "filter bookings",
					"description"=> "Tutorial on how to add a booking",
					"file"=> "ab#form-delete.html",
					"tutorial"=> "",
					"faq"     => "",
					"p"=> 1
				),
				"tips"=>array(
					"heading"    => "Bookings Tips",
					"description"=> "Tutorial on how to add a booking",
					"file"=> "ab#form-delete.html",
					"tutorial"=> "",
					"faq"     => "",
					"p"=> 1
				)
		)

	),

	"admin"=>array(
		"title"=>"Administration",
		"help"=>array(
			"sections"=>array(
				"heading"    => "Administration Sections",
				"description"=> "the difference between the sections",
				"file"       => "",
				"tutorial"   => "",
				"faq"        => "",
				"p"=> perm('administration', '_nav')
			),

			"users"=>array(
				"title"=> "Users",
				"help" => array(
					"permissions"=>array(
						"heading"    => "User Permissions",
						"description"=> "Help on how to change permissions",
						"file"       => "",
						"tutorial"   => "",
						"faq"        => "",
						"p"=> perm('administration','system', 'users','page')
					),
					"add"=>array(
						"heading"    => "add a user",
						"description"=> "Help on how to add a user",
						"file"       => "",
						"tutorial"   => "",
						"faq"        => "",
						"p"=> perm('administration', 'system', 'users', 'page')
					),
					"delete"=>array(
						"heading"    => "remove a user",
						"description"=> "Help on how to remove a user",
						"file"       => "",
						"tutorial"   => "",
						"faq"        => "",
						"p"=> perm('administration', 'system', 'users', 'page')
					),
				)
			)
		)
	)


);