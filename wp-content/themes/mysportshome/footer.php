    <div class="container">
      <hr>
      <footer>
        <p>&copy; <?php bloginfo('name'); ?><?php echo date(' Y'); ?> by 
          <a href="http://williamharpleyportfolio.com/">William Harpley</a>
        </p>
      </footer>
    </div>
    <div class="modal fade" id="contactForm">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Contact Us</h4>
          </div>
          <div class="modal-body">
            <?php
              if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); }
            ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!--<script src="/js/bootstrap.min.js"></script>-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-68657371-6', 'auto');
      ga('send', 'pageview');

    </script>
    <?php wp_footer(); ?>
  </body>
</html>