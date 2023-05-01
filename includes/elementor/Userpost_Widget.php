<?php 
/**
 * Web Testimonial
 *
 * @package           PluginPackage
 * @author            MD Foysal Afridi
 * @copyright         Web
 * @license           GPL-2.0-or-later
 */

/**
 * Elementor Web testimonial Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Webtestimonial_Card_Widget extends \Elementor\Widget_Base {

    /**
     * Get widget name.
     *
     * Retrieve Web testimonial widget name.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget name.
     */
    public function get_name() {
        return 'web-testimonial';
    }

    /**
     * Get widget title.
     *
     * Retrieve Web testimonial widget title.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget title.
     */
    public function get_title() {
        return __( 'Web testimonial', 'userpost' );
    }

    /**
     * Get widget icon.
     *
     * Retrieve Web testimonial widget icon.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget icon.
     */
    public function get_icon() {
        return 'eicon-comments';
    }

    /**
     * Get widget categories.
     *
     * Retrieve the list of categories the Web testimonial widget belongs to.
     *
     * @since 1.0.0
     * @access public
     *
     * @return array Widget categories.
     */
    public function get_categories() {
        return [ 'general' ];
    }

    /**
     * Register Web testimonial widget controls.
     *
     * Adds different input fields to allow the user to change and customize the widget settings.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function _register_controls() {


        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Design', 'userpost' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        $this->add_control('userpost_testimonial_style',
            [
                'label' => esc_html__( 'Style', 'userpost' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => '1',
                'options' => [
                    '1'   => esc_html__( 'Slider Template', 'userpost' ),
                    '2'   => esc_html__( 'Template 2', 'userpost' ),
                    '3'   => esc_html__( 'Template 3', 'userpost' ),
                    '4'   => esc_html__( 'Template 4', 'userpost' ),
                    '5'   => esc_html__( 'Template 5', 'userpost' ),
                    '6'   => esc_html__( 'Template 6', 'userpost' ),
                    '7'   => esc_html__( 'Template 7', 'userpost' ),
                    '8'   => esc_html__( 'Template 8', 'userpost' ),
                    '9'   => esc_html__( 'Template 9', 'userpost' ),
                    '10'   => esc_html__( 'Template 10', 'userpost' ),
                ],
            ]
        );

        $this->add_control('userpost_testimonial_slider',
            [
                'label' => esc_html__( 'Style', 'userpost' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => '1',
                'options' => [
                    '1'   => esc_html__( 'Slider 1', 'userpost' ),
                    '2'   => esc_html__( 'Slider 2', 'userpost' ),
                    '3'   => esc_html__( 'Slider 3', 'userpost' ),
                    '4'   => esc_html__( 'Slider 4', 'userpost' ),
                ],
                'condition' => [
                    'userpost_testimonial_style' =>'1'
                ]
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'layout_section',
            [
                'label' => __( 'Layout', 'userpost' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'userpost_testimonial_style!' =>'1'
                ]
            ]
        );


        $this->add_control('userpost_layout_style',
            [
                'label' => esc_html__( 'Columns', 'userpost' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => '1',
                'options' => [
                    '1'   => esc_html__( '1', 'userpost' ),
                    '2'   => esc_html__( '2', 'userpost' ),
                    '3'   => esc_html__( '3', 'userpost' ),
                    '4'   => esc_html__( '4', 'userpost' ),
                    '5'   => esc_html__( '5', 'userpost' ),
                    '6'   => esc_html__( '6', 'userpost' ),
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'additional_options_section',
            [
                'label' => __( 'Additional Options', 'userpost' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        $this->add_control(
            'show_title',
            [
                'label' => __( 'Show Title', 'userpost' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Show', 'userpost' ),
                'label_off' => __( 'Hide', 'userpost' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'show_excerpt',
            [
                'label' => __( 'Show Excerpt', 'userpost' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Show', 'userpost' ),
                'label_off' => __( 'Hide', 'userpost' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'show_Position',
            [
                'label' => __( 'Show Position', 'userpost' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Show', 'userpost' ),
                'label_off' => __( 'Hide', 'userpost' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]

        );
        $this->add_control(
            'show_image',
            [
                'label' => __( 'Show Image', 'userpost' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Show', 'userpost' ),
                'label_off' => __( 'Hide', 'userpost' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]

        );
        $this->add_control(
            'show_quote',
            [
                'label' => __( 'Show Quote', 'userpost' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Show', 'userpost' ),
                'label_off' => __( 'Hide', 'userpost' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]

        );
        $this->add_control(
            'show_ratings',
            [
                'label' => __( 'Show Ratings', 'userpost' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Show', 'userpost' ),
                'label_off' => __( 'Hide', 'userpost' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]

        );

        $this->end_controls_section();
/*==========================================================================
    Web Testimonials Slider setting
============================================================================*/
        $this->start_controls_section(
            'userpost-slider-option',
            [
                'label' => esc_html__( 'Slider Option', 'userpost' ),
                'condition' => [
                    'userpost_testimonial_style' =>'1'
                ]
            ]
        );
        $this->add_control(
            'slider_on',
            [
                'label' => esc_html__( 'Slider', 'userpost' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default' => 'yes',
                'separator'=>'before',
            ]
        );
        $this->add_control(
            'userpost_slider_items',
            [
                'label' => esc_html__( 'Slider Items', 'userpost' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 10,
                'step' => 1,
                'default' => 1,
                'condition' => [
                    'slider_on' => 'yes',
                ]
            ]
        );
        $this->add_control(
                'userpost_arrows',
                [
                    'label' => esc_html__( 'Slider Arrow', 'userpost' ),
                    'type' => \Elementor\Controls_Manager::SWITCHER,
                    'return_value' => 'yes',
                    'default' => 'yes',
                    'condition' => [
                        'slider_on' => 'yes',
                    ]
                ]
            );

            $this->add_control(
                'userpost_previcon',
                [
                    'label' => esc_html__( 'Previous icon', 'userpost' ),
                    'type' => \Elementor\Controls_Manager::ICONS,
                    'default' => [
                        'value'=>'fas fa-angle-left',
                        'library'=>'solid',
                    ],
                    'condition' => [
                        'slider_on' => 'yes',
                        'userpost_arrows' => 'yes',
                    ]
                ]
            );

            $this->add_control(
                'userpost_nexticon',
                [
                    'label' => esc_html__( 'Next icon', 'userpost' ),
                    'type' => \Elementor\Controls_Manager::ICONS,
                    'default' => [
                        'value'=>'fas fa-angle-right',
                        'library'=>'solid',
                    ],
                    'condition' => [
                        'slider_on' => 'yes',
                        'userpost_arrows' => 'yes',
                    ]
                ]
            );
            $this->add_control(
                'userpost_dots',
                [
                    'label' => esc_html__( 'Slider dots', 'userpost' ),
                    'type' => \Elementor\Controls_Manager::SWITCHER,
                    'return_value' => 'yes',
                    'default' => 'no',
                    'condition' => [
                        'slider_on' => 'yes',
                    ]
                ]
            );
            $this->add_control(
                'userpost_on_hover',
                [
                    'label' => esc_html__( 'Pause on Hover?', 'userpost' ),
                    'type' => \Elementor\Controls_Manager::SWITCHER,
                    'return_value' => 'yes',
                    'default' => 'no',
                    'condition' => [
                        'slider_on' => 'yes',
                    ]
                ]
            );

            $this->add_control(
                'userpost_autoplay',
                [
                    'label' => esc_html__( 'Slider auto play', 'userpost' ),
                    'type' => \Elementor\Controls_Manager::SWITCHER,
                    'return_value' => 'yes',
                    'separator' => 'before',
                    'default' => 'no',
                    'condition' => [
                        'slider_on' => 'yes',
                    ]
                ]
            );

            $this->add_control(
                'userpost_autoplay_speed',
                [
                    'label' => esc_html__('Autoplay speed', 'userpost'),
                    'type' => \Elementor\Controls_Manager::NUMBER,
                    'default' => 3000,
                    'condition' => [
                        'userpost_autoplay' => 'yes',
                    ]
                ]
            );

            $this->add_control(
                'userpost_animation_speed',
                [
                    'label' => esc_html__('Autoplay animation speed', 'userpost'),
                    'type' => \Elementor\Controls_Manager::NUMBER,
                    'default' => 300,
                    'condition' => [
                        'userpost_autoplay_speed' => 'yes',
                    ]
                ]
            );


            $this->add_control(
                'userpost_centermode',
                [
                    'label' => esc_html__( 'Center Mode', 'userpost' ),
                    'type' => \Elementor\Controls_Manager::SWITCHER,
                    'return_value' => 'yes',
                    'default' => 'no',
                    'condition' => [
                        'slider_on' => 'yes',
                    ]
                ]
            );


            $this->add_control(
                'userpost_heading_tablet',
                [
                    'label' => esc_html__( 'Tablet', 'userpost' ),
                    'type' => \Elementor\Controls_Manager::HEADING,
                    'separator' => 'after',
                    'condition' => [
                        'slider_on' => 'yes',
                    ]
                ]
            );
            $this->add_control(
                'userpost_tablet_item',
                [
                    'label' => esc_html__('Slider Items', 'userpost'),
                    'type' => \Elementor\Controls_Manager::NUMBER,
                    'min' => 1,
                    'max' => 8,
                    'step' => 1,
                    'default' => 1,
                    'condition' => [
                        'slider_on' => 'yes',
                    ]
                ]
            );
            $this->add_control(
                'userpost_heading_mobile',
                [
                    'label' => esc_html__( 'Mobile', 'userpost' ),
                    'type' => \Elementor\Controls_Manager::HEADING,
                    'separator' => 'after',
                    'condition' => [
                        'slider_on' => 'yes',
                    ]
                ]
            );
            $this->add_control(
                'userpost_mobile_items',
                [
                    'label' => esc_html__('Slider Items', 'userpost'),
                    'type' => \Elementor\Controls_Manager::NUMBER,
                    'min' => 1,
                    'max' => 8,
                    'step' => 1,
                    'default' => 1,
                    'condition' => [
                        'slider_on' => 'yes',
                    ]
                ]
            );
        $this->end_controls_section();
/*==========================================================================
    Web Testimonials Content
============================================================================*/

        $this->start_controls_section(
            'userpost_content',
            [
                'label' => esc_html__( 'Content', 'userpost' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'userpost_content_align',
            [
                'label' => esc_html__( 'Alignment', 'abtestimonial' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => esc_html__( 'Left', 'abtestimonial' ),
                        'icon' => 'fa fa-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__( 'Center', 'abtestimonial' ),
                        'icon' => 'fa fa-align-center',
                    ],
                    'right' => [
                        'title' => esc_html__( 'Right', 'abtestimonial' ),
                        'icon' => 'fa fa-align-right',
                    ],
                    'justify' => [
                        'title' => esc_html__( 'Justified', 'abtestimonial' ),
                        'icon' => 'fa fa-align-justify',
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .userpost-list' => 'text-align: {{VALUE}};',
                ],
                'default' => 'center',
                'separator' =>'before',
            ]
        );
        $this->add_responsive_control(
                'userpost_section_margin',
                [
                    'label' => esc_html__( 'Margin', 'userpost' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .userpost-list' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'separator' =>'before',
                ]
            );

            $this->add_responsive_control(
                'userpost_section_padding',
                [
                    'label' => esc_html__( 'Padding', 'userpost' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .userpost-list' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'separator' =>'before',
                ]
            );

            $this->add_responsive_control(
                'userpost_section_border_radius',
                [
                    'label' => esc_html__( 'Border Radius', 'userpost' ),
                    'type' =>\Elementor\Controls_Manager::DIMENSIONS,
                    'selectors' => [
                        '{{WRAPPER}} .userpost-list' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                    ],
                ]
            );

        $this->end_controls_section();
/*==========================================================================
    Web Testimonials Color
============================================================================*/

        $this->start_controls_section(
            'userpost_testimonial_text_color',
            [
                'label' => esc_html__( 'Text Color', 'userpost' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'userpost' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'scheme' => [
                    'type' => \Elementor\Core\Schemes\Color::get_type(),
                    'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'selectors' => [
                    '{{WRAPPER}} .title' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'excerpt_color',
            [
                'label' => __( 'Excerpt', 'userpost' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'scheme' => [
                    'type' => \Elementor\Core\Schemes\Color::get_type(),
                    'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'selectors' => [
                    '{{WRAPPER}} .excerpt' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'position_color',
            [
                'label' => __( 'Position', 'userpost' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'scheme' => [
                    'type' => \Elementor\Core\Schemes\Color::get_type(),
                    'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'selectors' => [
                    '{{WRAPPER}} .position' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
/*==========================================================================
    Web Testimonials Style
============================================================================*/
        
        /*==========================================================================
            background
        ============================================================================*/


        $this->start_controls_section(
            'appbuff_testimonial_style_area',
            [
                'label' => esc_html__( 'Background', 'userpost' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );


        $this->start_controls_tabs( 'testimonial_background_style_tabs' );

            // Normal tab Start
            $this->start_controls_tab(
                'testimonial_background_style_normal_tab',
                [
                    'label' => esc_html__( 'Normal', 'userpost' ),
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Background::get_type(),
                [
                    'name' => 'background',
                    'label' => __( 'Background', 'userpost' ),
                    'types' => [ 'classic', 'gradient', 'video' ],
                    'selector' => '{{WRAPPER}} .userpost-list',
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'border',
                    'label' => __( 'Border', 'userpost' ),
                    'selector' => '{{WRAPPER}} .userpost-list',
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Box_Shadow::get_type(),
                [
                    'name' => 'box_shadow',
                    'label' => __( 'Box Shadow', 'userpost' ),
                    'selector' => '{{WRAPPER}} .userpost-list',
                ]
            );
            $this->add_responsive_control(
                'testimonial_background_border_radius',
                [
                    'label' => esc_html__( 'Border Radius', 'userpost' ),
                    'type' =>\Elementor\Controls_Manager::DIMENSIONS,
                    'selectors' => [
                        '{{WRAPPER}} .userpost-list' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                    ],
                ]
            );
            $this->end_controls_tab(); 

            /*==========================================================================
                Hover tab Start
            ============================================================================*/

            $this->start_controls_tab(
                'testimonial_background_style_hover_tab',
                [
                    'label' => esc_html__( 'Hover', 'userpost' ),
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Background::get_type(),
                [
                    'name' => 'testimonial_background_hover_background',
                    'label' => esc_html__( 'Background', 'userpost', 'video'),
                    'types' => [ 'classic', 'gradient' ],
                    'selector' => '{{WRAPPER}} .userpost-list:hover',
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'testimonial_background_hover_border',
                    'label' => esc_html__( 'Border', 'userpost' ),
                    'selector' => '{{WRAPPER}} .userpost-list:hover',
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Box_Shadow::get_type(),
                [
                    'name' => 'box_hover_shadow',
                    'label' => __( 'Box Shadow', 'userpost' ),
                    'selector' => '{{WRAPPER}} .userpost-list:hover',
                ]
            );
            $this->add_responsive_control(
                'testimonial_background_hover_border_radius',
                [
                    'label' => esc_html__( 'Border Radius', 'userpost' ),
                    'type' =>\Elementor\Controls_Manager::DIMENSIONS,
                    'selectors' => [
                        '{{WRAPPER}} .userpost-list:hover' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                    ],
                ]
            );

            $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        /*==========================================================================
            typography
        ============================================================================*/

        $this->start_controls_section(
            'testimonial_text_style',
            [
                'label'     => esc_html__( 'Typography', 'userpost' ),
                'tab'       => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );


        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'label' => __( 'Title', 'userpost' ),
                'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
                'selector' => '{{WRAPPER}} .title',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'excerpt_typography',
                'label' => __( 'Excerpt', 'userpost' ),
                'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
                'selector' => '{{WRAPPER}} .excerpt',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'position_typography',
                'label' => __( 'Position', 'userpost' ),
                'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
                'selector' => '{{WRAPPER}} .position',
            ]
        );
            
        $this->add_group_control(
            \Elementor\Group_Control_Text_Shadow::get_type(),
            [
                'name' => 'text_shadow',
                'label' => __( 'Text Shadow', 'userpost' ),
                'selector' => '{{WRAPPER}} .wrapper',
            ]
        );

        $this->end_controls_section();


        /*==========================================================================
            arrow style
        ============================================================================*/

        /*==========================================================================
            normal arrow style
        ============================================================================*/
        $this->start_controls_section(
            'testimonial_arrow_style',
            [
                'label'     => esc_html__( 'Arrow', 'userpost' ),
                'tab'       => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' =>[
                    'slider_on' => 'yes',
                    'userpost_arrows'  => 'yes',
                ],
            ]
        );
            
        $this->start_controls_tabs( 'testimonial_arrow_style_tabs' );

                // Normal tab Start
        $this->start_controls_tab(
            'testimonial_arrow_style_normal_tab',
            [
                'label' => esc_html__( 'Normal', 'userpost' ),
            ]
        );

        $this->add_control(
            'testimonial_arrow_color',
            [
                'label' => esc_html__( 'Color', 'userpost' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'scheme' => [
                    'type' => \Elementor\Core\Schemes\Color::get_type(),
                    'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#7d7d7d',
                'selectors' => [
                    '{{WRAPPER}} .testimonial button i' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'testimonial_arrow_fontsize',
            [
                'label' => esc_html__( 'Font Size', 'userpost' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 20,
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial button i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'testimonial_arrow_background',
                'label' => esc_html__( 'Background', 'userpost' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .testimonial button i',
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'testimonial_arrow_border',
                'label' => esc_html__( 'Border', 'userpost' ),
                'selector' => '{{WRAPPER}} .testimonial button i',
            ]
        );

        $this->add_responsive_control(
            'testimonial_arrow_border_radius',
            [
                'label' => esc_html__( 'Border Radius', 'userpost' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'selectors' => [
                    '{{WRAPPER}} .testimonial button i' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                ],
            ]
        );

        $this->add_control(
            'testimonial_arrow_height',
            [
                'label' => esc_html__( 'Height', 'userpost' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 36,
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial button i' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'testimonial_arrow_width',
            [
                'label' => esc_html__( 'Width', 'userpost' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 36,
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial button i' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'testimonial_arrow_padding',
            [
                'label' => esc_html__( 'Padding', 'userpost' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial button i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'separator' =>'before',
            ]
        );
        $this->end_controls_tab(); 

        /*==========================================================================
            Hover tab Start
        ============================================================================*/

        $this->start_controls_tab(
            'testimonial_arrow_style_hover_tab',
            [
                'label' => esc_html__( 'Hover', 'userpost' ),
            ]
        );

        $this->add_control(
            'testimonial_arrow_hover_color',
            [
                'label' => esc_html__( 'Color', 'userpost' ),
                'type' =>\Elementor\Controls_Manager::COLOR,
                'scheme' => [
                    'type' => \Elementor\Core\Schemes\Color::get_type(),
                    'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#ffffff',
                'selectors' => [
                    '{{WRAPPER}} .testimonial button i:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'testimonial_arrow_hover_background',
                'label' => esc_html__( 'Background', 'userpost' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .testimonial button i:hover',
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'testimonial_arrow_hover_border',
                'label' => esc_html__( 'Border', 'userpost' ),
                'selector' => '{{WRAPPER}} .testimonial button i:hover',
            ]
        );

        $this->add_responsive_control(
            'testimonial_arrow_hover_border_radius',
            [
                'label' => esc_html__( 'Border Radius', 'userpost' ),
                'type' =>\Elementor\Controls_Manager::DIMENSIONS,
                'selectors' => [
                    '{{WRAPPER}} .testimonial button i:hover' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                ],
            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();
    $this->end_controls_section();
        /*==========================================================================
            Quote style
        ============================================================================*/

        /*==========================================================================
            normal quote style
        ============================================================================*/
        $this->start_controls_section(
            'testimonial_quote_style',
            [
                'label'     => esc_html__( 'Quote', 'userpost' ),
                'tab'       => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' =>[
                    'show_quote'  => 'yes',
                ],
            ]
        );
            
        $this->start_controls_tabs( 'testimonial_quote_style_tabs' );

                // Normal tab Start
        $this->start_controls_tab(
            'testimonial_quote_style_normal_tab',
            [
                'label' => esc_html__( 'Normal', 'userpost' ),
            ]
        );

        $this->add_control(
            'testimonial_quote_color',
            [
                'label' => esc_html__( 'Color', 'userpost' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'scheme' => [
                    'type' => \Elementor\Core\Schemes\Color::get_type(),
                    'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#fcb002',
                'selectors' => [
                    '{{WRAPPER}} .userpost p.quote-icon' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'testimonial_quote_fontsize',
            [
                'label' => esc_html__( 'Font Size', 'userpost' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 20,
                ],
                'selectors' => [
                    '{{WRAPPER}} .userpost p.quote-icon' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_tab(); 

        /*==========================================================================
            Hover tab Start
        ============================================================================*/

            $this->start_controls_tab(
                'testimonial_quote_style_hover_tab',
                [
                    'label' => esc_html__( 'Hover', 'userpost' ),
                ]
            );

            $this->add_control(
                'testimonial_quote_hover_color',
                [
                    'label' => esc_html__( 'Color', 'userpost' ),
                    'type' =>\Elementor\Controls_Manager::COLOR,
                    'scheme' => [
                        'type' => \Elementor\Core\Schemes\Color::get_type(),
                        'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .userpost p.quote-icon:hover' => 'color: {{VALUE}};',
                    ],
                ]
            );
            $this->end_controls_tab();
        $this->end_controls_tabs();

    $this->end_controls_section();
    /*==========================================================================
            Ratings style
        ============================================================================*/

        /*==========================================================================
            normal Ratings style
        ============================================================================*/
        $this->start_controls_section(
            'testimonial_ratings_style',
            [
                'label'     => esc_html__( 'Ratings', 'userpost' ),
                'tab'       => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' =>[
                    'show_ratings'  => 'yes',
                ],
            ]
        );
            
        $this->start_controls_tabs( 'testimonial_ratings_style_tabs' );

                // Normal tab Start
        $this->start_controls_tab(
            'testimonial_ratings_style_normal_tab',
            [
                'label' => esc_html__( 'Normal', 'userpost' ),
            ]
        );

        $this->add_control(
            'testimonial_ratings_color',
            [
                'label' => esc_html__( 'Color', 'userpost' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'scheme' => [
                    'type' => \Elementor\Core\Schemes\Color::get_type(),
                    'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#fcb002',
                'selectors' => [
                    '{{WRAPPER}} .userpost_star_wrapper i' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'testimonial_ratings_fontsize',
            [
                'label' => esc_html__( 'Font Size', 'userpost' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 20,
                ],
                'selectors' => [
                    '{{WRAPPER}} .userpost_star_wrapper i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_tab(); 

        /*==========================================================================
            Hover tab Start
        ============================================================================*/

            $this->start_controls_tab(
                'testimonial_ratings_style_hover_tab',
                [
                    'label' => esc_html__( 'Hover', 'userpost' ),
                ]
            );

            $this->add_control(
                'testimonial_ratings_hover_color',
                [
                    'label' => esc_html__( 'Color', 'userpost' ),
                    'type' =>\Elementor\Controls_Manager::COLOR,
                    'scheme' => [
                        'type' => \Elementor\Core\Schemes\Color::get_type(),
                        'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                    ],
                    'default' => '#ffffff',
                    'selectors' => [
                        '{{WRAPPER}} .userpost_star_wrapper i:hover' => 'color: {{VALUE}};',
                    ],
                ]
            );
            $this->end_controls_tab();
        $this->end_controls_tabs();

    $this->end_controls_section();

    }

    /**
     * Render Web testimonial widget output on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function render() {

        $settings = $this->get_settings_for_display();
        $args = array("post_type" => "userpost");
        $testimonials_query = new WP_Query( $args );
        
        require_once( plugin_dir_path( __FILE__ ) . '../template/user-post.php'); 
        
    }
}