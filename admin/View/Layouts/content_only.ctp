<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Karl Vincent Lim's personal website.">
    <meta name="author" content="Karl Vincent Lim">
    <?php echo $this->Html->charset(); ?>
    <title>Personal Website | Karl Vincent Lim</title>
    <?php
        echo $this->Html->css('bootstrap');
        echo $this->Html->css('fonts');
        echo $this->Html->css('font-awesome.min');
        echo $this->Html->css('simple-line-icons');
        echo $this->Html->css('dataTables');
        echo $this->Html->css('jquery-ui');
        // Custom css
        echo $this->Html->css('new-age');
        echo $this->Html->css('custom');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
    ?>
</head>
<body id="page-top">
    <?php echo $this->fetch('content'); ?>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <?php 
        echo $this->Html->script('jquery.min'); // Include jQuery library
        echo $this->Html->script('jquery-ui'); // Include jQuery library
        echo $this->Html->script('bootstrap.min'); // Include BOOTSTRAP SCRIPTS
        echo $this->Html->script('jquery.easing.min'); // Include BOOTSTRAP SCRIPTS
        echo $this->Html->script('new-age'); // Include BOOTSTRAP SCRIPTS
        echo $this->Html->script('dataTables2'); // Include BOOTSTRAP SCRIPTS
        echo $this->Html->script('dataTables'); // Include BOOTSTRAP SCRIPTS
    ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#dataTable').DataTable( {
                "order": [],
                "columnDefs": [ {
                "targets": 'no-sort',
                "orderable": false,
                } ]
            } );
            $('.skillbar').each(function(){
                $(this).find('.skillbar-bar').animate({
                    width:$(this).attr('data-percent')
                },2000);
            });
        } );
        $('#birthdate').datepicker({ 
            changeYear: true,
            yearRange: "-100:+0",
            showButtonPanel: true,
            changeMonth: true
        });
    </script>
</body>
</html>
