<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PageProfile extends Controller
{

    
    public function ourProfile()
    {

        $our_profile = get_field('profile');

            $data = [];

            foreach ($our_profile as $profile) {
                if ($profile['acf_fc_layout'] == 'content_section_23_-_13') {

                    $this_block = (object) [
                        'block_type' => $profile['acf_fc_layout'],
                        'title' => $profile['section_title'],
                        'content' => $profile['section_content'],
                        'image' => $profile['section_image'],
                    ];
                    
                    array_push($data, $this_block);
                } elseif ($profile['acf_fc_layout'] == 'content_section_13_-_23') {

                        $this_block = (object) [
                            'block_type' => $profile['acf_fc_layout'],
                            'title' => $profile['section_title'],
                            'content' => $profile['section_content'],
                            'image' => $profile['section_image'],
                        ];
                        
                    array_push($data, $this_block);
                } elseif ($profile['acf_fc_layout'] == 'image_divider') {

                    $this_block = (object) [
                        'block_type' => $profile['acf_fc_layout'],
                        'image' => $profile['image_divider'],
                    ];

                    array_push($data, $this_block);
                }
            }

        $data = (object) $data;

        return $data;
    }

    public function relationshipIntro()
    {
        $field = get_field('relationships');
        return (object) [
            'intro'     => $field['intro'] ?? null,
        ];
    }

    public function ourRelationships()
    {

        if( have_rows('relationships') ):
            while ( have_rows('relationships') ) : the_row();

                if( have_rows('architects') ):

                    while ( have_rows('architects') ) : the_row();
                        $relationship_info[] = array (
                            'title' => get_sub_field('title'),
                            'list' => get_sub_field('list'),
                        );
                    endwhile;
                endif;

                if( have_rows('interior_designers') ):

                    while ( have_rows('interior_designers') ) : the_row();
                        $relationship_info[] = array (
                            'title' => get_sub_field('title'),
                            'list' => get_sub_field('list'),
                        );
                    endwhile;

                endif;

                if( have_rows('landscape_architects') ):

                    while ( have_rows('landscape_architects') ) : the_row();
                        $relationship_info[] = array (
                            'title' => get_sub_field('title'),
                            'list' => get_sub_field('list'),
                        );
                    endwhile;

                endif;

            endwhile;

        return $relationship_info;
            else :
                $relationship_info = "";
            return $relationship_info;
        endif;
    }

}
