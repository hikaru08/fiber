<div class="page-header">
  <div class="page-header__inner">
    <h1 class="page-header__heading">
      <span>WORKS</span>
    </h1>
    <span class="page-header__subtitle">制作実績</span>
  </div>
</div>

<div class="works-continer">
  <div class="works-continer__content">
    <div class="works-continer__items">
      <div class="tab-wrap">
        <input id="TAB-01" type="radio" name="TAB" class="tab-switch" checked="checked" />
        <label class="tab-label" for="TAB-01">Webサイト</label>
        <div class="tab-content">
          <?php $posts = get_posts('numberposts=6&category_name=works&tag=webサイト'); global $post; ?>
          <div id="WebSite" class="works-continer__items__contents">
            <div class="works-continer__items__contents__post">
              <div class="works-continer__items__contents__flex">
                <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
                  <div class="works-continer__items__contents__block">
                    <a class="works-continer__items__contents__post__outer" href="<?php the_permalink() ?>">
                      <div class="works-continer__items__contents__post__overflow">
                        <img class="works-continer__items__contents__post__image" src="<?php the_field('image'); ?>" alt="<?php echo the_field('image')['alt']; ?>"></img>
                      </div>
                      <div class="works-continer__items__contents__post__namebox">
                        <div class="works-continer__items__contents__post__namebox__category">
                          <?php the_field('category'); ?>
                        </div>
                        <div class="works-continer__items__contents__post__namebox__title">
                          <?php the_field('company'); ?>
                        </div>
                      </div>
                    </a>
                  </div>
                <?php endforeach; endif; ?>
              </div>
            </div>
          </div>
        </div>
        <input id="TAB-02" type="radio" name="TAB" class="tab-switch" />
        <label class="tab-label" for="TAB-02">ECサイト</label>
        <div class="tab-content">
          <?php $posts = get_posts('numberposts=6&category_name=works&tag=ecサイト'); global $post; ?>
          <div id="WebDesign" class="works-continer__items__contents">
            <div class="works-continer__items__contents__post">
              <div class="works-continer__items__contents__flex">
                <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
                  <div class="works-continer__items__contents__block">
                    <a class="works-continer__items__contents__post__outer" href="<?php the_permalink() ?>">
                      <div class="works-continer__items__contents__post__overflow">
                        <img class="works-continer__items__contents__post__image" src="<?php the_field('image'); ?>"></img>
                      </div>
                      <div class="works-continer__items__contents__post__namebox">
                        <div class="works-continer__items__contents__post__namebox__category">
                          <?php the_field('category'); ?>
                        </div>
                        <div class="works-continer__items__contents__post__namebox__title">
                          <?php the_field('company'); ?>
                        </div>
                      </div>
                    </a>
                  </div>
                <?php endforeach; endif; ?>
              </div>
            </div>
          </div>
        </div>
        <input id="TAB-03" type="radio" name="TAB" class="tab-switch" />
        <label class="tab-label" for="TAB-03">LP</label>
        <div class="tab-content">
          <?php $posts = get_posts('numberposts=6&category_name=works&tag=lp'); global $post; ?>
          <div id="Movie" class="works-continer__items__contents">
            <div class="works-continer__items__contents__post">
              <div class="works-continer__items__contents__flex">
                <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
                  <div class="works-continer__items__contents__block">
                    <a class="works-continer__items__contents__post__outer" href="<?php the_permalink() ?>">
                      <div class="works-continer__items__contents__post__overflow">
                        <img class="works-continer__items__contents__post__image" src="<?php the_field('image'); ?>"></img>
                      </div>
                      <div class="works-continer__items__contents__post__namebox">
                        <div class="works-continer__items__contents__post__namebox__category">
                          <?php the_field('category'); ?>
                        </div>
                        <div class="works-continer__items__contents__post__namebox__title">
                          <?php the_field('company'); ?>
                        </div>
                      </div>
                    </a>
                  </div>
                <?php endforeach; endif; ?>
              </div>
            </div>
          </div>
        </div>
        <input id="TAB-04" type="radio" name="TAB" class="tab-switch" />
        <label class="tab-label" for="TAB-04">スマホアプリ</label>
        <div class="tab-content">
          <?php $posts = get_posts('numberposts=6&category_name=works&tag=スマホアプリ'); global $post; ?>
          <div id="WebApp" class="works-continer__items__contents">
            <div class="works-continer__items__contents__post">
              <div class="works-continer__items__contents__flex">
                <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
                  <div class="works-continer__items__contents__block">
                    <a class="works-continer__items__contents__post__outer" href="<?php the_permalink() ?>">
                      <div class="works-continer__items__contents__post__overflow">
                        <img class="works-continer__items__contents__post__image" src="<?php the_field('image'); ?>"></img>
                      </div>
                      <div class="works-continer__items__contents__post__namebox">
                        <div class="works-continer__items__contents__post__namebox__category">
                          <?php the_field('category'); ?>
                        </div>
                        <div class="works-continer__items__contents__post__namebox__title">
                          <?php the_field('company'); ?>
                        </div>
                      </div>
                    </a>
                  </div>
                <?php endforeach; endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="all-view">
        <a class="all-view__content all-button" href="<?php echo home_url("works"); ?>">
        <span>ALL VIEW</span>
        </a>
      </div>
    </div>
  </div>
</div>
