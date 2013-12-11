<?php


 $docs['ab'] = array(
	 "heading"    => $applications['ab']['name'],
	 "description"=> $applications['ab']['description'],
	 "file"       => "index.html",
	 "tutorial"   => "",
	 "p"          => 1,
	 "sub"=>array(
		 "form"      => array(
			 "heading"    => "Form",
			 "description"=> "Capture form",
			 "file"       => "ab_form.html",
			 "tutorial"   => "",
			 "p"          => 1,
			 
			 "sub" => array(
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
					 "p"          => perm('form', 'delete'),
					 "sub"=>array(
						 "fields_a"=> array(
							 "heading"    => "Form fields",
							 "description"=> "A description of the various fields in the form",
							 "file"       => "ab_form_fields_a.html",
							 "tutorial"   => "",
							 "faq"        => "",
							 "p"          => "1"
						 )
					 )
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
			 "heading"    => "Bookings",
			 "description"=> "Main list Page",
			 "file"       => "ab_bookings.html",
			 "tutorial"   => "",
			 "p"          => 1,
			 "sub" => array(
	
				 "highlight"=> array(
					 "heading"    => "Highlight Records",
					 "description"=> "Highlighting records to easily see state",
					 "file"       => "ab_bookings_highlight.html",
					 "tutorial"   => "bookings_highlight_filter.swf",
					 "p"          => 1
				 ),
				 "filter"   => array(
					 "heading"    => "Filter Records / Search",
					 "description"=> "Filtering Records based on their state",
					 "file"       => "ab_records_filter.html",
					 "tutorial"   => "bookings_records_filter.swf",
					 "faq"        => "",
					 "p"          => 1
				 ),
				 "settings" => array(
					 "heading"     => "Change list settings",
					 "description" => "Help on how to add a booking",
					 "file"        => "ab/ab_record_settings.html",
					 "tutorial"    => "",
					 "faq"         => "",
					 "p"           => 1
				 )
			 )
	
		 ),
		 "production"  => array(
			 "heading"    => "Production",
			 "description"=> "Main list Page",
			 "file"       => "ab_bookings.html",
			 "tutorial"   => "",
			 "p"          => 1,
			 "sub" => array(
	
				 "highlight"=> array(
					 "heading"    => "Highlight Records",
					 "description"=> "Highlighting records to easily see state",
					 "file"       => "ab_bookings_highlight.html",
					 "tutorial"   => "bookings_highlight_filter.swf",
					 "p"          => 1
				 ),
				 "filter"   => array(
					 "heading"    => "Filter Records / Search",
					 "description"=> "Filtering Records based on their state",
					 "file"       => "ab_records_filter.html",
					 "tutorial"   => "bookings_records_filter.swf",
					 "faq"        => "",
					 "p"          => 1
				 ),
				 "settings" => array(
					 "heading"     => "Change list settings",
					 "description" => "Help on how to add a booking",
					 "file"        => "ab/ab_record_settings.html",
					 "tutorial"    => "",
					 "faq"         => "",
					 "p"           => 1
				 )
			 )
	
		 ),
	 ),
 )
 
 ?>
 