<?php
function carbon_boot_load(){
      \Carbon_Fields\Carbon_Fields::boot();
}
add_action('after_setup_theme','carbon_boot_load');

use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );

function crb_attach_theme_options() {
    Container::make( 'theme_options', __( 'Carbon Options' ) )
        ->add_fields( array(
            Field::make( 'complex', 'crb_banners', 'Banners' )
                ->set_layout( 'tabbed-horizontal' )
                ->add_fields( array(
                    Field::make( 'text', 'b_item_title', 'Banner_item_title' )
                     ->set_attribute( 'placeholder', 'Enter Banner Item Title' )
                        ->set_default_value('Free Shipping'),
                    Field::make( 'icon', 'b_item_icon', 'Banner Item Icon' )
                    ->set_default_value('fa-truck'),
                    Field::make( 'text', 'b_item_des', 'Banner Item Description' ),
                ) ),
        ) )->add_fields(array(
            Field::make('icon','test_icon','Test Icon'),
        ));
}


