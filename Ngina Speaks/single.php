 <?php get_header(); 
  
while (have_posts()) {
  the_post();


 ?>
<div id="page">
 
  <div class="page-content">
    <div class="content-area">
      <main class="page-main" role="main">
        <article class="post">
          <h1 class="page-title"><?php the_title(); ?></h1>
          <div class="page-meta">
            <span class="posted-on"> <?php the_time('F j, Y'); ?> </span>
           
          
          </div>
          <div class="page-meta">
            <span class="posted-by"> <?php the_author(); ?> </span>
          </div>
            
          <div class="post-thumbnail">
                          <img src="<?php echo get_the_post_thumbnail_url( get_the_ID()); ?>" alt="blog1">
                      </div>
          <div class="page-content">
          
            <p><?php the_content(); ?></p>
          </div>
          <div class="page-footer">
            <p>Category: <a href="#"><?php the_category(', '); ?></a> 
          </div>
        </article>
       
          <div class="comment-respond">
          
            <?php 
         $fields = array(
      
      'author' =>
        '<div class="form-group"><label for="author">' . __( 'Name', 'domainreference' ) . '</label> <span class="required">*</span> <input id="author" name="author" type="text" class="form-control" required="required"  /></div>',
        
     'email' =>
        '<div class="form-group"><label for="email">' . __( 'Email', 'domainreference' ) . '</label> <span class="required">*</span><input id="email" name="email" class="form-control" type="text"  required="required" /></div>',
    
        
    );
    
    $args = array(
      'class_submit' => 'button',
      'label_submit' => __( 'Submit' ),
      
      'comment_field' =>
        '<div class="form-group"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label> <span class="required">*</span><textarea id="comment" class="form-control" name="comment" rows="4" required="required"></textarea></p>',
      'fields' => apply_filters( 'comment_form_default_fields', $fields )
      
    );
    
    comment_form( $args ); 
    
  
  

              $comments_number = get_comments_number();
              if($comments_number != 0){
                ?>

           <div class="comments-area">
          <h2 class="comment-title">What Others Are Saying</h2>
          <ul class="comment-list">
                 <?php 
                 $comments = get_comments(array(
                    'post_id' => $post->ID,
                    'status' => 'approve'



                 ));
                 wp_list_comments(array(
                  'per_page' => 15

                 ), $comments)

                  ?>        
          </ul>
              <?php } ?>
           
          </div>
        </div>


      <div class="nav-links">
    
      </div>
    </div>
  </div>
  
</div>


   



<?php  } ?>

<?php get_footer(); ?>