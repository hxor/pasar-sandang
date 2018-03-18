@extends('layouts.front.app') 

@section('title')
 | Cart
@endsection
 
@push('body-tag')
    <Body class="shopping-cart-page">
@endpush 

@section('content')
    <section class="main-container col1-layout">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <article class="col-main">
                        <div class="cart">
                            <div class="page-title">
                                <h2>Checkout</h2>
                            </div>
                            <!-- BEGIN CART COLLATERALS -->
                            <div class="cart-collaterals row">
                                <div class="col-sm-8">
                                <div class="shipping">
                                    <h3>Estimate Shipping and Biodata</h3>
                                    <div class="shipping-form">
                                    <form id="shipping-zip-form" method="post" action="{{ route('checkout.store') }}">
                                        {{ csrf_field() }}
                                        <p>Enter your name and phone number.</p>
                                        <ul class="form-list">
                                            <li>
                                                <label for="name">Name</label>
                                                <div class="input-box">
                                                    <input type="text" value="" name="name" id="name" class="input-text" required>
                                                </div>
                                            </li>
                                            <li>
                                                <label for="name">Phone</label>
                                                <div class="input-box">
                                                    <input type="text" value="" name="phone" id="phone" class="input-text" required>
                                                </div>
                                            </li>
                                        </ul>
                                        <p>Enter your destination to get a shipping estimate.</p>
                                        <ul class="form-list">
                                        <li>
                                            <label for="name">Address</label>
                                            <div class="input-box">
                                                <textarea name="address" id="address" cols="91" rows="10" class="input-text"></textarea>
                                            </div>
                                        </li>
                                        <li>
                                            <label for="province_id">State/Province</label>
                                            <div class="input-box">
                                                {!! Form::select('province_id', ['' => '-'] + App\Models\Province::orderBy('name', 'ASC')->pluck('name','id')->all(), null, ['class' => 'required-entry validate-select', 'id' => 'province_selector']) !!}
                                            </div>
                                        </li>
                                        <li>
                                            <label for="regency_id">Regency/City</label>
                                            <div class="input-box">
                                                {!! Form::select('regency_id', ['' => '-'], old('regency_id'), ['class' => 'required-entry validate-select', 'id' => 'regency_selector']) !!}
                                            </div>
                                        </li>
                                        <li>
                                            <label for="district_id">Subdistrict</label>
                                            <div class="input-box">
                                                {!! Form::select('district_id', ['' => '-'], old('district_id'), ['class' => 'required-entry validate-select', 'id' => 'district_selector']) !!}
                                            </div>
                                        </li>
                                        <li>
                                            <label for="postcode">Zip/Postal Code</label>
                                            <div class="input-box">
                                                <input type="text" value="" name="postcode" id="postcode" class="input-text validate-postcode">
                                            </div>
                                        </li>
                                        </ul>
                                        <div class="buttons-set11">
                                            <button class="button btn-continue" title="Get a Quote" type="submit"><span>Submit</span></button>
                                        </div>
                                        <!--buttons-set11-->
                                    </form>
                                    </div>
                                </div>
                                </div>
                                <div class="totals col-sm-4">
                                <h3>Shopping Cart Total</h3>
                                @if (Cart::content()->count() > 0)
                                <div class="inner">
                                    <table class="table shopping-cart-table-total" id="shopping-cart-totals-table">
                                    <colgroup>
                                    <col>
                                    <col width="1">
                                    </colgroup>
                                    <tfoot>
                                        <tr>
                                        <td colspan="1" class="a-left" style=""><strong>Grand Total</strong></td>
                                        <td class="a-right" style=""><strong><span class="price">Rp{{ Cart::total() }}</span></strong></td>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach (Cart::content() as $item)
                                            <tr>
                                                <td colspan="1" class="a-left" style=""> {{ $item->name }} </td>
                                                <td colspan="1" class="a-left" style="">Rp{{ number_format($item->price,2,",",".") }} x {{ $item->qty }} Rp{{ number_format($item->subtotal,2,",",".") }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    </table>
                                </div>
                                @else
                                <div class="inner">
                                    <table class="table shopping-cart-table-total" id="shopping-cart-totals-table">
                                    <colgroup>
                                    <col>
                                    <col width="1">
                                    </colgroup>
                                    <tfoot>
                                        <tr>
                                        <td colspan="1" class="a-left" style=""><strong>Grand Total</strong></td>
                                        <td class="a-right" style=""><strong><span class="price">0</span></strong></td>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    </tbody>
                                    </table>
                                </div>
                                @endif
                                <!--inner--> 
                                
                                </div>
                            </div>
                        </div>
                    </article>
                    <!--	///*///======    End article  ========= //*/// -->
                </div>
            </div>
        </div>
    </section>
@endsection
 
@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {   
        $("select[name='province_id']").change(function () {
            var province_id = $(this).val();
            var token = $("input[name='_token']").val();
            $.ajax({
                url: "{{ route('select.city') }}",
                method: "GET",
                data: {
                    province_id: province_id,
                    token: token
                },
                success: function (data) {
                    console.log(data);
                    $("select[name='regency_id']").html('');
                    $("select[name='regency_id']").html(data.options);
                }
            })
        });

        $("select[name='regency_id']").change(function () {
            var regency_id = $(this).val();
            var token = $("input[name='_token']").val();
            $.ajax({
                url: "{{ route('select.subdistrict') }}",
                method: "GET",
                data: {
                    regency_id: regency_id,
                    token: token
                },
                success: function (data) {
                    console.log(data);
                    $("select[name='district_id']").html('');
                    $("select[name='district_id']").html(data.options);
                }
            })
        });
    });
</script>
@endsection