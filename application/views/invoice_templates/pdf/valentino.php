<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/default/css/templates.css">

        <style>
            body {
                font-family: 'source-sans-pro-regular';
                font-weight: normal;
                color: #002B36;
                padding-left: 150px;
            }
            #invoice-logo {
                padding: 0;
                margin: 0;
                max-width: initial!important;
                max-height: initial!important;
                width: 350px;
                height: auto;
            }
        </style>

	</head>
    <body>
        <div id="header" style="padding: 30px; padding-bottom: 0px; width: 100%;">
            <div id="company-logo">
                <?php echo invoice_logo_pdf(); ?>
            </div>
            <div id="invoice-number" style="margin-top: 80px; font-family: 'source-sans-pro-bold'; font-weight: normal; font-size: 24px; width: 100%; border-bottom: 1.5px solid #D3D1CD; padding-bottom: 3px; margin-bottom: 25px;">
                Fattura n. <?php echo $invoice->invoice_number; ?>
            </div>
        </div>
        <div id="subheader" style="padding: 0px 30px 0px 30px;">
            <div style="float: left; width: 60%;">
                <table id="invoice-client" width="100%" style="float: left;">
                    <tr>
                        <td width="25%" valign="top" style="padding-top: 3px; padding-bottom: 3px;">
                            <span style="font-family: 'source-sans-pro-light'; font-weight: normal; font-size: 18px;">
                                SPETT.LE
                            </span>
                        </td>
                        <td width="70%" valign="top" style="padding-top: 3px; padding-bottom: 3px;">
                            <span style="font-family: 'source-sans-pro-bold'; font-weight: normal; font-size: 17px;">
                                <?php echo $invoice->client_name; ?>
                            </span>
                        </td>
                    </tr>
                    <?php if (($invoice->client_tax_code) && ($invoice->client_vat_id)): ?>
                        <?php if ($invoice->client_tax_code == $invoice->client_vat_id): ?>
                            <tr>
                                <td width="25%" valign="top" style="padding-top: 3px; padding-bottom: 3px;">
                                    <span style="font-family: 'source-sans-pro-light'; font-weight: normal; font-size: 18px;">
                                        C.F. / P.IVA
                                    </span>
                                </td>
                                <td width="70%" valign="top" style="padding-top: 3px; padding-bottom: 3px;">
                                    <span style="font-family: 'source-sans-pro-bold'; font-weight: normal; font-size: 17px;">
                                        <?php echo $invoice->client_vat_id; ?>
                                    </span>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php if ($invoice->client_address_1): ?>
                        <tr>
                            <td width="25%" valign="top" style="padding-top: 3px; padding-bottom: 3px;">
                                <span style="font-family: 'source-sans-pro-light'; font-weight: normal; font-size: 18px;">
                                    INDIRIZZO
                                </span>
                            </td>
                            <td width="70%" valign="top" style="padding-top: 3px; padding-bottom: 3px;">
                                <span style="font-family: 'source-sans-pro-bold'; font-weight: normal; font-size: 17px;">
                                    <?php echo $invoice->client_address_1; ?>
                                </span>
                            </td>
                        </tr>
                    <?php endif; ?>
                    <?php if ($invoice->client_address_2): ?>
                        <tr>
                            <td width="25%" valign="top" style="padding-top: 3px; padding-bottom: 3px;">
                            </td>
                            <td width="70%" valign="top" style="padding-top: 3px; padding-bottom: 3px;">
                                <span style="font-family: 'source-sans-pro-bold'; font-weight: normal; font-size: 17px;">
                                    <?php echo $invoice->client_address_2; ?>
                                </span>
                            </td>
                        </tr>
                    <?php endif; ?>
                    <?php if (($invoice->client_city) && ($invoice->client_state) && ($invoice->client_zip)): ?>
                        <tr>
                            <td width="25%" valign="top" style="padding-top: 3px; padding-bottom: 3px;">
                            </td>
                            <td width="70%" valign="top" style="padding-top: 3px; padding-bottom: 3px;">
                                <span style="font-family: 'source-sans-pro-bold'; font-weight: normal; font-size: 17px;">
                                    <?php if($invoice->client_city == $invoice->client_state) {
                                        echo $invoice->client_zip.' '.$invoice->client_state;
                                    } else {
                                        echo $invoice->client_city.', '.$invoice->client_zip.' '.$invoice->client_state;
                                    } ?>
                                </span>
                            </td>
                        </tr>
                    <?php endif; ?>
                    <?php if (($invoice->client_tax_code) && ($invoice->client_vat_id)): ?>
                        <?php if ($invoice->client_tax_code != $invoice->client_vat_id): ?>
                            <tr>
                                <td width="25%" valign="top" style="padding-top: 3px; padding-bottom: 3px;">
                                    <span style="font-family: 'source-sans-pro-light'; font-weight: normal; font-size: 18px;">
                                        C.F.
                                    </span>
                                </td>
                                <td width="70%" valign="top" style="padding-top: 3px; padding-bottom: 3px;">
                                    <span style="font-family: 'source-sans-pro-bold'; font-weight: normal; font-size: 17px;">
                                        <?php echo $invoice->client_tax_code; ?>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td width="25%" valign="top" style="padding-top: 3px; padding-bottom: 3px;">
                                    <span style="font-family: 'source-sans-pro-light'; font-weight: normal; font-size: 18px;">
                                        P.IVA
                                    </span>
                                </td>
                                <td width="70%" valign="top" style="padding-top: 3px; padding-bottom: 3px;">
                                    <span style="font-family: 'source-sans-pro-bold'; font-weight: normal; font-size: 17px;">
                                        <?php echo $invoice->client_vat_id; ?>
                                    </span>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endif; ?>
                </table>
            </div>
            <div style="float: right; width: 40%;">
                <table width="100%" style="float: right;">
                    <tr>
                        <td width="62%" valign="top" style="padding-top: 3px; padding-bottom: 3px;">
                            <span style="font-family: 'source-sans-pro-light'; font-weight: normal; font-size: 18px;">
                                DATA EMISSIONE
                            </span>
                        </td>
                        <td width="38%" valign="top" style="padding-top: 3px; padding-bottom: 3px;">
                            <span style="font-family: 'source-sans-pro-bold'; font-weight: normal; font-size: 17px;">
                                <?php echo date_from_mysql($invoice->invoice_date_created, TRUE); ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td width="62%" valign="top" style="padding-top: 3px; padding-bottom: 3px;">
                            <span style="font-family: 'source-sans-pro-light'; font-weight: normal; font-size: 18px;">
                                DATA SCADENZA
                            </span>
                        </td>
                        <td width="38%" valign="top" style="padding-top: 3px; padding-bottom: 3px;">
                            <span style="font-family: 'source-sans-pro-bold'; font-weight: normal; font-size: 17px;">
                                <?php echo date_from_mysql($invoice->invoice_date_due, TRUE); ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td width="62%" valign="top" style="padding-top: 3px; padding-bottom: 3px;">
                            <span style="font-family: 'source-sans-pro-light'; font-weight: normal; font-size: 18px;">
                                IMPORTO DOVUTO
                            </span>
                        </td>
                        <td width="38%" valign="top" style="padding-top: 3px; padding-bottom: 3px;">
                            <span style="font-family: 'source-sans-pro-bold'; font-weight: normal; font-size: 17px;">
                                <?php echo "€ ".trim(format_currency($invoice->invoice_total),"€"); ?>
                            </span>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="divider" style="border-bottom: 1.5px solid #D3D1CD; clear: both; overflow: hidden; margin-top: 40px;"></div>
            <table width="100%" style="margin-top: 50px;">
                <thead>
                    <tr>
                        <td width="60%" height="30px" valign="top" style="">
                            <span style="font-family: 'source-sans-pro-bold'; font-weight: normal; font-size: 20px;">
                                SERVIZI
                            </span>
                        </td>
                        <td width="40%" height="30px" valign="top" style="">
                            <span style="font-family: 'source-sans-pro-bold'; font-weight: normal; font-size: 20px;">
                                PREZZO
                            </span>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($items as $item) { ?>
                        <tr>
                            <td width="60%" valign="top" style="padding-top: 15px; padding-bottom: 15px; padding-right: 20px;">
                                <span style="font-family: 'source-sans-pro-light'; font-weight: normal; font-size: 18px;">
                                    <?php echo $item->item_name; ?>
                                </span>
                            </td>
                            <td width="40%" valign="top" style="padding-top: 15px; padding-bottom: 15px;">
                                <span style="font-family: 'source-sans-pro-light'; font-weight: normal; font-size: 18px;">
                                    <?php echo "€ ".trim(format_currency($item->item_price),"€"); ?>
                                </span>
                            </td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <td width="60%" valign="top" style="padding-top: 10px; padding-right: 20px;">
                            <span style="font-family: 'source-sans-pro-bold'; font-weight: normal; font-size: 20px;">
                                TOTALE
                            </span>
                        </td>
                        <td width="40%" valign="top" style="padding-top: 10px;">
                            <span style="font-family: 'source-sans-pro-light'; font-weight: normal; font-size: 18px;">
                                <?php echo "€ ".trim(format_currency($invoice->invoice_total),"€"); ?>
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div id="invoice-conditions" style="font-family: 'source-sans-pro-light'; font-weight: normal; font-size: 9px; margin-top: 30px;">
                <?php if ($invoice->invoice_terms) { echo nl2br($invoice->invoice_terms); } ?>
            </div>
            <div id="invoice-bollo" style="font-family: 'source-sans-pro-light'; font-weight: normal; font-size: 9px;">
                <?php if ($invoice->invoice_total > 77.47): ?>
                    Imposta di bollo assolta sull’originale.<br>
                    <?php if ($custom_fields['invoice']['ID marca da bollo']): ?>
                        <?php echo nl2br($custom_fields['invoice']['ID marca da bollo']); ?>
                    <?php else: ?>
                        <span style="font-family: 'source-sans-pro-regular'; font-weight: normal; color: #e74c3c;">ERRORE ID MARCA DA BOLLO</span>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
            <div id="company-info" style="text-align: center; font-family: 'source-sans-pro-regular'; font-weight: normal; font-size: 12px; margin-top: 80px;">
                <div style="font-size: 13px;"><?php echo $invoice->user_name; ?></div>
                <?php if ($invoice->user_address_1) { echo $invoice->user_address_1 . ' '; } ?>
                <?php if ($invoice->user_city) { echo $invoice->user_city . ' '; } ?>
                <?php if ($invoice->user_zip) { echo $invoice->user_zip . ', '; } ?>
                <?php if ($invoice->user_state) { echo $invoice->user_state . '<br>'; } ?>
                <?php if ($invoice->user_tax_code) { echo 'c.f. ' . $invoice->user_tax_code . ' '; } ?>
                <?php if ($invoice->user_vat_id) { echo 'p.iva ' . $invoice->user_vat_id . '<br>'; } ?>
                <?php if ($custom_fields['user']['IBAN']) { echo 'iban ' . $custom_fields['user']['IBAN']; } ?>
            </div>
        </div>
    </body>
</html>
