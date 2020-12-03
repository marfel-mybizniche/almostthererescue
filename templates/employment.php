<?php /* Template Name: Employment Page */ ?>

<?php get_header(); ?>

<main id="template_body" class="emp_template">
    
    <section class="sec_banner">
        <div class="grid-container">
            <h1>Employment</h1>
        </div>
    </section>

    <section class="sec_figures">
        <div class="figures">
            <ul>
                <li><figure><img src="<?php echo MBN_ASSETS_URI ?>/img/img-emp-1.jpg" alt=""></figure></li>
                <li><figure><img src="<?php echo MBN_ASSETS_URI ?>/img/img-emp-2.jpg" alt=""></figure></li>
                <li><figure><img src="<?php echo MBN_ASSETS_URI ?>/img/img-emp-3.jpg" alt=""></figure></li>
            </ul>
        </div>
    </section>

    <section class="sec_intro">
        <div class="grid-container">
            <div class="grid-x intro_box">
                <div class="cell large-6 large-order-1 align-self-middle col_copy">
                    <h3>We’re Always Looking for Good People to Join Our Team</h3><br>
                    <p>Caring for our precious pups and mamas takes a ton of time, effort and people! We’re always keeping a lookout for really great people who can join our team, love what they do and feel the satisfaction that comes with saving the lives of these adorable and deserving animals.</p>
                    <p><strong>Take a look at our current job openings below!</strong></p>
                </div>
                <div class="cell large-6 large-order-2">
                    <figure class="col_image"><img src="<?php echo MBN_ASSETS_URI ?>/img/img-emp-4.jpg" alt=""></figure>
                </div>
            </div>
        </div>
    </section>
    <section class="sec_joblist">
        <div class="grid-container">
            <?php 
                $query = new WP_Query( array(
                    'post_type' => 'employment',
                    'post_status' => 'publish',
                    'posts_per_page' => -1
                ));

            ?>
            <div class="grid-x grid-margin-x">
                <div class="cell large-3">
                    <aside class="jobs_side">
                        <ul class="jobs_menu" id="jobs-tabs" data-tabs>

                            <?php $xcount = 0; while ($query->have_posts()) : $query->the_post(); $xcount++; ?>
                            <li class="tabs-title <?php if ($xcount == 1) echo 'is-active'; ?>">
                                <a href="#job<?php the_ID(); ?>"><?php the_title(); ?></a>
                            </li>
                            <?php endwhile; wp_reset_postdata(); ?>

                        </ul>
                    </aside>
                </div>
                <div class="cell large-9">
                    <div class="jobs_content" data-tabs-content="jobs-tabs">
                        
                        <?php $ycount = 0; while ($query->have_posts()) : $query->the_post(); $ycount++; ?>
                        <div class="tabs-panel <?php if ($ycount == 1) echo 'is-active'; ?>" id="job<?php the_ID(); ?>">
                            <div class="grid-x grid-margin-x job_title">
                                <div class="cell medium-3">
                                    <h2><?php the_title(); ?></h2>
                                </div>
                                <div class="cell medium-9">
                                    <h6><?php the_field('job_type'); ?></h6>
                                </div>
                            </div>

                            <?php if(get_field('job_wage') != '') { ?>
                            <div class="grid-x grid-margin-x job_wage">
                                <div class="cell medium-3">
                                    <h6>Starting Wage:</h6>
                                </div>
                                <div class="cell medium-9">
                                    <p><strong><?php the_field('job_wage'); ?></strong></p>
                                </div>
                            </div>
                            <?php } ?>

                            <?php if(get_field('job_shifts') != '') { ?>
                            <div class="grid-x grid-margin-x job_shifts">
                                <div class="cell medium-3">
                                    <h6>Shifts:</h6>
                                </div>
                                <div class="cell medium-9">
                                    <p><strong><?php the_field('job_shifts'); ?></strong></p>
                                </div>
                            </div>
                            <?php } ?>

                            <div class="grid-x grid-margin-x job_summary">
                                <div class="cell medium-3">
                                    <h6>Position Summary: </h6>
                                </div>
                                <div class="cell medium-9">
                                    <?php the_content(); ?>
                                </div>
                            </div>

                            <?php if(get_field('job_duties_responsibilities') != '') { ?>
                            <div class="grid-x grid-margin-x job_duties">
                                <div class="cell medium-3">
                                    <h6>Essential Duties and Responsibilities:</h6>
                                </div>
                                <div class="cell medium-9">
                                    <?php the_field('job_duties_responsibilities'); ?>
                                </div>
                            </div>
                            <?php } ?>

                            <?php if(get_field('job_qualifications') != '') { ?>
                            <div class="grid-x grid-margin-x job_qualifications">
                                <div class="cell medium-3">
                                    <h6>Qualifications</h6>
                                </div>
                                <div class="cell medium-9">
                                    <?php the_field('job_qualifications'); ?>
                                </div>
                            </div>
                            <?php } ?>

                            <?php if(get_field('job_key_skills') != '') { ?>
                            <div class="grid-x grid-margin-x job_skills">
                                <div class="cell medium-3">
                                    <h6>Key Skills</h6>
                                </div>
                                <div class="cell medium-9">
                                    <?php the_field('job_key_skills'); ?>
                                </div>
                            </div>
                            <?php } ?>

                            <div class="grid-x grid-margin-x job_action">
                                <div class="cell medium-9 medium-offset-3">
									<div  class="button-a">
                                    <a href="https://wrigleymansion.formstack.com/forms/atfc_employment" target="_blank" data-title="<?php the_title(); ?>">
                                        <img src="<?php echo MBN_ASSETS_URI ?>/img/icn-apply.svg" alt="">
                                        apply for  this job
                                    </a>   
									</div> 
                                </div>
                            </div>
                        </div>
                        <?php endwhile; wp_reset_postdata(); ?>
                      </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>