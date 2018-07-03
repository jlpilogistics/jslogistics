@extends('layouts.master')
@section('content')
<style type="text/css">
  body {
   background-image: url("app/images/mapa2.jpg");
     background-repeat: no-repeat;
}
#cars {
 width:170px;  
 height: 45px; 
}
p{
  font-style: bold;
}
</style>
      <div class="section">
          <div class="quote-form">
            <div class="container">
              <div class="row">
                <div class="col-xs-12">
              <div class="heading "> <span>Request Quotation</span>
                <h3>quote form</h3>
              </div>
             <strong><p>SENDER'S FORM</p></strong> 
              <div class="quote-form-box "  ng-controller="RequestController">
    <form ng-submit="submitForm()" name="requestForm" method="post" novalidate>
    {!! Form::open(['method'=>'POST', 'action'=>'QuotesController@store']) !!}
         <div class="success" ng-class="{'submissionMessage' : submission}" ng-bind="successsubmissionMessage" id="success"></div>
                  <div class="row">
                    <div class="col-xs-12 col-sm-5 right-space">
                        {!! Form::label('lname', 'Last Name') !!}
                        {!! Form::text('lname', null, ['class'=>'quote-name', 'id'=>'lname']) !!}
                    </div>

                      <div class="col-xs-12 col-sm-5 right-space">
                          {!! Form::label('fname', 'Last Name') !!}
                          {!! Form::text('fname', null, ['class'=>'quote-name', 'id'=>'fname']) !!}
                      </div>
                    <div class="col-xs-12 col-sm-6 left-space">
                        {!! Form::label('address', 'Address') !!}
                        {!! Form::text('address', null, ['class'=>'quote-mail', 'id'=>'address']) !!}
                    </div>
                    <div class="col-xs-12 col-sm-4 right-space">
                        {!! Form::label('phone', 'Phone') !!}
                        {!! Form::text('phone', null, ['class'=>'quote-phone', 'id'=>'phone']) !!}
                    </div>
                    <div class="col-xs-12 col-sm-4 left-space">
                        {!! Form::label('company', 'Company') !!}
                        {!! Form::text('company', null, ['class'=>'quote-city', 'id'=>'company']) !!}
                    </div><br><br><br><br><br><br><br><br>
                    <div class="col-xs-12 col-sm-3 right-space">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::text('email', null, ['class'=>'quote-service', 'id'=>'email']) !!}
                    </div>
                    <div class="col-xs-12 col-sm-3 left-space">
                        {!! Form::label('city', 'City') !!}
                        {!! Form::text('city', null, ['class'=>'quote-subject', 'id'=>'city']) !!}
                    </div>
                      <div class="col-xs-12 col-sm-3 left-space">
                          {!! Form::label('country', 'Country') !!}
                          {!! Form::text('country', null, ['class'=>'quote-subject', 'id'=>'country']) !!}
                      </div>
                      <div class="col-xs-12 col-sm-3 left-space">
                          {!! Form::label('zip', 'Zip Code') !!}
                          {!! Form::text('zip', null, ['class'=>'quote-subject', 'id'=>'zip']) !!}
                      </div>
                      <div class="col-xs-12 col-sm-3 quote-service">
                          {!! Form::label('transaction', 'Transaction') !!}
                          {!! Form::select('transaction',array('import'=>'Import','domestic'=>'Domestic','export'=>'Export'),null, ['class'=>'quote-service', 'id'=>'cars']) !!}
                    </div>
</div>
<hr>
<!--for Shipment-->
 <strong><p>Shipment Details</p></strong>
        <div class="row">
            <div class="col-xs-12 col-sm-2 left-space">
                    <div class="col-xs-12 col-sm-3 quote-service">
                          {!! Form::select('mode',array(''=>'Mode of Transport', 'air'=>'Air', 'oceanlcl'=>'Ocean (LCL)', 'oceanfcl'=>'Ocean (FCL)', 'truck'=>'Trucking'), null, ['class'=>'quote-service', 'id'=>'cars']) !!}
                    </div>  
            </div>
           <div class="col-xs-12 col-sm-2 left-space">
                    <div class="col-xs-12 col-sm-3 quote-service">
                        {!! Form::select('contype',array(''=>'Container Type', 'none'=>'None', '20'=>'20 Ft.', '40'=>'40 ft', 'hq'=>'High Cube' ), null, ['class'=>'quote-service', 'id'=>'cars']) !!}
                    </div>  
                    </div>
                    <div class="col-xs-12 col-sm-2 right-space">
                        {!! Form::text('length', 'Length*', ['class'=>'quote-service', 'id'=>'length']) !!}
                    </div>
                    <div class="col-xs-12 col-sm-2 left-space">
                        {!! Form::text('width', 'Width*', ['class'=>'quote-service', 'id'=>'width']) !!}
                    </div>
                    <br><br><br><br>
                    <div class="col-xs-12 col-sm-2 left-space">
                        {!! Form::text('height', 'Height*', ['class'=>'quote-service', 'id'=>'height']) !!}
                    </div>

                    <div class="col-xs-12 col-sm-2 right-space">
                        {!! Form::text('weight', 'Weight*', ['class'=>'quote-service', 'id'=>'weight']) !!}
                    </div>
                    <div class="col-xs-12 col-sm-2 left-space">
                        {!! Form::text('quantity', 'Quantity*', ['class'=>'quote-service', 'id'=>'quantity']) !!}
                    </div>
                      <div class="col-xs-12 col-sm-3 quote-service">

                          {!! Form::select('commodity',array(''=>'Commodity', 'phone'=>'Phone', 'bag'=>'Bag', 'furniture'=>'Ocean (FCL)', 'truck'=>'Trucking'), null, ['class'=>'quote-service', 'id'=>'cars']) !!}

                    </div>
                   </div>
      
<hr>
<!--for reciever-->
 {{--<strong><p>CONSIGNEE'S FORM</p></strong>--}}
        {{--<div class="row">--}}
                    {{--<div class="col-xs-12 col-sm-5 right-space">--}}
                      {{--<input id="name" class="quote-name" name="con_name" type="text" placeholder="Name*"  ng-model="formData.name" ng-class="{'error' : errorName}"/>--}}
                    {{--</div>--}}

                    {{--<div class="col-xs-12 col-sm-6 right-space">--}}
                      {{--<input id="address" class="quote-mail" type="text" placeholder="Address*" name="con_add" />--}}
                    {{--</div>--}}

                    {{--<div class="col-xs-12 col-sm-4 left-space">--}}
                      {{--<input id="phone" class="quote-phone" name="con_phone" type="text" placeholder="Phone*"  ng-model="formData.phone" ng-pattern="/^[(]{0,1}[0-9]{3}[)\.\- ]{0,1}[0-9]{3}[\.\- ]{0,1}[0-9]{4}$/" ng-class="{'error' : errorPhone}"/>--}}
                    {{--</div>--}}

                    {{--<div class="col-xs-12 col-sm-3   left-space">--}}
                      {{--<input id="city" class="quote-city" type="text" placeholder="Country*"  name="con_country" ng-model="formData.city"  ng-class="{'error' : errorCity}"/>--}}
                    {{--</div>--}}

                    {{--<div class="col-xs-12 col-sm-3 right-space">--}}
                      {{--<input id="email" class="quote-service" type="text" placeholder="Email*"  name="con_email" ng-model="formData.email" ng-pattern = "/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/"  ng-class="{'error' : errorEmail}"/>--}}
                    {{--</div>--}}

                  {{--</div>--}}
                    <div class="col-xs-12">
                      <!--<input id="submit" class="comment-submit qoute-sub" type="submit"  value="submit">-->
                      {!! Form::submit('Request Quote', ['class'=>'quote-service']) !!}
                    </div>
                    {!! Form::close() !!}
                  </div>
                   <div class="error error-msg" ng-class="{'submissionMessage' : submission}" ng-bind="submissionMessage" ng-disabled = "requestForm.$invalid"></div>
                </form>
              </div>
            </div>
              </div>
            </div>
          </div>

@endsection