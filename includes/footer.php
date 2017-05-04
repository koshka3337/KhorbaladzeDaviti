</div><br><br><br>
<div class="col-md-12 text-center"  >&copy;Copyright 2017 Seller </div>


<script>

    jQuery(window).scroll(function () {
        var vscroll = jQuery(this).scrollTop();
        jQuery('#logotext').css({
            "transform" : "translate(0px,"+vscroll/2+"px)"
        })
    });

    function detailsmodal(id){
        var data = {"id":id};
        jQuery.ajax({
            url: 'includes/detailsmodal.php',
            method:"post",
            data: data,
            success: function(data){
                jQuery('body').append(data);
                jQuery('#details-modal').modal('toggle');
            },
            error: function(){
                alert("Something went wrong");
            }
        });
    }




</script>
</body>
</html>
