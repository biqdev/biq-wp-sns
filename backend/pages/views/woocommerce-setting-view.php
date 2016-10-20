<?php
    global $biq_sns_settings;
?>
<div class="wrap">
    <h1>BIQ - Woocommerce setting page</h1>
    <form name="woocommerce-setting-form" method="POST" action="">
        <table class="form-table">
            <tbody>
                <tr>
                    <th>
                        <label for="mode">Display product mode</label>
                    </th>
                    <td>
                        <fieldset>
                            <legend class="screen-reader-text">Display product mode</legend>
                            <label>
                                <input type="radio" name="mode" value="show"<?php echo ($biq_sns_settings["woocommerce"]["product_display_mode"]=="show") ? ' checked="true"' : ""; ?>/>
                                <span><?php esc_attr_e( 'Show mode ( For display product only )', 'biq_sns_admin')?></span>
                            </label>
                            <br/>
                            <label>
                                <input type="radio" name="mode" value="shop"<?php echo ($biq_sns_settings["woocommerce"]["product_display_mode"]=="shop") ? ' checked="true"' : ""; ?>/>
                                <span><?php esc_attr_e( 'Shop mode ( For online store )', 'biq_sns_admin')?></span>
                            </label>
                        </fieldset>
                    </td>
                </tr>
            </tbody>
        </table>
        <p class="submit">
            <input type="submit" value="Save Changes" class="button button-primary" name="biq_sns_woocommerce_setting_submit">
        </p>
    </form>
</div>