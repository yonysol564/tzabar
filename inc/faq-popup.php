<?php

  $faq_ask = get_field('faq_ask', 'option');
  $faq_fullname = get_field('faq_placeholder_fullname', 'option');
  $faq_email = get_field('faq_placeholder_email', 'option');
  $faq_phone = get_field('faq_placeholder_phone', 'option');
  $faq_approve_terms = get_field('faq_approve_terms', 'option');
  $faq_important = get_field('faq_important', 'option');
  $faq_important_age = get_field('faq_important_age', 'option');
  $faq_important_gender = get_field('faq_important_gender', 'option');
  $faq_important_clinic_bg = get_field('faq_important_clinic_bg', 'option');
  $faq_privacy = get_field('faq_privacy', 'option');
  $faq_privacy_con = get_field('faq_privacy_con', 'option');

  $args = array(
        'post_type' => 'care',
        'orderby'   => 'title',
        'order'     => 'ASC',
        'posts_per_page' => -1,
     );

  $cares = new WP_Query($args);
?>
<div class="pop_up modal fade">
    <div class="title"><?php echo $faq_ask; ?></div>
      <form id="file_form" method="post" action="">
        <div class="pop_ut_top">

        	<input name="fullname" id="fullname" type="text" class="field1" placeholder="<?php echo esc_attr($faq_fullname); ?>"/>
            <input name="email" id="email" type="email" class="field1" placeholder="<?php echo esc_attr($faq_email); ?>"/>
            <input name="phone" id="phone" type="text" class="field1 no_mar" placeholder="<?php echo esc_attr($faq_phone); ?>"/>

            <input type="text" name="subject"  id="subject" class="select_sec" placeholder="נושא">

            <select class="field1 no_mar" name="cat_choose" id="cat_choose">
              <?php while ($cares->have_posts()) : $cares->the_post(); ?>
                      <option data-name="<?php the_title(); ?>" value="<?php echo $post->ID; ?>"><?php the_title(); ?></option>
              <?php endwhile; ?>
            </select>

            <div class="clear"></div>

            <textarea name="question" id="question" class="fmsg1" rows="2" cols="2" placeholder="כתוב שאלה"></textarea>

            <div class="clear"></div>

            <div class="upload_photo"><a href="#" class="upload_in"><span id="after_change">צרף תמונה</span></a></div>
            <div class="hidden_input_file">
              <input type="file" id="file_upload" name="file_upload">
            </div>

            <div class="check_bg">
                <label class="check1">
                  <input class="check_in" type="checkbox"  name="CheckboxGroup1" value="checkbox" id="CheckboxGroup1_0" />
                  <?php echo $faq_approve_terms; ?>
                </label>
                <a href="#" title="ssd" class="submit2 send_faq init_ajax_faq" /><?php echo $faq_ask; ?></a>

                <div class="hidden_submit"><input class="trigger_submit" type="submit"></div>
              <div class="clear"></div>
              <div class="faq_loader"><img src="<?php echo THEME_DIR; ?>/images/loader.gif" title="" alt=""></div>
            </div>
        </div>
      </form>

      <div class="details_prsn">
        	<div class="right">
            	<div class="title2"><?php echo $faq_important; ?></div>
                <div class="list2"><?php echo $faq_important_age; ?></div>
                <div class="list2"><?php echo $faq_important_gender; ?></div>
                <div class="list2"><?php echo $faq_important_clinic_bg; ?></div>
          </div>
          <div class="left">
            	<div class="title2"><?php echo $faq_privacy; ?></div>
                <div class="cont"><?php echo $faq_privacy_con; ?></div>
          </div>
          <div class="clear"></div>
      </div>
</div>
