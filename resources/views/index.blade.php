@extends('layouts.master')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
@endpush

@section('content')
    <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores dicta dolore doloribus dolorum eos ex explicabo iure iusto minima neque, nulla odit placeat quasi qui rem reprehenderit, sapiente, sunt veniam!</span><span>Aliquam asperiores dolor hic molestiae repudiandae vel voluptates! Ad corporis dignissimos enim, illum in nisi quis repellat. Accusantium animi eligendi excepturi in, ipsum itaque iusto minus, quaerat, qui quisquam sint?</span><span>Accusamus eligendi, totam? A, animi assumenda ducimus ea eaque, est illo illum, in iusto modi nemo nihil quaerat quidem reprehenderit sit suscipit tempora temporibus totam vero voluptatum. Illo quod, sapiente?</span></p>
    <ul>
        @foreach($suggestions as $suggestion)
            {{$suggestion->title}}
        @endforeach
    </ul>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
@endpush

