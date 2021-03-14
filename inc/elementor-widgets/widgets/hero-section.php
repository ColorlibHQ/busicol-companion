<?php
namespace Busicolelementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Group_Control_Background;
use Elementor\Utils;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 *
 * Busicol elementor hero section widget.
 *
 * @since 1.0
 */
class Busicol_Hero extends Widget_Base {

	public function get_name() {
		return 'busicol-hero';
	}

	public function get_title() {
		return __( 'Hero Section', 'busicol-companion' );
	}

	public function get_icon() {
		return 'eicon-slider-full-screen';
	}

	public function get_categories() {
		return [ 'busicol-elements' ];
	}

	protected function _register_controls() {

		// ----------------------------------------  Hero content ------------------------------
		$this->start_controls_section(
			'hero_content',
			[
				'label' => __( 'Hero slider content', 'busicol-companion' ),
			]
        );
        
		$this->add_control(
            'sliders', [
                'label' => __( 'Create New', 'busicol-companion' ),
                'type' => Controls_Manager::REPEATER,
                'title_field' => '{{{ big_text }}}',
                'fields' => [
                    [
                        'name' => 'slider_img',
                        'label' => __( 'Slider Image', 'busicol-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::MEDIA,
                        'default'     => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ]
                    ],
                    [
                        'name' => 'big_text',
                        'label' => __( 'Big Text', 'busicol-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXTAREA,
                        'default'     => 'Grow Big with <br>Musicol Business'
                    ],
                    [
                        'name' => 'short_text',
                        'label' => __( 'Short Text', 'busicol-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXTAREA,
                        'default'     => 'Nam libero tempore, cum soluta nobis est eligendi optio <br>cumque nihil impedit quo minus.'
                    ],
                    [
                        'name' => 'button_separator',
                        'label' => __( 'Button Contents', 'busicol-companion' ),
                        'type' => Controls_Manager::HEADING,
                        'separator'     => 'after'
                    ],
                    [
                        'name' => 'btn1_text',
                        'label' => __( 'Button 1 Text', 'busicol-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default'     => __( 'Our Services', 'busicol-companion' ),
                    ],
                    [
                        'name' => 'btn1_url',
                        'label' => __( 'Button 1 URL', 'busicol-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::URL,
                        'default'     => [
                            'url' => '#'
                        ],
                    ],
                    [
                        'name' => 'btn2_text',
                        'label' => __( 'Button 2 Text', 'busicol-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default'     => __( 'See How it Work', 'busicol-companion' ),
                    ],
                    [
                        'name' => 'btn2_url',
                        'label' => __( 'Button 2 URL', 'busicol-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::URL,
                        'default'     => [
                            'url' => '#'
                        ],
                    ],
                ],
                'default'   => [
                    [      
                        'slider_img'    => [
                            'url'        => Utils::get_placeholder_image_src(),
                        ],
                        'big_text'    => 'Grow Big with <br>Musicol Business',
                        'short_text'    => 'Nam libero tempore, cum soluta nobis est eligendi optio <br>cumque nihil impedit quo minus.',
                        'btn1_text'    => __( 'Our Services', 'busicol-companion' ),
                        'btn1_url'    => [
                            'url' => '#'
                        ],
                        'btn2_text'    => __( 'See How it Work', 'busicol-companion' ),
                        'btn2_url'    => [
                            'url' => '#'
                        ],
                    ],
                    [      
                        'slider_img'    => [
                            'url'        => Utils::get_placeholder_image_src(),
                        ],
                        'big_text'    => 'Grow Big with <br>Musicol Business',
                        'short_text'    => 'Nam libero tempore, cum soluta nobis est eligendi optio <br>cumque nihil impedit quo minus.',
                        'btn1_text'    => __( 'Our Services', 'busicol-companion' ),
                        'btn1_url'    => [
                            'url' => '#'
                        ],
                        'btn2_text'    => __( 'See How it Work', 'busicol-companion' ),
                        'btn2_url'    => [
                            'url' => '#'
                        ],
                    ],
                    [      
                        'slider_img'    => [
                            'url'        => Utils::get_placeholder_image_src(),
                        ],
                        'big_text'    => 'Grow Big with <br>Musicol Business',
                        'short_text'    => 'Nam libero tempore, cum soluta nobis est eligendi optio <br>cumque nihil impedit quo minus.',
                        'btn1_text'    => __( 'Our Services', 'busicol-companion' ),
                        'btn1_url'    => [
                            'url' => '#'
                        ],
                        'btn2_text'    => __( 'See How it Work', 'busicol-companion' ),
                        'btn2_url'    => [
                            'url' => '#'
                        ],
                    ],
                ]
            ]
		);
        
        $this->end_controls_section(); // End Hero content


    /**
     * Style Tab
     * ------------------------------ Style Title ------------------------------
     *
     */
        $this->start_controls_section(
			'style_title', [
				'label' => __( 'Style Hero Section', 'busicol-companion' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'big_title_col', [
				'label' => __( 'Title Color', 'busicol-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .slider_area .single_slider .slider_text h3' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'text_col', [
				'label' => __( 'Text Color', 'busicol-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .slider_area .single_slider .slider_text p' => 'color: {{VALUE}};',
				],
			]
        );

        $this->add_control(
            'button_section_separator',
            [
                'label'     => __( 'Button Styles', 'busicol-companion' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        ); 
        $this->add_control(
			'button_col', [
				'label' => __( 'Button Color', 'busicol-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .slider_area .single_slider .slider_text .boxed-btn3' => 'color: {{VALUE}} !important',
				],
			]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_bg_color',
                'label' => __( 'Button BG Color', 'busicol-companion' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .slider_area .single_slider .slider_text .boxed-btn3',
            ]
        );

        $this->add_control(
            'button_hover_section_separator',
            [
                'label'     => __( 'Button Hover Styles', 'busicol-companion' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        ); 
        $this->add_control(
			'button_hover_col', [
				'label' => __( 'Button Hover Color', 'busicol-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .slider_area .single_slider .slider_text .boxed-btn3:hover' => 'color: {{VALUE}} !important; border-color: {{VALUE}};',
				],
			]
        );
        $this->add_control(
			'button_hover_bg_col', [
				'label' => __( 'Button Hover Bg Color', 'busicol-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .slider_area .single_slider .slider_text .boxed-btn3:hover' => 'background: {{VALUE}};',
				],
			]
        );

		$this->end_controls_section();
	}
    
	protected function render() {
    $settings      = $this->get_settings();
    $sliders     = !empty( $settings['sliders'] ) ? $settings['sliders'] : ''; 
    ?>
    
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <?php 
            if( is_array( $sliders ) && count( $sliders ) > 0 ) {
                foreach( $sliders as $item ) {
                    $slider_img = !empty( $item['slider_img']['url'] ) ? $item['slider_img']['url'] : '';
                    $big_text = ( !empty( $item['big_text'] ) ) ? $item['big_text'] : '';
                    $short_text = ( !empty( $item['short_text'] ) ) ? $item['short_text'] : '';
                    $btn1_text = ( !empty( $item['btn1_text'] ) ) ? $item['btn1_text'] : '';
                    $btn1_url = ( !empty( $item['btn1_url']['url'] ) ) ? $item['btn1_url']['url'] : '';
                    $btn2_text = ( !empty( $item['btn2_text'] ) ) ? $item['btn2_text'] : '';
                    $btn2_url = ( !empty( $item['btn2_url']['url'] ) ) ? $item['btn2_url']['url'] : '';
                    ?>
                    <div class="single_slider d-flex align-items-center overlay2" <?php echo busicol_inline_bg_img( esc_url( $slider_img ) ); ?>>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="slider_text ">
                                        <?php 
                                            if ( $big_text ) { 
                                                echo '<h3>'.wp_kses_post( nl2br( $big_text ) ).'</h3>';
                                            }
                                            if ( $short_text ) { 
                                                echo '<p>'.wp_kses_post( nl2br( $short_text ) ).'</p>';
                                            }
                                            if ( $btn1_text || $btn2_text ) { 
                                                echo '<div class="video_service_btn">';
                                                if ( $btn1_text ) { 
                                                    echo '<a href="'.esc_url( $btn1_url ).'" class="boxed-btn3">'.esc_html( $btn1_text ).'</a>';
                                                }
                                                if ( $btn2_text ) { 
                                                    echo '<a href="'.esc_url( $btn2_url ).'" class="boxed-btn3-white"> <i class="fa fa-play"></i> '.esc_html( $btn2_text ).'</a>';
                                                }
                                                echo '</div>';
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
    <!-- slider_area_end -->
    <?php

    } 
}