<?php
/**
 * Plugin Name: PDN ShortCode
 * Plugin URI: https://italazhar.com
 * Description: Widget shortcode fleksibel (default Instagram Gallery).
 * Version: 1.1.0
 * Author: Pudin Saepudin
 * Author URI: https://italazhar.com
 * License: GPL2
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class PDN_Shortcode_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'pdn_shortcode_widget',
            'PDN ShortCode',
            array(
                'description' => 'Menampilkan shortcode yang bisa diatur dari widget.'
            )
        );
    }

    // FRONTEND
    public function widget( $args, $instance ) {

        $title     = ! empty( $instance['title'] ) ? $instance['title'] : '';
        $shortcode = ! empty( $instance['shortcode'] ) ? $instance['shortcode'] : '[insta-gallery id="0"]';

        echo $args['before_widget'];
        ?>

        <div class="pdn-widget section-wrapper scholarship-widget-wrapper">
            <div class="pdn-container mt-container">

                <?php if ( $title ) : ?>
                    <div class="pdn-title-wrapper section-title-wrapper clearfix">
                        <?php
                            echo $args['before_title'];
                            echo esc_html( $title );
                            echo $args['after_title'];
                        ?>
                    </div>
                <?php endif; ?>

                <div class="pdn-content mt-container">
                    <?php echo do_shortcode( wp_kses_post( $shortcode ) ); ?>
                </div>

            </div>
        </div>

        <?php
        echo $args['after_widget'];
    }


    // FORM ADMIN
    public function form( $instance ) {

        $title     = ! empty( $instance['title'] ) ? $instance['title'] : '';
        $shortcode = ! empty( $instance['shortcode'] ) ? $instance['shortcode'] : '[insta-gallery id="0"]';
        ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>">
                Judul Widget:
            </label>
            <input
                class="widefat"
                id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"
                name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>"
                type="text"
                value="<?php echo esc_attr( $title ); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'shortcode' ) ); ?>">
                Shortcode:
            </label>
            <textarea
                class="widefat"
                rows="4"
                id="<?php echo esc_attr( $this->get_field_id( 'shortcode' ) ); ?>"
                name="<?php echo esc_attr( $this->get_field_name( 'shortcode' ) ); ?>"
            ><?php echo esc_textarea( $shortcode ); ?></textarea>
        </p>
        <?php
    }

    // SIMPAN DATA
    public function update( $new_instance, $old_instance ) {

        $instance = array();
        $instance['title']     = sanitize_text_field( $new_instance['title'] );
        $instance['shortcode'] = wp_kses_post( $new_instance['shortcode'] );

        return $instance;
    }
}

// Register widget
function pdn_register_shortcode_widget() {
    register_widget( 'PDN_Shortcode_Widget' );
}
add_action( 'widgets_init', 'pdn_register_shortcode_widget' );
