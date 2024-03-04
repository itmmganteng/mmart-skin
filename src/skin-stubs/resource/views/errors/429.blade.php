@extends('errors::minimal')

@section('title', 'Too Many Requests')
@section('code', '429')
@section('message', 'Terlalu Banyak Permintaan. Silakan coba lagi nanti.')
@section('image', image('illustrations/sigma-1/9.png'))
@section('image-dark', image('illustrations/sigma-1/9-dark.png'))

