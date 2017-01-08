<button type="button" class="btn red-sunglo" onclick="pay_(2)" >
<div id="js_"></div>
<script>
//支付
        function pay_(id)
        {
            
             $.ajax({
                    type:"get",
                    url:"/ceshi/weixinpay?id="+id,//这是访问的地址
                    datatype:"json",
                    data:{},
                    success: function(data)
                    {
                       if(data!='')
                       {
                           
                           $("#js_").html(data);
                           callpay();
                          
                           
                       }
            //alert(data);
                    }
             })
        }
</script>