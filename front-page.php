<?php
/**
 * Page Template - This template is used as the default template of the page
 *
 */
get_header(); ?>


<style>

header#site-header {
    margin-bottom: 0;
}
h2.featurette-title {
    font-size: 40px;
    font-weight: 400;
    color: #333333;
}
.featurette p.lead {
    max-width: 80%;
    margin: 0 auto;
    margin-bottom: 20px;
}
.page-masthead {
    background-color: #6f5499;
    background-image: linear-gradient(to bottom, #563d7c 0px, #6f5499 100%);
    background-repeat: repeat-x;
    color: #cdbfe3;
    padding: 80px 0;
    position: relative;
    text-align: center;
    text-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
}
.btn-outline {
    background-color: transparent;
    border-color: #563d7c;
    color: #563d7c;
}
.btn-outline:active, .btn-outline:focus, .btn-outline:hover {
    background-color: #563d7c;
    border-color: #563d7c;
    color: #fff;
}
.half-rule {
    margin: 40px auto;
    width: 100px;
}

.page-masthead .booticon {
    margin: 0 auto 30px;
}
.page-masthead h1 {
    color: #fff;
    font-weight: 300;
    line-height: 1;
}
.page-masthead .lead {
    color: #fff;
    font-size: 30px;
    margin: 0 auto 30px;
    max-width: 80%;
}
.page-masthead .version {
    color: #9783b9;
    margin-bottom: 30px;
    margin-top: -15px;
}
.page-masthead .btn {
    display: inline-block;
    font-size: 20px;
    padding: 15px 30px;
}


.btn-outline {
    background-color: transparent;
    border-color: #563d7c;
    color: #563d7c;
}
.btn-outline:active, .btn-outline:focus, .btn-outline:hover {
    background-color: #563d7c;
    border-color: #563d7c;
    color: #fff;
}
.btn-outline-inverse {
    background-color: transparent;
    border-color: #cdbfe3;
    color: #fff;
}
.btn-outline-inverse:active, .btn-outline-inverse:focus, .btn-outline-inverse:hover {
    background-color: #fff;
    border-color: #fff;
    color: #563d7c;
    text-shadow: none;
}
.booticon {
    background-color: #563d7c;
    border-radius: 15%;
    color: #fff;
    cursor: default;
    display: block;
    font-weight: 500;
    text-align: center;
}
.booticon-sm {
    font-size: 20px;
    height: 30px;
    line-height: 28px;
    width: 30px;
}
.booticon-lg {
    font-size: 108px;
    height: 144px;
    line-height: 140px;
    width: 144px;
}
.booticon-inverse {
    background-color: #fff;
    color: #563d7c;
}
.booticon-outline {
    background-color: transparent;
    border: 1px solid #cdbfe3;
}
#skippy {
    background-color: #6f5499;
    color: #fff;
    display: block;
    outline: 0 none;
    padding: 1em;
}
#skippy .skiplink-text {
    outline: 1px dotted;
    padding: 0.5em;
}
#content:focus {
    outline: 0 none;
}
.featurette {
    background-color: #fff;
    border-bottom: 1px solid #e5e5e5;
    color: #555;
    font-size: 16px;
    line-height: 1.5;
    padding-bottom: 100px;
    padding-top: 100px;
    text-align: center;
}
.featurette h3{
  font-weight: 400;
  color: #333333;
}
p.version-boot {
    color: #9783b9;
}
footer.bs-docs-footer li {
    display: inline-block;
    padding-right: 15px;
}
footer.bs-docs-footer ul {
    list-style: none;
    padding: 0;
    margin-bottom: 20px;
}
footer.bs-docs-footer a {
    color: #ffffff;
}
footer.bs-docs-footer {
    background: #2a2730;
    padding: 50px 0;
}
.bs-docs-footer p {
    color: #99979c;
    margin-bottom: 0;
}
.row.featured-sites div[class*=col] {
    padding: 1px;
}
</style>
  
<main class="page-masthead" id="content" tabindex="-1"> 
  <div class="container"> 
    <span class="booticon booticon-lg booticon-outline">B</span> 
    <p class="lead">Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile first projects on the web.</p> 
    <p class="lead"> 
      <a href="getting-started#download" class="btn btn-outline-inverse btn-lg">Download Bootstrap</a>
      <p class="text-sm-center version-boot">Currently v3.3.7</p>
    </p> 
  </div>
</main>

<div class="featurette">
  <div class="container"> 
    <h2 class="featurette-title">Designed for everyone, everywhere.</h2>
    <p class="lead">Bootstrap makes front-end web development faster and easier. It's made for folks of all skill levels, devices of all shapes, and projects of all sizes.</p> 
    <hr class="half-rule"> 
    <div class="row">
      <div class="col-sm-4"> 
        <img alt="Sass and Less support" src="<?php echo get_template_directory_uri(); ?>/images/sass-less.png" class="img-responsive"> 
        <h3>Preprocessors</h3> 
        <p>Bootstrap ships with vanilla CSS, but its source code utilizes the two most popular CSS preprocessors, <a href="../css/#less">Less</a> and <a href="../css/#sass">Sass</a>. Quickly get started with precompiled CSS or build on the source.</p> 
      </div> 
      <div class="col-sm-4"> 
        <img alt="Responsive across devices" src="<?php echo get_template_directory_uri(); ?>/images/devices.png" class="img-responsive"> 
        <h3>One framework, every device.</h3> 
        <p>Bootstrap easily and efficiently scales your websites and applications with a single code base, from phones to tablets to desktops with CSS media queries.</p> 
      </div> 
      <div class="col-sm-4"> 
        <img alt="Components" src="<?php echo get_template_directory_uri(); ?>/images/components.png" class="img-responsive"> 
        <h3>Full of features</h3> 
        <p>With Bootstrap, you get extensive and beautiful documentation for common HTML elements, dozens of custom HTML and CSS components, and awesome jQuery plugins.</p> 
      </div> 
    </div> 
    <hr class="half-rule"> 
    <p class="lead">Bootstrap is open source. It's hosted, developed, and maintained on GitHub.</p> 
    <a href="#" class="btn btn-outline btn-lg">View the GitHub project</a> 
  </div>
</div>

  <div class="featurette"> 
    <div class="container"> 
      <h2 class="featurette-title">Built with Bootstrap.</h2> 
      <p class="lead">Millions of amazing sites across the web are being built with Bootstrap. Get started on your own with our growing <a href="../getting-started/#examples">collection of examples</a> or by exploring some of our favorites.</p> 
      <hr class="half-rule"> 
      <div class="row featured-sites"> 
        <div class="col-xs-6 col-sm-3"> 
          <a href="#" target="_blank" title="Lyft"> 
            <img alt="Lyft" src="<?php echo get_template_directory_uri(); ?>/images/expo-lyft.jpg" class="img-responsive"> 
          </a> 
        </div> 
        <div class="col-xs-6 col-sm-3"> 
          <a href="#" target="_blank" title="Vogue"> 
            <img alt="Vogue" src="<?php echo get_template_directory_uri(); ?>/images/expo-vogue.jpg" class="img-responsive"> 
          </a> 
        </div> 
        <div class="col-xs-6 col-sm-3"> 
          <a href="#" target="_blank" title="Riot Design">
            <img alt="Riot Design" src="<?php echo get_template_directory_uri(); ?>/images/expo-riot.jpg" class="img-responsive"> 
          </a> 
        </div> 
        <div class="col-xs-6 col-sm-3"> 
          <a href="#" target="_blank" title="Newsweek"> 
            <img alt="Newsweek" src="<?php echo get_template_directory_uri(); ?>/images/expo-newsweek.jpg" class="img-responsive"> 
          </a> 
        </div> 
      </div> 
      <hr class="half-rule"> 
      <p class="lead">We showcase dozens of inspiring projects built with Bootstrap on the Bootstrap Expo.</p> 
      <a href="#" class="btn btn-outline btn-lg">Explore the Expo</a> 
    </div> 
  </div>

  
<?php get_footer(); ?>