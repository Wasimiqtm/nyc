@extends('layouts.app')



@section('css')


@endsection

@section('content')

    <div id="page-header" style="background:url(http://themes.quitenicestuff2.com/chauffeurwp/demo3/wp-content/uploads/2017/02/image28-1.jpg) top center;">
        <div class="page-header-inner">
            <h1>Booking</h1>
            <div class="title-block3"></div>
            <p><span><a href="http://themes.quitenicestuff2.com/chauffeurwp/demo3/"><span>Home</span></a></span> <span class="sep"><i class="fa fa-angle-right"></i></span> <span class="current">Booking</span></p>	</div>
    </div>
    <div class="content-wrapper-standard container clearfix">
        <div class="main-content main-content-full">
            <div class="content-wrapper-standard aligncenter">
                <!-- Stepper Tabs -->
                <div class="booking-step-wrapper clearfix">
                    <div class="step-wrapper clearfix">
                        <div class="step-icon-wrapper">
                            <div class="step-icon">1.</div>
                        </div>
                        <div class="step-title">Trip Details</div>
                    </div>
                    <div class="step-wrapper clearfix">
                        <div class="step-icon-wrapper">
                            <div class="step-icon step-icon-current">2.</div>
                        </div>
                        <div class="step-title">Select Vehicle</div>
                    </div>
                    <div class="step-wrapper clearfix">
                        <div class="step-icon-wrapper">
                            <div class="step-icon">3.</div>
                        </div>
                        <div class="step-title">Enter Payment Details</div>
                    </div>
                    <div class="step-wrapper qns-last clearfix">
                        <div class="step-icon-wrapper">
                            <div class="step-icon">4.</div>
                        </div>
                        <div class="step-title">Confirmation</div>
                    </div>
                    <div class="step-line"></div>
                </div>
                <div class="booking-form-content clearfix">
                    <div class="clearfix">
                        <div class="select-vehicle-wrapper">
                            <h4>Select Vehicle</h4>
                            <div class="title-block7"></div>
                            @foreach($categories as $category)
                            <div class="vehicle-section clearfix" data-id="{{$category['id']}}" data-price1="{{$category['charges1']}}" data-price2="{{$category['charges2']}}" data-price="{{$category['total_charges']}}" data-title="{{$category['name']}}" data-bags="{{$category['no_of_bags']}}" data-passengers="{{$category['no_of_passengers']}}">
                                <p>{{$category['name']}} <strong>$ {{$category['fare_without_taxes']}}</strong></p>
                                <ul>
                                    {{--<li class="vehicle-bag-limit">3</li>
                                    <li class="vehicle-passenger-limit">6</li>--}}
                                </ul>
                                
                                    <img src="{{$category['image']}}" alt="">						
                            </div>
                            @endforeach
                            {{--<div class="vehicle-section clearfix" id="42" data-price="240" data-title="Ford Party Bus" data-bags="5" data-passengers="8">
                                <p>Ford Party Bus <strong>$240.00</strong></p>
                                <ul>
                                    <li class="vehicle-bag-limit">5</li>
                                    <li class="vehicle-passenger-limit">8</li>
                                </ul>
                                <a href="" rel="bookmark" title="Ford Party Bus" target="_blank">
                                    <img src="" alt="">						</a>
                            </div>
                            <div class="vehicle-section clearfix" id="41" data-price="190" data-title="Mercedes Van" data-bags="6" data-passengers="6">
                                <p>Mercedes Van <strong>$190.00</strong></p>
                                <ul>
                                    <li class="vehicle-bag-limit">6</li>
                                    <li class="vehicle-passenger-limit">6</li>
                                </ul>
                                <a href="" rel="bookmark" title="Mercedes Van" target="_blank">
                                    <img src="" alt="">						</a>
                            </div>
                            <div class="vehicle-section clearfix" id="40" data-price="140" data-title="Mercedes Sedan" data-bags="2" data-passengers="4">
                                <p>Mercedes Sedan <strong>$140.00</strong></p>
                                <ul>
                                    <li class="vehicle-bag-limit">2</li>
                                    <li class="vehicle-passenger-limit">4</li>
                                </ul>
                                <a href="" rel="bookmark" title="Mercedes Sedan" target="_blank">
                                    <img src="" alt="">						</a>
                            </div>
                            <div class="vehicle-section clearfix" id="39" data-price="130" data-title="Audi Grand Sedan" data-bags="2" data-passengers="4">
                                <p>Audi Grand Sedan <strong>$130.00</strong></p>
                                <ul>
                                    <li class="vehicle-bag-limit">2</li>
                                    <li class="vehicle-passenger-limit">4</li>
                                </ul>
                                <a href="" rel="bookmark" title="Audi Grand Sedan" target="_blank">
                                    <img src="" alt="">						</a>
                            </div>
                            <div class="vehicle-section clearfix" id="38" data-price="90" data-title="Lincoln MKT" data-bags="3" data-passengers="6">
                                <p>Lincoln MKT <strong>$90.00</strong></p>
                                <ul>
                                    <li class="vehicle-bag-limit">3</li>
                                    <li class="vehicle-passenger-limit">6</li>
                                </ul>
                                <a href="" rel="bookmark" title="Lincoln MKT" target="_blank">
                                    <img src="" alt="">						</a>
                            </div>
                            <div class="vehicle-section clearfix" id="37" data-price="150" data-title="Cadillac Escalade" data-bags="4" data-passengers="6">
                                <p>Cadillac Escalade <strong>$150.00</strong></p>
                                <ul>
                                    <li class="vehicle-bag-limit">4</li>
                                    <li class="vehicle-passenger-limit">6</li>
                                </ul>
                                <a href="" rel="bookmark" title="Cadillac Escalade" target="_blank">
                                    <img src="" alt="">						</a>
                            </div>--}}
                        </div>
                        <div class="trip-details-wrapper clearfix">
                            <h4>Trip Details</h4>
                            <div class="title-block7"></div>
                            <div class="trip-details-wrapper-1">
                                <p class="clearfix"><strong>Service Type:</strong> <span>{{($ride['round_trip'] == 1) ? "Return" : (($ride['hourly'] == 1)  ? "Hourly" : "One Way")}}</span></p>
                                <p class="clearfix"><strong>From:</strong> <span>{{$ride['pickup_location']}}</span></p>
                                <p class="clearfix"><strong>To:</strong> <span>{{$ride['dropoff_location']}}</span></p>
                                @if($ride['round_trip'] == '1')
                                    <p class="clearfix"><strong>From:</strong> <span>{{$ride['round_pickup_location']}}</span></p>
                                    <p class="clearfix"><strong>To:</strong> <span>{{$ride['round_dropoff_location']}}</span></p>
                                @endif

{{--                                <p class="clearfix"><strong>Return:</strong> <span>{{($ride['round_trip'] == 1) ? "Return" : (($ride['hourly'] == 1)  ? "Hourly" : "One Way")}}</span></p>--}}
                                {{--<p class="clearfix"><strong>Distance:</strong> <span>{{$distance}}</span></p>--}}
                            </div>
                            <div class="trip-details-wrapper-2">
                                <p><strong>Date:</strong> {{date('m-d-Y', strtotime($ride['pickup_date']))}}</p>
                                <p><strong>Pick Up Time:</strong> {{date('h:i:s a', strtotime($ride['pickup_time']))}}</p>
                                @if($ride['round_trip'] == '1')
                                    <p><strong>Date:</strong> {{date('m-d-Y', strtotime($ride['round_pickup_date']))}}</p>
                                    <p><strong>Pick Up Time:</strong> {{date('h:i:s a', strtotime($ride['round_pickup_time']))}}</p>
                                @endif
{{--                                <a href="https://maps.google.com/maps?saddr=Lahore, Pakistan&amp;daddr=Lahore, Pakistan&amp;ie=UTF8&amp;z=11&amp;layer=t&amp;t=m&amp;iwloc=A&amp;output=embed?iframe=true&amp;width=640&amp;height=480" data-gal="prettyPhoto[gallery]" class="view-map-button">View Map</a>--}}
                            </div>
                            <div class="clearboth"></div>
                            <form class="booking-form-1" id="formId" action="{{url('ride-request/create-step2')}}" method="post">
                                {{ csrf_field() }}
                                <div class="clearfix">
                                    <div class="qns-one-half">
                                        <label>Number Of Passengers <span></span></label>
                                        <div class="select-wrapper">
                                            <i class="fa fa-angle-down"></i>
                                            <select name="no_of_passengers" class="num-passengers">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="qns-one-half last-col">
                                        <label>Number Of Bags <span></span></label>
                                        <div class="select-wrapper">
                                            <i class="fa fa-angle-down"></i>
                                            <select name="no_of_bags" class="num-bags">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="qns-one-half">
                                        <label>Pick Up Instructions</label>
                                        <textarea cols="10" rows="2" name="pickup_inst"></textarea>
                                    </div>
                                    <div class="qns-one-half last-col">
                                        <label>Drop Off Instructions</label>
                                        <textarea cols="10" rows="2" name="dropoff_inst"></textarea>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="qns-one-half">
                                        <label>Name <span>*</span></label>
                                        <input type="text" class="required-form-field" name="name" value="" required>
                                        @if ($errors->has('name'))
                                            <span class="help-block with-errors">
                                            {{ $errors->first('name') }}
                                        </span>
                                        @endif
                                    </div>

                                    <div class="qns-one-half last-col">
                                        <label>Phone Number <span>*</span></label>
                                        <input type="text" class="required-form-field" name="phone_number" value="" required>
                                        @if ($errors->has('phone_number'))
                                            <span class="help-block with-errors">
                                            {{ $errors->first('phone_number') }}
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="qns-one-half">
                                        <label>Email Address <span>*</span></label>
                                        <input type="text" class="required-form-field form-email-address" name="email" value="" required>
                                        @if ($errors->has('email'))
                                            <span class="help-block with-errors">
                                            {{ $errors->first('email') }}
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <label>Additional Information</label>
                                <textarea cols="10" rows="14" name="additional_info"></textarea>
                                {{--<input type="hidden" class="selected-vehicle-name" name="selected-vehicle-name" value="">
                                <input type="hidden" class="selected-vehicle-price" name="selected-vehicle-price" value="">
                                <input type="hidden" class="selected-vehicle-bags" name="selected-vehicle-bags" value="">
                                <input type="hidden" class="selected-vehicle-passengers" name="selected-vehicle-passengers" value="">
                                <input type="hidden" name="form_type" value="one_way">
                                <input type="hidden" name="pickup-address" value="Lahore, Pakistan">
                                <input type="hidden" name="dropoff-address" value="Lahore, Pakistan">
                                <input type="hidden" name="pickup-date" value="30/06/2020">
                                <input type="hidden" name="pickup-time" value="01:00">
                                <input type="hidden" name="trip-distance" value="1 m">
                                <input type="hidden" name="trip-time" value="1 min">
                                <input type="hidden" name="currency-symbol" value="$">
                                <input type="hidden" name="num-hours" value="">
                                <input type="hidden" name="flat-location" value="">
                                <input type="hidden" name="return-journey" value="true">
                                <input type="hidden" class="booking-step-2-form" name="booking-step-2-form" value="1">
                                <input type="hidden" name="action" value="contactform_action">
                                <div id="terms-conditions" class="hide">
                                    <div class="lightbox-title">
                                        <h4 class="title-style4">Terms &amp; Conditions<span class="title-block"></span></h4>
                                    </div>
                                    <div class="main-content main-content-lightbox">
                                    </div>
                                </div>--}}
                                {{--<button onClick='submitDetailsForm()' type="submit" class="">
                                    Confirm<i class="fa fa-angle-right"></i>
                                </button>--}}

                                <input type="hidden" id="cat_id" name="cat_id" value="">
                                <input type="hidden" id="cat_name" name="cat_name" value="">
                                <input type="hidden" id="cat_price1" name="cat_price1" value="">
                                <input type="hidden" id="cat_price2" name="cat_price2" value="">
                                <input type="hidden" id="cat_price" name="cat_price" value="">

                                <input type='button' value='Confirm' onClick='submitDetailsForm()' />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection





@section('scripts')

    <script>

        jQuery( document ).ready(function() {
            jQuery(".num-passengers").on('click',function(){
                if(jQuery(".num-passengers option").length ==0){
                     alert('Please Select Vehicle'); 
                }
              
            });
             jQuery(".num-bags").on('click',function(){
                if(jQuery(".num-bags option").length ==0){
                     alert('Please Select Vehicle'); 
                }
              
            });
            jQuery('.vehicle-section').click(function() {

                jQuery('#cat_id').val(jQuery(this).attr('data-id'));
                jQuery('#cat_name').val(jQuery(this).attr('data-title'));
                jQuery('#cat_price1').val(jQuery(this).attr('data-price1'));
                jQuery('#cat_price2').val(jQuery(this).attr('data-price2'));
                jQuery('#cat_price').val(jQuery(this).attr('data-price'));

                jQuery('.num-bags').val(jQuery(this).attr('data-bags')).trigger('change');

                var bagsCount = jQuery(this).attr('data-bags');
                var i;
                var bagOptions = ''
                for (i = 1; i <= bagsCount; i++) {
                    bagOptions += '<option value="'+i+'">'+i+'</option>';
                }
                jQuery('.num-bags').html(bagOptions);




                jQuery('.num-passengers').val(jQuery(this).attr('data-passengers')).trigger('change');

                var passCount = jQuery(this).attr('data-passengers');
                var j;
                var passOptions = ''
                for (j = 1; j <= passCount; j++) {
                    passOptions += '<option value="'+j+'">'+j+'</option>';
                }
                jQuery('.num-passengers').html(passOptions);
            });
        });

        function submitDetailsForm() {
            var selectedCheck = jQuery('.selected-vehicle').size();
            if(selectedCheck < 1)
            {
                alert('Please Select Vehicle');
                return false;
            }
            jQuery("#formId").submit();
        }

    </script>

@endsection



