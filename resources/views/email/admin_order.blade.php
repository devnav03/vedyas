<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="x-apple-disable-message-reformatting">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    <title>Invoice</title>
    <style>
      *{
        font-family: 'Open Sans', Verdana;
      }
    </style>
  </head>
  <body width="100%" style="margin: 50px auto; mso-line-height-rule:exactly; display: block; background-color: #fff; width: 100%; float: left;">
    <center style="width: 500px; display: block; text-align: left; margin: 0 auto">
    <div style="float: left; width: 100%; min-height: 300px; border: 1px solid #004c69;">
      <div style="float: left; width: 100%; overflow: hidden;">
        <a style="display: block; width: 100%; text-align: center;" href="#">Vedyas</a>
      </div>
      <div style="float: left; width: 100%; height: 100%; border-bottom: 1px solid #004c69; margin: 15px auto 0px auto;">
        <div style="float: left; width: 49%; padding-left: 10px;">
          <h4 style="font-weight: 600; color: #004c69; float: left; margin: 0px;width: 100%;">Sold By:</h4>
          <p style="float: left; color: #000; margin: 10px 0px; font-size: 14px; margin-top: -1px;">Vedyas</p>
          <p style="float: left; width:100%; color: #000; margin: 0px 0px 10px 0px; font-size: 14px;">Unit 2, 22-24 Steel Street, <br> Blacktown,<br> NSW 2148</p>
        </div>
        <div style="float: right; text-align: right; width: 47%;padding-right: 10px;">
          <h4 style="font-weight: 600; float: right; color: #004c69; margin: 0px;width: 100%;">Billing Address:</h4>
          <p style="float: right; margin-top: 0px;color: #000; margin: 10px 0px 10px 0px; font-size: 14px;"> {{ $current_order->billing_first_name }} {{ $current_order->billing_last_name }}<br> 
          @if($current_order->billing_company_name)
          {{ $current_order->billing_company_name }}<br>
          @endif
  
          @php
            $select = DB::table('shipping_zones')->where('id', $current_order->billing_state)->select('name')->first();
          @endphp

            {{ $current_order->billing_street_address }} {{ $current_order->billing_street_address2 }}, {{ $current_order->billing_suburb }}, {{ $select->name }}, {{ $current_order->billing_postcode }}<br> Phone: {{ $current_order->billing_phone }} <br> Email: {{ $current_order->billing_email_address }}</p>
          <br>  
          <h4 style="font-weight: 600; float: right; color: #004c69; margin: 0px;width: 100%;">Shipping Address:</h4>

          @if($current_order->ship_different_address == 1)
             
          <p style="float: right;margin-top: 0px;color: #000; margin: 10px 0px 10px 0px; font-size: 14px;"> {{ $current_order->shipping_first_name }} {{ $current_order->shipping_last_name }}<br> 
          @if($current_order->shipping_company_name)
          {{ $current_order->shipping_company_name }}<br>
          @endif
  
          @php
            $select = DB::table('shipping_zones')->where('id', $current_order->shipping_state)->select('name')->first();
          @endphp

            {{ $current_order->shipping_street_address }} {{ $current_order->shipping_street_address2 }}, {{ $current_order->shipping_suburb }}, {{ $select->name }}, {{ $current_order->shipping_postcode }} </p>

          @else

          <p style="float: right;margin-top: 0px;color: #000; margin: 10px 0px 10px 0px; font-size: 14px;"> {{ $current_order->billing_first_name }} {{ $current_order->billing_last_name }}<br> 
          @if($current_order->billing_company_name)
          {{ $current_order->billing_company_name }}<br>
          @endif
  
          @php
            $select = DB::table('shipping_zones')->where('id', $current_order->billing_state)->select('name')->first();
          @endphp

            {{ $current_order->billing_street_address }} {{ $current_order->billing_street_address2 }}, {{ $current_order->billing_suburb }}, {{ $select->name }}, {{ $current_order->billing_postcode }} </p>
          @endif
        </div>
      </div>
      <div style="float: left; width: 100%; height: 100%; margin: 20px auto 0px auto;">
        <div style="float: left; width: 48%;padding-left: 10px;">
          <h4 style="color: #004c69; font-weight: 600; float: left; margin: 0px;">Order Number:</h4>
          <p style="font-size:14px; color: #000; float: left; margin: 0px;">{{$current_order->order_nr}}</p>
        </div>
        <div style="float: right; text-align: right; width: 47%; padding-right: 10px;">
          <h4 style="font-weight: 600; color: #004c69; float: right; margin: 10px 0px 0px 0px;">Order Date: <span style="font-size:14px; color: #000; font-weight: lighter;">{{$current_order->created_at}}</span></h4>
        </div>
      </div>
      <div style="float: left; width: 100%; height: 100%; border: 1px #004c69 solid; margin: 20px auto 0px auto;border-left: 0px;">
        <table style="width: 100%; border-spacing: 0px; text-align: center;">
          <thead>
                 <tr style="margin:0px; padding: 0px;">
                    <th style="border-bottom: 1px solid #000; border-right: 1px solid #000;">Product Name</th>
                    <th style="border-bottom: 1px solid #000; border-right: 1px solid #000;">SKU</th>
                    <th style="border-bottom: 1px solid #000; border-right: 1px solid #000;">Unit Price</th>
                    <th style="border-bottom: 1px solid #000; border-right: 1px solid #000;">Qty</th>
                    <th style="border-bottom: 1px solid #000;">Total Amount</th>
                  </tr>
          </thead>
          <tbody>
            @php $i = 0; 
            $sub_total = 0;
            $stich_price = 0;
            $list_price = 0;
            $sub_tax = 0;
            @endphp

            @foreach(get_order_product($current_order->id) as $o_pro)
            @php $i++;
            @endphp 

                  <tr>
                    <td style="border-bottom: 1px solid #000; border-right: 1px solid #000;">{{$o_pro->name}}</td>
                    <td style="border-bottom: 1px solid #000; border-right: 1px solid #000;">{{$o_pro->sku}}</td>
                    <td style="border-bottom: 1px solid #000; border-right: 1px solid #000;">&#36;{{ number_format($o_pro->price, 2) }}</td>
                    <td style="border-bottom: 1px solid #000; border-right: 1px solid #000;">{{ $o_pro->quantity }}</td>
                    <td style="border-bottom: 1px solid #000;">&#36;{{ number_format($o_pro->price*$o_pro->quantity, 2) }}</td>
                  </tr>  
            @endforeach
            <tr>
                <td colspan="4" style="border-bottom: 1px solid #000;border-right: 1px solid #000; text-align: right; font-weight: bold; min-height: 50px;">Shipping:</td>
                <td colspan="2" style="background: #CACACA;border-bottom: 1px solid;">&#36;{{ number_format($current_order->shipping_price, 2) }}</td>
            </tr>

            <tr>
                <td colspan="4" style="border-bottom: 1px solid #000;border-right: 1px solid #000; text-align: right; font-weight: bold; min-height: 50px;">Tax:</td>
                <td colspan="2" style="background: #CACACA;border-bottom: 1px solid;">&#36;{{ number_format($current_order->shipping_tax+$current_order->product_tax, 2) }}</td>
            </tr>

            <tr>
                <td colspan="4" style="border-bottom: 1px solid #000;border-right: 1px solid #000; text-align: right; font-weight: bold; min-height: 50px;">Total:</td>
                <td colspan="2" style="background: #CACACA;">&#36;{{ number_format($current_order->total_price, 2) }}</td>
            </tr>

                  <tr>
                    <td colspan="6" style="text-align: right; font-weight: bold; border-top: 1px solid #000;">
                    <div style="width: 100%;padding-right: 20px;margin-top: 9px;margin-bottom: 9px;text-align: center; font-weight: normal;">"This is online generated bill, Signature not required"</div>
                    </td>
                  </tr>
                  
                  <tr>
                    <td colspan="6" style="text-align: center; font-weight: bold; border-top: 1px solid #000;">
                      <p style="font-size: 14px; color: #ab7d47; margin:0px; padding: 0px;">For any query mail us at
                        <span style="font-weight:bold;">sales@vedyas.com</span>
                      </p>
                    </td>
                  </tr>
          
          </tbody>
        </table>
      </div>
    </div>
    </center>
  </body>
</html>