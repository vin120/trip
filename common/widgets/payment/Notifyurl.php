<?php

namespace common\widgets\payment;
use Yii;
use common\widgets\payment\Weixinjspi;

class Notifyurl
{
   
    public function notify($code)
   {
       
       $funame='get'.$code;
     
        $respmodel=Yii::$app->payment->$funame();
        $result=$respmodel->notify();
        if($result){
            //商户订单号

            $out_trade_no = $result['out_trade_no'];

            //交易号

            $trade_no = $result['trade_no'];

            //交易状态
            $trade_status = $result['trade_status'];


            if ($trade_status == 'TRADE_SUCCESS')
            {
                $this->update_status($out_trade_no,$trade_no,1);
                echo "success";
            }else{
                
                 echo "fail";
            }
            
        }else{
            echo "fail";
         
        }
       
   }
   //支付状态更改
   public  function update_status($out_trade_no,$trade_no,$pay_status)
   {
      
   }
   
}

?>