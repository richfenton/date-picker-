// dob picker //
function extend_date_of_birth_range() {
    ?>
    <script>
        jQuery(function($) {
            var currentYear = new Date().getFullYear();
            var startYear = currentYear - 99;
            var endYear = currentYear - 10;
            var dateRange = startYear + ':' + endYear;

            // Replace "customer_dob" with the name attribute of your date of birth field
            $('input[name="customer_dob"]').datepicker('option', {
                yearRange: dateRange
            });
        });
    </script>
    <?php
}
add_action('wp_footer', 'extend_date_of_birth_range');
