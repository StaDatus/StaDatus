@extends('layouts.app')

@section('style')
<style>
  body{
    background-color: #aabbcc;
  }
</style>
@endsection

@section('content')
<h1>Example view</h1>
<h2>Custom view style</h2>
<pre>
section ('style')
< style>
  body{
    background-color: #aabbcc;
  }
< /style>
</pre>

<h2>Custom view js</h2>
<pre>
section ('js')
< script>
  alert("Custom JS injected just for this view 'resources/views/example.blade.php' at it's section('js')");
< /script>

</pre>
@endsection

@section('js')
<script>
  alert("Custom JS injected just for this view 'resources/views/example.blade.php' at it's section('js')");
</script>
@endsection
