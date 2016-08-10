<footer>

<script>
    $(document).ready(function() {
    var panels = $('.user-infos');
    var panelsButton = $('.dropdown-user');
    panels.hide();

    //Click dropdown
    panelsButton.click(function() {
    //get data-for attribute
    var dataFor = $(this).attr('data-for');
    var idFor = $(dataFor);

    //current button
    var currentButton = $(this);
    idFor.slideToggle(400, function() {
    //Completed slidetoggle
    if(idFor.is(':visible'))
    {
    currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
    }
    else
    {
    currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
    }
    })
    });


    $('[data-toggle="tooltip"]').tooltip();

    $('button').click(function(e) {
    e.preventDefault();
    alert("This is a demo.\n :-)");
    });
    });
</script>

        <div class="container-fluid">
        	<div class="row">

            {{HTML::script('js/jquery.js')}}
            {{HTML::script('js/bootstrap.min.js')}}

				<!-- Bootstrap Core JavaScript-->

				<!-- Morris Charts JavaScript -->
                {{HTML::script('js/plugins/morris/raphael.min.js')}}
                {{HTML::script('js/plugins/morris/morris.min.js')}}
                {{HTML::script('js/plugins/morris/morris-data.js')}}

            <!--common script for all pages-->
                {{HTML::script('js/common-scripts.js')}}

       <!--script for this page only-->
                {{HTML::script('js/jquery-1.8.3.min.js')}}
                {{HTML::script('js/jquery.nicescroll.js')}}
                {{HTML::script('js/jquery-ui-1.9.2.custom.min.js')}}
                {{HTML::script('js/jquery.slimscroll.min.js')}}
                {{HTML::script('js/fullcalendar.min.js')}}
                {{HTML::script('js/jquery.scrollTo.min.js')}}

              <div class="clearfix">
           
                <div class="pull-left" style="padding-left:20px; ">
            <a href="sci.ng">Sci Accounting Hub  </a>
                </div>
             </div>
          </div>
        </div>
        

</footer>