<?php
namespace Busicolelementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Utils;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 *
 * Busicol elementor departments section widget.
 *
 * @since 1.0
 */
class Busicol_Departments extends Widget_Base {

	public function get_name() {
		return 'busicol-departments';
	}

	public function get_title() {
		return __( 'Departments', 'busicol-companion' );
	}

	public function get_icon() {
		return 'eicon-settings';
	}

	public function get_categories() {
		return [ 'busicol-elements' ];
	}

	protected function _register_controls() {

		// ----------------------------------------  departments content ------------------------------
		$this->start_controls_section(
			'departments_content',
			[
				'label' => __( 'Departments Section', 'busicol-companion' ),
			]
        );
        $this->add_control(
            'sec_title',
            [
                'label' => esc_html__( 'Section Title', 'busicol-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html__( 'Our Departments', 'busicol-companion' ),
            ]
        );
        $this->add_control(
            'sub_title',
            [
                'label' => esc_html__( 'Sub Title', 'busicol-companion' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'   => 'Esteem spirit temper too say adieus who direct esteem. <br>It esteems luckily or picture placing drawing.',
            ]
        );
		$this->add_control(
            'departments', [
                'label' => __( 'Create New', 'busicol-companion' ),
                'type' => Controls_Manager::REPEATER,
                'title_field' => '{{{ item_title }}}',
                'fields' => [
                    [
                        'name' => 'item_img',
                        'label' => __( 'Department Image', 'busicol-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::MEDIA,
                        'default' => [
                            'url' => Utils::get_placeholder_image_src()
                        ]
                    ],
                    [
                        'name' => 'item_title',
                        'label' => __( 'Department Title', 'busicol-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( 'Eye Care', 'busicol-companion' ),
                    ],
                    [
                        'name' => 'item_text',
                        'label' => __( 'Department Text', 'busicol-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXTAREA,
                        'default' => __( 'Esteem spirit temper too say adieus who direct esteem.', 'busicol-companion' ),
                    ],
                    [
                        'name' => 'btn_text',
                        'label' => __( 'Button Text', 'busicol-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( 'Learn More', 'busicol-companion' ),
                    ],
                    [
                        'name' => 'btn_url',
                        'label' => __( 'Button URL', 'busicol-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::URL,
                        'default' => [
                            'url' => '#'
                        ],
                    ],
                ],
                'default'   => [
                    [      
                        'item_img'   => [
                            'url' => Utils::get_placeholder_image_src()
                        ],
                        'item_title' => __( 'Eye Care', 'busicol-companion' ),
                        'item_text'  => __( 'Esteem spirit temper too say adieus who direct esteem.', 'busicol-companion' ),
                        'btn_text'   => __( 'Learn More', 'busicol-companion' ),
                        'btn_url'    => [
                            'url' => '#'
                        ],
                    ],
                    [      
                        'item_img'   => [
                            'url' => Utils::get_placeholder_image_src()
                        ],
                        'item_title' => __( 'Physical Therapy', 'busicol-companion' ),
                        'item_text'  => __( 'Esteem spirit temper too say adieus who direct esteem.', 'busicol-companion' ),
                        'btn_text'   => __( 'Learn More', 'busicol-companion' ),
                        'btn_url'    => [
                            'url' => '#'
                        ],
                    ],
                    [      
                        'item_img'   => [
                            'url' => Utils::get_placeholder_image_src()
                        ],
                        'item_title' => __( 'Dental Care', 'busicol-companion' ),
                        'item_text'  => __( 'Esteem spirit temper too say adieus who direct esteem.', 'busicol-companion' ),
                        'btn_text'   => __( 'Learn More', 'busicol-companion' ),
                        'btn_url'    => [
                            'url' => '#'
                        ],
                    ],
                    [      
                        'item_img'   => [
                            'url' => Utils::get_placeholder_image_src()
                        ],
                        'item_title' => __( 'Diagnostic Test', 'busicol-companion' ),
                        'item_text'  => __( 'Esteem spirit temper too say adieus who direct esteem.', 'busicol-companion' ),
                        'btn_text'   => __( 'Learn More', 'busicol-companion' ),
                        'btn_url'    => [
                            'url' => '#'
                        ],
                    ],
                    [      
                        'item_img'   => [
                            'url' => Utils::get_placeholder_image_src()
                        ],
                        'item_title' => __( 'Skin Surgery', 'busicol-companion' ),
                        'item_text'  => __( 'Esteem spirit temper too say adieus who direct esteem.', 'busicol-companion' ),
                        'btn_text'   => __( 'Learn More', 'busicol-companion' ),
                        'btn_url'    => [
                            'url' => '#'
                        ],
                    ],
                    [      
                        'item_img'   => [
                            'url' => Utils::get_placeholder_image_src()
                        ],
                        'item_title' => __( 'Surgery Service', 'busicol-companion' ),
                        'item_text'  => __( 'Esteem spirit temper too say adieus who direct esteem.', 'busicol-companion' ),
                        'btn_text'   => __( 'Learn More', 'busicol-companion' ),
                        'btn_url'    => [
                            'url' => '#'
                        ],
                    ],
                ]
            ]
		);
		$this->end_controls_section(); // End service content

    /**
     * Style Tab
     * ------------------------------ Style Section Heading ------------------------------
     *
     */

        $this->start_controls_section(
            'style_room_section', [
                'label' => __( 'Style Service Section', 'busicol-companion' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'sec_bg_col', [
                'label' => __( 'Section Bg Color', 'busicol-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .our_department_area' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'big_title_col', [
                'label' => __( 'Big Title Color', 'busicol-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .our_department_area .section_title h3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sub_title_col', [
                'label' => __( 'Sub Title Color', 'busicol-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .our_department_area .section_title p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'single_styles_seperator',
            [
                'label' => esc_html__( 'Single Item Styles', 'busicol-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );
        $this->add_control(
            'title_col', [
                'label' => __( 'Title Color', 'busicol-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .our_department_area .single_department .department_content h3 a' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'title_hover_col', [
                'label' => __( 'Title Hover Color', 'busicol-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .our_department_area .single_department .department_content h3 a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'text_col', [
                'label' => __( 'Text Color', 'busicol-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .our_department_area .single_department .department_content p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'anchor_text_col', [
                'label' => __( 'Anchor Text Color', 'busicol-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .our_department_area .single_department .department_content a.learn_more' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();

	}

	protected function render() {
    $settings  = $this->get_settings();
    $sec_title = !empty( $settings['sec_title'] ) ? $settings['sec_title'] : '';
    $sub_title = !empty( $settings['sub_title'] ) ? $settings['sub_title'] : '';
    $departments = !empty( $settings['departments'] ) ? $settings['departments'] : '';
    ?>
    
    <!-- offers_area_start -->
    <div class="our_department_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-55">
                        <?php 
                            if ( $sec_title ) { 
                                echo '<h3>'.esc_html( $sec_title ).'</h3>';
                            }
                            if ( $sub_title ) { 
                                echo '<p>'.wp_kses_post( nl2br($sub_title) ).'</p>';
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php   
                if( is_array( $departments ) && count( $departments ) > 0 ) {
                    foreach( $departments as $department ) {
                        $item_title = ( !empty( $department['item_title'] ) ) ? $department['item_title'] : '';
                        $item_img = !empty( $department['item_img']['id'] ) ? wp_get_attachment_image( $department['item_img']['id'], 'busicol_department_thumb_362x240', '', array('alt' => $item_title . ' image' ) ) : '';
                        $item_text = ( !empty( $department['item_text'] ) ) ? $department['item_text'] : '';
                        $btn_text = ( !empty( $department['btn_text'] ) ) ? $department['btn_text'] : '';
                        $btn_url = ( !empty( $department['btn_url']['url'] ) ) ? $department['btn_url']['url'] : '';
                        ?>
                        <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="single_department">
                                <?php 
                                    if ( $item_img ) { 
                                        echo '<div class="department_thumb">';
                                            echo $item_img;
                                        echo '</div>';
                                    }
                                ?>
                                <div class="department_content">
                                    <?php 
                                        if ( $item_title ) { 
                                            echo '<h3><a href="'.esc_url($btn_url).'">'.esc_html( $item_title ).'</a></h3>';
                                        }
                                        if ( $item_text ) { 
                                            echo '<p>'.esc_html( $item_text ).'</p>';
                                        }
                                        if ( $btn_text ) { 
                                            echo '<a href="'.esc_url($btn_url).'" class="learn_more">'.esc_html( $btn_text ).'</a>';
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <!-- offers_area_end -->
    <?php
    }
}