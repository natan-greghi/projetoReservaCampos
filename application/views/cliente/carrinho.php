
<div>  
    <br>  
    <br>  
    <br>  
    <br>  
    <br>  
    <div class="container" id="corpo-carrinho" style="margin-bottom: 15px";>

        <?php echo form_open('carrinho/updateCarrinho'); ?>

        <table  class="table table-striped" cellpadding="6" cellspacing="1" style="width:100%" border="0">

            <tr>
                <th>QTD</th>
                <th>Descrição</th>
                <th style="text-align:right">Preço</th>
                <th style="text-align:right">Sub-Total</th>
            </tr>

            <?php $i = 1; ?>

            <?php foreach ($this->cart->contents() as $items): ?>

                <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

                <tr>
                    <td><?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
                    <td>
                        <?php echo $items['name']; ?>

                        <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

                            <p>
                                <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

                                    <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

                                <?php endforeach; ?>
                            </p>

                        <?php endif; ?>

                    </td>
                    <td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
                    <td style="text-align:right">$<?php echo $this->cart->format_number($items['subtotal']); ?></td>
                </tr>

                <?php $i++; ?>

            <?php endforeach; ?>

            <tr>
                <td colspan="2"> </td>
                <td class="right"><strong>Total</strong></td>
                <td class="right">$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
            </tr>

        </table>

        <p>
            <?php echo form_submit('', 'Atualizar Carrinho',"class='btn btn-primary'"); ?>
            <button type="button" onclick="window.location='<?php echo site_url('carrinho/limparCarrinho');?>'" class="btn btn-primary pull-right">Limpar Carrinho</button>
        </p>

        <a href="<?php echo base_url()?>" type="button" class="btn btn-primary">Continuar Comprando</a>
        <button type="button" class="btn btn-primary pull-right">Finalizar</button>
        
    </div>

</div>


</body>