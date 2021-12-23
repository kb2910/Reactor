<div class="box">
    <div class="box-header">
        <h2 class="blue"><i class="fa-fw fa fa-file"></i><?= lang("order_no") . '. ' . $inv->id; ?></h2>
    </div>
    <div class="box-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="print-only col-xs-12">
                    <img src="<?= base_url() . 'assets/uploads/logos/' . $Settings->logo; ?>"
                         alt="<?= $Settings->site_name; ?>">
                </div>
                <div class="well well-sm">
                    <div class="col-xs-4 border-right">

                        <div class="col-xs-2"><i class="fa fa-3x fa-building padding010 text-muted"></i></div>
                        <div class="col-xs-10">
                            <h2 class=""><?= $supplier->company ? $supplier->company : $supplier->name; ?></h2>
                            <?= $supplier->company ? "" : "Attn: " . $supplier->name ?>

                            <?php
                            echo $supplier->address . "<br />" . $supplier->city . " " . $supplier->postal_code . " " . $supplier->state . "<br />" . $supplier->country;

                            echo "<p>";

                            if ($supplier->cf1 != "-" && $supplier->cf1 != "") {
                                echo "<br>" . lang("scf1") . ": " . $supplier->cf1;
                            }
                            if ($supplier->cf2 != "-" && $supplier->cf2 != "") {
                                echo "<br>" . lang("scf2") . ": " . $supplier->cf2;
                            }
                            if ($supplier->cf3 != "-" && $supplier->cf3 != "") {
                                echo "<br>" . lang("scf3") . ": " . $supplier->cf3;
                            }
                            if ($supplier->cf4 != "-" && $supplier->cf4 != "") {
                                echo "<br>" . lang("scf4") . ": " . $supplier->cf4;
                            }
                            if ($supplier->cf5 != "-" && $supplier->cf5 != "") {
                                echo "<br>" . lang("scf5") . ": " . $supplier->cf5;
                            }
                            if ($supplier->cf6 != "-" && $supplier->cf6 != "") {
                                echo "<br>" . lang("scf6") . ": " . $supplier->cf6;
                            }

                            echo "</p>";
                            echo lang("tel") . ": " . $supplier->phone . "<br />" . lang("email") . ": " . $supplier->email;
                            ?>
                        </div>
                        <div class="clearfix"></div>

                    </div>
                    <div class="col-xs-4">

                    <div class="col-xs-2"><i class="fa fa-3x fa-truck padding010 text-muted"></i></div>
                    <div class="col-xs-10">
                        <h2 class=""><?= $Settings->site_name; ?></h2>
                        <?= $warehouse->name ?>

                        <?php
                        echo $warehouse->address . "<br>";
                        echo ($warehouse->phone ? lang("tel") . ": " . $warehouse->phone . "<br>" : '') . ($warehouse->email ? lang("email") . ": " . $warehouse->email : '');
                        ?>
                    </div>
                    <div class="clearfix"></div>


                    </div>
                    <div class="col-xs-4 border-left">

                        <div class="col-xs-2"><i class="fa fa-3x fa-file-text-o padding010 text-muted"></i></div>
                        <div class="col-xs-10">
                            <h2 class=""><?= lang("ref"); ?>: <?= $inv->reference_no; ?></h2>

                            <p style="font-weight:bold;"><?= lang("date"); ?>: <?= $this->sma->hrld($inv->date); ?></p>

                            <p style="font-weight:bold;"><?= lang("status"); ?>: <?= $inv->status; ?></p>
                        </div>
                        <div class="col-xs-12">
                            <?php $br = $this->sma->save_barcode($inv->reference_no, 'code39', 35, false); ?>
                            <img
                                src="<?= base_url() ?>assets/uploads/barcode<?= $this->session->userdata('user_id') ?>.png"
                                alt="<?= $inv->reference_no ?>"/>
                            <?php $this->sma->qrcode('link', urlencode(site_url('sales/view/' . $inv->id)), 1); ?>
                            <img
                                src="<?= base_url() ?>assets/uploads/qrcode<?= $this->session->userdata('user_id') ?>.png"
                                alt="<?= $inv->reference_no ?>"/>
                        </div>
                        <div class="clearfix"></div>


                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped print-table order-table">
                        <thead>
                        <tr>
                            <th><?= lang("no"); ?></th>
                            <th><?= lang("description"); ?> (<?= lang("code"); ?>)</th>
                            <th><?= lang("quantity"); ?></th>
                            <th style="padding-right:20px;"><?= lang("cost"); ?></th>
                            <th style="padding-right:20px;"><?= lang("total"); ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $r = 1;
                        $total = 0;
                        $qtyTotal = 0;
                        $unitTotal = 0;
                        foreach ($rows as $row):
                        ?>
                            <tr>
                                <td style="text-align:center; width:40px; vertical-align:middle;"><?= $r; ?></td>
                                <td style="vertical-align:middle;">
                                    <?= $row->product_name . " (" . $row->product_code . ")"; ?>
                                </td>
                                <td style="width: 80px; text-align:center; vertical-align:middle;"><?= $this->sma->formatNumber($row->quantity); ?></td>
                                <td style="text-align:right; width:100px;"><?= $this->sma->formatMoney($row->net_unit_cost); ?></td>
                                <td style="text-align:right; width:120px;"><?= $this->sma->formatMoney($row->net_unit_cost * $row->quantity); ?></td>
                            </tr>
                            <?php
                            $r++;
                            
                            $total = $total + ($row->net_unit_cost * $row->quantity);
                            $qtyTotal = $qtyTotal + $row->quantity;
                            $unitTotal = $unitTotal + $row->net_unit_cost;
                        endforeach;
                        ?>
                        </tbody>
                        <tfoot>
                        
                            <tr>
                                <td colspan="2" class="bold"
                                    style="text-align:right; padding-right:10px;"><?= lang("total"); ?>
                                    (<?= $default_currency->code; ?>)
                                </td>
                                <td colspan="1" style="text-align:center; padding-right:10px;">
                                <?= $qtyTotal ?></td>
                            
                                <td colspan="1" style="text-align:right; padding-right:10px;">
                                <?= $this->sma->formatMoney($unitTotal) ?></td>
                            
                                <td colspan="1" style="text-align:right; padding-right:10px;">
                                <?= $this->sma->formatMoney($inv->total); ?></td>
                            </tr>
                        </tfoot>
                     </table>

                </div>

                <div class="row">
                    <div class="col-xs-7">
                        <?php if ($inv->note || $inv->note != "") { ?>
                            <div class="well well-sm">
                                <p class="bold"><?= lang("note"); ?>:</p>

                                <div><?= $this->sma->decode_html($inv->note); ?></div>
                            </div>
                        <?php } ?>
                    </div>

                    <div class="col-xs-4 col-xs-offset-1">
                        <div class="well well-sm">
                            <p><?= lang("created_by"); ?>
                                : <?= $created_by->first_name . ' ' . $created_by->last_name; ?> </p>

                            <p><?= lang("date"); ?>: <?= $this->sma->hrld($inv->date); ?></p>
                            <?php if ($inv->updated_by) { ?>
                                <p><?= lang("updated_by"); ?>
                                    : <?= $updated_by->first_name . ' ' . $updated_by->last_name;; ?></p>
                                <p><?= lang("update_at"); ?>: <?= $this->sma->hrld($inv->updated_at); ?></p>
                            <?php } ?>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
