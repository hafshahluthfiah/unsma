@extends('master')

@section('header')
  <nav>
    <ul class="nav nav-pills pull-right">
      <li role="presentation" class="active"><a href="/">Home</a></li>
      <li role="presentation"><a href="/login">Mata Pelajaran</a></li>
      <li role="presentation"><a href="/TO">TO</a></li>
      <li role="presentation"><a href="/login">Login</a></li>
    </ul>
  </nav>
  <h3 class="text-muted">ABUNSMA</h3>
@stop

@section('sidebar-up')
  <h1>Aplikasi Belajar UN SMA</h1>
  <p class="lead">Selamat datang di ABUNSMA! Disini teman-teman semua bisa belajar, latihan soal, sampai TO loh. Penasaran? Yuk langsung tengok!</p>
@stop

@section('sidebar-left')
  
  <h4>Matematika</h4>
  <p>...</p>

  <h4>Fisika</h4>
  <p>...</p>

  <h4>Kimia</h4>
  <p>...</p>
@stop
@section('sidebar-right')
  <h4>Biologi</h4>
  <p>...</p>

  <h4>Bahasa Indonesia</h4>
  <p>...</p>

  <h4>Bahasa Inggris</h4>
  <p>...</p>
@stop
@section('footer')
  <p>&copy; 2017 Aplikasi Belajar UN SMA</p>
@stop
