<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8"/>

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<link rel="stylesheet" href="{{url('/pdf/base.min.css')}}"/>
<link rel="stylesheet" href="{{url('/pdf/fancy.min.css')}}"/>
<link rel="stylesheet" href="{{url('/pdf/main.css')}}"/>
<style>
.bi.x6.y2f.w1.ha{
top:25%;
}
.x4 {
    left: 240.390000px;
}

.fs6 {
    font-size: 50.000000px !important;
    font-family: monospace !important;
}
.y72{
    bottom: 60px;
}
</style>
<title></title>
</head>
<body>
<div id="sidebar">
<div id="outline">
</div>
</div>
<div id="page-container">
<div id="pf1" class="pf w0 h0" data-page-no="1"><div class="pc pc1 w0 h0"><img class="bi x0 y0 w0 h0" alt="" src="{{url('/pdf/bg1.png')}}"/><div class="t m0 x1 h1 y1 ff1 fs0 fc0 sc0 ls0 ws0">Page <span class="ws1">1 <span class="ff2">of 17</span></span></div><div class="t m0 x2 h2 y2 ff3 fs1 fc1 sc0 ls0 ws1">Verify Customer Info</div><div class="t m0 x3 h3 y3 ff4 fs2 fc1 sc0 ls0 ws1">Vehicle Inspection Report</div><div class="c x0 y4 w0 h4"><div class="t m0 x4 h5 y5 fs6 fs3 fc1 sc0 ls0 ws1">{{date_format(date_create($report->inspection_date),'F d, Y')}}</div></div><div class="t m0 x5 h5 y6 ff6 fs3 fc2 sc0 ls0 ws1" style="left: auto;">       Requested<span class="ff7"> by: </span> <span class="fs6">{{$ins_request->requester}}</span></div><div class="t m0 x5 h5 y7 ff6 fs3 fc2 sc0 ls0 ws1" style="left: auto;">       Organization<span class="ff7">: <span class="fs6">{{$ins_request->organisation->name}}</span></span></div></div><div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div>
<div id="pf2" class="pf w0 h0" data-page-no="2"><div class="pc pc2 w0 h0"><div class="t m0 x1 h1 y9 ff1 fs0 fc0 sc0 ls0 ws0">Page <span class="ws1">2 <span class="ff2">of 17</span></span></div><div class="t m0 x6 h7 ya ff8 fs4 fc1 sc0 ls0 ws1">Introduction</div><div class="t m0 x6 h8 yb ff9 fs5 fc3 sc0 ls0 ws1">Owner<span class="ffa"> Name<span class="ffb"> </span></span></div><div class="t m0 x6 h9 yc ffc fs6 fc4 sc0 ls0 ws1">{{$report->owner}}</div><div class="t m0 x6 h8 yd ffd fs5 fc3 sc0 ls0 ws1">Inspection Date<span class="ffe ws2"> </span></div><div class="t m0 x6 h9 ye fff fs6 fc4 sc0 ls0 ws1">{{date_format(date_create($report->inspection_date),'F d, Y')}}</div><div class="t m0 x7 h8 yf ff10 fs5 fc3 sc0 ls0 ws1">Contact Phone<span class="ff11 ws2"> </span></div><div class="t m0 x7 h9 y10 ff12 fs6 fc4 sc0 ls0 ws1">{{$report->contact_phone}}</div><div class="t m0 x7 h8 y11 ff10 fs5 fc3 sc0 ls0 ws1">Address<span class="ff11 ws3"> </span></div><div class="t m0 x7 h9 y12 ff13 fs6 fc4 sc0 ls0 ws1">{{$report->address}}</div><div class="t m0 x7 h8 y13 ff10 fs5 fc3 sc0 ls0 ws1">Email<span class="ff11 ws2"> </span></div><div class="t m0 x7 h9 y14 ff12 fs6 fc4 sc0 ls0 ws1">{{$report->email}}</div><div class="t m0 x7 h8 y15 ff10 fs5 fc3 sc0 ls0 ws1">Color<span class="ff11 ws3"> </span></div><div class="t m0 x7 h9 y16 ff13 fs6 fc4 sc0 ls0 ws1">{{$report->color}}</div><div class="t m0 x7 h8 y17 ff10 fs5 fc3 sc0 ls0 ws1">Chassis/VIN Number<span class="ff11 ws2"> </span></div><div class="t m0 x7 h9 y18 ff12 fs6 fc4 sc0 ls0 ws1">{{$report->chasis_number}}</div><div class="t m0 x7 h8 y19 ff10 fs5 fc3 sc0 ls0 ws1">Engine Number<span class="ff11 ws3"> </span></div><div class="t m0 x7 h9 y1a ff13 fs6 fc4 sc0 ls0 ws1">{{$report->engine_number}}</div><div class="t m0 x7 h8 y1b ff10 fs5 fc3 sc0 ls0 ws1">Odometer Reading<span class="ff11 ws4"> </span></div><div class="t m0 x7 h9 y1c ff13 fs6 fc4 sc0 ls0 ws1">{{$report->odometer_reading}}</div></div><div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div>
<div id="pf3" class="pf w0 h0" data-page-no="3"><div class="pc pc3 w0 h0"><div class="t m0 x8 h1 y1d ff1 fs0 fc0 sc0 ls0 ws0">Page <span class="ff14 ws1">3</span><span class="ws5"> <span class="ff2 ws1">of 17</span></span></div><div class="t m0 x9 h7 y1e ff15 fs4 fc1 sc0 ls0 ws1">Body Integrity</div><div class="t m0 x9 h8 y1f ff16 fs5 fc3 sc0 ls0 ws1">Driver&apos;s Seat<span class="ffb"> </span></div><div class="t m0 x9 h9 y20 ffc fs6 fc4 sc0 ls0 ws1">{{$report->body_integrity['Drivers Seat']}}</div><div class="t m0 x9 h8 y21 ff16 fs5 fc3 sc0 ls0 ws1">Doors<span class="ffe ws6"> </span></div><div class="t m0 x9 h9 y22 fff fs6 fc4 sc0 ls0 ws1">{{$report->body_integrity['Doors']}}</div><div class="t m0 xa h8 y23 ff16 fs5 fc3 sc0 ls0 ws1">Seat Belts<span class="ff11 ws7"> </span></div><div class="t m0 xa h9 y24 ff12 fs6 fc4 sc0 ls0 ws1">{{$report->body_integrity['Seat Belts']}}</div><div class="t m0 xa h8 y25 ff16 fs5 fc3 sc0 ls0 ws1">Reflex Reflectors<span class="ff11"> </span></div><div class="t m0 xa h9 y26 ff13 fs6 fc4 sc0 ls0 ws1">{{$report->body_integrity['Reflex Reflectors']}}</div><div class="t m0 xa h8 y27 ff17 fs5 fc3 sc0 ls0 ws1">Floors</div><div class="t m0 xa h9 y28 ff18 fs6 fc4 sc0 ls0 ws1">{{$report->body_integrity['Floors']}}</div><div class="t m0 xa h8 y29 ff17 fs5 fc3 sc0 ls0 ws8">Bumpers </div><div class="t m0 xa h9 y2a ff13 fs6 fc4 sc0 ls0 ws1">{{$report->body_integrity['Bumpers']}}</div><div class="t m0 xa h8 y2b ff17 fs5 fc3 sc0 ls0 ws1">Airbag Driver<span class="ff11 ws9"> </span></div><div class="t m0 xa h9 y2c ff12 fs6 fc4 sc0 ls0 ws1">{{$report->body_integrity['Airbag Driver']}}</div><div class="t m0 xa h8 y2d ff17 fs5 fc3 sc0 ls0 ws1">Airbag Passenger<span class="ff11"> </span></div><div class="t m0 xa h9 y2e ff13 fs6 fc4 sc0 ls0 ws1">{{$report->body_integrity['Airbag Passenger']}}</div></div><div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div>
<div id="pf4" class="pf w0 h0" data-page-no="4"><div class="pc pc4 w0 h0"><img class="bi x6 y2f w1 ha" alt="" src="{{url('storage/'.$report->body_integrity['Full Left Side'])}}"/><div class="t m0 xb h1 y30 ff1 fs0 fc0 sc0 ls0 ws0">Page <span class="ff19 ws1">4</span><span class="ws5"> <span class="ff2 ws1">of 17</span></span></div><div class="t m0 x6 h7 y31 ff15 fs4 fc1 sc0 ls0 ws1">Body Integrity</div><div class="t m0 xd h5 y32 ff1a fs3 fc4 sc0 ls0 ws1">Full Left Side<span class="ff1b wsa"> </span></div></div><div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div>
<div id="pf5" class="pf w0 h0" data-page-no="5"><div class="pc pc5 w0 h0"><img class="bi x6 y2f w1 ha" alt="" src="{{url('storage/'.$report->body_integrity['Full Right Side'])}}"/><div class="t m0 xb h1 y30 ff1c fs0 fc0 sc0 ls0 ws0">Page <span class="ff1d ws1">5</span><span class="ws5"> <span class="ff2 ws1">of 17</span></span></div><div class="t m0 x6 h7 y31 ff1e fs4 fc1 sc0 ls0 ws1">Body Integrity</div><div class="t m0 xd h5 y32 ff1f fs3 fc4 sc0 ls0 ws1">Full Right Side</div></div><div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div>
<div id="pf6" class="pf w0 h0" data-page-no="6"><div class="pc pc6 w0 h0"><img class="bi x6 y2f w1 ha" alt="" src="{{url('storage/'.$report->body_integrity['Back with License Plate'])}}"/><div class="t m0 xb h1 y30 ff20 fs0 fc0 sc0 ls0 ws0">Page <span class="ff1d ws1">6</span><span class="ws5"> <span class="ff2 ws1">of 17</span></span></div><div class="t m0 x6 h7 y31 ff21 fs4 fc1 sc0 ls0 ws1">Body Integrity</div><div class="t m0 xd h5 y32 ff1f fs3 fc4 sc0 ls0 ws1">Back with License Plate</div></div><div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div>
<div id="pf7" class="pf w0 h0" data-page-no="7"><div class="pc pc7 w0 h0"><img class="bi x6 y2f w1 ha" alt="" src="{{url('storage/'.$report->body_integrity['Front with License Plate'])}}"/><div class="t m0 xb h1 y30 ff22 fs0 fc0 sc0 ls0 ws0">Page <span class="ff1d ws1">7</span><span class="ws5"> <span class="ff2 ws1">of 17</span></span></div><div class="t m0 x6 h7 y31 ff23 fs4 fc1 sc0 ls0 ws1">Body Integrity</div><div class="t m0 xd h5 y32 ff1f fs3 fc4 sc0 ls0 ws1">Front with License Plate</div></div><div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div>
<div id="pf8" class="pf w0 h0" data-page-no="8"><div class="pc pc8 w0 h0"><img class="bi x6 y2f w1 ha" alt="" src="{{url('storage/'.$report->body_integrity['Interior Front'])}}"/><div class="t m0 xb h1 y30 ff24 fs0 fc0 sc0 ls0 ws0">Page <span class="ff1d ws1">8</span><span class="ws5"> <span class="ff2 ws1">of 17</span></span></div><div class="t m0 x6 h7 y31 ff25 fs4 fc1 sc0 ls0 ws1">Body Integrity</div><div class="t m0 xd h5 y32 ff1f fs3 fc4 sc0 ls0 ws1">Interior Front</div></div><div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div>
<div id="pf9" class="pf w0 h0" data-page-no="9"><div class="pc pc9 w0 h0"><img class="bi x6 y2f w1 ha" alt="" src="{{url('storage/'.$report->body_integrity['Interior Back'])}}"/><div class="t m0 xb h1 y30 ff26 fs0 fc0 sc0 ls0 ws0">Page <span class="ff1d ws1">9</span><span class="ws5"> <span class="ff2 ws1">of 17</span></span></div><div class="t m0 x6 h7 y31 ff27 fs4 fc1 sc0 ls0 ws1">Body Integrity</div><div class="t m0 xd h5 y32 ff1f fs3 fc4 sc0 ls0 ws1">Interior Back</div></div><div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div>
<div id="pfa" class="pf w0 h0" data-page-no="a"><div class="pc pca w0 h0"><img class="bi x6 y2f w1 ha" alt="" src="{{url('storage/'.$report->body_integrity['Chasis'])}}"/><div class="t m0 xb h1 y30 ff28 fs0 fc0 sc0 ls0 ws0">Page <span class="ff1d ws1">10</span><span class="ws5"> <span class="ff2 ws1">of 17</span></span></div><div class="t m0 x6 h7 y31 ff29 fs4 fc1 sc0 ls0 ws1">Body Integrity</div><div class="t m0 xd h5 y32 ff1f fs3 fc4 sc0 ls0 ws1">Chasis</div></div><div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div>
<div id="pfb" class="pf w0 h0" data-page-no="b"><div class="pc pcb w0 h0"><img class="bi x6 y2f w1 ha" alt="" src="{{url('storage/'.$report->body_integrity['Trunk'])}}"/><div class="t m0 xb h1 y30 ff2a fs0 fc0 sc0 ls0 ws0">Page <span class="ff1d ws1">11</span><span class="ws5"> <span class="ff2 ws1">of 17</span></span></div><div class="t m0 x6 h7 y31 ff2b fs4 fc1 sc0 ls0 ws1">Body Integrity</div><div class="t m0 xd h5 y32 ff2c fs3 fc4 sc0 ls0 ws1">Trunk</div></div><div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div>
<div id="pfc" class="pf w0 h0" data-page-no="c"><div class="pc pcc w0 h0"><img class="bi x6 y2f w1 ha" alt="" src="{{url('storage/'.$report->body_integrity['Spare Tyre'])}}"/><div class="t m0 xb h1 y30 ff2d fs0 fc0 sc0 ls0 ws0">Page <span class="ff1d ws1">12</span><span class="ws5"> <span class="ff2 ws1">of 17</span></span></div><div class="t m0 x6 h7 y31 ff2e fs4 fc1 sc0 ls0 ws1">Body Integrity</div><div class="t m0 xd h5 y32 ff2f fs3 fc4 sc0 ls0 ws1">Spare Tyre</div></div><div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div>
<div id="pfd" class="pf w0 h0" data-page-no="d"><div class="pc pcd w0 h0"><img class="bi x0 y8 w0 h6" alt="" src="bgd.png"/><div class="t m0 x1 h1 y9 ff30 fs0 fc0 sc0 ls0 ws0">Page <span class="ff31 ws1">13</span><span class="ws5"> <span class="ff2 ws1">of 17</span></span></div><div class="t m0 x6 h7 ya ff32 fs4 fc1 sc0 ls0 ws1">Vehicle Information</div><div class="t m0 x6 h8 y33 ff33 fs5 fc3 sc0 ls0 ws1">Number of Keys<span class="ff34"> </span></div><div class="t m0 x6 h9 y34 ff35 fs6 fc4 sc0 ls0 ws1">{{$report->vehicle_information['keys']}}</div><div class="t m0 x6 h8 y35 ff33 fs5 fc3 sc0 ls0 ws1">Usage Status<span class="ff36 ws6"> </span></div><div class="t m0 x6 h9 y36 ff37 fs6 fc4 sc0 ls0 ws1">{{$report->vehicle_information['Usage Status']}}</div><div class="t m0 x7 h8 y37 ff38 fs5 fc3 sc0 ls0 ws1">Plate Number<span class="ff39 ws7"> </span></div><div class="t m0 x7 h9 y38 ff3a fs6 fc4 sc0 ls0 ws1">{{$report->vehicle_information['Plate Number']}}</div><div class="t m0 x7 h8 y11 ff38 fs5 fc3 sc0 ls0 ws1">Year<span class="ff39"> </span></div><div class="t m0 x7 h9 y12 ff3b fs6 fc4 sc0 ls0 ws1">{{$report->vehicle_information['Year']}}</div><div class="t m0 x7 h8 y39 ff3c fs5 fc3 sc0 ls0 ws1">Make<span class="ff39"> </span></div><div class="t m0 x7 h9 y3a ff3a fs6 fc4 sc0 ls0 ws1">{{$report->vehicle_information['Make']}}</div><div class="t m0 x7 h8 y15 ff3c fs5 fc3 sc0 ls0 ws1">Model<span class="ff39 ws8"> </span></div><div class="t m0 x7 h9 y16 ff3b fs6 fc4 sc0 ls0 ws1">{{$report->vehicle_information['Model']}}</div><div class="t m0 x7 h8 y3b ff3c fs5 fc3 sc0 ls0 ws1">Engine Capacity<span class="ff39 ws9"> </span></div><div class="t m0 x7 h9 y3c ff3a fs6 fc4 sc0 ls0 ws1">{{$report->vehicle_information['Capacity']}}</div><div class="t m0 xe h8 y3d ff3d fs5 fc3 sc0 ls0 ws1">Do the Keys Start the Car<span class="ff39"> </span></div><div class="t m0 xe h9 y3e ff3b fs6 fc4 sc0 ls0 ws1">{{$report->vehicle_information['Do the Keys Start the Car']}}</div><div class="t m0 x7 h8 y3f ff3d fs5 fc3 sc0 ls0 ws1">Seat Belt Present<span class="ff39"> </span></div><div class="t m0 x7 h9 y40 ff3b fs6 fc4 sc0 ls0 ws1">{{$report->vehicle_information['Seat Belt Present']}}</div><div class="t m0 xf hb y41 ff3e fs5 fc3 sc0 ls0 ws1">Portable Fire Extinguisher</div><div class="t m0 xf h9 y42 ff3a fs6 fc4 sc0 ls0 ws1">{{$report->vehicle_information['Portable Fire Extinguisher']}}</div><div class="t m0 xf h8 y43 ff3f fs5 fc3 sc0 ls0 ws1">Security System Installed<span class="ff39"> </span></div><div class="t m0 xf h9 y44 ff3b fs6 fc4 sc0 ls0 ws1">{{$report->vehicle_information['Security System/Immobilizer Installed']}}</div><div class="t m0 xf h8 y45 ff3f fs5 fc3 sc0 ls0 ws1">Vehicle Tracking System Installed <span class="ff39 ws9"> </span></div><div class="t m0 xf h9 y46 ff3a fs6 fc4 sc0 ls0 ws1">{{$report->vehicle_information['Vehicle Tracking System Installed']}}</div><div class="t m0 x10 h8 y47 ff3f fs5 fc3 sc0 ls0 ws1">Date of Purchase<span class="ff39"> </span></div><div class="t m0 x10 h9 y48 ff3b fs6 fc4 sc0 ls0 ws1">{{$report->vehicle_information['Date of Purchase']}}</div><div class="t m0 xf h8 y49 ff3f fs5 fc3 sc0 ls0 ws1">Maintenance Plan </div><div class="t m0 xf h8 y4a ff3f fs5 fc3 sc0 ls0 ws1">(Garage &amp; Last Service)<span class="ff39 wsb"> </span></div><div class="t m0 xf h9 y4b ff3b fs6 fc4 sc0 ls0 ws1">{{$report->vehicle_information['Maintenance Plan (Garage & Last Service)']}}</div></div><div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div>
<div id="pfe" class="pf w0 h0" data-page-no="e">
            <div class="pc pce w0 h0"><img class="bi x6 y2f w1 ha" alt="" src="{{url('storage/'.$report->vehicle_information['Vehicle Papers'])}}" />
                <div class="t m0 xb h1 y30 ff40 fs0 fc0 sc0 ls0 ws0">Page <span class="ff41 ws1">1<span class="ff42">4</span></span><span class="ws5"> <span class="ff2 ws1">of 17</span></span>
                </div>
                <div class="t m0 x6 h7 ya ff32 fs4 fc1 sc0 ls0 ws1">Vehicle Information</div>
                <div class="t m0 xd h5 y32 ff44 fs3 fc4 sc0 ls0 ws1">Vehicle Papers</div>
            </div>
            <div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div>
        </div>
        <div id="pff" class="pf w0 h0" data-page-no="f">
            <div class="pc pcf w0 h0"><img class="bi x6 y2f w1 ha" alt="" src="{{url('storage/'.$report->vehicle_information['Purchase Receipt'])}}" />
                <div class="t m0 xb h1 y30 ff45 fs0 fc0 sc0 ls0 ws0">Page <span class="ff41 ws1">15</span><span class="ws5"> <span class="ff2 ws1">of 17</span></span>
                </div>
                <div class="t m0 x6 h7 ya ff32 fs4 fc1 sc0 ls0 ws1">Vehicle Information</div>
                <div class="t m0 xd h5 y32 ff44 fs3 fc4 sc0 ls0 ws1">Purchase Receipt (Change of Ownership Doc)</div>
            </div>
            <div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div>
        </div>
        <div id="pf10" class="pf w0 h0" data-page-no="10">
            <div class="pc pc10 w0 h0"><img class="bi x0 y8 w0 h6" alt="" src="bg10.png" />
                <div class="t m0 x1 h1 y9 ff47 fs0 fc0 sc0 ls0 ws0">Page <span class="ff48 ws1">1<span class="ff49">6</span></span><span class="ws5"> <span class="ff2 ws1">of 17</span></span>
                </div>
                <div class="t m0 x6 h7 ya ff4a fs4 fc1 sc0 ls0 ws1">Driver&apos;s Controls</div>
                <div class="t m0 x6 h8 y33 ff4b fs5 fc3 sc0 ls0 ws1">Vehicle Mobility Test</div>
                <div class="t m0 x6 h9 y34 ff4c fs6 fc4 sc0 ls0 ws1">{{$report->drivers_controls['Vehicle Mobility Test']}}</div>
                <div class="t m0 x6 h8 y4c ff4b fs5 fc3 sc0 ls0 ws1">Horn<span class="ff4d"> </span></div>
                <div class="t m0 x6 h9 y4d ff4e fs6 fc4 sc0 ls0 ws1">{{$report->drivers_controls['Horn']}}</div>
                <div class="t m0 x7 h8 y4e ff4f fs5 fc3 sc0 ls0 ws1">Mirrors</div>
                <div class="t m0 x7 h9 y4f ff50 fs6 fc4 sc0 ls0 ws1">{{$report->drivers_controls['Mirrors']}}</div>
                <div class="t m0 x7 h8 y11 ff4f fs5 fc3 sc0 ls0 ws1">Windshield Wipers<span class="ff51"> </span></div>
                <div class="t m0 x7 h9 y12 ff52 fs6 fc4 sc0 ls0 ws1">{{$report->drivers_controls['Windshield Wipers']}}</div>
                <div class="t m0 x7 h8 y50 ff53 fs5 fc3 sc0 ls0 ws1">Windshield and Windows<span class="ff51"> </span></div>
                <div class="t m0 x7 h9 y51 ff50 fs6 fc4 sc0 ls0 ws1">{{$report->drivers_controls['Windshield and Windows']}}</div>
                <div class="t m0 x7 h8 y15 ff53 fs5 fc3 sc0 ls0 ws1">Windshield Defroster<span class="ff51"> </span></div>
                <div class="t m0 x7 h9 y16 ff52 fs6 fc4 sc0 ls0 ws1">{{$report->drivers_controls['Windshield Defroster']}}</div>
                <div class="t m0 x7 h8 y52 ff54 fs5 fc3 sc0 ls0 ws1">Visors</div>
                <div class="t m0 x7 h9 y53 ff50 fs6 fc4 sc0 ls0 ws1">{{$report->drivers_controls['Visors']}}</div>
                <div class="t m0 xe h8 y54 ff55 fs5 fc3 sc0 ls0 ws1">Interior Heaters</div>
                <div class="t m0 xe h9 y55 ff52 fs6 fc4 sc0 ls0 ws1">{{$report->drivers_controls['Interior Heaters']}}</div>
                <div class="t m0 xe h8 y56 ff56 fs5 fc3 sc0 ls0 ws1">Break Pedal Reserve and Leakage Test</div>
                <div class="t m0 xe h9 y57 ff52 fs6 fc4 sc0 ls0 ws1">{{$report->drivers_controls['Break Pedal Reserve and Leakage Test']}}</div>
                <div class="t m0 x5 h8 y58 ff57 fs5 fc3 sc0 ls0 ws1">Power Break Operation</div>
                <div class="t m0 x5 h9 y59 ff58 fs6 fc4 sc0 ls0 ws1">{{$report->drivers_controls['Power Break Operation']}}</div>
                <div class="t m0 x5 h8 y5a ff56 fs5 fc3 sc0 ls0 ws1">Parking Break<span class="ff51"> </span></div>
                <div class="t m0 x5 h9 y5b ff52 fs6 fc4 sc0 ls0 ws1">{{$report->drivers_controls['Parking Break']}}</div>
                <div class="t m0 x11 h8 y5c ff56 fs5 fc3 sc0 ls0 ws1">Steering Lash and Travel<span class="ff51 ws9"> </span></div>
                <div class="t m0 x11 h9 y5d ff50 fs6 fc4 sc0 ls0 ws1">{{$report->drivers_controls['Steering Lash and Travel']}}</div>
                <div class="t m0 x11 h8 y5e ff56 fs5 fc3 sc0 ls0 ws1">Power Steering<span class="ff51"> </span></div>
                <div class="t m0 x11 h9 y5f ff52 fs6 fc4 sc0 ls0 ws1">{{$report->drivers_controls['Power Steering']}}</div>
                <div class="t m0 x11 h8 y60 ff56 fs5 fc3 sc0 ls0 ws1">Handle Bars<span class="ff51 wsb"> </span></div>
                <div class="t m0 x11 h9 y61 ff52 fs6 fc4 sc0 ls0 ws1">{{$report->drivers_controls['Handle Bars']}}</div>
                <div class="t m0 x11 h8 y62 ff56 fs5 fc3 sc0 ls0 ws1">Accelerator Pedal<span class="ff51 wsc"> </span></div>
                <div class="t m0 x11 h9 y63 ff52 fs6 fc4 sc0 ls0 ws1">{{$report->drivers_controls['Accelerator Pedal']}}</div>
                <div class="t m0 x5 h8 y64 ff56 fs5 fc3 sc0 ls0 ws1">Transmission/Speed/Odom<span class="ff51"> </span></div>
                <div class="t m0 x5 h9 y65 ff52 fs6 fc4 sc0 ls0 ws1">{{$report->drivers_controls['Transmission/Speed/Odom']}}</div>
            </div>
            <div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div>
        </div>
        <div id="pf11" class="pf w0 h0" data-page-no="11">
            <div class="pc pc11 w0 h0">
                <div class="t m0 x1 h1 y9 ff59 fs0 fc0 sc0 ls0 ws0">Page <span class="ff49 ws1">17</span><span class="ws5"> <span class="ff2 ws1">of 17</span></span>
                </div>
                <div class="t m0 x6 h7 ya ff5a fs4 fc1 sc0 ls0 ws1">Lighting &amp; Electric</div>
                <div class="t m0 x6 h8 y66 ff5b fs5 fc3 sc0 ls0 ws1">Battery<span class="ff5c"> </span></div>
                <div class="t m0 x6 h9 y67 ff5d fs6 fc4 sc0 ls0 ws1">{{$report->lighting_electric['Battery']}}</div>
                <div class="t m0 x6 h8 y35 ff5b fs5 fc3 sc0 ls0 ws1">Switches<span class="ff5e ws6"> </span></div>
                <div class="t m0 x6 h9 y36 ff5f fs6 fc4 sc0 ls0 ws1">{{$report->lighting_electric['Switches']}}</div>
                <div class="t m0 x7 h8 y37 ff5b fs5 fc3 sc0 ls0 ws1">Visible Wiring<span class="ff60 ws7"> </span></div>
                <div class="t m0 x7 h9 y38 ff61 fs6 fc4 sc0 ls0 ws1">{{$report->lighting_electric['Visible Wiring']}}</div>
                <div class="t m0 x7 h8 y11 ff5b fs5 fc3 sc0 ls0 ws1">Indicator Lights<span class="ff60"> </span></div>
                <div class="t m0 x7 h9 y12 ff62 fs6 fc4 sc0 ls0 ws1">{{$report->lighting_electric['Indicator Lights']}}</div>
                <div class="t m0 x7 h8 y39 ff63 fs5 fc3 sc0 ls0 ws1">Headlight Aim<span class="ff60"> </span></div>
                <div class="t m0 x7 h9 y3a ff61 fs6 fc4 sc0 ls0 ws1">{{$report->lighting_electric['Headlight Aim']}}</div>
                <div class="t m0 x7 h8 y15 ff63 fs5 fc3 sc0 ls0 ws1">Lamps<span class="ff60 ws8"> </span></div>
                <div class="t m0 x7 h9 y16 ff62 fs6 fc4 sc0 ls0 ws1">{{$report->lighting_electric['Lamps']}}</div>
                <div class="t m0 x10 h7 ya ff64 fs4 fc1 sc0 ls0 ws1">Other Details</div>
                <div class="t m0 x5 h8 y68 ff63 fs5 fc3 sc0 ls0 ws1">Vehicle has been roadtested</div>
                <div class="t m0 x5 h9 y69 ff5d fs6 fc4 sc0 ls0 ws1">{{$report->other_details['Vehicle has been roadtested']}}</div>
                <div class="t m0 x5 h8 y6a ff63 fs5 fc3 sc0 ls0 ws1">Altered or Modified</div>
                <div class="t m0 x5 h9 y6b ff5f fs6 fc4 sc0 ls0 ws1">{{$report->other_details['Altered_or_Modified']}}</div>
                <div class="t m0 x5 h8 y4e ff63 fs5 fc3 sc0 ls0 ws1">U-Built<span class="ff60"> </span></div>
                <div class="t m0 x5 h9 y4f ff61 fs6 fc4 sc0 ls0 ws1">{{isset($report->other_details['U-Built']) ? 'Yes' : 'No'}}</div>
                <div class="t m0 x5 h8 y11 ff63 fs5 fc3 sc0 ls0 ws1">Replicar<span class="ff60 wsd"> </span></div>
                <div class="t m0 x5 h9 y12 ff62 fs6 fc4 sc0 ls0 ws1">{{isset($report->other_details['Replicar']) ? 'Yes' : 'No'}}</div>
                <div class="t m0 x5 h8 y50 ff63 fs5 fc3 sc0 ls0 ws1">Specialty Vehicle<span class="ff60 wse"> </span></div>
                <div class="t m0 x5 h9 y51 ff61 fs6 fc4 sc0 ls0 ws1">{{isset($report->other_details['Specialty Vehicle']) ? 'Yes' : 'No'}}</div>
                <div class="t m0 x5 h8 y15 ff63 fs5 fc3 sc0 ls0 ws1">Amalgamated<span class="ff60 wsf"> </span></div>
                <div class="t m0 x5 h9 y16 ff62 fs6 fc4 sc0 ls0 ws1">{{isset($report->other_details['Amalgamated']) ? 'Yes' : 'No'}}</div>
                <div class="t m0 x5 h8 y6c ff63 fs5 fc3 sc0 ls0 ws1">Replikit<span class="ff60 ws10"> </span></div>
                <div class="t m0 x5 h9 y6d ff62 fs6 fc4 sc0 ls0 ws1">{{isset($report->other_details['Replikit']) ? 'Yes' : 'No'}}</div>
                <div class="t m0 x6 h7 y6e ff65 fs4 fc1 sc0 ls0 ws1">Inspection Result</div>
                <div class="t m0 x6 hc y6f ff66 fs7 fc3 sc0 ls0 ws1">{{$report->inspection_result}}</div>
                <div class="t m0 x10 h7 y70 ff65 fs4 fc1 sc0 ls0 ws1">Inspected By</div>
                <div class="t m0 x5 hc y71 ff66 fs7 fc3 sc0 ls0 ws1" style="font-family: monospace;font-weight: bolder;">{{$report->inspected_by}}</div>
                <img class="bi x5 y72 h6" style="  width: 80px; height: 80px; left: 390px; " alt="" src="{{url('storage/'.$report->signature)}}" />
            </div>
            <div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div>
        </div>
</div>

</body>
</html>
