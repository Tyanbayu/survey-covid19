@extends('layouts.appa')

@section('content')
<style>
    body {
      background-image: url("{{ asset('assets/img/virus.jpg') }}");
      background-position: center;
      background-size: cover;
      height: 600px;
    }

    .form {
      margin: auto;
      margin: 0 480px;
    }

    .form .card{
      background-color: rgb(255, 255, 255, 0.9);
      margin-top: 130px;
    }

    table {
      margin: 30px 0;
    }

    table tr td {
      padding: 2px 0;
    }
  </style>
<div class="form text-left">
      <div class="card text-left">
        <div class="card-body text-center" style="margin: auto;">
          <h4 class="card-title font-weight-bold pt-3"><b>Hasil Survey Data Covid-19</b></h4>
        
          <table class="text-left" width="100%">
            <tr>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                         {{ session('status') }}
                </div>
                 @endif
              <td> <b>Nama </td>
              <td>:<b> {{Auth::user()->name}}</td>
            </tr>
            <tr>
            @foreach ($scores as $score)
              <td><b>Jawaban Ya </td>
              <td>: <b>{{$score->yes}}</td>
            </tr>
            <tr>
              <td><b>Resiko </td>
              @if( $score->yes <=21 and $score->yes >= 14 )
              <td>: <b>Resiko Anda terkena penyakit Covid-19 adalah Tinggi</td>
              @elseif($score->yes <=14 and $score->yes >= 7)
              <td>:<b> Resiko Anda terkena penyakit Covid-19 adalah sedang</td>
              @elseif($score->yes <=7)
              <td>: <b>Resiko Anda terkena penyakit Covid-19 adalah Rendah</td>
              @endif
            @endforeach
            </tr>
           
          </table>
          <div style = "color:blue">
        <p><b> Terima Kasih </p>
        </div>
        </div>
      </div>
    </div>
@endsection