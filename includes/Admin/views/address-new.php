<h2>Add new slots for a specific date </h2>
<form class="sbks-add-new-form" action="" method="post">

    <label for="sbks_product_id">Choose a product</label>
    <select name="sbks_product_id" id="sbks_product_id">
    <?php
    $product_ids = onsbks_get_product_id_title();
    foreach ( $product_ids as $product_id ) {
        ?>
        <option value="<?php echo $product_id['ID']; ?>"><?php echo $product_id['post_title']; ?></option>
        <?php
    }
    ?>
    </select> 
    <!-- <input type="text" name="sbks_product_id" id="sbks_product_id" placeholder="product id"> -->
    <input type="date" name="sbks_product_date" id="sbks_product_date" placeholder="date" value="<?php echo date('Y-m-d') ?>">

    <table class="sbks-add-new-table">
        <tr>
            <td>Time</td>
            <td>Available Slots</td>
        </tr>
    <?php
    $time_hours = [
        '12:00_am',
        '01:00_am',
        '02:00_am',
        '03:00_am',
        '04:00_am',
        '05:00_am',
        '06:00_am',
        '07:00_am',
        '08:00_am',
        '09:00_am',
        '10:00_am',
        '11:00_am',
        '12:00_pm',
        '01:00_pm',
        '02:00_pm',
        '03:00_pm',
        '04:00_pm',
        '05:00_pm',
        '06:00_pm',
        '07:00_pm',
        '08:00_pm',
        '09:00_pm',
        '10:00_pm',
        '11:00_pm'
    ];
    foreach ( $time_hours as $time_hour) {
        ?>
        <tr>
            <td><?php echo $time_hour ?></td>
            <td> <input type="number" name="sbks_<?php echo $time_hour; ?>" id=""> </td>
        </tr>
        <?php
    }
    ?>
    </table>
    <?php 
        wp_nonce_field( 'sbks_add_nonce' );
        submit_button( 'Add booking', 'primary', 'sbks_submit_meta' );
    
    ?>

</form>

