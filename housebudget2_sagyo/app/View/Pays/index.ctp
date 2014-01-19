<h2>収入一覧</h2>
<div class="container">
    <div class="row"> 		    
        <div class="col-md-offset-3 col-md-6">
            <br><h2>収入情報入力フォーム</h2>
            <?php  
            echo $this->Form->create('Pay',array('action'=>'add','class'=>'form-inline well'));
            echo $this->Form->input('title',array('label'=>'名称'));
            echo $this->Form->input('amount',array('label'=>'金額'));
            echo $this->Form->input('date',array('class'=>'form-control-dateTime','label'=>'日時'));
            echo $this->Form->input('memo',array('label'=>'メモ'));
            echo $this->Form->input('user_account_id',array('label'=>'口座名','options' => $user_account_option));
            echo $this->Form->input('pay_specification_id',array('label'=>'分類','options' => $pay_specification_option));
            echo $this->Form->hidden('user_id',array('value'=> AuthComponent::user('id')));
            ?>
            <div class='center'>
            <?php echo $this->Form->end('Save Pay'); ?>
            </div>  
        </div>
    </div>
</div>

<div class="container">
    <div class="row"> 		
        <div class="col-md-offset-1 col-xs-10">
            <div class = "center">
                <h2>収入情報</h2>
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">名称</th>
                            <th scope="col">日付</th>
                            <th scope="col">金額</th>
                            <th scope="col">分類</th>
                            <th scope="col">口座名</th>
                            <th scope="col">メモ</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>   
                    </thead>
                    <?php foreach ($pays as $pay):?>

                    <tbody>
                        <tr>
                            <td><?php echo h($pay['Pay']['title']);?></td>
                            <td><?php echo h($pay['Pay']['date']);?></td>
                            <td><?php echo h($pay['Pay']['amount']);?></td>
                            <td><?php echo h($pay['PaySpecification']['name']);?></td> 
                            <td><?php echo h($pay['UserAccount']['Account']['name']);?></td>
                            <td><?php echo h($pay['Pay']['memo']);?></td>
                            <td class="center">
                            <?php  
                                echo $this->Form->create('Pay',array('action'=>'edit'));
                                echo $this->Form->hidden('id',array('value'=>$pay['Pay']['id']));
                                echo $this->Form->submit('編集',array('class'=>'btn btn-success btn-xs'));
                                echo $this->Form->end();
                            ?>
                            </td>
                            <td class="center">   
                            <?php 
                                echo $this->Form->create('Pay',array('action'=>'delete'));
                                echo $this->Form->hidden('id',array('value'=>$pay['Pay']['id']));
                                echo $this->Form->submit('削除',array('class'=>'btn btn-danger btn-xs'),array('confirm'=>'削除してよろしいでしょうか？'));
                                echo $this->Form->end();
                            ?>
                            </td>
                        </tr>
                    </tbody>
                    <?php endforeach;?>
                </table>    
            </div>
        </div>    
    </div>
</div>

