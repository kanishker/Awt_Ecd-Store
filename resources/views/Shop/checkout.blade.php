<?php
/**
 * Created by PhpStorm.
 * User: kanishker
 * Date: 2019-04-08
 * Time: AM 1.26
 */
?>
<h4>Total :{{$total}}</h4>>
<form action="{{route('checkout')}}" method="post" id="checkout-form">
    <label>Name</label>
    <input type="text" id="name" class="form-control" required>

    <label>Address</label>
    <input type="text" id="add" class="form-control" required>

    <label>cart holder name</label>
    <input type="text" id="cartholdername" class="form-control" required>

    <label>Credit card number</label>
    <input type="text" id="ccnum" class="form-control" required><br>

    <label>EXPIRATION month</label>
    <input type="text" id="expmonth" class="form-control" required>

    <label>EXPIRATION year</label>
    <input type="text" id="expyear" class="form-control" required>
    {{csrf_field()}}
    <button type="submit" class="btn btn-success">Checkout</button>
</form>
