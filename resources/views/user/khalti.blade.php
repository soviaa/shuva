@extends('user.usermain')
@section('content')
<button id="payment-button">Pay with Khalti</button>
        <!-- Khalti integration script -->
  
    <script>
        var config = {
            "publicKey": "test_public_key_4bc6d290a3214d02830fc0e39dc8af4b",
            "productIdentity": "{{ $order->id }}",
            "productName": "{{ $user->firstname }}",
            "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
            "paymentPreference": [
                "KHALTI",
                "EBANKING",
                "MOBILE_BANKING",
                "CONNECT_IPS",
                "SCT",
            ],
            "eventHandler": {
                onSuccess(payload) {
                    // Hit merchant API for initiating verification
                    console.log(payload);
                    alert('Your order has been confirmed!');
                   
                },
                onError(error) {
                    console.log(error);
                },
                onClose() {
                    console.log('Widget is closing');
                }
            }
        };

        var checkout = new KhaltiCheckout(config);
        var btn = document.getElementById("payment-button");
        btn.onclick = function () {
            var total = {{ $order->total_amount }};
            // Minimum transaction amount must be 10, i.e., 1000 in paisa.
            checkout.show({ amount: total * 100 });
        };
    </script>
@endsection