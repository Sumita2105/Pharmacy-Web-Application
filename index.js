
paypal.Buttons({
    style : {
        color: 'blue',
        shape: 'pill'
    },
    createOrder: function (data, actions) {
        return actions.order.create({
            purchase_units : [{
                amount: {
                    value: '0.1'
                }
            }]
        });
    },
    onApprove: function (data, actions) {
        return actions.order.capture().then(function (details) {
             window.alert("Payment Successful");
			 window.open('./Pharmacy_25_08/paypal.php')
			 
        })
    },
    onCancel: function (data) {
        window.alert("Payment Unsuccesful");
    }
}).render('#paypal-payment-button');