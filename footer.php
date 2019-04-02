    <!-- FOOTER -->
    <footer class="container-fluid f">
      <div class="foo">
        
        <div class="row justify-content-center">
          <p class="correo">info@mwdholding.com</p>
        </div>
        <div class="row justify-content-center copy">
          <p>&copy; 2018 All rights reserved.</p>
        </div>
      </div>
    </footer>
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery-slim.min.js" type="text/javascript"><\/script>')</script>
    <script src="assets/js/jquery-slim.min.js" type="text/javascript"></script>
    <script src="assets/js/popper.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/holder.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      })
    </script>
    <script type="text/javascript">
      jQuery(document).ready(function($){
        // Get current path and find target link
        var path = window.location.pathname.split("/").pop();
        
        // Account for home page with empty path
        if ( path == '' ) {
          path = 'index.php';
        }
            
        var target = $('li a[href="'+path+'"]');
        // Add active class to target link
        target.addClass('active');
      });
    </script>
    </body>
</html>