<?php
/*
 * Date: 2012/09/21
 * Time: 12:35 PM
 */


//test_array($user);
function perm() {
	$args = func_get_args();
	$user = F3::get("user");
	$permission = $user['permissions'];

	foreach ($args as $arg) {
		if (isset($permission[$arg])) {
			$permission = $permission[$arg];
		} else {
			$permission = 0;
			break;
		}
	}

	return ($permission == '1') ? 1 : 0;
}

$docs['ab'] = array(
	"form"      => array(
		"title"=> "Form",
		"file" => "ab#form.html",
		"help" => array(
			"add"   => array(
				"heading"    => "Adding booking",
				"description"=> "Help on how to add a booking",
				"file"       => "ab#form#add.html",
				"tutorial"   => "",
				"faq"        => "",
				"p"          => perm('form', 'new')
			),
			"edit"  => array(
				"heading"    => "Editing a booking",
				"description"=> "Tutorial on how to add a booking",
				"file"       => "ab#form#edit.html",
				"tutorial"   => "",
				"faq"        => "",
				"p"          => perm('form', 'edit')
			),
			"delete"=> array(
				"heading"    => "Deleting a booking",
				"description"=> "Tutorial on how to add a booking",
				"file"       => "ab#form#delete.html",
				"tutorial"   => "",
				"faq"        => "",
				"p"          => perm('form', 'delete')
			)
		)

	),
	"bookings"  => array(
		"title"=> "Bookings",
		"file" => "ab#bookings.html",
		"help" => array(
			"settings" => array(
				"heading"    => "Change settings",
				"description"=> "Help on how to add a booking",
				"file"       => "ab#bookings#settings.html",
				"tutorial"   => "",
				"faq"        => "",
				"p"          => 1
			),
			"highlight"=> array(
				"heading"    => "highlight different records",
				"description"=> "Tutorial on how to add a booking",
				"file"       => "ab#bookings#highlight.html",
				"tutorial"   => "",
				"p"          => 1
			),
			"filter"   => array(
				"heading"    => "filter bookings",
				"description"=> "Tutorial on how to add a booking",
				"file"       => "ab#bookings#filter.html",
				"tutorial"   => "",
				"faq"        => "",
				"p"          => 1
			),
			"tips"     => array(
				"heading"    => "Bookings Tips",
				"description"=> "Tutorial on how to add a booking",
				"file"       => "ab#bookings#tips.html",
				"tutorial"   => "",
				"faq"        => "",
				"p"          => 1
			)
		)

	),
	"production"=> array(
		"title"=> "Production",
		"file" => "ab#production.html",
		"help" => array(
			"settings" => array(
				"heading"    => "Change settings",
				"description"=> "Help on how to add a booking",
				"file"       => "ab#production#settings.html",
				"tutorial"   => "",
				"faq"        => "",
				"p"          => perm('production', 'page')
			),
			"highlight"=> array(
				"heading"    => "highlight different records",
				"description"=> "Tutorial on how to add a booking",
				"file"       => "ab#production#highlight.html",
				"tutorial"   => "",
				"p"          => perm('production', 'page')
			),
			"filter"   => array(
				"heading"    => "filter bookings",
				"description"=> "Tutorial on how to add a booking",
				"file"       => "ab#production#filter.html",
				"tutorial"   => "",
				"faq"        => "",
				"p"          => perm('production', 'page')
			),
			"tips"     => array(
				"heading"    => "Bookings Tips",
				"description"=> "Tutorial on how to add a booking",
				"file"       => "ab#production#tips.html",
				"tutorial"   => "",
				"faq"        => "",
				"p"          => perm('production', 'page')
			)
		)

	),
	"layout"    => array(
		"title"=> "Layout",
		"file" => "ab#layout.html",
		"help" => array(
			"planning"   => array(
				"heading"    => "Planning a record",
				"description"=> "Help on how to add a booking to a page",
				"file"       => "ab#layout#planning.html",
				"tutorial"   => "",
				"faq"        => "",
				"p"          => perm('layout', 'page')
			),
			"pagecount"  => array(
				"heading"    => "Change the page count",
				"description"=> "Tutorial on how to add a booking",
				"file"       => "ab#layout#pagecount.html",
				"tutorial"   => "",
				"p"          => perm('layout', 'pagecount')
			),
			"pagedetails"=> array(
				"heading"    => "Change the pages details",
				"description"=> "Tutorial on how to add a booking",
				"file"       => "ab#layout#pagedetails.html",
				"tutorial"   => "",
				"faq"        => "",
				"p"          => perm('layout', 'editpage')
			),
			"tips"       => array(
				"heading"    => "Layout Tips",
				"description"=> "Tutorial on how to add a booking",
				"file"       => "ab#layout#tips.html",
				"tutorial"   => "",
				"faq"        => "",
				"p"          => perm('layout', 'page')
			)
		)

	),
	"overview"  => array(
		"title"=> "Overview",
		"file" => "ab#overview.html",
		"help" => array(
			"highlight"=> array(
				"heading"    => "highlight pages",
				"description"=> "Tutorial on how to add a booking",
				"file"       => "ab#overview#highlight.html",
				"tutorial"   => "",
				"p"          => perm('overview', 'page')
			),
		)

	),
	"records"   => array(
		"title"=> "Records",
		"file" => "ab#records.html",
		"help" => array(
			"deleted"=> array(
				"heading"    => "Deleted Records",
				"description"=> "",
				"file"       => "ab#records#deleted.html",
				"tutorial"   => "",
				"faq"        => "",
				"p"          => perm('records', 'deleted', 'page')
			),
			"search" => array(
				"heading"    => "Search for a record",
				"description"=> "",
				"file"       => "ab#records#search.html",
				"tutorial"   => "",
				"p"          => perm('records', 'search', 'page')
			)
		)

	),
	"reports"   => array(
		"title"=> "Reports",
		"file" => "ab#reports.html",
		"help" => array(
			"account"   => array(
				"title"=> "Accounts",
				"file" => "ab#reports#account.html",
				"help" => array(
					"figures"  => array(
						"heading"    => "Figures",
						"description"=> "",
						"file"       => "ab#reports#account#figures.html",
						"tutorial"   => "",
						"faq"        => "",
						"p"          => perm('reports', 'account', 'figures', 'page')
					),
					"discounts"=> array(
						"heading"    => "Discounts",
						"description"=> "",
						"file"       => "ab#reports#account#discounts.html",
						"tutorial"   => "",
						"p"          => perm('reports', 'account', 'discounts', 'page')
					),
				)
			),
			"marketer"  => array(
				"title"=> "Marketers",
				"file" => "ab#reports#marketer.html",
				"help" => array(
					"figures"  => array(
						"heading"    => "Figures",
						"description"=> "",
						"file"       => "ab#reports#marketer#figures.html",
						"tutorial"   => "",
						"faq"        => "",
						"p"          => perm('reports', 'marketer', 'figures', 'page')
					),
					"discounts"=> array(
						"heading"    => "Discounts",
						"description"=> "",
						"file"       => "ab#reports#marketert#discounts.html",
						"tutorial"   => "",
						"p"          => perm('reports', 'marketer', 'discounts', 'page')
					),
					"targets"  => array(
						"heading"    => "Targets",
						"description"=> "",
						"file"       => "ab#reports#marketert#targets.html",
						"tutorial"   => "",
						"p"          => perm('reports', 'marketer', 'targets', 'page')
					)

				),
			),
			"production"=> array(
				"title"  => "Production",
				"file"   => "ab#reports#production.html",
				"help"   => array(
					"figures"  => array(
						"heading"    => "Figures",
						"description"=> "",
						"file"       => "ab#reports#production#figures.html",
						"tutorial"   => "",
						"faq"        => "",
						"p"          => perm('reports', 'production', 'figures', 'page')
					)
				),
			),
			"category"  => array(
				"title"=> "Categories",
				"file" => "ab#reports#category.html",
				"help" => array(
					"figures"  => array(
						"heading"    => "Figures",
						"description"=> "",
						"file"       => "ab#reports#category#figures.html",
						"tutorial"   => "",
						"faq"        => "",
						"p"          => perm('reports', 'category', 'figures', 'page')
					),
					"discounts"=> array(
						"heading"    => "Discounts",
						"description"=> "",
						"file"       => "ab#reports#category#discounts.html",
						"tutorial"   => "",
						"p"          => perm('reports', 'category', 'discounts', 'page')
					),
				)
			),
			"publication"  => array(
				"title"=> "Publications",
				"file" => "ab#reports#publication.html",
				"help" => array(
					"figures"  => array(
						"heading"    => "Figures",
						"description"=> "",
						"file"       => "ab#reports#publication#figures.html",
						"tutorial"   => "",
						"faq"        => "",
						"p"          => perm('reports', 'publication', 'figures', 'page')
					),
					"discounts"=> array(
						"heading"    => "Discounts",
						"description"=> "",
						"file"       => "ab#reports#publication#discounts.html",
						"tutorial"   => "",
						"p"          => perm('reports', 'publication', 'discounts', 'page')
					),
					"sections"=> array(
						"heading"    => "Sections",
						"description"=> "",
						"file"       => "ab#reports#publication#sections.html",
						"tutorial"   => "",
						"p"          => perm('reports', 'publication', 'sections', 'page')
					),
					"placing"=> array(
						"heading"    => "Placing",
						"description"=> "",
						"file"       => "ab#reports#publication#placing.html",
						"tutorial"   => "",
						"p"          => perm('reports', 'publication', 'placing', 'page')
					),
				)
			),
		)
	),

	"admin"     => array(
		"title"=> "Administration",
		"file" => "ab#admin.html",
		"help" => array(
			"sections"=> array(
				"heading"    => "Administration Sections",
				"description"=> "the difference between the sections",
				"file"       => "ab#admin#sections.html",
				"tutorial"   => "",
				"faq"        => "",
				"p"          => perm('administration', '_nav')
			),

			"users"   => array(
				"title"=> "Users",
				"file" => "ab#admin#users.html",
				"help" => array(
					"permissions"=> array(
						"heading"    => "User Permissions",
						"description"=> "Help on how to change permissions",
						"file"       => "ab#admin#users#permissions.html",
						"tutorial"   => "",
						"faq"        => "",
						"p"          => perm('administration', 'system', 'users', 'page')
					),
					"add"        => array(
						"heading"    => "add a user",
						"description"=> "Help on how to add a user",
						"file"       => "ab#admin#users#add.html",
						"tutorial"   => "",
						"faq"        => "",
						"p"          => perm('administration', 'system', 'users', 'page')
					),
					"delete"     => array(
						"heading"    => "remove a user",
						"description"=> "Help on how to remove a user",
						"file"       => "ab#admin#users#delete.html",
						"tutorial"   => "",
						"faq"        => "",
						"p"          => perm('administration', 'system', 'users', 'page')
					),
				)
			)
		)
	)


);