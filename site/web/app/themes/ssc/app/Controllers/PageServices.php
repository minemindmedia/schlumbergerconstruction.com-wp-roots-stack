<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PageServices extends Controller
{

    public function ourServices()
    {

        $our_services = get_field('services');

            $data = [];

            foreach ($our_services as $service) {
                if ($service['acf_fc_layout'] == 'content_section') {

                    $this_block = (object) [
                        'block_type' => $service['acf_fc_layout'],
                        'title' => $service['section_title'],
                        'content' => $service['section_content'],
                    ];
                    
                    array_push($data, $this_block);
                } elseif ($service['acf_fc_layout'] == 'image_divider') {

                    $this_block = (object) [
                        'block_type' => $service['acf_fc_layout'],
                        'image' => $service['image_divider'],
                    ];

                    array_push($data, $this_block);
                }
            }

            $data = (object) $data;

            return $data;
        }

}
