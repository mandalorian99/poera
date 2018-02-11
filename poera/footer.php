</div>
<!----wrapper end---->

<!----footer start---->

<script type="text/javascript">
/*
 *  dynamically inserting a active class in sidebar 
 */
$(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
});

/*
 * there is a another method to collapse sidebar .
 * instead of using a jquery , we can intial a function 
 * on click on a button and toggle class using classic 
 * javascript.
 */
</script>	
</body>
</html>