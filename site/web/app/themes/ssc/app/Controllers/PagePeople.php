<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PagePeople extends Controller
{

    public function our_people()
    {

        $our_people = get_field('people');

            $data = [];

            foreach ($our_people as $people) {
                if ($people['acf_fc_layout'] == 'content_section_23_-_13') {

                    $this_block = (object) [
                        'block_type' => $people['acf_fc_layout'],
                        'title' => $people['section_title'],
                        'content' => $people['section_content'],
                        'image' => $people['section_image'],
                    ];
                    
                    array_push($data, $this_block);
                } elseif ($people['acf_fc_layout'] == 'content_section_13_-_23') {

                    $this_block = (object) [
                        'block_type' => $people['acf_fc_layout'],
                        'title' => $people['section_title'],
                        'content' => $people['section_content'],
                        'image' => $people['section_image'],
                    ];

                    array_push($data, $this_block);
                } elseif ($people['acf_fc_layout'] == 'image_divider') {

                    $this_block = (object) [
                        'block_type' => $people['acf_fc_layout'],
                        'image' => $people['image_divider'],
                    ];

                    array_push($data, $this_block);
                }
            }

            $data = (object) $data;

            return $data;
        }

        public function ourTeam()
        {
            
            if( have_rows('our_team') ):
                while ( have_rows('our_team') ) : the_row();
                    if( have_rows('managers') ):

                        while ( have_rows('managers') ) : the_row();
                            $team_info[] = array (
                                'title' => get_sub_field('title'),
                                'list' => get_sub_field('list'),
                            );
                        endwhile;
                    endif;

                    if( have_rows('supervisors') ):

                        while ( have_rows('supervisors') ) : the_row();
                            $team_info[] = array (
                                'title' => get_sub_field('title'),
                                'list' => get_sub_field('list'),
                            );
                        endwhile;

                    endif;

                    if( have_rows('team') ):

                        while ( have_rows('team') ) : the_row();
                            $team_info[] = array (
                                'title' => get_sub_field('title'),
                                'list' => get_sub_field('list'),
                            );
                        endwhile;

                    endif;

                endwhile;
            return $team_info;
                else :
                $team_info = "";
                return $team_info;
            endif;
        }

        
    }

    


