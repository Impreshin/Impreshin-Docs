<?php
/*
 * Date: 2012/09/21
 * Time: 12:35 PM
 */


function perm() {
	$args = func_get_args();

	$ver = explode(".", defined('\Base::VERSION') ? \Base::VERSION : \Base::TEXT_Version);
	$ver = $ver[0];


	if ($ver > 2){
		$f3 = \Base::instance();
		$user = $f3->get("user");
	} else {
		$user = \F3::get("user");
	}

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
		"file" => "ab_form.html",
		"help" => array(
			"add"   => array(
				"heading"    => "Adding booking",
				"description"=> "Help on how to add a booking",
				"file"       => "ab_form_add.html",
				"tutorial"   => "",
				"faq"        => "",
				"p"          => perm('form', 'new')
			),
			"edit"  => array(
				"heading"    => "Editing a booking",
				"description"=> "Tutorial on how to add a booking",
				"file"       => "ab_form_edit.html",
				"tutorial"   => "",
				"faq"        => "",
				"p"          => perm('form', 'edit')
			),
			"delete"=> array(
				"heading"    => "Deleting a booking",
				"description"=> "Tutorial on how to add a booking",
				"file"       => "ab_form_delete.html",
				"tutorial"   => "",
				"faq"        => "",
				"p"          => perm('form', 'delete')
			),
			"fields"=> array(
				"heading"    => "Form fields",
				"description"=> "A description of the various fields in the form",
				"file"       => "ab_form_fields.html",
				"tutorial"   => "",
				"faq"        => "",
				"p"          => "1"
			)
		)

	),
	"bookings"  => array(
		"title"=> "Bookings",
		"file" => "ab_bookings.html",
		"help" => array(
			"settings" => array(
				"heading"    => "Change settings",
				"description"=> "Help on how to add a booking",
				"file"       => "ab_record_settings.html",
				"tutorial"   => "",
				"faq"        => "",
				"p"          => 1
			),
			"highlight"=> array(
				"heading"    => "highlight records",
				"description"=> "Tutorial on how to add a booking",
				"file"       => "ab_bookings_highlight.html",
				"tutorial"   => "bookings_highlight_filter.swf",
				"p"          => 1
			),
			"filter"   => array(
				"heading"    => "filter records",
				"description"=> "Tutorial on how to add a booking",
				"file"       => "ab_bookings_filter.html",
				"tutorial"   => "bookings_highlight_filter.swf",
				"faq"        => "",
				"p"          => 1
			),
			"tips"     => array(
				"heading"    => "Bookings Tips",
				"description"=> "Tutorial on how to add a booking",
				"file"       => "ab_bookings_tips.html",
				"tutorial"   => "",
				"faq"        => "",
				"p"          => 1
			)
		)

	),
	"production"=> array(
		"title"=> "Production",
		"file" => "ab_production.html",
		"help" => array(
			"settings" => array(
				"heading"    => "Change settings",
				"description"=> "Help on how to add a booking",
				"file"       => "ab_record_settings.html",
				"tutorial"   => "",
				"faq"        => "",
				"p"          => perm('production', 'page')
			),
			"highlight"=> array(
				"heading"    => "highlight different records",
				"description"=> "Tutorial on how to add a booking",
				"file"       => "ab_production_highlight.html",
				"tutorial"   => "",
				"p"          => perm('production', 'page')
			),
			"filter"   => array(
				"heading"    => "filter bookings",
				"description"=> "Tutorial on how to add a booking",
				"file"       => "ab_production_filter.html",
				"tutorial"   => "",
				"faq"        => "",
				"p"          => perm('production', 'page')
			),
			"tips"     => array(
				"heading"    => "Bookings Tips",
				"description"=> "Tutorial on how to add a booking",
				"file"       => "ab_production_tips.html",
				"tutorial"   => "",
				"faq"        => "",
				"p"          => perm('production', 'page')
			)
		)

	),
	"layout"    => array(
		"title"=> "Layout",
		"file" => "ab_layout.html",
		"help" => array(
			"planning"   => array(
				"heading"    => "Planning a record",
				"description"=> "Help on how to add a booking to a page",
				"file"       => "ab_layout_planning.html",
				"tutorial"   => "",
				"faq"        => "",
				"p"          => perm('layout', 'page')
			),
			"pagecount"  => array(
				"heading"    => "Change the page count",
				"description"=> "Tutorial on how to add a booking",
				"file"       => "ab_layout_pagecount.html",
				"tutorial"   => "",
				"p"          => perm('layout', 'pagecount')
			),
			"pagedetails"=> array(
				"heading"    => "Change the pages details",
				"description"=> "Tutorial on how to add a booking",
				"file"       => "ab_layout_pagedetails.html",
				"tutorial"   => "",
				"faq"        => "",
				"p"          => perm('layout', 'editpage')
			),
			"tips"       => array(
				"heading"    => "Layout Tips",
				"description"=> "Tutorial on how to add a booking",
				"file"       => "ab_layout_tips.html",
				"tutorial"   => "",
				"faq"        => "",
				"p"          => perm('layout', 'page')
			)
		)

	),
	"overview"  => array(
		"title"=> "Overview",
		"file" => "ab_overview.html",
		"help" => array(
			"highlight"=> array(
				"heading"    => "highlight pages",
				"description"=> "Tutorial on how to add a booking",
				"file"       => "ab_overview_highlight.html",
				"tutorial"   => "",
				"p"          => perm('overview', 'page')
			),
		)

	),
	"records"   => array(
		"title"=> "Records",
		"file" => "ab_records.html",
		"help" => array(
			"deleted"=> array(
				"heading"    => "Deleted Records",
				"description"=> "",
				"file"       => "ab_records_deleted.html",
				"tutorial"   => "",
				"faq"        => "",
				"p"          => perm('records', 'deleted', 'page')
			),
			"search" => array(
				"heading"    => "Search for a record",
				"description"=> "",
				"file"       => "ab_records_search.html",
				"tutorial"   => "",
				"p"          => perm('records', 'search', 'page')
			)
		)

	),
	"reports"   => array(
		"title"=> "Reports",
		"file" => "ab_reports.html",
		"help" => array(
			"account"      => array(
				"title"=> "Accounts",
				"file" => "ab_reports_account.html",
				"help" => array(
					"figures"  => array(
						"heading"    => "Figures",
						"description"=> "",
						"file"       => "ab_reports_account_figures.html",
						"tutorial"   => "",
						"faq"        => "",
						"p"          => perm('reports', 'account', 'figures', 'page')
					),
					"discounts"=> array(
						"heading"    => "Discounts",
						"description"=> "",
						"file"       => "ab_reports_account_discounts.html",
						"tutorial"   => "",
						"p"          => perm('reports', 'account', 'discounts', 'page')
					),
				)
			),
			"marketer"     => array(
				"title"=> "Marketers",
				"file" => "ab_reports_marketer.html",
				"help" => array(
					"figures"  => array(
						"heading"    => "Figures",
						"description"=> "",
						"file"       => "ab_reports_marketer_figures.html",
						"tutorial"   => "",
						"faq"        => "",
						"p"          => perm('reports', 'marketer', 'figures', 'page')
					),
					"discounts"=> array(
						"heading"    => "Discounts",
						"description"=> "",
						"file"       => "ab_reports_marketert_discounts.html",
						"tutorial"   => "",
						"p"          => perm('reports', 'marketer', 'discounts', 'page')
					),
					"targets"  => array(
						"heading"    => "Targets",
						"description"=> "",
						"file"       => "ab_reports_marketert_targets.html",
						"tutorial"   => "",
						"p"          => perm('reports', 'marketer', 'targets', 'page')
					)

				),
			),
			"production"   => array(
				"title"  => "Production",
				"file"   => "ab_reports_production.html",
				"help"   => array(
					"figures"  => array(
						"heading"    => "Figures",
						"description"=> "",
						"file"       => "ab_reports_production_figures.html",
						"tutorial"   => "",
						"faq"        => "",
						"p"          => perm('reports', 'production', 'figures', 'page')
					)
				),
			),
			"category"     => array(
				"title"=> "Categories",
				"file" => "ab_reports_category.html",
				"help" => array(
					"figures"  => array(
						"heading"    => "Figures",
						"description"=> "",
						"file"       => "ab_reports_category_figures.html",
						"tutorial"   => "",
						"faq"        => "",
						"p"          => perm('reports', 'category', 'figures', 'page')
					),
					"discounts"=> array(
						"heading"    => "Discounts",
						"description"=> "",
						"file"       => "ab_reports_category_discounts.html",
						"tutorial"   => "",
						"p"          => perm('reports', 'category', 'discounts', 'page')
					),
				)
			),
			"publication"  => array(
				"title"=> "Publications",
				"file" => "ab_reports_publication.html",
				"help" => array(
					"figures"  => array(
						"heading"    => "Figures",
						"description"=> "",
						"file"       => "ab_reports_publication_figures.html",
						"tutorial"   => "",
						"faq"        => "",
						"p"          => perm('reports', 'publication', 'figures', 'page')
					),
					"discounts"=> array(
						"heading"    => "Discounts",
						"description"=> "",
						"file"       => "ab_reports_publication_discounts.html",
						"tutorial"   => "",
						"p"          => perm('reports', 'publication', 'discounts', 'page')
					),
					"sections" => array(
						"heading"    => "Sections",
						"description"=> "",
						"file"       => "ab_reports_publication_sections.html",
						"tutorial"   => "",
						"p"          => perm('reports', 'publication', 'sections', 'page')
					),
					"placing"  => array(
						"heading"    => "Placing",
						"description"=> "",
						"file"       => "ab_reports_publication_placing.html",
						"tutorial"   => "",
						"p"          => perm('reports', 'publication', 'placing', 'page')
					),
				)
			),
		)
	),

	"admin"     => array(
		"title"=> "Administration",
		"file" => "ab_admin.html",
		"help" => array(
			"sections"=> array(
				"heading"    => "Administration Sections",
				"description"=> "the difference between the sections",
				"file"       => "ab_admin_sections.html",
				"tutorial"   => "",
				"faq"        => "",
				"p"          => perm('administration', '_nav')
			),

			"users"   => array(
				"title"=> "Users",
				"file" => "ab_admin_users.html",
				"help" => array(
					"permissions"=> array(
						"heading"    => "User Permissions",
						"description"=> "Help on how to change permissions",
						"file"       => "ab_admin_users_permissions.html",
						"tutorial"   => "",
						"faq"        => "",
						"p"          => perm('administration', 'system', 'users', 'page')
					),
					"add"        => array(
						"heading"    => "add a user",
						"description"=> "Help on how to add a user",
						"file"       => "ab_admin_users_add.html",
						"tutorial"   => "",
						"faq"        => "",
						"p"          => perm('administration', 'system', 'users', 'page')
					),
					"delete"     => array(
						"heading"    => "remove a user",
						"description"=> "Help on how to remove a user",
						"file"       => "ab_admin_users_delete.html",
						"tutorial"   => "",
						"faq"        => "",
						"p"          => perm('administration', 'system', 'users', 'page')
					),
				)
			)
		)
	)


);