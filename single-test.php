<?php
/**
 * The Template for displaying all single class 'posts'. This is for CPT fka_classes
 */

/*  ******   Custom Field Terms  ******* */


								


get_header(); ?>
<div class="page-wrap">
    <div id="content-container" class="container">
		<div class="row">
			<div class="post-content col-sm-8">
				<?php /* The loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php // get_template_part( 'content', get_post_format() ); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header class-header">
							<h1 class="entry-title class-title"><?php the_title(); ?></h1>
							<div class="entry-meta class-meta">
								<?php edit_post_link( __( 'Edit'), '<span class="edit-link">', '</span>' ); ?>
							</div><!-- .entry-meta -->
						</header><!-- .entry-header -->
						<div class="entry-content class-content">
							<p><?php the_field('class_day'); ?></p>
							<p><?php the_field('price'); ?></p>
							<p>Start: <?php the_field('class_start_time'); ?> End: <?php the_field('class_end_time'); ?></p>
							<p>

								<?php 
								$school_obj = get_field('school_name');
								$school_name = apply_filters( '', $school_obj->post_title );
								echo $school_name;
								?>
							</p>
							<p><?php the_field('class_description'); ?></p>
							<?php
								$rows = get_field('sessions');
								// echo '<pre>';print_r($rows);exit;

									if($rows)
									{
										//start counters 
										$row_count = 0;
										$column_count = 0;

										
										$field = get_field_object('sessions');
										$field_label = $field['label'];
										$field_name = $field['name'];
										// echo '<pre>';print_r($field);exit;
										?>
										<table class="<?php echo $field_name; ?>">
											<tr>
												<th><?php echo $field_label; ?></th>
											</tr>
										<?php 
										foreach($rows as $row)
										{
											//count for css classes
											$row_count++;
											$column_count++;
											// echo '<pre>';print_r($row_count);exit;

											//get field object name for css classes
											$session_name_obj = get_field_object('session_name');
											$session_name_field_name = $session_name_obj['name'];

											//start date
											$st_date_obj = get_field_object('session_start_date');
											$s_date_field_name = $st_date_obj['name'];

											//end date
											$end_date_obj = get_field_object('session_end_date');
											$end_date_field_name = $end_date_obj['name'];

											//price
											$pricing_obj = get_field_object('session_price');
											$pricing_field_name = $pricing_obj['name'];
											// echo '<pre>';print_r($pricing_obj);exit;

											//coach
											$coach_obj = get_field_object('session_coach');
											$coach_field_name = $coach_obj['name'];
											
											
											//format Start Date to Month Day, Year
											$start_date = DateTime::createFromFormat('Ymd', $row['session_start_date']);
											$session_start_date = $start_date->format('F j, Y');

											//Format End Date to Month Day, Year
											$end_date = DateTime::createFromFormat('Ymd', $row['session_end_date']);
											$session_end_date = $end_date->format('F j, Y');

											//Other Row Info
											$session_name = $row['session_name'];
											$price = $row['session_price'];

											//Get Coach First & Last Name
											$coach_obj = $row['session_coach'];
											$coach_fname = $coach_obj['user_firstname'];
											$coach_lname = $coach_obj['user_lastname'];
											// echo '<pre>';print_r($coach_obj);exit;
											?>

											<tr class="session<?php echo $row_count; ?>">
											<td class="<?php echo $session_name_field_name; ?>"><?php echo $session_name; ?></td>
											<td class="<?php echo $s_date_field_name; ?>"><?php echo $session_start_date; ?></td>
											<td class="<?php echo $end_date_field_name; ?>"><?php echo $session_end_date; ?></td>
											<td class="<?php echo $pricing_field_name; ?>"><?php echo $price; ?></td>
											<td class="<?php echo $coach_field_name; ?>"><?php echo $coach_fname; ?> <?php echo $coach_lname; ?></td>
											<td class="register"><a href="<?php bloginfo('url'); ?>/register/?school_name=<?php echo $school_name;?>&class_name=<?php the_title(); ?>&session_name=<?php echo $session_name; ?>" title="Register For Session">Register</a></td>
											<td class="">Register</a></td>
											<?php echo do_shortcode('[product id="140"]'); ?>
											
											</tr>
											<?php //echo do_shortcode('[gravityforms id=1 field_values=session_name=$session_name]') ?>
											<?php 
										}

										echo '</table>';
									}
							?>


							<p>
								<?php 
									$coach = get_field('coach');



									echo '<pre>';
										print_r($coach);
									echo '</pre>';

								?>
							</p>

						</div>
					</article>
				  		 
				<?php endwhile; ?>
			</div>
			<div class="col-sm-4">
				<?php get_sidebar('right'); ?>
			</div>
		</div>
	</div><!-- container -->
</div><!-- page wrap -->

<?php get_footer(); ?>