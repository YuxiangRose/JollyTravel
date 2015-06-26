@extends('layouts.master')
@section('css')
<style>
</style>
@stop

@section('contents')
<div class="container">
  <div class="title">
    <h1>Ticket search</h1>
  </div>
  <div class="update-info">
    <h3>0 files have been convert and updated.</h3>
  </div>
  <div class="sub-container">
    <input class="ticket-field" type="text" name="ticketNumber" value="" placeholder="Please enter ticket number">
    <input type="submit" value="Search"></button>
    <button>Update</button>
  </div>
  <div class="text-field">
    <pre>
1017PZ BAINS TRAVEL LTD                     AN01TARN        IN0001179042
 ETKT     **AGENT COUPON**              61552481       **ITINERARY**
 CHINA SOUTHERN AIRLINES      1 OF 1   6DO9N9/1A   OCZ0330E YVRCAN 20APR
 PARMAR/HARBINDER S MR A         TC                   ELESS46
                                          06MAR14  XCZ0359E CANDEL 21APR
 NONEND PENALTY NOSHOW APPLIES                        ELESS46
 
 
 
 DEL CZ X/CAN CZ YVR27500.00CZ X/CAN CZ DEL18500.0
 0INR46000.00END PD XT1.00XG18.16YQ291.46YR20.00SQ
 52.14JN28.47IN12.26YM23.50IN4.14WO32.80CN
 
 
 INR 46000.00  CAD   835.00 EXCH/7844682885321
 CAD    92.00 CP FCI 1
        25.91 CA CCVI A/C CHECK CAD182.00
       483.93 XT ORIG/7844682885321YVR14FEB1461552481
 CAD   182.00
          784 4683038938 4 PRI FFVV
 7906/                         7840EX     90.00      0.00          92.00
                                                         5.40A        72</pre>
  </div>
</div>
@stop

@section('js')

<script>
  $(document).ready(function() {
    setTimeout(function() {
        $('.update-info').slideUp('slow');
    }, 2000);

    $("button,input[type=submit]").button()
     
  }); //end document ready
</script>
{{-- END PAGE LEVEL JAVASCRIPT --}}
@stop
