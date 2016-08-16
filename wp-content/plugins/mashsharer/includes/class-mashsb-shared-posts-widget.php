<?php

/**
 * Most shared posts widget class
 * package MASHSB
 * 
 * @since 3.0.0
 *
 */
class mashsb_mostshared_posts_widget extends WP_Widget {

    function __construct() {
        parent::__construct( false, $name = __( 'Mashshare - Most Shared Posts', 'mashsb' ) );
    }

    public function form( $instance ) {
        if( $instance ) {
            $title = esc_attr( $instance['title'] );
            $count = esc_attr( $instance['count'] );
            $showShares = esc_textarea( $instance['showShares'] );
            $countLabel = esc_textarea( $instance['countLabel'] );
            //$separator = esc_textarea( $instance['separator'] ); // Maybe use this later if there is need
            $wrapShares = esc_textarea( $instance['wrapShares'] );
            $period = esc_textarea( $instance['period'] );
        } else {
            $title = 'Most Shared Posts';
            $count = '10';
            $showShares = 'true';
            $countLabel = 'Shares';
            //$separator = '|';
            $wrapShares = 'false';
            $period = '7';
        }
        ?>

        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Widget Title', 'mashsb' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" />
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'count' ); ?>"><?php _e( 'How many posts to display?', 'mashsb' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'count' ); ?>" name="<?php echo $this->get_field_name( 'count' ); ?>" type="number" value="<?php echo $count; ?>" min="0" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'showShares' ); ?>"><?php _e( 'Show Shares? Say "No" when using fake shares!', 'mashsb' ); ?></label>
            <select class="widefat" id="<?php echo $this->get_field_id( 'showShares' ); ?>" name="<?php echo $this->get_field_name( 'showShares' ); ?>">
                <option value="true" <?php if( $showShares === 'true' ) echo 'selected'; ?>>Yes</option>
                <option value="false" <?php if( $showShares === 'false' ) echo 'selected'; ?>>No</option>
            </select>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'countLabel' ); ?>"><?php _e( 'Share Count Label', 'mashsb' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'countLabel' ); ?>" name="<?php echo $this->get_field_name( 'countLabel' ); ?>" type="text" value="<?php echo $countLabel; ?>" />
        </p>
        <!--<p>
            <label for="<?php //echo $this->get_field_id( 'separator' ); ?>"><?php //_e( 'Share Count Separator', 'mashsb' ); ?></label>
            <input class="widefat" id="<?php //echo $this->get_field_id( 'separator' ); ?>" name="<?php //echo $this->get_field_name( 'separator' ); ?>" type="text" value="<?php //echo $separator; ?>" />
        </p>//-->
        <p>
            <label for="<?php echo $this->get_field_id( 'wrapShares' ); ?>"><?php _e( 'Show shares below post title', 'mashsb' ); ?></label>
            <select class="widefat" id="<?php echo $this->get_field_id( 'wrapShares' ); ?>" name="<?php echo $this->get_field_name( 'wrapShares' ); ?>">
                <option value="true" <?php if( $wrapShares === 'true' ) echo 'selected'; ?>>Yes</option>
                <option value="false" <?php if( $wrapShares === 'false' ) echo 'selected'; ?>>No</option>
            </select>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'period' ); ?>"><?php _e( 'Time period and age of posts', 'mashsb' ); ?></label>
            <select class="widefat" id="<?php echo $this->get_field_id( 'period' ); ?>" name="<?php echo $this->get_field_name( 'period' ); ?>">
                <option value="7" <?php if( $period === '7' ) echo 'selected'; ?>>7 Days</option>
                <option value="7" <?php if( $period === '14' ) echo 'selected'; ?>>14 Days</option>
                <option value="30" <?php if( $period === '30' ) echo 'selected'; ?>>1 Month</option>
                <option value="90" <?php if( $period === '90' ) echo 'selected'; ?>>3 Months</option>
                <option value="180" <?php if( $period === '180' ) echo 'selected'; ?>>6 Months</option>
                <option value="365" <?php if( $period === '365' ) echo 'selected'; ?>>1 Year</option>
            </select>
        </p>

        <?php
    }

    // update the widget
    public function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = strip_tags( $new_instance['title'] );
        $instance['count'] = strip_tags( $new_instance['count'] );
        $instance['showShares'] = strip_tags( $new_instance['showShares'] );
        $instance['countLabel'] = strip_tags( $new_instance['countLabel'] );
        //$instance['separator'] = strip_tags( $new_instance['separator'] );
        $instance['wrapShares'] = strip_tags( $new_instance['wrapShares'] );
        $instance['period'] = strip_tags( $new_instance['period'] );
        return $instance;
    }

    // display widget
    public function widget( $args, $instance ) {

        // extract widget options
        extract( $args );
        $title = apply_filters( 'widget_title', $instance['title'] );
        $count = $instance['count'];
        $showShares = $instance['showShares'];
        $countLabel = $instance['countLabel'];
        //$separator = $instance['separator'];
        $wrapShares = $instance['wrapShares'];
        $period = $instance['period'];

        $break = $wrapShares === 'true' ? '</br>' : '';

        echo '<!-- MashShare Most Popular Widget //-->';
        echo $before_widget;
        // Display the widget
        // Check if title is set
        if( $title ) {
            echo $before_title . $title . $after_title;
        }

        // Check if text is set
        $args = array(
            'posts_per_page' => $count,
            'post_type' => 'post',
            'post_status' => 'publish',
            'meta_key' => 'mashsb_shares',
            'orderby' => 'meta_value_num',
            'order' => 'DESC',
            'date_query' => array(
                array(
                    'after' => $period . ' days ago', // or '-7 days'
                    'inclusive' => true,
                ),
            ),
        );
        //$wpq = new WP_Query( $args );
        $wpq = $this->get_qry_from_cache($args);
        //var_dump($wpq);
        if( $wpq->have_posts() ) :
            echo '<ul>';
            while ( $wpq->have_posts() ):
                $wpq->the_post();
                if( $showShares === 'true' ):
                    $shares = get_post_meta( get_the_ID(), 'mashsb_shares', true ) + getFakecount();
                    echo '<li><a class="mashsb-widget-link" href="' . get_the_permalink() . '">' . get_the_title() . $break . ' <span class="mashicon-share icon">' . roundshares( $shares ) . ' ' . $countLabel . '</span></a></li>';
                else:
                    echo '<li><a class="mashsb-widget-link" href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
                endif;
            endwhile;
            echo '</ul>';
        endif;
        wp_reset_postdata();
        echo $after_widget;
        echo '<!-- MashShare Most Popular Widget End //-->';
    }
    
    /**
     * Get and store query from transient
     * 
     * @param array $args
     * @return \WP_Query
     */
    public function get_qry_from_cache( $args ) {
        $expiration = mashsb_get_expiration();

        if (MASHSB_DEBUG){
        delete_transient('mashwidget_' . md5( json_encode( $args ) )); // debug
        }
        
        if( false === ( $qry = get_transient( 'mashwidget_' . md5( json_encode( $args ) ) ) ) ) {
            $wpq = new WP_Query( $args );
            set_transient( 'mashwidget_' . md5( json_encode( $args ) ), $wpq, $expiration );
            return $wpq;
        } else {
            return $qry;
        }
    }

}

/* Register Widget */
function mashsb_register_widget() {
    register_widget( 'mashsb_mostshared_posts_widget' );
}
add_action( 'widgets_init', 'mashsb_register_widget' );
