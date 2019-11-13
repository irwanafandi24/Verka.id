@extends('layouts.navbar')
<META NAME="robots" CONTENT="all">
  <META NAME="description" CONTENT="Temukan vendor dengan mudah hanya dengan sekali klik, vendor, wisuda, pernikahan, pakaian, business, startup, fotografer, mua, makeup artist">
<title>Verka.id</title>
<link href="{{ asset('css/fotopage.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@section('content')

<!-- main website -->
<div class="container">
  <div class="row justify-content-md-center" style="padding-top: 150px">
    <p class="font-banner">Capture your best moment with Verka, Check out our photographer!</p>
  </div>
</div>
<div class="container" style="padding-bottom: 128px">

  @for ($row = 0; $row < count($list_photographer); $row+=2)
  <div class="row">
    @for ($col = $row; $col < $row+2; $col++)
    <div class="col-md-6 col-lg-6">
      <div class="fotografer-card">
        <div class="row">
            <div class="col-3 col-md-4 col-lg-4">
                <img src="img/photographer/{{$list_photographer[$col]->photo}}.png" alt="" class="img-profile"/>
            </div>
            <div class="col-9 col-md-8 col-lg-8" style="text-align: right;">
                <div class="row align-items-center fotografer-detail">
                    <div class="col-12 col-md-12 col-lg-12 fotografer-name">
                        {{$list_photographer[$col]->name}}
                    </div>
                    <div class="col-12 col-md-12 col-lg-12 font-status">
                        <i>"{{$list_photographer[$col]->quot}}"</i>
                    </div>
                    <div class="col-md-12 col-lg-12 top-part">
                      <div class="row font-sesi align-items-center">
                          <div class="col-12 col-md-6 col-lg-6 top-part-sesi">Sesi Wisuda 1:</div>
                          <div class="col-12 col-md-6 col-lg-6 top-part-status">
                            @if ($list_photographer[$col]->schedule_1 == 1)
                              <p class="service-status-green">Available</p>
                            @elseif ($list_photographer[$col]->schedule_1 == 2)
                              <p class="service-status-orange">Book Progress</p>
                            @elseif ($list_photographer[$col]->schedule_1 == 3)
                              <p class="service-status-red">Full Book</p>
                            @else
                              <p class="service-status-grey">No Schedule</p>
                            @endif
                          </div>
                      </div>
                    </div>
                    <div class="col-md-12 col-lg-12 bottom-part">
                      <div class="row font-sesi align-items-center">
                          <div class="col-12 col-md-6 col-lg-6 bottom-part-sesi">Sesi Wisuda 2:</div>
                          <div class="col-12 col-md-6 col-lg-6 bottom-part-status">
                            @if ($list_photographer[$col]->schedule_2 == 1)
                              <p class="service-status-green">Available</p>
                            @elseif ($list_photographer[$col]->schedule_2 == 2)
                              <p class="service-status-orange">Book Progress</p>
                            @elseif ($list_photographer[$col]->schedule_2 == 3)
                              <p class="service-status-red">Full Book</p>
                            @else
                              <p class="service-status-grey">No Schedule</p>
                            @endif
                          </div>
                      </div>
                    </div>
                    <div class="col-md-12 col-lg-12 bottom-part-three">
                      <div class="row font-sesi align-items-center">
                          <div class="col-12 col-md-6 col-lg-6 bottom-part-sesi">Sesi Wisuda 3:</div>
                          <div class="col-12 col-md-6 col-lg-6 bottom-part-status">
                            @if ($list_photographer[$col]->schedule_3 == 1)
                              <p class="service-status-green">Available</p>
                            @elseif ($list_photographer[$col]->schedule_3 == 2)
                              <p class="service-status-orange">Book Progress</p>
                            @elseif ($list_photographer[$col]->schedule_3 == 3)
                              <p class="service-status-red">Full Book</p>
                            @else
                              <p class="service-status-grey">No Schedule</p>
                            @endif
                          </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>

        <center class="enter-space"><button type="submit" class="btn-book" data-toggle="modal" data-target="#book-modal-{{$list_photographer[$col]->id}}">Book</button></center>

        <div class="container-img ">
            <div class="d-flex flex-row flex-wrap justify-content-center">
                <div class="d-flex flex-column">
                  <a href="" data-toggle="modal" data-target="#img-show-{{$list_photographer[$col]->gallery[0]}}">
                      <img src="img/photographer/{{$list_photographer[$col]->gallery[0]}}.png" class="img-fluid">
                  </a>
                  <a href="" data-toggle="modal" data-target="#img-show-{{$list_photographer[$col]->gallery[1]}}">
                      <img src="img/photographer/{{$list_photographer[$col]->gallery[1]}}.png" class="img-fluid">
                  </a>
                </div>
                <div class="d-flex flex-column">
                  <a href="" data-toggle="modal" data-target="#img-show-{{$list_photographer[$col]->gallery[2]}}">
                      <img src="img/photographer/{{$list_photographer[$col]->gallery[2]}}.png" class="img-fluid">
                  </a>
                  <a href="" data-toggle="modal" data-target="#img-show-{{$list_photographer[$col]->gallery[3]}}">
                      <img src="img/photographer/{{$list_photographer[$col]->gallery[3]}}.png" class="img-fluid">
                  </a>
                </div>
                <div class="d-flex flex-column">
                  <a href="" data-toggle="modal" data-target="#img-show-{{$list_photographer[$col]->gallery[4]}}">
                      <img src="img/photographer/{{$list_photographer[$col]->gallery[4]}}.png" class="img-fluid">
                  </a>
                  <a href="" data-toggle="modal" data-target="#img-show-{{$list_photographer[$col]->gallery[5]}}">
                      <img src="img/photographer/{{$list_photographer[$col]->gallery[5]}}.png" class="img-fluid">
                  </a>
                </div>
            </div>
        </div>
      </div>
    </div>

    <div class="modal modal-img" id="img-show-{{$list_photographer[$col]->gallery[0]}}">
        <img src="img/photographer/{{$list_photographer[$col]->gallery[0]}}.png"/>
        <a class="lightbox-close"href="#"></a>
    </div>
    <div class="modal modal-img" id="img-show-{{$list_photographer[$col]->gallery[1]}}">
         <img src="img/photographer/{{$list_photographer[$col]->gallery[1]}}.png"/>
         <a class="lightbox-close"href="#"></a>
    </div>
    <div class="modal modal-img" id="img-show-{{$list_photographer[$col]->gallery[2]}}">
         <img src="img/photographer/{{$list_photographer[$col]->gallery[2]}}.png"/>
         <a class="lightbox-close"href="#"></a>
    </div>
    <div class="modal modal-img" id="img-show-{{$list_photographer[$col]->gallery[3]}}">
         <img src="img/photographer/{{$list_photographer[$col]->gallery[3]}}.png"/>
         <a class="lightbox-close"href="#"></a>
    </div>
    <div class="modal modal-img" id="img-show-{{$list_photographer[$col]->gallery[4]}}">
         <img src="img/photographer/{{$list_photographer[$col]->gallery[4]}}.png"/>
         <a class="lightbox-close"href="#"></a>
    </div>
    <div class="modal modal-img" id="img-show-{{$list_photographer[$col]->gallery[5]}}">
         <img src="img/photographer/{{$list_photographer[$col]->gallery[5]}}.png"/>
         <a class="lightbox-close"href="#"></a>
    </div>

    <!-- modal -->
    <div class="modal fade" id="book-modal-{{$list_photographer[$col]->id}}" tabindex="-1" role="dialog" aria-labelledby="book-modal-label-{{$list_photographer[$col]->id}}" aria-hidden="true">
       <div class="modal-dialog" role="document">
         <div class="modal-content almost-card" style="padding: 7px;">
           <div class="modal-header" style="border-bottom: none;">
             <i class="fa fa-circle circle"></i>
             <h5 class="modal-title title-modal" id="book-modal-label-{{$list_photographer[$col]->id}}">Book Photographer</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <p class="modal-status"> Almost there to have a professional capture<br> your moment</p>

           <div class="modal-body" style="margin-top: -10px; padding-bottom: 0px;">
             <form id="formBook-{{$list_photographer[$col]->id}}" method="post" action="{{ route('PhotographerBook') }}">
               @csrf
               <div class="form-group">
                 <label for="order_fullName">Full Name</label>
                 <input type="text" class="form-control" id="order_fullName-{{$list_photographer[$col]->id}}" name="order_fullName_{{$list_photographer[$col]->id}}" placeholder="Input your full name" required>
               </div>
               <div class="form-group">
                 <label for="order_major">Major</label>
                 <input type="text" class="form-control" id="order_major-{{$list_photographer[$col]->id}}" name="order_major_{{$list_photographer[$col]->id}}" placeholder="eg: FIF - Informatika" required>
               </div>

               <div class="form-row">
                 <div class="form-group col-12 col-md-6">
                   <label for="order_phoneNumber">Phone Number</label>
                   <input type="text" class="form-control" id="order_phoneNumber-{{$list_photographer[$col]->id}}" name="order_phoneNumber_{{$list_photographer[$col]->id}}" placeholder="Input your phone number" required>
                 </div>
                 <div class="form-group col-12 col-md-6">
                     <label for="order_lineID">LINE ID</label>
                     <input type="text" class="form-control" id="order_lineID-{{$list_photographer[$col]->id}}" name="order_lineID_{{$list_photographer[$col]->id}}" placeholder="Input your LINE ID" required>
                   </div>
               </div>

               <div class="form-group">
                   <label for="order_address">Address</label>
                   <input type="text" class="form-control" id="order_address-{{$list_photographer[$col]->id}}" name="order_address_{{$list_photographer[$col]->id}}" placeholder="Input your address" required>
               </div>

               <div class="form-group">
                  <label for="order_schedule">Session</label>
                  <select id="order_schedule-{{$list_photographer[$col]->id}}" name="order_schedule_{{$list_photographer[$col]->id}}" class="form-control" required>
                    <option selected>Pick yout book Sessions</option>
                    @if ($list_photographer[$col]->schedule_1 == 1)
                      <option>Jumat, 29 November 2019 (06.00-10.30) | Wisuda 1 </option>
                    @endif
                    @if ($list_photographer[$col]->schedule_2 == 1)
                      <option>Sabtu, 29 November 2019 (06.00-10.30) &nbsp;| Wisuda 2 </option>
                    @endif
                    @if ($list_photographer[$col]->schedule_3 == 1)
                      <option>Sabtu, 29 November 2019 (12.30-16.00) &nbsp;| Wisuda 3 </option>
                    @endif
                  </select>
               </div>

               <div style='visibility:hidden'>
                 <input type="text" class="form-control" id="photographer_id-{{$list_photographer[$col]->id}}" name="photographer_id_{{$list_photographer[$col]->id}}" value='{{$list_photographer[$col]->id}}'>
               </div>

               <div style='visibility:hidden'>
                 <input type="text" class="form-control" id="order_photographer-{{$list_photographer[$col]->id}}" name="order_photographer_{{$list_photographer[$col]->id}}" value='{{$list_photographer[$col]->name}}'>
               </div>
               <div class="form-group">
                 <button id="orderBtn-{{$list_photographer[$col]->id}}" type="button" class="btn-book-inner" data-toggle="modal" data-target="#bookDetail-{{$list_photographer[$col]->id}}" data-dismiss="modal">Book Now</button>
               </div>
             </form>
           </div>
         </div>
       </div>
     </div>
   <!-- </form> -->

   <!-- book detail -->
    <div class="modal fade" id="bookDetail-{{$list_photographer[$col]->id}}" tabindex="-1" role="dialog" aria-labelledby="bookDetail-label" aria-hidden="true">
       <div class="modal-dialog" role="document">
         <div class="modal-content almost-card" style="padding: 7px;">
             <div class="modal-header" style="border-bottom: none;">
               <i class="fa fa-circle circle"></i>
               <h5 class="modal-title title-modal" id="bookDetail-label">Booking Summary</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <p class="modal-status-detail"> Customer Detail</p>

               <div class="modal-body" style="margin-top: -10px; padding-bottom: 0px;">
                 <table>
                   <tr>
                     <td class="detail-field">Nama</td>
                     <td id="fullNameConfirmation-{{$list_photographer[$col]->id}}"></td>
                   </tr>
                   <tr>
                     <td class="detail-field">Major</td>
                     <td id="majorConfirmation-{{$list_photographer[$col]->id}}"></td>
                   </tr>
                   <tr>
                     <td class="detail-field">Phone</td>
                     <td id="phoneConfirmation-{{$list_photographer[$col]->id}}"></td>
                   </tr>
                   <tr>
                     <td class="detail-field">LINE ID</td>
                     <td id="lineIDConfirmation-{{$list_photographer[$col]->id}}"></td>
                   </tr>
                   <tr>
                     <td class="detail-field">Address</td>
                     <td id="addressConfirmation-{{$list_photographer[$col]->id}}"></td>
                   </tr>
                 </table>
                 <p class="modal-status-fotografer-{{$list_photographer[$col]->id}}">Photographer Detail</p>
                 <table>
                   <tr>
                     <td class="detail-field">Identity</td>
                     <td id="photographerConfirmation-{{$list_photographer[$col]->id}}"></td>
                   </tr>
                   <tr style="border-bottom: none;">
                     <td class="detail-field">Booking Session</td>
                     <td id="scheduleConfirmation-{{$list_photographer[$col]->id}}"></td>
                   </tr>
                 </table>
               </div>
               <div class="payment">
                 <table>
                   <tr style="border-bottom: none;">
                     <td class="detail-field" style="width: 50%; color: #6B6B6B;">Total Payment</td>
                     <td style="padding-left: 9%; font-weight: bold; color: #d1223b;">Rp 300.000 / Sessions</td>
                   </tr>
                 </table>
               </div>
               <button type="submit" class="btn-book-inner-two" data-toggle="modal" data-target="#paymentDetail-{{$list_photographer[$col]->id}}">Pay Now</button>
         </div>
       </div>
     </div>
     <!-- finish transaction -->

     <!-- book detail -->
    <div class="modal fade" id="paymentDetail-{{$list_photographer[$col]->id}}" tabindex="-1" role="dialog" aria-labelledby="paymentDetail-label" aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content almost-card" style="padding: 7px;">
         <div class="modal-header" style="border-bottom: none;">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>

         <div class="modal-body" style="margin-top: -10px; padding-bottom: 0px;">
           <div class="row">
             <div class=" col-md-6 col-lg-6 offset-md-3 offset-lg-3 offset-2 d-none d-sm-block">
               <center><img src="img/payment.png"/></center>
             </div>
           <div class="row last-step-font">
             <div class="col-12 col-md-12 col-lg12 last-top">
               Almost there
             </div>
             <div class="col-12 col-md-12 col-lg12 almost-word">
              Last step to get your moment capture,<br>
              your booking will expired in 4 hours.<br>Finish your booking now
             </div>
             <div class="col-12 col-md-12 col-lg12 last-bottom">
               How to pay
             </div>
           </div>
           <table class="tb-payment-method">
             <tr class="payment-tr">
               <td class="detail-payment td-payment">1.</td>
               <td class="td-payment">Pastikan jadwal yang anda pesan telah sesuai dengan sesi wisuda anda.</td>
             </tr>
             <tr class="payment-tr">
               <td class="detail-payment td-payment">2.</td>
               <td class="td-payment">Lakukan pembayaran ke no.Rek <b><i style="color: #767575">1410015379738</i></b> ( Bank Mandiri ) atas nama Audi Isra Eprillia dengan jumlah uang sesuai dengan tagihan</td>
             </tr>
             <tr class="payment-tr">
               <td class="detail-payment td-payment">3.</td>
               <td class="td-payment">Foto bukti transaksi anda.</td>
             </tr>
             <tr class="payment-tr">
               <td class="detail-payment td-payment">4.</td>
               <td class="td-payment">Konfirmasi pembayaran anda dengan menghubungi <br>OA LINE Verka.id</td>
             </tr>
             </table>
           <button id="payBtn-{{$list_photographer[$col]->id}}" type="submit" class="btn-book-inner-two" >Booking Completed</button>
         </div>
         </div>
       </div>
       </div>
     </div>

    @endfor
    </div>
  @endfor


</div>
@include('layouts.footer')

<script type="text/javascript">
// var x = document.getElementById("lastId");
// document.write(x);

var x = ["1", "5"];

$.each(x, function(index, x) {
  $("#orderBtn-" + x).click(function() {
       $("#fullNameConfirmation-" + x).text($("#order_fullName-" + x).val());
       $("#majorConfirmation-" + x).text($("#order_major-" + x).val());
       $("#phoneConfirmation-" + x).text($("#order_phoneNumber-" + x).val());
       $("#lineIDConfirmation-" + x).text($("#order_lineID-" + x).val());
       $("#addressConfirmation-" + x).text($("#order_address-" + x).val());
       $("#photographerConfirmation-" + x).text($("#order_photographer-" + x).val());
       $("#scheduleConfirmation-" + x).text($("#order_schedule-" + x).val());
  });

  $("#payBtn-" + x).click(function(){
      $("#formBook-" + x).submit();
  });
});

//

// $('#orderBtn-1').click(function() {
//      $('#fullNameConfirmation').text($('#order_fullName-1').val());
//      $('#majorConfirmation').text($('#order_major-1').val());
//      $('#phoneConfirmation').text($('#order_phoneNumber-1').val());
//      $('#lineIDConfirmation').text($('#order_lineID-1').val());
//      $('#addressConfirmation').text($('#order_address-1').val());
//      $('#photographerConfirmation').text($('#order_photographer-1').val());
//      $('#scheduleConfirmation').text($('#order_schedule-1').val());
// });
//
// $('#payBtn').click(function(){
//     $('#formBook-1').submit();
// });
//
//
// $('#orderBtn-5').click(function() {
//      $('#fullNameConfirmation').text($('#order_fullName-5').val());
//      $('#majorConfirmation').text($('#order_major-5').val());
//      $('#phoneConfirmation').text($('#order_phoneNumber-5').val());
//      $('#lineIDConfirmation').text($('#order_lineID-5').val());
//      $('#addressConfirmation').text($('#order_address-5').val());
//      $('#photographerConfirmation').text($('#order_photographer-5').val());
//      $('#scheduleConfirmation').text($('#order_schedule-5').val());
// });
//
// $('#payBtn').click(function(){
//     $('#formBook-5').submit();
// });

</script>


@endsection
