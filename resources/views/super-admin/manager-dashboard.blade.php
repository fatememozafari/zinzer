@extends('layout.super-admin')
@section('page-title','ویرایش بخش های سایت')
@section('content')

   @include('super-admin.home.create')
    <!-- end row -->
   @include('super-admin.about.create')
    <!-- end row -->
   @include('super-admin.article.create')
   <!-- end row -->
   @include('super-admin.news.create')
   <!-- end row -->
   @include('super-admin.contact.create')
   <!-- end row -->
@endsection
