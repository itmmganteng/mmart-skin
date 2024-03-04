@extends('errors::minimal')

@section('title', 'Forbidden')
@section('code', '403')
@section('message', $exception->getMessage() ?: 'Akses Ditolak: Izin Tidak Memadai.')
@section('image', image('illustrations/sigma-1/21.png'))
@section('image-dark', image('illustrations/sigma-1/21-dark.png'))
