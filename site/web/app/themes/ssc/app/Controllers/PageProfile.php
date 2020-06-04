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

}
