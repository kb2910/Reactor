<link rel="stylesheet" href="<?= $assets ?>styles/theme.css" type="text/css"/>
        <style type="text/css" media="all">
            body {
                color: #000;
            }

            #wrapper {
                max-width: 480px;
                margin: 0 auto;
                padding-top: 20px;
            }

            .btn {
                border-radius: 0;
                margin-bottom: 5px;
            }

            h3 {
                margin: 5px 0;
            }

            @media print {
                .no-print {
                    display: none;
                }

                #wrapper {
                    max-width: 480px;
                    width: 100%;
                    min-width: 250px;
                    margin: 0 auto;
                }
            }
        </style>
        
<body onload="window.print()">
<div style="width:60%;margin-left:20%;margin-right:20%; font-size:12px;"> 
                 <div>
                        <div class="col-xs-12" style="text-align: center;">
                            <h2 class=""><?= $biller->company != '-' ? $biller->company : $biller->name; ?></h2>
                            <?= $biller->company ? "" : "Attn: " . $biller->name ?>

                            <?php
                            echo $biller->address . "<br>" . $biller->city . " " . $biller->postal_code . " " . $biller->state . "<br>" . $biller->country;

                            if ($biller->cf1 != "-" && $biller->cf1 != "") {
                                echo "<br>" . lang("bcf1") . ": " . $biller->cf1;
                            }
                            if ($biller->cf2 != "-" && $biller->cf2 != "") {
                                echo "<br>" . lang("bcf2") . ": " . $biller->cf2;
                            }
                            if ($biller->cf3 != "-" && $biller->cf3 != "") {
                                echo "<br>" . lang("bcf3") . ": " . $biller->cf3;
                            }
                            if ($biller->cf4 != "-" && $biller->cf4 != "") {
                                echo "<br>" . lang("bcf4") . ": " . $biller->cf4;
                            }
                            if ($biller->cf5 != "-" && $biller->cf5 != "") {
                                echo "<br>" . lang("bcf5") . ": " . $biller->cf5;
                            }
                            if ($biller->cf6 != "-" && $biller->cf6 != "") {
                                echo "<br>" . lang("bcf6") . ": " . $biller->cf6;
                            }

                            echo lang("tel") . ": " . $biller->phone . "<br>" . lang("email") . ": " . $biller->email;
                            
                            ?>
                        </div>
                        <div class="clearfix"></div>

                </div>
                <div class="col-xs-12" style="margin-top: 17px;margin-bottom: 22px;">
                     <h5 class=""><?='<span style="font-weight: 600;"> APERTURA: </span>' . $this->sma->hrld($box->date); ?></h4></h5>
                     <h5 class=""><?='<span style="font-weight: 600;"> CIERRE:    </span>' . $this->sma->hrld($box->closed_at); ?></h4></h5>
                     <h5 class=""><?='<span style="font-weight: 600;">'.lang("open_by").'</span>'?>: <?= $openUser->first_name ." ". $openUser->last_name ." (". $openUser->username .")"?></h4></h5>
                     <h5 class=""><?='<span style="font-weight: 600;">'.lang("closed_by").'</span>'?>: <?= $closedUser->first_name ." ". $closedUser->last_name ." (". $closedUser->username .")" ?></h4></h5>
                     <h5 class=""><?='<span style="font-weight: 600;">'.lang("status").'</span>'?>: <?= lang($box->status.'d'); ?></h4></h5>
                </div>
                <div class="col-xs-12">
                    <table class="table">
                            
                        <thead>
                            <tr>
                            <th scope="col">Forma de Pago</th>
                            <th scope="col" style="text-align:right;">Total</th>
                            </tr>
                        </thead>
                        <tbody> 
                            <tr>
                                <td style="border-bottom: 1px solid #EEE;"><h4><?= lang('cash_in_hand'); ?>:</h4></td>
                                <td style="text-align:right; border-bottom: 1px solid #EEE;"><h4>
                                        <span><?= $this->sma->formatMoney($cash_in_hand ? $cash_in_hand : $this->session->userdata('cash_in_hand')); ?></span>
                                    </h4></td>
                            </tr>
                            <?php 
                                foreach($totales as $dato){

                                    echo ' <tr>
                                    <td style="border-bottom: 1px solid #EEE;"><h4>'.$dato['namePaid'].':</h4></td>
                                    <td style="text-align:right; border-bottom: 1px solid #EEE;"><h4>
                                            <span>'.$this->sma->formatMoney($dato['paid'] ?  $dato['paid'] : '0.00') . ' (' . $this->sma->formatMoney($dato['total'] ? $dato['total'] : '0.00').')</span>
                                        </h4></td>
                                    </tr>';

                                }                
                            ?>
                            <?php if ($pos_settings->paypal_pro) { ?>
                                <tr>
                                    <td style="border-bottom: 1px solid #DDD;"><h4><?= lang('paypal_pro'); ?>:</h4></td>
                                    <td style="text-align:right;border-bottom: 1px solid #DDD;"><h4>
                                            <span><?= $this->sma->formatMoney($pppsales->paid ? $pppsales->paid : '0.00') . ' (' . $this->sma->formatMoney($pppsales->total ? $pppsales->total : '0.00') . ')'; ?></span>
                                        </h4></td>
                                </tr>
                            <?php } ?>
                            <?php if ($pos_settings->stripe) { ?>
                                <tr>
                                    <td style="border-bottom: 1px solid #DDD;"><h4><?= lang('stripe'); ?>:</h4></td>
                                    <td style="text-align:right;border-bottom: 1px solid #DDD;"><h4>
                                            <span><?= $this->sma->formatMoney($stripesales->paid ? $stripesales->paid : '0.00') . ' (' . $this->sma->formatMoney($stripesales->total ? $stripesales->total : '0.00') . ')'; ?></span>
                                        </h4></td>
                                </tr>
                            <?php } ?>
                            <tr>
                                <td style="border-top: 1px solid #DDD;"><h4><?= lang('refunds'); ?>:</h4></td>
                                <td style="text-align:right;border-top: 1px solid #DDD;"><h4>
                                        <span><?= $this->sma->formatMoney($refunds->returned ? $refunds->returned : '0.00') . ' (' . $this->sma->formatMoney($refunds->total ? $refunds->total : '0.00') . ')'; ?></span>
                                    </h4></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #DDD;"><h4><?= lang('refunds'); ?>:</h4></td>
                                <td style="text-align:right;border-top: 1px solid #DDD;"><h4>
                                        <span><?= $this->sma->formatMoney($refunds->returned ? $refunds->returned : '0.00') . ' (' . $this->sma->formatMoney($refunds->total ? $refunds->total : '0.00') . ')'; ?></span>
                                    </h4></td>
                            </tr>
                            <tr>
                                <td width="300px;" style="font-weight:bold;"><h4><?= lang('total_sales'); ?>:</h4></td>
                                <td width="200px;" style="font-weight:bold;text-align:right;"><h4>
                                        <span><?= $this->sma->formatMoney($totalsales->paid ? $totalsales->paid : '0.00') . ' (' . $this->sma->formatMoney($totalsales->total ? $totalsales->total : '0.00') . ')'; ?></span>
                                    </h4></td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #DDD;"><h4><?= lang('refunds'); ?>:</h4></td>
                                <td style="text-align:right;border-top: 1px solid #DDD;"><h4>
                                        <span><?= $this->sma->formatMoney($refunds->returned ? $refunds->returned : '0.00') . ' (' . $this->sma->formatMoney($refunds->total ? $refunds->total : '0.00') . ')'; ?></span>
                                    </h4></td>
                            </tr>
                            <tr>
                                <td style="border-bottom: 1px solid #DDD;"><h4><?= lang('expenses'); ?>:</h4></td>
                                <td style="text-align:right;border-bottom: 1px solid #DDD;"><h4>
                                        <span><?php $expense = $expenses ? $expenses->total : 0; echo $this->sma->formatMoney($expense) . ' (' . $this->sma->formatMoney($expense) . ')'; ?></span>
                                    </h4></td>
                            </tr>
                            <tr>
                                <td width="300px;" style="font-weight:bold;"><h4><strong><?= lang('total_cash'); ?></strong>:</h4>
                                </td>
                                <td style="text-align:right;"><h4>
                                        <span><strong><?= $cashsales->paid ? $this->sma->formatMoney(($cashsales->paid + ($this->session->userdata('cash_in_hand')) - $expense) - ($refunds->returned ? $refunds->returned : 0)) : $this->sma->formatMoney($this->session->userdata('cash_in_hand') - $expense); ?></strong></span>
                                    </h4></td>
                            </tr>
                            </tbody>
                        </table>
                        
                   <div class="well well-sm"> 
                    <label style="font-weight:bold;"><?= lang('note'); ?>:</label></br>
                    <?= $box->note ?>

                   </div> 

                <div id="buttons" style="padding-top:10px; text-transform:uppercase;" class="no-print">
                <span class="pull-right col-xs-12">
                    <a href="javascript:window.print()" id="web_print" class="btn btn-block btn-primary"
                    onClick="window.print();return false;"><?= lang("web_print"); ?></a>
                </span>
                <span class="col-xs-12">
                    <a class="btn btn-block btn-warning" href="<?= site_url('pos'); ?>"><?= lang("back_to_pos"); ?></a>
                </span>
                </div>
                    
            </body>

    <style>
        .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
     padding: 0px !important; 
}
    </style>                    